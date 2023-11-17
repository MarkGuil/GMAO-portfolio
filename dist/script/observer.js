ScrollTrigger.create({
    trigger: "#posDetails",
    start: "10% 25%",
    endTrigger: "#project1",
    end: "90% 40%+=100px",
    onEnter: (self) => { 
        posDesc.classList.toggle('sm:opacity-0') 
        posDesc.classList.toggle('sm:-translate-x-16')
        posDesc.classList.toggle('delay-300')
        posDetails.classList.toggle('sm:w-[45vw]')
        posDetails.classList.toggle('2xl:w-[38vw]')
        posDetails.classList.toggle('sm:w-[50vw]')
        posDetails.classList.toggle('delay-300')
    },
    onEnterBack: (self) => {
        posDesc.classList.toggle('sm:opacity-0')
        posDesc.classList.toggle('sm:-translate-x-16')
        posDesc.classList.toggle('delay-300')
        posDetails.classList.toggle('sm:w-[45vw]')
        posDetails.classList.toggle('2xl:w-[38vw]')
        posDetails.classList.toggle('sm:w-[50vw]')
        posDetails.classList.toggle('delay-300')
    },
    onLeave: (self) => {
        posDesc.classList.toggle('sm:opacity-0')
        posDesc.classList.toggle('sm:-translate-x-16')
        posDesc.classList.toggle('delay-300')
        posDetails.classList.toggle('sm:w-[45vw]')
        posDetails.classList.toggle('2xl:w-[38vw]')
        posDetails.classList.toggle('sm:w-[50vw]')
        posDetails.classList.toggle('delay-300')
    },
    onLeaveBack: (self) => {
        posDesc.classList.toggle('sm:opacity-0')
        posDesc.classList.toggle('sm:-translate-x-16')
        posDesc.classList.toggle('delay-300')
        posDetails.classList.toggle('sm:w-[45vw]')
        posDetails.classList.toggle('2xl:w-[38vw]')
        posDetails.classList.toggle('sm:w-[50vw]')
        posDetails.classList.toggle('delay-300')
    },
});

ScrollTrigger.create({
    trigger: "#omniDetails",
    start: "10% 25%",
    endTrigger: "#project2",
    end: "90% 40%+=100px",
    onEnter: (self) => {
        omniDesc.classList.toggle('sm:opacity-0') 
        omniDesc.classList.toggle('sm:-translate-x-16')
        omniDesc.classList.toggle('delay-300')
        omniDetails.classList.toggle('sm:w-[45vw]')
        omniDetails.classList.toggle('2xl:w-[38vw]')
        omniDetails.classList.toggle('sm:w-[50vw]')
        posDetails.classList.toggle('delay-300')
    },
    onEnterBack: (self) => {
        omniDesc.classList.toggle('sm:opacity-0') 
        omniDesc.classList.toggle('sm:-translate-x-16')
        omniDesc.classList.toggle('delay-300')
        omniDetails.classList.toggle('sm:w-[45vw]')
        omniDetails.classList.toggle('2xl:w-[38vw]')
        omniDetails.classList.toggle('sm:w-[50vw]')
        posDetails.classList.toggle('delay-300')
    },
    onLeave: (self) => {
        omniDesc.classList.toggle('sm:opacity-0') 
        omniDesc.classList.toggle('sm:-translate-x-16')
        omniDesc.classList.toggle('delay-300')
        omniDetails.classList.toggle('sm:w-[45vw]')
        omniDetails.classList.toggle('2xl:w-[38vw]')
        omniDetails.classList.toggle('sm:w-[50vw]')
        posDetails.classList.toggle('delay-300')
    },
    onLeaveBack: (self) => {
        omniDesc.classList.toggle('sm:opacity-0') 
        omniDesc.classList.toggle('sm:-translate-x-16')
        omniDesc.classList.toggle('delay-300')
        omniDetails.classList.toggle('sm:w-[45vw]')
        omniDetails.classList.toggle('2xl:w-[38vw]')
        omniDetails.classList.toggle('sm:w-[50vw]')
        omniDetails.classList.toggle('delay-300')
    },
});

