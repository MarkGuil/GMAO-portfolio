
gsap.registerPlugin(ScrollTrigger);
const aboutMe = document.getElementById('about-me');
const aboutMeDesc = document.getElementById('about-me-desc');
const aboutSection = document.querySelector(".about-section");
const skillSection = document.querySelector(".skill-section");
const projectSection = document.querySelector("#project-section");
const posDetails = document.querySelector("#posDetails");
const omniDetails = document.querySelector("#omniDetails");
const quizDetails = document.querySelector("#quizDetails");
const aniDetails = document.querySelector("#aniDetails");
const skill1 = document.querySelector('.skill-1');
const skill2 = document.querySelector('.skill-2');
const skill3 = document.querySelector('.skill-3');
const skill4 = document.querySelector('.skill-4');

let aboutMePerc = '150%';
let aboutMeDescPerc = '-50%';

(function() {
    if (window.innerWidth <= 640) {
        aboutMePerc = '60%';
        aboutMeDescPerc = '-10%';
    }
 })();

const projectObserver = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            const projectImage = document.querySelectorAll(".project-image");
            
            for (var i=0; i < projectImage.length; i++) {
                projectImage[i].classList.toggle("opacity-100", entry.isIntersecting);
                projectImage[i].classList.toggle("rotate-0", entry.isIntersecting);
            }
        })
    }, {
        threshold: .35,
    }
)

projectObserver.observe(projectSection);

const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), 
    orientation: 'vertical', 
    gestureOrientation: 'vertical', 
    smoothWheel: true,
    wheelMultiplier: 1,
    smoothTouch: false,
    touchMultiplier: 2,
    infinite: false,
});

gsap.ticker.add((time)=>{
    lenis.raf(time * 1000)
});
  
gsap.ticker.lagSmoothing(0);

lenis.on('scroll', ScrollTrigger.update, ({
    scroll,
}) => {
    if (window.innerWidth <= 640) {
        aboutMePerc = '60%';
        aboutMeDescPerc = '-10%';
    }
});

ScrollTrigger.create({
    trigger: ".about-section",
    start: "120px 70%",
    endTrigger: ".about-section",
    end: "95% 60%+=100px",
    onEnter: (self) => {
        aboutMe.classList.toggle('opacity-0')
        aboutMeDesc.classList.toggle('opacity-0')
    },
    onEnterBack: (self) => {
        aboutMe.classList.toggle('opacity-0')
        aboutMeDesc.classList.toggle('opacity-0')
    },
    onLeave: (self) => {
        aboutMe.classList.toggle('opacity-0')
        aboutMeDesc.classList.toggle('opacity-0')
    },
    onLeaveBack: (self) => {
        aboutMe.classList.toggle('opacity-0')
        aboutMeDesc.classList.toggle('opacity-0')
    },
});

ScrollTrigger.create({
    trigger: "#posDetails",
    start: "top 25%",
    endTrigger: "#project1",
    end: "bottom 40%+=100px",
    onEnter: (self) => {
        posDetails.classList.toggle('sm:w-[35vw]')
        posDetails.classList.toggle('sm:w-[50vw]')
    },
    onEnterBack: (self) => {
        posDetails.classList.toggle('sm:w-[35vw]')
        posDetails.classList.toggle('sm:w-[50vw]')
    },
    onLeave: (self) => {
        posDetails.classList.toggle('sm:w-[35vw]')
        posDetails.classList.toggle('sm:w-[50vw]')
    },
    onLeaveBack: (self) => {
        posDetails.classList.toggle('sm:w-[35vw]')
        posDetails.classList.toggle('sm:w-[50vw]')
    },
});

