import { MDBCard, MDBCardBody, MDBCardTitle, MDBBtn } from "mdb-react-ui-kit";
import PropTypes from "prop-types";

function Quizz1({ setInformation1 }) {
  return (
    <MDBCard alignment="center" className="bg-white mb-9 mt-9">
      <MDBCardBody className="bg-white">
        <MDBCardTitle variant="h2" className="text-black mt-4 fs-1 bg-white">
          Quelle est la longueur de vos cheveux ?
        </MDBCardTitle>
        <div className="d-flex flex-column mb-4 mt-4 pt-4 pb-4 fs-5 bg-white">
          <MDBBtn
            className="text-white bg-dark mb-4 pt-4 pb-4 fs-5 "
            value="Court"
            onClick={setInformation1}
          >
            Court
          </MDBBtn>
          <MDBBtn
            className="text-white bg-dark mb-4 pt-4 pb-4 fs-5"
            value="Mi-long"
            onClick={setInformation1}
          >
            Mi-long
          </MDBBtn>
          <MDBBtn
            className="text-white bg-dark pt-4 pb-4 fs-5"
            value="Long"
            onClick={setInformation1}
          >
            Long
          </MDBBtn>
        </div>
      </MDBCardBody>
    </MDBCard>
  );
}
Quizz1.propTypes = {
  setInformation1: PropTypes.func.isRequired,
};

export default Quizz1;
