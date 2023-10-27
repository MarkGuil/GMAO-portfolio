const sections = document.querySelectorAll(".sect");
const links = document.querySelectorAll(".section-links");
const navbar = document.querySelector(".navbar");
const footerObserver = document.querySelector(".footer-observer");
const footer = document.querySelector(".page-footer");
const mobileNav = document.getElementById("nav-menu");
const hamburger = document.getElementById("hamburger");

if (window.innerWidth <= 640) {
    document.getElementById("myImg1").src = "images/omnibus/screens(mobile).png";
    document.getElementById("myImg2").src = "images/quizam/screens(mobile).png";
    document.getElementById("myImg3").src = "images/anishop/screens(mobile).png";
    document.getElementById("myImg4").src = "images/psu/screens(mobile).png";
}

window.onscroll = function(){
    if(window.pageYOffset <= 70){
        navbar.classList.add("bg-transparent");
        navbar.classList.add("sm:py-[1.25vw]");
        navbar.classList.add("py-5");
        mobileNav.classList.add("top-20");
        hamburger.classList.add("top-9");
        navbar.classList.remove("bg-white/[.85]");
        navbar.classList.remove("shadow");
        navbar.classList.remove("py-3");
        mobileNav.classList.remove("top-[3.75rem]");
        hamburger.classList.remove("top-7");
    } else {
        navbar.classList.add("bg-white/[.85]");
        navbar.classList.add("shadow");
        navbar.classList.add("py-3");
        mobileNav.classList.add("top-[3.75rem]");
        hamburger.classList.add("top-7");
        navbar.classList.remove("bg-transparent");
        navbar.classList.remove("sm:py-[1.25vw]");
        navbar.classList.remove("py-5");
        mobileNav.classList.remove("top-20");
        hamburger.classList.remove("top-9");
    }
}

const observer = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            // entry.target.classList.toggle("text-center", entry.isIntersecting);
            if(entry.isIntersecting) {
                activatelink(entry.target.classList[1]);
                // observer.unobserve(entry.target)
            }
        })
    }, {
        threshold: .15,
    }
)

const observer2 = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                footer.classList.add("fixed");
            } else {
                // console.log(entry.isIntersecting);
                footer.classList.remove("fixed");
            }
        })
    }
)


function activatelink(linkPos) {
    links.forEach(linkName => {
        if(linkName.classList.contains(linkPos)) {
            linkName.classList.add("text-zinc-600");
            linkName.classList.add("before:visible");
            linkName.classList.add("before:w-8");
            linkName.classList.remove("text-zinc-400");
            linkName.classList.remove("before:invisible");
            linkName.classList.remove("before:w-0")
        }
        else {
            linkName.classList.add("text-zinc-400");
            linkName.classList.add("before:invisible");
            linkName.classList.add("before:w-0");
            linkName.classList.remove("text-zinc-600");
            linkName.classList.remove("before:visible");
            linkName.classList.remove("before:w-8")
        }
    })
}

sections.forEach(card => {
    observer.observe(card);
});



// observer2.observe(footerObserver);
