
gsap.to('#posDetails', {
    scrollTrigger: {
        trigger: "#posDetails",
        start: "top "+ (window.innerHeight - gsap.getProperty("#posDetails", "height")),
        endTrigger: "#project1",
        end: "bottom bottom",
        pin: true,
        toggleActions: 'restart pause continue none',
    },
    duration:1.5,
    ease: "slow(0.7,0.7,false)",
});

ScrollTrigger.create({
    trigger: "#omniDetails",
    start: "10% 25%",
    endTrigger: "#project2",
    end: "bottom 40%+=100px",
    onEnter: (self) => {
        omniDetails.classList.toggle('sm:w-[38vw]')
        omniDetails.classList.toggle('sm:w-[50vw]')
    },
    onEnterBack: (self) => {
        omniDetails.classList.toggle('sm:w-[38vw]')
        omniDetails.classList.toggle('sm:w-[50vw]')
    },
    onLeave: (self) => {
        omniDetails.classList.toggle('sm:w-[38vw]')
        omniDetails.classList.toggle('sm:w-[50vw]')
    },
    onLeaveBack: (self) => {
        omniDetails.classList.toggle('sm:w-[38vw]')
        omniDetails.classList.toggle('sm:w-[50vw]')
    },
});

ScrollTrigger.create({
    trigger: "#quizDetails",
    start: "10% 25%",
    endTrigger: "#project3",
    end: "bottom 40%+=100px",
    onEnter: (self) => {
        quizDetails.classList.toggle('sm:w-[38vw]')
        quizDetails.classList.toggle('sm:w-[50vw]')
    },
    onEnterBack: (self) => {
        quizDetails.classList.toggle('sm:w-[38vw]')
        quizDetails.classList.toggle('sm:w-[50vw]')
    },
    onLeave: (self) => {
        quizDetails.classList.toggle('sm:w-[38vw]')
        quizDetails.classList.toggle('sm:w-[50vw]')
    },
    onLeaveBack: (self) => {
        quizDetails.classList.toggle('sm:w-[38vw]')
        quizDetails.classList.toggle('sm:w-[50vw]')
    },
});

ScrollTrigger.create({
    trigger: "#aniDetails",
    start: "10% 25%",
    endTrigger: "#project4",
    end: "bottom 40%+=100px",
    onEnter: (self) => {
        aniDetails.classList.toggle('sm:w-[38vw]')
        aniDetails.classList.toggle('sm:w-[50vw]')
    },
    onEnterBack: (self) => {
        aniDetails.classList.toggle('sm:w-[38vw]')
        aniDetails.classList.toggle('sm:w-[50vw]')
    },
    onLeave: (self) => {
        aniDetails.classList.toggle('sm:w-[38vw]')
        aniDetails.classList.toggle('sm:w-[50vw]')
    },
    onLeaveBack: (self) => {
        aniDetails.classList.toggle('sm:w-[38vw]')
        aniDetails.classList.toggle('sm:w-[50vw]')
    },
});