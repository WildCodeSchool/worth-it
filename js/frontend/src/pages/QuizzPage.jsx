import {
  MDBCard,
  MDBCardBody,
  MDBCardTitle,
  MDBBtn,
  MDBContainer,
} from "mdb-react-ui-kit";

function PageTest() {
  return (
    <MDBContainer fluid>
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

      <MDBCard alignment="center" className="bg-white">
        <MDBCardBody>
          <MDBCardTitle variant="h2" className="text-black mt-4 fs-1">
            Quel est votre type de cheveux ?
          </MDBCardTitle>
          <div className="d-flex flex-column mb-4 mt-4 pt-4 pb-4">
            <MDBBtn className="text-white bg-dark mb-4 pt-4 pb-4 fs-5">
              Lisse
            </MDBBtn>
            <MDBBtn className="text-white bg-dark mb-4 pt-4 pb-4 fs-5">
              Ondulé
            </MDBBtn>
            <MDBBtn className="text-white bg-dark pt-4 pb-4 fs-5">Frisé</MDBBtn>
          </div>
        </MDBCardBody>
      </MDBCard>

      <MDBCard alignment="center" className="bg-white">
        <MDBCardBody>
          <MDBCardTitle variant="h2" className="text-black mt-4 fs-1">
            Quel est la nature de vos cheveux ?
          </MDBCardTitle>
          <div className="d-flex flex-column mb-4 mt-4 pt-4 pb-4">
            <MDBBtn className="text-white bg-dark mb-4 pt-4 pb-4 fs-5">
              Sec
            </MDBBtn>
            <MDBBtn className="text-white bg-dark mb-4 pt-4 pb-4 fs-5">
              Équilibré
            </MDBBtn>
            <MDBBtn className="text-white bg-dark pt-4 pb-4 fs-5">Gras</MDBBtn>
          </div>
        </MDBCardBody>
      </MDBCard>
    </MDBContainer>
  );
}

export default PageTest;
