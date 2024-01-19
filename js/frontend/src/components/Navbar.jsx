import { MDBContainer, MDBNavbar, MDBNavbarBrand } from "mdb-react-ui-kit";

function Navbar() {
  return (
    <MDBNavbar light bgColor="light" className="mb-8 bg-black">
      <MDBContainer className="bg-black">
        <MDBNavbarBrand href="#" className="bg-black">
          <img
            src="https://i.postimg.cc/v8t8BqKd/loreal-professionnel-logo-vector.png"
            height="30"
            alt=""
            loading="lazy"
          />
        </MDBNavbarBrand>
      </MDBContainer>
    </MDBNavbar>
  );
}

export default Navbar;
