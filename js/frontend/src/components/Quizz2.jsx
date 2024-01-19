import { MDBCard, MDBCardBody, MDBCardTitle, MDBBtn } from "mdb-react-ui-kit";
import PropTypes from "prop-types";

function Quizz2({ setInformation2 }) {
  return (
    <MDBCard alignment="center" className="bg-white mb-9 mt-9">
      <MDBCardBody className="bg-white">
        <MDBCardTitle variant="h2" className="text-black mt-4 fs-1 bg-white">
          Quel est votre type de cheveux ?
        </MDBCardTitle>
        <div className="d-flex flex-column mb-4 mt-4 pt-4 pb-4 bg-white">
          <MDBBtn
            className="text-white bg-dark mb-4 pt-4 pb-4 fs-5 "
            value="Lisse"
            onClick={setInformation2}
          >
            Lisse
          </MDBBtn>
          <MDBBtn
            className="text-white bg-dark mb-4 pt-4 pb-4 fs-5"
            value="Ondule"
            onClick={setInformation2}
          >
            Ondulé
          </MDBBtn>
          <MDBBtn
            className="text-white bg-dark pt-4 pb-4 fs-5"
            value="Frise"
            onClick={setInformation2}
          >
            Frisé
          </MDBBtn>
        </div>
      </MDBCardBody>
    </MDBCard>
  );
}
Quizz2.propTypes = {
  setInformation2: PropTypes.func.isRequired,
};

export default Quizz2;
