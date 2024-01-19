import { MDBCard, MDBCardBody, MDBCardImage } from "mdb-react-ui-kit";
import kerastase from "../assets/images_produits/lorealpro1.jpg";

import Redirection from "../components/Redirection";

function Result() {
  return (
    <MDBCard alignment="center" className="bg-white mb-9 mt-9">
      <MDBCardBody>
        <MDBCardImage src={kerastase} position="top" alt="product" />

        <Redirection />
      </MDBCardBody>
    </MDBCard>
  );
}

export default Result;
