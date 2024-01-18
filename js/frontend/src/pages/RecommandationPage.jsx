import {
  MDBBtn,
  MDBCard,
  MDBCardBody,
  MDBCardImage,
  MDBCardText,
  MDBCardTitle,
  MDBContainer,
} from "mdb-react-ui-kit";

function RecommandationPage() {
  return (
    <MDBContainer fluid>
      <MDBCard alignment="center" className="bg-white mb-9 mt-9">
        <MDBCardBody>
          <MDBCardImage
            src="https://i.postimg.cc/X7xHZQsB/absolut-repair-molecular-shampoing.webp"
            position="top"
            alt="product"
          />
          <MDBCardTitle variant="h2" className="text-black mt-4 fs-1">
            Recommandé pour vous
          </MDBCardTitle>
          <MDBCardBody className=" bg-dark">
            <MDBCardText className="text-white mt-4 fs-5">
              Nom du produit
            </MDBCardText>
            <MDBCardText className="text-white fs-6 fst-italic">
              Marque
            </MDBCardText>
            <MDBCardText className="text-white fs-6 text-decoration-line-through">
              0 €
            </MDBCardText>
            <MDBCardText className="text-white fs-5 ">0 €</MDBCardText>
            <p className="text-danger fs-5 fw-bolder">
              - 20 % dans votre salon
            </p>
            <MDBBtn className="text-black bg-white mb-4 pt-4 pb-4 fs-7 rounded-pill">
              Disponible
            </MDBBtn>
            <MDBBtn className="text-black bg-white mb-4 pt-4 pb-4 fs-7 rounded-pill">
              Ajouter à la Wishlist
            </MDBBtn>
          </MDBCardBody>
        </MDBCardBody>
      </MDBCard>
    </MDBContainer>
  );
}

export default RecommandationPage;
