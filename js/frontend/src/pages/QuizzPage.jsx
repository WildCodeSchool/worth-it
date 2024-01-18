// eslint-disable-next-line import/no-unresolved
import { Swiper, SwiperSlide } from "swiper/react";
import { useState } from "react";
import Quizz1 from "../components/Quizz1";
import Quizz2 from "../components/Quizz2";
import Quizz3 from "../components/Quizz3";
// eslint-disable-next-line import/no-unresolved
import "swiper/css";

function QuizzPage() {
  const [question1, setQuestion1] = useState([]);
  const [question2, setQuestion2] = useState([]);
  const [question3, setQuestion3] = useState([]);
  return (
    <Swiper
      slidesPerView={1}
      onSlideChange={() => console.info("swipe")}
      onSwiper={(swiper) => console.info(swiper)}
    >
      <SwiperSlide>
        <Quizz1 question1={question1} setQuestion1={setQuestion1} />
      </SwiperSlide>
      <SwiperSlide>
        <Quizz2 question1={question2} setQuestion2={setQuestion2} />
      </SwiperSlide>
      <SwiperSlide>
        <Quizz3
          question1={question1}
          question2={question2}
          question3={question3}
          setQuestion1={setQuestion3}
        />
      </SwiperSlide>
    </Swiper>
  );
}

export default QuizzPage;
