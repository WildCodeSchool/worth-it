import { MDBFooter } from "mdb-react-ui-kit";

function Footer() {
  return (
    <MDBFooter bgColor="light" className="text-start text-lg-left">
      <div className="text-right p-3 bg-dark">
        &copy; {new Date().getFullYear()} Copyright Worth It
      </div>
    </MDBFooter>
  );
}

export default Footer;
