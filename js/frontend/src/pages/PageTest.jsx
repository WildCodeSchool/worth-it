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
      <MDBCard alignment="center" className="bg-dark">
        <MDBCardBody>
          <MDBCardTitle variant="h2">
            Quel formule avez-vous choisi ?
          </MDBCardTitle>
          <MDBBtn className="text-white">Coupe & shampooing</MDBBtn>
          <MDBBtn className="text-white">Brushing</MDBBtn>
          <MDBBtn className="text-white">Soins</MDBBtn>
        </MDBCardBody>
      </MDBCard>

      <MDBCard alignment="center" className="bg-dark">
        <MDBCardBody>
          <MDBCardTitle variant="h2">
            Quel est votre type de cheveux ?
          </MDBCardTitle>
          <MDBBtn className="text-white">Frisé</MDBBtn>
          <MDBBtn className="text-white">Brushing</MDBBtn>
          <MDBBtn className="text-white">Soins</MDBBtn>
        </MDBCardBody>
      </MDBCard>

      <MDBCard alignment="center" className="bg-dark">
        <MDBCardBody>
          <MDBCardTitle variant="h2">
            Quel est la longueur de vos cheveux ?
          </MDBCardTitle>
          <MDBBtn className="text-white">Court</MDBBtn>
          <MDBBtn className="text-white">Mi-long</MDBBtn>
          <MDBBtn className="text-white">Long</MDBBtn>
        </MDBCardBody>
      </MDBCard>

      <MDBCard alignment="center" className="bg-dark">
        <MDBCardBody>
          <MDBCardTitle variant="h2">
            Quel est la longueur de vos cheveux ?Quel est votre mood aujourd’hui
            ?
          </MDBCardTitle>
          <MDBBtn className="text-white">Caliente</MDBBtn>
          <MDBBtn className="text-white">Happy</MDBBtn>
          <MDBBtn className="text-white">Découverte </MDBBtn>
        </MDBCardBody>
      </MDBCard>
    </MDBContainer>
  );
}

export default PageTest;
