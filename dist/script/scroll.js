const aboutMe = document.getElementById('about-me');
const aboutMeDesc = document.getElementById('about-me-desc');
const aboutSection = document.querySelector(".about-section");

const skill1 = document.querySelector('.skill-1');
const skill2 = document.querySelector('.skill-2');
const skill3 = document.querySelector('.skill-3');
const skill4 = document.querySelector('.skill-4');
const skillSection = document.querySelector(".skill-section");

const numSteps = 20.0;
let prevRatio = 0.0;

let thresholdVal = .65;
if (window.innerWidth <= 640) {
    thresholdVal = .5;
}

// function buildThresholdList() {
//     let thresholds = [];
//     let numSteps = 20;
  
//     for (let i = 1.0; i <= numSteps; i++) {
//         let ratio = i / numSteps;
//         thresholds.push(ratio);
//     }
  
//     thresholds.push(0);
//     return thresholds;
// }

const aboutObserver = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            // if (entry.intersectionRatio > prevRatio) {
            //     let pos = entry.intersectionRatio * 50;
            //     // aboutMe.style.left = pos + "%"
            //     console.log(pos);
            //   } 
            //   else {
            //     let pos = entry.intersectionRatio * 50;
            //     // aboutMe.style.left = pos + "%"
            //     console.log(pos);
            //   }
            // if(entry.isIntersecting) {
            //     aboutMe.classList.replace("hidden", "block");
            //     aboutMeDesc.classList.replace("hidden", "block");
            // } else {
            //     aboutMe.classList.replace("block", "hidden");
            //     aboutMeDesc.classList.replace("block", "hidden");
            // }
            // setTimeout(()=> {
                aboutMe.classList.toggle("opacity-100", entry.isIntersecting);
                aboutMeDesc.classList.toggle("opacity-100", entry.isIntersecting);
            //  }
            //  ,100);
            
            // aboutMeDesc.classList.toggle("block", entry.isIntersecting);
            // aboutMe.classList.toggle("left-1/2", entry.isIntersecting);
            
            
            // if(entry.isIntersecting) {
            //     console.log(scrollY);
            // }
        })
    }, {
        threshold: thresholdVal,
    }
)

aboutObserver.observe(aboutSection);

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
})


// get scroll value
lenis.on('scroll', ({
    scroll,
    limit,
    velocity,
    direction,
    progress
}) => {
    
    scrollVal1 = 1.55;
    scrollVal2 = 1.10;
    scrollVal3 = 1.05;
    scrollVal4 = 0.50;
    scrollVal5 = 0.75;
    scrollVal6 = 0.25;

    if (window.innerWidth <= 640) {
        scrollVal1 = 0.65;
        scrollVal2 = 0.37;
        scrollVal3 = 0.37;
        scrollVal4 = 0.30;
        scrollVal5 = 0.35;
        scrollVal6 = 0.15;
    } else if (window.innerWidth > 640 && window.innerHeight <= 124) {
        scrollVal1 = 1.15;
        scrollVal2 = 0.80;
    } 

    aboutMeDesc.style.left = "-" + scroll * scrollVal1 + "px";
    aboutMe.style.left = scroll * scrollVal2 + "px";

    skill1.style.left = scroll * scrollVal3 + "px";
    skill2.style.left = scroll * scrollVal4 + "px";
    skill3.style.left = "-" + scroll * scrollVal5 + "px";
    skill4.style.left = scroll * scrollVal6 + "px";
})


function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf);


