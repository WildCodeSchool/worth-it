// eslint-disable-next-line import/no-unresolved
import { Swiper, SwiperSlide } from "swiper/react";
import { useEffect, useState } from "react";
import { MDBContainer } from "mdb-react-ui-kit";
import Quizz1 from "../components/Quizz1";
import Quizz2 from "../components/Quizz2";
import Quizz3 from "../components/Quizz3";
// eslint-disable-next-line import/no-unresolved
import "swiper/css";

function QuizzPage() {
  const [question1, setQuestion1] = useState();
  const [question2, setQuestion2] = useState();
  const [question3, setQuestion3] = useState();

  const setInformation1 = (e) => {
    setQuestion1(e.target.value);
  };
  const setInformation2 = (e) => {
    setQuestion2(e.target.value);
  };
  const setInformation3 = (e) => {
    setQuestion3(e.target.value);
  };
  return (
    <MDBContainer className="d-flex">
      <Swiper
        slidesPerView={1}
        onSlideChange={() => console.info("swipe")}
        onSwiper={(swiper) => console.info(swiper)}
      >
        <SwiperSlide>
          <Quizz1 question1={question1} setInformation1={setInformation1} />
        </SwiperSlide>
        <SwiperSlide>
          <Quizz2 question1={question2} setInformation2={setInformation2} />
        </SwiperSlide>
        <SwiperSlide>
          <Quizz3
            question1={question1}
            question2={question2}
            question3={question3}
            setInformation3={setInformation3}
          />
        </SwiperSlide>
      </Swiper>
    </MDBContainer>
  );
}

export default QuizzPage;
