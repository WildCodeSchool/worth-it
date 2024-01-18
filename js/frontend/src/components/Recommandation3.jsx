import {
  MDBBtn,
  MDBCard,
  MDBCardBody,
  MDBCardImage,
  MDBCardText,
  MDBCardTitle,
} from "mdb-react-ui-kit";

function Recommandation3() {
  return (
    <MDBCard alignment="center" className="bg-white mb-9 mt-9">
      <MDBCardBody>
        <MDBCardTitle variant="h2" className="text-black mt-4 fs-1">
          Recommandé pour vous
        </MDBCardTitle>
        <MDBCardImage
          src="https://i.postimg.cc/sf9NmKDK/images.jpg"
          position="top"
          alt="product"
        />

        <MDBCardBody className=" bg-dark">
          <MDBCardText className="text-white mt-4 fs-5 bg-dark">
            Nom du produit
          </MDBCardText>
          <MDBCardText className="text-white fs-6 fst-italic bg-dark">
            Marque
          </MDBCardText>
          <MDBCardText className="text-white fs-6 text-decoration-line-through bg-dark">
            0 €
          </MDBCardText>
          <MDBCardText className="text-white fs-5 bg-dark">0 €</MDBCardText>
          <p className="text-danger fs-5 fw-bolder bg-dark">
            - 20 % dans votre salon
          </p>
          <MDBBtn className="text-black bg-white mb-4 pt-2 pb-2 fs-7">
            Plus d'information
          </MDBBtn>
        </MDBCardBody>
      </MDBCardBody>
    </MDBCard>
  );
}

export default Recommandation3;
