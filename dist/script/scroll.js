gsap.registerPlugin(ScrollTrigger);
const aboutMe = document.getElementById('about-me');
const aboutMeDesc = document.getElementById('about-me-desc');
const aboutSection = document.querySelector(".about-section");
const skillSection = document.querySelector(".skill-section");
// const projectSection = document.querySelector("#project-section");
const posDetails = document.querySelector("#posDetails");
const omniDetails = document.querySelector("#omniDetails");
const quizDetails = document.querySelector("#quizDetails");
const aniDetails = document.querySelector("#aniDetails");
const posDesc = document.querySelector("#posDesc");
const omniDesc = document.querySelector("#omniDesc");
const quizDesc = document.querySelector("#quizDesc");
const aniDesc = document.querySelector("#aniDesc");
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
);

// projectObserver.observe(projectSection);

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

lenis.on('scroll', ScrollTrigger.update);

gsap.ticker.add((time)=>{
    lenis.raf(time * 1000)
});
  
gsap.ticker.lagSmoothing(0);

lenis.on('scroll', (e) => {
    setTimeout(() => {
        if(!document.getElementById('nav-menu').classList.contains('open'))
            e.direction == 1 ? navbar.classList.add('-translate-y-24') : navbar.classList.remove('-translate-y-24')
    }, 1500);
})

