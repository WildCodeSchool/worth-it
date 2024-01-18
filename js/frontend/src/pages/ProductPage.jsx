import {
  MDBCard,
  MDBCardBody,
  MDBCardImage,
  MDBCardText,
  MDBCardTitle,
  MDBContainer,
} from "mdb-react-ui-kit";
import { useParams } from "react-router-dom";

function ProductPage() {
  const {id} = useParams()
  console.info(id)
  return (
    <MDBContainer fluid>
      <MDBCard alignment="center" className="bg-white mb-9 mt-9">
        <MDBCardTitle variant="h2" className="text-black mt-4 fs-1 bg-white">
          Nom du produit
        </MDBCardTitle>
        <MDBCardBody>
          <MDBCardImage
            src="https://i.postimg.cc/X7xHZQsB/absolut-repair-molecular-shampoing.webp"
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
              Description
            </MDBCardText>
          </MDBCardBody>
        </MDBCardBody>
      </MDBCard>
    </MDBContainer>
  );
}

export default ProductPage;
