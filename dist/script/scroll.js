
gsap.registerPlugin(ScrollTrigger);
const aboutMe = document.getElementById('about-me');
const aboutMeDesc = document.getElementById('about-me-desc');
const aboutSection = document.querySelector(".about-section");
const projectSection = document.querySelector("#project-section");
const skill1 = document.querySelector('.skill-1');
const skill2 = document.querySelector('.skill-2');
const skill3 = document.querySelector('.skill-3');
const skill4 = document.querySelector('.skill-4');
const skillSection = document.querySelector(".skill-section");

const numSteps = 20.0;
let prevRatio = 0.0;
let aboutMePerc = '190%';
let aboutMeDescPerc = '-40%';

let thresholdVal = .65;
if (window.innerWidth <= 640) {
    aboutMePerc = '60%';
    aboutMeDescPerc = '-10%';
    thresholdVal = .5;
}

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


// get scroll value
lenis.on('scroll', ScrollTrigger.update, ({
    scroll,
    limit,
    velocity,
    direction,
    progress
}) => {
    
    scrollVal3 = 1.05;
    scrollVal4 = 0.50;
    scrollVal5 = 0.75;
    scrollVal6 = 0.25;

    if (window.innerWidth <= 640) {
        scrollVal3 = 0.37;
        scrollVal4 = 0.30;
        scrollVal5 = 0.35;
        scrollVal6 = 0.15;
    } 

    skill1.style.left = scroll * scrollVal3 + "px";
    skill2.style.left = scroll * scrollVal4 + "px";
    skill3.style.left = "-" + scroll * scrollVal5 + "px";
    skill4.style.left = scroll * scrollVal6 + "px";
});

ScrollTrigger.create({
    trigger: ".about-section",
    start: "100px 70%",
    endTrigger: ".about-section",
    end: "85% 60%+=100px",
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
        start: "-200px 30%",
        end: "30px 5%",
        scrub: 1,
        pin: true,
        toggleActions: 'restart pause continue none',
        // onUpdate: (self) => console.log("progress:", self),
    },
    x: aboutMePerc,
});

gsap.to('#about-me-desc', {
    scrollTrigger: {
        trigger: '#about-me-desc',
        start: "-300px 35%",
        end: "30px 5%",
        scrub: 1,
        toggleActions: 'restart pause continue none'
    },
    x: aboutMeDescPerc,
});


function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf);


