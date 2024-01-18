from flask import Flask, request
from flask_restful import reqparse, abort, Api, Resource
from flask_cors import CORS
import pandas as pd
from datetime import datetime
from sklearn.neighbors import NearestNeighbors
from sklearn.preprocessing import OneHotEncoder

app = Flask(__name__)
cors = CORS(app, resources={r"*": {"origins": "*"}})
api = Api(app)

class my_API_class(Resource):
    def get(self):
#        Obtenir les 4 paramètres de requête
        data_users = request.args.getlist('data')

        # Enregistrement des 4 paramètres de requêtes dans 4 variables
        birthdate = data_users[0]
        hairType1 = data_users[1]
        hairType2 = data_users[2]
        hairType3 = data_users[3]

        # Transformation de la date de naissance en age range
        def age_range(date):
            date_time = datetime.strptime(date, '%Y-%m-%d')
            age = datetime.now().year - date_time.year
            if 15 <= age <= 25:
                return '15-25'
            elif 25 < age <= 55:
                return '25-55'
            elif 55 < age <= 99:
                return '55-99'
            else:
                return 'trop jeune'
        age = age_range(birthdate)

        ############ START MACHINE LEARNING ######################

        # Importation dataframe
        df_product = pd.read_csv(r'products.csv', sep=';')

        ########################### ENTRAINENEMENT MODELE SUR 6 CATEGORIES #############################

        # Sélection des colonnes
        X = df_product[['brand', 'productCategory','age', 'hairType1', 'hairType2', 'hairType3']]

        # Conversion des colonnes catégorielles en valeurs numériques
        encoder = OneHotEncoder(drop='first')
        X_encoded = encoder.fit_transform(X)

        # Initialisation du modèle k-NN
        knn_model = NearestNeighbors(n_neighbors=1, algorithm='auto').fit(X_encoded)


        ############################ PREDICTION SUR 4 CATEGORIES ##############################

        product_row = df_product[(df_product['hairType1'] == hairType1) & (df_product['hairType2'] == hairType2) & (df_product['hairType3'] == hairType3) & (df_product['age'] == age)]
        X2 = product_row[['brand', 'productCategory','age', 'hairType1', 'hairType2', 'hairType3']]
        X2_encoded = encoder.transform(X2)

        # 6 voisins les plus proches
        neighbors = knn_model.kneighbors(X2_encoded, n_neighbors=6)
        df_neighbors = df_product.iloc[neighbors[1][0]]

        # Création d'un dataframe avec les 6 voisins
        json_data = df_neighbors.to_json(orient='records')

        return json_data

# Ajouter la route sans variable de chemin
api.add_resource(my_API_class, '/api')

if __name__ == '__main__':
    app.run(host='0.0.0.0', debug=True)