const aboutMe = document.getElementById('about-me');

const aboutObserver = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            console.log(entry.isIntersecting);
            entry.target.classList.toggle("translate-x-20", entry.isIntersecting);
            // if(entry.isIntersecting) {
            // }
        })
    }, {
        threshold: .7,
    }
)

aboutObserver.observe(aboutMe);