import { useNavigate } from "react-router-dom";
import {
  MDBBtn,
  MDBCard,
  MDBCardBody,
  MDBCardImage,
  MDBCardTitle,
} from "mdb-react-ui-kit";
import kerastase from "../assets/images_produits/lorealpro1.jpg";

function FacePage() {
  const navigate = useNavigate();
  const redirect = () => {
    navigate(`/result`);
  };

  return (
    <MDBCard alignment="center" className="bg-white mb-9 mt-9">
      <MDBCardBody>
        <MDBCardTitle variant="h2" className="text-black mt-4 fs-1">
          Amusez-vous !
        </MDBCardTitle>
        <MDBCardImage src={kerastase} position="top" alt="product" />

        <MDBBtn
          className="text-black bg-white mb-4 mt-4 pt-2 pb-2 fs-7"
          onClick={redirect}
        >
          Voir le résultat
        </MDBBtn>
      </MDBCardBody>
    </MDBCard>
  );
}

export default FacePage;
