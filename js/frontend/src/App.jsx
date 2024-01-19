import "./App.css";
import { Outlet } from "react-router-dom";
import { MDBContainer } from "mdb-react-ui-kit";
import Footer from "./components/Footer";
import Navbar from "./components/Navbar";

function App() {
  return (
    <>
      <Navbar />
      <MDBContainer className="d-flex">
        <Outlet />
      </MDBContainer>
      <Footer />
    </>
  );
}

export default App;
