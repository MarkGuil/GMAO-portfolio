// const navbar = document.querySelector(".navbar");
// const mobileNav = document.getElementById("nav-menu");
// const hamburger = document.getElementById("hamburger");
// // const s1 = document.getElementById("sect-link-1");

// const scroll = new LocomotiveScroll({
//     el: document.querySelector('[data-scroll-container]'),
//     smooth: true
// });

// scroll.on('scroll', (args) => {
//     // Get all current elements : args.currentElements
//     if (typeof args.currentElements['navbar'] === 'object') {
//         let progress = args.currentElements['navbar'].progress;
//         if (progress < 0.05) {
//             navbar.classList.add("bg-transparent");
//             navbar.classList.add("py-5");
//             mobileNav.classList.add("top-20");
//             hamburger.classList.add("top-10");
//             navbar.classList.remove("bg-dark-bluer/[.9]");
//             navbar.classList.remove("py-3");
//             mobileNav.classList.remove("top-[3.75rem]");
//             hamburger.classList.remove("top-8");
//         } else {
//             navbar.classList.add("bg-dark-bluer/[.9]");
//             navbar.classList.add("py-3");
//             mobileNav.classList.add("top-[3.75rem]");
//             hamburger.classList.add("top-8");
//             navbar.classList.remove("bg-transparent");
//             navbar.classList.remove("py-5");
//             mobileNav.classList.remove("top-20");
//             hamburger.classList.remove("top-10");
//         }
//         // ouput log example: 0.34
//         // gsap example : myGsapAnimation.progress(progress);
//     }
// });