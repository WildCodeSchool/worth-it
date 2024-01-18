import { MDBCard, MDBCardBody, MDBCardTitle, MDBBtn } from "mdb-react-ui-kit";

function Quizz2() {
  return (
    <MDBCard alignment="center" className="bg-white mb-9 mt-9">
      <MDBCardBody className="bg-white">
        <MDBCardTitle variant="h2" className="text-black mt-4 fs-1 bg-white">
          Quel est votre type de cheveux ?
        </MDBCardTitle>
        <div className="d-flex flex-column mb-4 mt-4 pt-4 pb-4 bg-white">
          <MDBBtn className="text-white bg-dark mb-4 pt-4 pb-4 fs-5 ">
            Lisse
          </MDBBtn>
          <MDBBtn className="text-white bg-dark mb-4 pt-4 pb-4 fs-5">
            Ondulé
          </MDBBtn>
          <MDBBtn className="text-white bg-dark pt-4 pb-4 fs-5">Frisé</MDBBtn>
        </div>
      </MDBCardBody>
    </MDBCard>
  );
}

export default Quizz2;
