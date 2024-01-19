import axios from "axios";
import {
  MDBBtn,
  MDBCard,
  MDBCardBody,
  MDBCardImage,
  MDBCardText,
  MDBCardTitle,
  MDBContainer,
} from "mdb-react-ui-kit";
import { useEffect } from "react";

import { useNavigate, useParams } from "react-router-dom";
import Redirection from "../components/Redirection";

function ProductPage() {
  const { id } = useParams();
  const navigate = useNavigate();
  const redirect = () => {
    navigate(`/changeface`);
  };
  const getProduct = async () => {
    // const [item, SetItem] = useState();
    try {
      const response = await axios.get(`http://localhost:5000/api/${id}`);
      const responseData = JSON.parse(response.data);
      console.info(responseData);
    } catch (err) {
      console.error(err.message);
    }
  };
  console.info(id);
  useEffect(() => {
    getProduct();
  }, []);
  console.info(typeof id);
  return (
    <MDBContainer fluid>
      <MDBCard alignment="center" className="bg-white mb-9 mt-9">
        <MDBCardTitle variant="h2" className="text-black mt-4 fs-1 bg-white">
          Fiche produit
        </MDBCardTitle>
        <MDBCardBody>
          <MDBCardImage
            src="https://i.postimg.cc/X7xHZQsB/absolut-repair-molecular-shampoing.webp"
            position="top"
            alt="product"
          />

          <MDBCardBody className=" bg-dark">
            <MDBCardText className="text-white mt-4 fs-5 bg-dark">
              Rather Several
            </MDBCardText>
            <MDBCardText className="text-white fs-6 fst-italic bg-dark">
              L'Oréal
            </MDBCardText>
            <MDBCardText className="text-white fs-6  bg-dark">
              Démêle & apporte un soin profond à la fibre. Le cheveu est plus
              fort, intensément nourrit, + 86% de nutrition. Il retrouve son
              élasticité & son mouvement naturel.
            </MDBCardText>
            <div className="d-flex flex-column bg-dark">
              <Redirection />
              <MDBBtn
                className="text-black bg-white mb-4 pt-2 pb-2 fs-7 "
                onClick={redirect}
              >
                Surprise ici
              </MDBBtn>
            </div>
          </MDBCardBody>
        </MDBCardBody>
      </MDBCard>
    </MDBContainer>
  );
}

export default ProductPage;
