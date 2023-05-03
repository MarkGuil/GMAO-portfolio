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
        threshold: .7,
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
    smoothTouch: true,
    touchMultiplier: 3,
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
    console.log(progress);
    aboutMeDesc.style.left = "-" + scroll * 1.70 + "px";
    aboutMe.style.left = scroll * 1.25 + "px";
    skill1.style.left = scroll * 1.05 + "px";
    skill2.style.left = scroll * 0.50 + "px";
    skill3.style.left = "-" + scroll * 0.75 + "px";
    skill4.style.left = scroll * 0.25 + "px";
})


function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf);


