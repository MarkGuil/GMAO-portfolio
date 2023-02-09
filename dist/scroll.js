const aboutMe = document.getElementById('about-me');
const aboutSection = document.querySelector(".about-section");

const aboutObserver = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            aboutMe.classList.toggle("opacity-100", entry.isIntersecting);
            aboutMe.classList.toggle("left-1/2", entry.isIntersecting);
            // if(entry.isIntersecting) {
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
    smoothTouch: false,
    touchMultiplier: 2,
    infinite: false,
})

//get scroll value
lenis.on('scroll', ({
    scroll,
    limit,
    velocity,
    direction,
    progress
}) => {
    // console.log({
    //     scroll,
    //     limit,
    //     velocity,
    //     direction,
    //     progress
    // })
})

function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf);