
import { useEffect, useState } from "react";

import axios from "axios";
import { MDBContainer } from "mdb-react-ui-kit";
import Recommandation1 from "../components/Recommandation1";
import Recommandation3 from "../components/Recommandation3";
import Recommandation2 from "../components/Recommandation2";
// import ApiService from "../services/api.service";

function RecommandationPage() {

const [products, setProducts] = useState([])

  const getAll = async () => {
    try {
      const response = await axios.get(`http://localhost:5000/api?data=1990-12-25&data=Long&data=Ondule&data=Sec`);
      const responseData = JSON.parse(response.data)
      setProducts(responseData);
    } catch (err) {
      console.error(err.message);
    }
  };
console.info(products)
  useEffect(() => {
    getAll();
  }, []);
  console.info(products)
  return (
    <div>
      <MDBContainer fluid>
        {products.map((product, index) => (
          <Recommandation1 key={index} product={product} />
        ))}
      </MDBContainer>
    </div>

  );
}

export default RecommandationPage;
