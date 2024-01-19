import PropTypes from "prop-types";
import { MDBCard, MDBCardBody, MDBCardTitle, MDBBtn } from "mdb-react-ui-kit";
import { useNavigate } from "react-router-dom";

function Quizz3({ setInformation3 }) {
  const navigate = useNavigate();
  const sendInfos = () => {
    navigate("/recommandation");
  };
  return (
    <MDBCard alignment="center" className="bg-white mb-9 mt-9">
      <MDBCardBody className="bg-white">
        <MDBCardTitle variant="h2" className="text-black mt-4 fs-1 bg-white">
          Quel est la nature de vos cheveux ?
        </MDBCardTitle>
        <div className="d-flex flex-column mb-4 mt-4 pt-4 pb-4 bg-white">
          <MDBBtn
            className="text-white bg-dark mb-4 pt-4 pb-4 fs-5"
            value="Sec"
            onClick={setInformation3}
          >
            Sec
          </MDBBtn>
          <MDBBtn
            value="Equilibre"
            className="text-white bg-dark mb-4 pt-4 pb-4 fs-5"
            onClick={setInformation3}
          >
            Équilibré
          </MDBBtn>
          <MDBBtn
            className="text-white bg-dark pt-4 pb-4 fs-5"
            value="Gras"
            onClick={setInformation3}
          >
            Gras
          </MDBBtn>
        </div>
        <MDBBtn onClick={sendInfos} className="text-white bg-dark">
          Suivant
        </MDBBtn>
      </MDBCardBody>
    </MDBCard>
  );
}

Quizz3.propTypes = {
  question1: PropTypes.arrayOf.isRequired,
  question2: PropTypes.arrayOf.isRequired,
  question3: PropTypes.arrayOf.isRequired,
  setInformation3: PropTypes.func.isRequired,
  // setQuestion3: PropTypes.func.isRequired,
};
export default Quizz3;
