import { useEffect, useState } from "react";

import axios from "axios";
import { MDBContainer } from "mdb-react-ui-kit";
import Recommandation1 from "../components/Recommandation1";
// import ApiService from "../services/api.service";

function RecommandationPage() {
  // const { question1, question2, question3 } = useState();
  const [products, setProducts] = useState([]);

  const getAll = async () => {
    try {
      const response = await axios.get(
        `http://localhost:5000/api?data=1990-12-25&data=Long&data=Lisse&data=Gras`
      );
      const responseData = JSON.parse(response.data);
      setProducts(responseData);
    } catch (err) {
      console.error(err.message);
    }
  };
  console.info(products);
  useEffect(() => {
    getAll();
  }, []);
  console.info(products);
  return (
    <div>
      <MDBContainer fluid>
        {products.map((product) => (
          <Recommandation1 key={product.productName} product={product} />
        ))}
      </MDBContainer>
    </div>
  );
}

export default RecommandationPage;