ScrollTrigger.create({
    trigger: "#omniDetails",
    start: "top 25%",
    endTrigger: "#project2",
    end: "bottom 40%+=100px",
    onEnter: (self) => {
        omniDetails.classList.toggle('sm:w-[35vw]')
        omniDetails.classList.toggle('sm:w-[50vw]')
    },
    onEnterBack: (self) => {
        omniDetails.classList.toggle('sm:w-[35vw]')
        omniDetails.classList.toggle('sm:w-[50vw]')
    },
    onLeave: (self) => {
        omniDetails.classList.toggle('sm:w-[35vw]')
        omniDetails.classList.toggle('sm:w-[50vw]')
    },
    onLeaveBack: (self) => {
        omniDetails.classList.toggle('sm:w-[35vw]')
        omniDetails.classList.toggle('sm:w-[50vw]')
    },
});

ScrollTrigger.create({
    trigger: "#quizDetails",
    start: "top 25%",
    endTrigger: "#project3",
    end: "bottom 40%+=100px",
    onEnter: (self) => {
        quizDetails.classList.toggle('sm:w-[35vw]')
        quizDetails.classList.toggle('sm:w-[50vw]')
    },
    onEnterBack: (self) => {
        quizDetails.classList.toggle('sm:w-[35vw]')
        quizDetails.classList.toggle('sm:w-[50vw]')
    },
    onLeave: (self) => {
        quizDetails.classList.toggle('sm:w-[35vw]')
        quizDetails.classList.toggle('sm:w-[50vw]')
    },
    onLeaveBack: (self) => {
        quizDetails.classList.toggle('sm:w-[35vw]')
        quizDetails.classList.toggle('sm:w-[50vw]')
    },
});

ScrollTrigger.create({
    trigger: "#aniDetails",
    start: "top 25%",
    endTrigger: "#project4",
    end: "bottom 40%+=100px",
    onEnter: (self) => {
        aniDetails.classList.toggle('sm:w-[35vw]')
        aniDetails.classList.toggle('sm:w-[50vw]')
    },
    onEnterBack: (self) => {
        aniDetails.classList.toggle('sm:w-[35vw]')
        aniDetails.classList.toggle('sm:w-[50vw]')
    },
    onLeave: (self) => {
        aniDetails.classList.toggle('sm:w-[35vw]')
        aniDetails.classList.toggle('sm:w-[50vw]')
    },
    onLeaveBack: (self) => {
        aniDetails.classList.toggle('sm:w-[35vw]')
        aniDetails.classList.toggle('sm:w-[50vw]')
    },
});

