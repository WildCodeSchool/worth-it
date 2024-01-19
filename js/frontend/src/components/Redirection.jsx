import { MDBBtn } from "mdb-react-ui-kit";
import { useNavigate } from "react-router-dom";

function Redirection() {
  const navigate = useNavigate();

  const handleGoBack = () => {
    navigate(-1);
  };

  return (
    <MDBBtn
      type="button"
      onClick={handleGoBack}
      color="link"
      className="text-dark bg-white mb-4 mt-5  fs-7"
    >
      Retour
    </MDBBtn>
  );
}

export default Redirection;
