import { MDBContainer } from "mdb-react-ui-kit";
import Quizz1 from "../components/Quizz1";
import Quizz2 from "../components/Quizz2";
import Quizz3 from "../components/Quizz3";

function QuizzPage() {
  return (
    <MDBContainer fluid>
      <Quizz1 />
      <Quizz2 />
      <Quizz3 />
    </MDBContainer>
  );
}

export default QuizzPage;