gsap.to('#about-me', {
    scrollTrigger: {
        trigger: '#about-me',
        start: "-180px 35%",
        end: "300px top",
        scrub: 1,
        pin: true,
        toggleActions: 'restart pause continue none',
    },
    x: () => "+=" + document.querySelector('#about-me-desc').offsetWidth ,
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#about-me-desc', {
    scrollTrigger: {
        trigger: '#about-me-desc',
        start: "-300px 35%",
        end: "top top",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () =>  "-=" + document.querySelector('#about-me-desc').offsetWidth,
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#skill-1', {
    scrollTrigger: {
        trigger: '.skill-1',
        start: "500px 75%",
        endTrigger: ".skill-section",
        end: "70% 25%",
        scrub: 1,
        pin: true,
        toggleActions: 'restart pause continue none',
    },
    x: '8%',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#skill-2', {
    scrollTrigger: {
        trigger: '.skill-2',
        start: "15% 40%",
        endTrigger: ".skill-section",
        end: "80% 20%",
        scrub: 2,
        pin: true,
        toggleActions: 'restart pause continue none',
    },
    x: '80%',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#skill-3', {
    scrollTrigger: {
        trigger: '.skill-3',
        start: "-30% 45%",
        endTrigger: ".skill-section",
        end: "80% 20%",
        scrub: 2,
        toggleActions: 'restart pause continue none',
    },
    x: '10%',
    y: '100',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#skill-4', {
    scrollTrigger: {
        trigger: '.skill-4',
        start: "-40% 55%",
        endTrigger: ".skill-section",
        end: "80% 20%",
        scrub: 2,
        toggleActions: 'restart pause continue none',
    },
    x: '40%',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#skill-5', {
    scrollTrigger: {
        trigger: '.skill-5',
        start: "120px 50%",
        endTrigger: ".skill-section",
        end: "80% 20%",
        scrub: 2,
        toggleActions: 'restart pause continue none',
    },
    x: '-100%',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#projImage1', {
    scrollTrigger: {
        trigger: '#projImage1',
        start: "top center",
        end: "80% 20%",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () => "-" + ((document.querySelector('#projectImages').offsetWidth / 50) * 2) + "%",
    y: '300',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#projImage2', {
    scrollTrigger: {
        trigger: '#projImage2',
        start: "-500px 80%",
        end: "80% 20%",
        scrub: 1,
        markers: true,
        toggleActions: 'restart pause continue none',
    },
    x: () => ((document.querySelector('#projectImages').offsetWidth / 50) * 2) + "%",
    y: '-400',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#projImage3', {
    scrollTrigger: {
        trigger: '#projImage3',
        start: "-600px center",
        end: "80% 20%",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () => "-" + ((document.querySelector('#projectImages').offsetWidth / 40) * 2) + "%",
    y: '300',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#omniImage1', {
    scrollTrigger: {
        trigger: '#omniImage1',
        start: "top center",
        end: "80% 20%",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () => ((document.querySelector('#omniImages').offsetWidth / 20) * 2) + "%",
    y: '300',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#omniImage2', {
    scrollTrigger: {
        trigger: '#omniImage2',
        start: "top center",
        end: "80% 20%",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () => "-" + ((document.querySelector('#omniImages').offsetWidth / 20) * 2) + "%",
    y: '180',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#omniImage3', {
    scrollTrigger: {
        trigger: '#omniImage3',
        start: "-600px center",
        end: "80% 20%",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () => ((document.querySelector('#omniImages').offsetWidth / 20) * 2) + "%",
    y: '-150',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#omniImage4', {
    scrollTrigger: {
        trigger: '#omniImage4',
        start: "-700px center",
        end: "80% 20%",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () => "-" + ((document.querySelector('#omniImages').offsetWidth / 20) * 2) + "%",
    y: '-170',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#quizImage1', {
    scrollTrigger: {
        trigger: '#quizImage1',
        start: "top center",
        end: "80% 20%",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () => ((document.querySelector('#quizImages').offsetWidth / 20) * 2) + "%",
    y: '300',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#quizImage2', {
    scrollTrigger: {
        trigger: '#quizImage2',
        start: "top center",
        end: "80% 20%",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () => "-" + ((document.querySelector('#quizImages').offsetWidth / 20) * 2) + "%",
    y: '180',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#quizImage3', {
    scrollTrigger: {
        trigger: '#quizImage3',
        start: "-600px center",
        end: "80% 20%",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () => ((document.querySelector('#quizImages').offsetWidth / 20) * 2) + "%",
    y: '-150',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#quizImage4', {
    scrollTrigger: {
        trigger: '#quizImage4',
        start: "-700px center",
        end: "80% 20%",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () => "-" + ((document.querySelector('#quizImages').offsetWidth / 20) * 2) + "%",
    y: '-170',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#aniImage1', {
    scrollTrigger: {
        trigger: '#aniImage1',
        start: "top center",
        end: "80% 20%",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () => ((document.querySelector('#aniImages').offsetWidth / 20) * 2) + "%",
    y: '300',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#aniImage2', {
    scrollTrigger: {
        trigger: '#aniImage2',
        start: "top center",
        end: "80% 20%",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () => "-" + ((document.querySelector('#aniImages').offsetWidth / 20) * 2) + "%",
    y: '180',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#aniImage3', {
    scrollTrigger: {
        trigger: '#aniImage3',
        start: "-600px center",
        end: "80% 20%",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () => ((document.querySelector('#aniImages').offsetWidth / 20) * 2) + "%",
    y: '-150',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#aniImage4', {
    scrollTrigger: {
        trigger: '#aniImage4',
        start: "-700px center",
        end: "80% 20%",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    x: () => "-" + ((document.querySelector('#aniImages').offsetWidth / 20) * 2) + "%",
    y: '-170',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf);


