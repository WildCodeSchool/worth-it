import { MDBCard, MDBCardBody, MDBCardTitle, MDBBtn } from "mdb-react-ui-kit";

function Quizz1() {
  return (
    <MDBCard alignment="center" className="bg-white">
      <MDBCardBody>
        <MDBCardTitle variant="h2" className="text-black mt-4 fs-1">
          Quel est la longueur de vos cheveux ?
        </MDBCardTitle>
        <div className="d-flex flex-column mb-4 mt-4 pt-4 pb-4 fs-5">
          <MDBBtn className="text-white bg-dark mb-4 pt-4 pb-4 fs-5">
            Court
          </MDBBtn>
          <MDBBtn className="text-white bg-dark mb-4 pt-4 pb-4 fs-5">
            Mi-long
          </MDBBtn>
          <MDBBtn className="text-white bg-dark pt-4 pb-4 fs-5">Long</MDBBtn>
        </div>
      </MDBCardBody>
    </MDBCard>
  );
}

export default Quizz1;
