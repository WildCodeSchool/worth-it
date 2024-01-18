import { useEffect } from "react";
import axios from "axios";
import { MDBContainer } from "mdb-react-ui-kit";
import Recommandation1 from "../components/Recommandation1";
import Recommandation3 from "../components/Recommandation3";
import Recommandation2 from "../components/Recommandation2";
// import ApiService from "../services/api.service";

function RecommandationPage() {
  const getAll = async () => {
    try {
      const response = await axios.get("http://localhost:8000/api/products");
      console.info(response);
    } catch (err) {
      console.error(err);
    }
  };

  useEffect(() => {
    getAll();
  }, []);

  return (
    <MDBContainer fluid>
      <Recommandation1 />
      <Recommandation2 />
      <Recommandation3 />
    </MDBContainer>
  );
}

export default RecommandationPage;
