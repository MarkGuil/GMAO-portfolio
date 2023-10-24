
gsap.registerPlugin(ScrollTrigger);
const aboutMe = document.getElementById('about-me');
const aboutMeDesc = document.getElementById('about-me-desc');
const aboutSection = document.querySelector(".about-section");
const skillSection = document.querySelector(".skill-section");
const projectSection = document.querySelector("#project-section");
const skill1 = document.querySelector('.skill-1');
const skill2 = document.querySelector('.skill-2');
const skill3 = document.querySelector('.skill-3');
const skill4 = document.querySelector('.skill-4');

const numSteps = 20.0;
let prevRatio = 0.0;
let aboutMePerc = '150%';
let aboutMeDescPerc = '-50%';

let thresholdVal = .65;

(function() {
    if (window.innerWidth <= 640) {
        aboutMePerc = '60%';
        aboutMeDescPerc = '-10%';
        thresholdVal = .5;
    }
 })();

const aboutObserver = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            aboutMe.classList.toggle("opacity-100", entry.isIntersecting);
            aboutMeDesc.classList.toggle("opacity-100", entry.isIntersecting);
        })
    }, {
        threshold: thresholdVal,
    }
)


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
// aboutObserver.observe(aboutSection);

const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // https://www.desmos.com/calculator/brs54l4xou
    orientation: 'vertical', // vertical, horizontal
    gestureOrientation: 'vertical', // vertical, horizontal, both
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
});

ScrollTrigger.create({
    trigger: ".about-section",
    start: "120px 70%",
    endTrigger: ".about-section",
    end: "95% 60%+=100px",
    markers: true,
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

gsap.to('#about-me', {
    scrollTrigger: {
        trigger: '#about-me',
        start: "-180px 30%",
        end: "500px top",
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


function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf);