ScrollTrigger.create({
    trigger: ".about-section",
    start: "27% 60%-=20px",
    endTrigger: ".about-section",
    end: "74% 50%+=80px",
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
        start: "top-=15% 30%",
        end: "bottom+=30% top+=40%",
        scrub: 1,
        pin: true,
        toggleActions: 'restart pause continue none',
    },
    x:  () => "+" + ((window.innerWidth) - (gsap.getProperty("#about-me", "width")/1.5)),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#about-me-desc', {
    scrollTrigger: {
        trigger: '#about-me-desc',
        start: "-300px 35%",
        end: "top-=10% top",
        scrub: 1,
        toggleActions: 'restart pause continue none',
    },
    // x:  () => "-" + ((window.innerWidth) - gsap.getProperty("#about-me-desc", "width")),
    x:  () => "-" + gsap.getProperty("#about-me-desc", "width") / 8,
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#skill-1', {
    scrollTrigger: {
        trigger: '.skill-1',
        start: "500px 75%",
        endTrigger: ".skill-section",
        end: "70% 25%",
        scrub: .5,
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
        scrub: .5,
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
        scrub: .5,
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
        scrub: .5,
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
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x: '-100%',
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#projImage1', {
    scrollTrigger: {
        trigger: '#projImage1',
        start: "30% center",
        end: "110% 20%",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x: () => (gsap.getProperty("#projImage1", "width") / 1.7),
    y: () => (gsap.getProperty("#projImage1", "height") / 2),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#projImage2', {
    scrollTrigger: {
        trigger: '#projImage2',
        start: "-450px 80%",
        end: "80% 20%",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x: () => "+="+(gsap.getProperty("#projImage2", "width") / 1.7),
    y: () => "-" + (gsap.getProperty("#projImage2", "height") / 1.7),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#projImage3', {
    scrollTrigger: {
        trigger: '#projImage3',
        start: "-200px 40%",
        end: "80% 20%",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x: () => "-" + (gsap.getProperty("#projImage3", "width") / 1.5),
    y: () => "+=" + (gsap.getProperty("#projImage3", "height") / 1.5),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#omniImage1', {
    scrollTrigger: {
        trigger: '#omniImage1',
        start: "top center",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x:  () => "-" + ((window.innerWidth) - gsap.getProperty("#omniImage2", "width")),
    y: () => (gsap.getProperty("#omniImage1", "height") / 2),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#omniImage2', {
    scrollTrigger: {
        trigger: '#omniImage2',
        start: "top 35%",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x:  () => "-" + ((window.innerWidth / 2) - gsap.getProperty("#omniImage2", "width")),
    y: () => ((gsap.getProperty("#omniImages", "height") / 3.5) - gsap.getProperty("#omniImage2", "height")),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#omniImage3', {
    scrollTrigger: {
        trigger: '#omniImage3',
        start: "top 35%",
        end: "80% 20%",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x:  () => ((window.innerWidth / 2) - gsap.getProperty("#omniImage3", "width")),
    y: () => ((gsap.getProperty("#omniImages", "height") / 3) - gsap.getProperty("#omniImage3", "height")),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#omniImage4', {
    scrollTrigger: {
        trigger: '#omniImage4',
        start: "-850px center",
        end: "-80% 20%",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x:  () => '-' + ((window.innerWidth / 2) - gsap.getProperty("#omniImage4", "width")),
    y: () => '-' + ((gsap.getProperty("#omniImages", "height") / 3.2) - gsap.getProperty("#omniImage4", "height")),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#omniImage5', {
    scrollTrigger: {
        trigger: '#omniImage5',
        start: "top 35%",
        end: "1200px 20%",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x:  () => (((window.innerWidth) / 1.3) - gsap.getProperty("#omniImage2", "width")),
    y: () => ((gsap.getProperty("#omniImages", "height") / 2.1) - gsap.getProperty("#omniImage5", "height")),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});



gsap.to('#quizImage1', {
    scrollTrigger: {
        trigger: '#quizImage1',
        start: "top center",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x:  () => "-" + ((window.innerWidth) - gsap.getProperty("#quizImage2", "width")),
    y: () => (gsap.getProperty("#quizImage1", "height") / 2),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#quizImage2', {
    scrollTrigger: {
        trigger: '#quizImage2',
        start: "top 35%",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x:  () => "-" + ((window.innerWidth / 2) - gsap.getProperty("#quizImage2", "width")),
    y: () => ((gsap.getProperty("#quizImages", "height") / 3.5) - gsap.getProperty("#quizImage2", "height")),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#quizImage3', {
    scrollTrigger: {
        trigger: '#quizImage3',
        start: "top 35%",
        end: "80% 20%",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x:  () => ((window.innerWidth / 2) - gsap.getProperty("#quizImage3", "width")),
    y: () => ((gsap.getProperty("#quizImages", "height") / 3) - gsap.getProperty("#quizImage3", "height")),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#quizImage4', {
    scrollTrigger: {
        trigger: '#quizImage4',
        start: "-850px center",
        end: "-80% 20%",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x:  () => '-' + ((window.innerWidth / 2) - gsap.getProperty("#quizImage4", "width")),
    y: () => '-' + ((gsap.getProperty("#quizImages", "height") / 3.2) - gsap.getProperty("#quizImage4", "height")),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#quizImage5', {
    scrollTrigger: {
        trigger: '#quizImage5',
        start: "top 35%",
        end: "1200px 20%",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x:  () => (((window.innerWidth) / 1.3) - gsap.getProperty("#quizImage2", "width")),
    y: () => ((gsap.getProperty("#quizImages", "height") / 2.1) - gsap.getProperty("#quizImage5", "height")),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

// gsap.to('#quizImage1', {
//     scrollTrigger: {
//         trigger: '#quizImage1',
//         start: "top 35%",
//         end: "80% 20%",
//         scrub: .5,
//         toggleActions: 'restart pause continue none',
//     },
//     x:  () => ((window.innerWidth / 2) - gsap.getProperty("#quizImage1", "width")),
//     y: () => ((gsap.getProperty("#quizImages", "height") / 2.6) - gsap.getProperty("#quizImage1", "height")),
//     duration:2.5,
//     ease: "slow(0.7,0.7,false)",
// });

// gsap.to('#quizImage2', {
//     scrollTrigger: {
//         trigger: '#quizImage2',
//         start: "top 35%",
//         end: "80% 20%",
//         scrub: .5,
//         toggleActions: 'restart pause continue none',
//     },
//     x:  () => "-" +((window.innerWidth / 2) - gsap.getProperty("#quizImage2", "width")),
//     y: () => ((gsap.getProperty("#quizImages", "height") / 2.8) - gsap.getProperty("#quizImage2", "height")),
//     duration:2.5,
//     ease: "slow(0.7,0.7,false)",
// });

// gsap.to('#quizImage3', {
//     scrollTrigger: {
//         trigger: '#quizImage3',
//         start: "-750px 35%",
//         end: "-80% 20%",
//         scrub: .5,
//         toggleActions: 'restart pause continue none',
//     },
//     x:  () => ((window.innerWidth / 2) - gsap.getProperty("#quizImage3", "width")),
//     y: () => '-' + ((gsap.getProperty("#quizImages", "height") / 2.9) - gsap.getProperty("#quizImage3", "height")),
//     duration:2.5,
//     ease: "slow(0.7,0.7,false)",
// });

// gsap.to('#quizImage4', {
//     scrollTrigger: {
//         trigger: '#quizImage4',
//         start: "-850px 35%",
//         end: "-80% 20%",
//         scrub: .5,
//         toggleActions: 'restart pause continue none',
//     },
//     x:  () => "-" +((window.innerWidth / 2) - gsap.getProperty("#quizImage4", "width")),
//     y: () => '-' + ((gsap.getProperty("#quizImages", "height") / 2.7) - gsap.getProperty("#quizImage4", "height")),
//     duration:2.5,
//     ease: "slow(0.7,0.7,false)",
// });

gsap.to('#aniImage1', {
    scrollTrigger: {
        trigger: '#aniImage1',
        start: "top center",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x:  () => "-" + ((window.innerWidth) - gsap.getProperty("#omniImage2", "width")),
    y: () => (gsap.getProperty("#aniImage1", "height") / 1.8),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#aniImage2', {
    scrollTrigger: {
        trigger: '#aniImage2',
        start: "-320 35%",
        end: "80% 20%",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x:  () => ((window.innerWidth / 1.1) - gsap.getProperty("#aniImage2", "width")),
    y: () => "-" + ((gsap.getProperty("#aniImages", "height") / 2.4) - gsap.getProperty("#aniImage2", "height")),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

gsap.to('#aniImage3', {
    scrollTrigger: {
        trigger: '#aniImage3',
        start: "-380 35%",
        end: "80% 20%",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x:  () => ((window.innerWidth / 1.18) - gsap.getProperty("#aniImage3", "width")),
    y: () => "-" + ((gsap.getProperty("#aniImages", "height") / 2.5) - gsap.getProperty("#aniImage3", "height")),
    duration:2.5,
    ease: "slow(0.1,0.4,false)",
});

gsap.to('#aniImage4', {
    scrollTrigger: {
        trigger: '#aniImage4',
        start: "top center",
        end: "1200px 20%",
        scrub: .5,
        toggleActions: 'restart pause continue none',
    },
    x:  () => "-" + ((window.innerWidth) /1.6),
    y: () => ((gsap.getProperty("#aniImages", "height") / 2.8) - gsap.getProperty("#aniImage4", "height")),
    duration:2.5,
    ease: "slow(0.7,0.7,false)",
});

function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf);


