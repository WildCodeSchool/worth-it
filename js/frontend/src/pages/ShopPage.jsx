import {
  MDBAutocomplete,
  MDBBtn,
  MDBCard,
  MDBCardBody,
  MDBCardTitle,
  MDBContainer,
} from "mdb-react-ui-kit";
import { useState } from "react";

function ShopPage() {
  const [shopFound, setshopFound] = useState();
  const [shopSearch, setshopSearch] = useState();

  function searchShop() {
    console.info("bob");
  }

  function handleSelect(e) {
    e.preventDefault();
    console.info("lalalala");
  }

  return (
    <MDBContainer className="d-flex">
      <MDBCard alignment="center" className="bg-white mb-9 mt-9">
        <MDBCardBody className="bg-white">
          <MDBCardTitle
            variant="h2"
            className="text-black bg-white mt-4 fs-1 mb-5"
          >
            Choisissez votre salon
          </MDBCardTitle>

          <MDBAutocomplete
            data={shopFound} // valeur retour de l'appel d'API utiliséé pour le display value
            label="Salon de coiffure"
            value={shopSearch} // affiche le texte écrit dans onSearch
            onSearch={searchShop} // lance l'appel d'api a chaque changement
            displayValue="bob" // affiche les différents ingrédient possibles
            onSelect={handleSelect} // stock le nom de l'ingredient dans <ingredientSelected>
            className="mt-5"
          />

          <MDBBtn
            className="text-white bg-dark mb-4 mt-5 pt-2 pb-2 fs-5"
            value="sec"
          >
            Validation
          </MDBBtn>
        </MDBCardBody>
      </MDBCard>
    </MDBContainer>
  );
}

export default ShopPage;