ScrollTrigger.create({
    trigger: "#quizDetails",
    start: "10% 25%",
    endTrigger: "#project3",
    end: "90% 40%+=100px",
    onEnter: (self) => {
        quizDesc.classList.toggle('sm:opacity-0') 
        quizDesc.classList.toggle('sm:-translate-x-16')
        quizDesc.classList.toggle('delay-300')
        quizDetails.classList.toggle('sm:w-[45vw]')
        quizDetails.classList.toggle('2xl:w-[38vw]')
        quizDetails.classList.toggle('sm:w-[50vw]')
        quizDetails.classList.toggle('delay-300')
    },
    onEnterBack: (self) => {
        quizDesc.classList.toggle('sm:opacity-0') 
        quizDesc.classList.toggle('sm:-translate-x-16')
        quizDesc.classList.toggle('delay-300')
        quizDetails.classList.toggle('sm:w-[45vw]')
        quizDetails.classList.toggle('2xl:w-[38vw]')
        quizDetails.classList.toggle('sm:w-[50vw]')
        quizDetails.classList.toggle('delay-300')
    },
    onLeave: (self) => {
        quizDesc.classList.toggle('sm:opacity-0') 
        quizDesc.classList.toggle('sm:-translate-x-16')
        quizDesc.classList.toggle('delay-300')
        quizDetails.classList.toggle('sm:w-[45vw]')
        quizDetails.classList.toggle('2xl:w-[38vw]')
        quizDetails.classList.toggle('sm:w-[50vw]')
        quizDetails.classList.toggle('delay-300')
    },
    onLeaveBack: (self) => {
        quizDesc.classList.toggle('sm:opacity-0') 
        quizDesc.classList.toggle('sm:-translate-x-16')
        quizDesc.classList.toggle('delay-300')
        quizDetails.classList.toggle('sm:w-[45vw]')
        quizDetails.classList.toggle('2xl:w-[38vw]')
        quizDetails.classList.toggle('sm:w-[50vw]')
        quizDetails.classList.toggle('delay-300')
    },
});

ScrollTrigger.create({
    trigger: "#aniDetails",
    start: "10% 25%",
    endTrigger: "#project4",
    end: "90% 40%+=100px",
    onEnter: (self) => {
        aniDesc.classList.toggle('sm:opacity-0') 
        aniDesc.classList.toggle('sm:-translate-x-16')
        aniDesc.classList.toggle('delay-300')
        aniDetails.classList.toggle('sm:w-[45vw]')
        aniDetails.classList.toggle('2xl:w-[38vw]')
        aniDetails.classList.toggle('sm:w-[50vw]')
        aniDetails.classList.toggle('delay-300')
    },
    onEnterBack: (self) => {
        aniDesc.classList.toggle('sm:opacity-0') 
        aniDesc.classList.toggle('sm:-translate-x-16')
        aniDesc.classList.toggle('delay-300')
        aniDetails.classList.toggle('sm:w-[45vw]')
        aniDetails.classList.toggle('2xl:w-[38vw]')
        aniDetails.classList.toggle('sm:w-[50vw]')
        aniDetails.classList.toggle('delay-300')
    },
    onLeave: (self) => {
        aniDesc.classList.toggle('sm:opacity-0') 
        aniDesc.classList.toggle('sm:-translate-x-16')
        aniDesc.classList.toggle('delay-300')
        aniDetails.classList.toggle('sm:w-[45vw]')
        aniDetails.classList.toggle('2xl:w-[38vw]')
        aniDetails.classList.toggle('sm:w-[50vw]')
        aniDetails.classList.toggle('delay-300')
    },
    onLeaveBack: (self) => {
        aniDesc.classList.toggle('sm:opacity-0') 
        aniDesc.classList.toggle('sm:-translate-x-16')
        aniDesc.classList.toggle('delay-300')
        aniDetails.classList.toggle('sm:w-[45vw]')
        aniDetails.classList.toggle('2xl:w-[38vw]')
        aniDetails.classList.toggle('sm:w-[50vw]')
        aniDetails.classList.toggle('delay-300')
    },
});