import PropTypes from "prop-types";
import { MDBCard, MDBCardBody, MDBCardTitle, MDBBtn } from "mdb-react-ui-kit";

function Quizz3({ question1, question2, question3 }) {
  const setInformations = (e) => {
    console.info(e.target.value);
  };
  const sendInfos = () => {
    console.info(question1, question2, question3);
  };
  return (
    <MDBCard alignment="center" className="bg-white mb-9 mt-9">
      <MDBCardBody>
        <MDBCardTitle variant="h2" className="text-black mt-4 fs-1">
          Quel est la nature de vos cheveux ?
        </MDBCardTitle>
        <div className="d-flex flex-column mb-4 mt-4 pt-4 pb-4">
          <MDBBtn
            className="text-white bg-dark mb-4 pt-4 pb-4 fs-5"
            value="sec"
            onClick={setInformations}
          >
            Sec
          </MDBBtn>
          <MDBBtn
            value="equilibre"
            className="text-white bg-dark mb-4 pt-4 pb-4 fs-5"
            onClick={setInformations}
          >
            Équilibré
          </MDBBtn>
          <MDBBtn
            className="text-white bg-dark pt-4 pb-4 fs-5"
            value="gras"
            onClick={setInformations}
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
  // setQuestion3: PropTypes.func.isRequired,
};
export default Quizz3;
