import {
  MDBBtn,
  MDBCard,
  MDBCardBody,
  MDBCardImage,
  MDBCardText,
  MDBCardTitle,
} from "mdb-react-ui-kit";

import { useNavigate } from "react-router-dom";
function Recommandation1({product}) {
  const chosenProduct = product
  const navigate = useNavigate()
  const redirect = () => {
    navigate(`/product/${product.productId}`)
  }

  return (
    <MDBCard alignment="center" className="bg-white mb-9 mt-9">
      <MDBCardBody>
        <MDBCardTitle variant="h2" className="text-black mt-4 fs-1">
          Recommandé pour vous
        </MDBCardTitle>
        <MDBCardImage
          src="https://i.postimg.cc/X7xHZQsB/absolut-repair-molecular-shampoing.webp"
          position="top"
          alt="product"
        />

        <MDBCardBody className=" bg-dark">
          <MDBCardText className="text-white mt-4 fs-5 bg-dark">

            {product.productName}
          </MDBCardText>
          <MDBCardText className="text-white fs-6 fst-italic bg-dark">
            {product.brand}

          </MDBCardText>
          <MDBCardText className="text-white fs-6 text-decoration-line-through bg-dark">
            0 €
          </MDBCardText>
          <MDBCardText className="text-white fs-5 bg-dark">0 €</MDBCardText>
          <p className="text-danger fs-5 fw-bolder bg-dark">
            - 20 % dans votre salon
          </p>

          <MDBBtn className="text-black bg-white mb-4 pt-2 pb-2 fs-7" onClick={redirect}>

            Plus d'information
          </MDBBtn>
        </MDBCardBody>
      </MDBCardBody>
    </MDBCard>
  );
}

export default Recommandation1;
