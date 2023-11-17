<?php
if (session_id() == '') {
    session_start();
}
?>
<!DOCTYPE html>
<html class=" overflow-x-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mark Arjay Guilang</title>
    <link href="output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/aos/dist/aos.css" rel="stylesheet">
	<link rel="icon" type="jpg/png" href="images/logo1111.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
   
</head>

<body class="relative m-0 p-0 font-crimson overflow-x-clip">
    <nav class="navbar fixed w-screen py-5 sm:py-[1.25vw] px-7 lg:px-[1.75vw] z-[60] transition-all duration-500">
        <div class="grid grid-cols-2 lg:grid-cols-3 ">
            <div class="col-auto lg:flex items-center">
                <a href="#" class=" flex-shrink tracking-normal md:tracking-widest text-3xl lg:text-[2.25vw] text-zinc-600 font-black">GMAO</a>
            </div>
            <div class="col-auto text-zinc-600 text-right lg:flex justify-center items-center">
                <button id="nav-btn" class="text-3xl cursor-pointer lg:hidden w-7 h-7">
                    <div id="hamburger" class="bg-zinc-600 rounded absolute w-7 h-1 top-9 sm:top-7 -mt-0.5 transition-all duration-500
                            before:content-[''] before:bg-zinc-600 before:rounded before:absolute before:w-7 before:h-1 before:-translate-x-3.5 
                            before:-translate-y-2.5 before:transition-all before:duration-500 
                            after:content-[''] after:bg-zinc-600 after:rounded after:absolute after:w-7 after:h-1 after:-translate-x-3.5 
                            after:translate-y-2.5 after:transition-all after:duration-500 ">
                    </div>
                </button>
                <div class="hidden lg:flex justify-center items-center">
                    <ul class="flex text-center">
                        <li class="mx-5 relative">
                            <a class="section-links home 
                            font-extrabold text-lg 2xl:text-[1.125vw] text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out before:left-0" href="#home" onclick="lenis.scrollTo('#home')">
                                <small class="flex gap-2"><span class=" text-emerald-400">01</span>Home</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links about
                            font-semibold text-lg 2xl:text-[1.125vw] text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out before:left-0" href="#about" onclick="lenis.scrollTo('#about')">
                                <small class="flex gap-2"><span class=" text-emerald-400">02</span>About</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links project
                            font-semibold text-lg 2xl:text-[1.125vw] text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out before:left-0" href="#project" onclick="lenis.scrollTo('#project')">
                                <small class="flex gap-2"><span class=" text-emerald-400">03</span>Projects</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links contact
                            font-semibold text-lg 2xl:text-[1.125vw] text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out before:left-0" href="#contact" onclick="lenis.scrollTo('#contact')">
                                <small class="flex gap-2"><span class=" text-emerald-400">04</span>Contact</small>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-auto hidden lg:flex justify-end items-center">
                <div class="social-links relative text-3xl 2xl:text-[1.875vw]">
                    <a href="resume/Mark Arjay O. Guilang.pdf" target="_blank" rel="noopener noreferrer" class="resume">
                        <div class="absolute text-[.85vw] top-[2.75vw] -left-[.75vw] bg-emerald-300 px-[.75vw] py-[.25vw] rounded animate-cv-shake opacity-0 pointer-events-none">
                            <span>Resume</span>
                        </div>
                        <i class="bx bxs-file-pdf text-zinc-600 px-2 py-2 rounded-full transition-color duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i>
                    </a>
                    <a href="https://github.com/MarkGuil" target="_blank" rel="noopener noreferrer" class="github">
                        <i class="bx bxl-github text-zinc-600 px-2 py-2 rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i>
                    </a>
                    <a href="mailto:guilangmarkarjay@gmail.com" class="google-plus">
                        <i class="bx bxs-envelope text-zinc-600 px-2 py-2 rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/mark-arjay-guilang/" target="_blank" rel="noopener noreferrer" class="linkedin">
                        <i class="bx bxl-linkedin-square text-zinc-600 px-2 py-2 rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i>
                    </a>
                </div>
            </div>
            <div id="nav-menu" class="absolute z-[60] bg-white text-zinc-900 top-16 sm:top-12 left-0 text-4xl sm:text-3xl w-full flex-col justify-center origin-top animate-nav-bounce hidden lg:hidden transition-all duration-500">
                <div class="relative min-h-screen h-fit flex flex-col items-center py-7 sm:py-3" aria-label="mobile">
                    <a href="#home" onclick="lenis.scrollTo('#home')" class="w-full text-center py-5 sm:py-2 hover:opacity-75">Home</a>
                    <a href="#about" onclick="lenis.scrollTo('#about')" class="w-full text-center py-5 sm:py-2 hover:opacity-75">About</a>
                    <a href="#project" onclick="lenis.scrollTo('#project')" class="w-full text-center py-5 sm:py-2 hover:opacity-75">Projects</a>
                    <a href="#contact" onclick="lenis.scrollTo('#contact')" class="w-full text-center py-5 sm:py-2 hover:opacity-75">Contact</a>
                    <div class="social-links absolute bottom-32 sm:bottom-16 text-4xl sm:text-3xl">
                        <a href="resume/Mark Arjay O. Guilang.pdf" target="_blank" rel="noopener noreferrer" class="resume">
                            <i class="bx bxs-file-pdf text-zinc-600 px-2 py-2 rounded-full transition-color duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i>
                        </a>
                        <a href="https://github.com/MarkGuil" target="_blank" rel="noopener noreferrer" class="github">
                            <i class="bx bxl-github text-zinc-600 px-2 py-2 rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i>
                        </a>
                        <a href="mailto:guilangmarkarjay@gmail.com" class="google-plus">
                            <i class="bx bxs-envelope text-zinc-600 px-2 py-2 rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/mark-arjay-guilang/" target="_blank" rel="noopener noreferrer" class="linkedin">
                            <i class="bx bxl-linkedin-square text-zinc-600 px-2 py-2 rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </nav>

    <section id="home" class="sect home relative h-fit sm:min-h-screen sm:max-h-fit flex justify-center items-center bg-cover bg-home-large text-zinc-900 z-20">

        <div class="grid grid-cols-8 gap-8 h-full py-56 sm:py-[10vw] px-[1.25vw] ">

            <div class="col-start-2 col-span-6 md:col-start-2 md:col-span-6 2xl:col-start-3 2xl:col-span-4 flex justify-center items-center ">
                <div class="animate-zoom-in text-zinc-600 text-center">
                    <h1 class="text-2xl sm:text-3xl 2xl:text-[1.875vw] font-semibold md:font-normal
                    before:content-[''] lg:before:w-[5vw] before:h-px before:bg-zinc-400 before:inline-block before:mt-1 before:ml-2
                    after:content-[''] lg:after:w-[5vw] after:h-px after:bg-zinc-400 after:inline-block after:mt-1 after:mr-2
                    ">
                        Hello! My name is
                    </h1>

                    <div class="relative mt-1 sm:mt-4 md:mt-7 lg:mt-[2vw] ">
                        <svg class="block stroke-zinc-700 stroke-2 fill-transparent animate-stroke-dashoffset scale-120 sm:scale-110 md:scale-100 lg:scale-100 h-44 sm:h-52 md:h-72 2xl:h-[19vw]" width="100%" preserveAspectRatio="xMidYMid meet" x="0" y="0" viewBox="-13 38 630 10">
                            <text x="0" y="0" class="text-9xl font-allura">Mark Arjay</text>
                            <text x="100" y="120" class="text-9xl font-allura">Guilang</text>
                        </svg>
                    </div>

                    <h2 class="text-2xl sm:text-3xl 2xl:text-[1.875vw] font-normal mt-1 sm:mt-4 md:mt-6 lg:mt-[2vw] ">I am a Web Developer</h2>
                </div>
            </div>

            <svg class="wave-group absolute block bottom-0 left-0 w-full h-16 z-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" class="" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" shape-rendering="auto">
                </defs>
                <g class="animate-wave1">
                    <use xlink:href="#wave-path" x="50" y="3" fill="rgba(0,0,0, .1)" shape-rendering="optimizeQuality">
                </g>
                <g class="animate-wave2">
                    <use xlink:href="#wave-path" x="50" y="0" fill="rgba(135,135,135, .2)" shape-rendering="optimizeQuality">
                </g>
                <g class="animate-wave3">
                    <use xlink:href="#wave-path" x="50" y="7" fill="#fff" shape-rendering="optimizeQuality">
                </g>
            </svg>
        </div>
    </section>

    <section id="about" class="sect about about-section relative min-h-screen text-center sm:text-left bg-white flex justify-center items-center z-20">
        <div class="relative h-full py-12 md:py-10 lg:py-0 px-7 md:px-20 lg:px-[7vw] flex justify-start lg:justify-center items-center">
            <div class="py-20 lg:py-0 px-2 ">
                <h3 id="about-me" class="absolute -left-0 sm:-left-32 lg:-left-32 -top-16 sm:-top-0 lg:-top-40  px-3 w-10 break-words4 md:translate-x-3/4 lg:translate-x-3/4 sm:w-fit sm:break-normal pointer-events-none z-0 text-[5rem] sm:text-[6rem] lg:text-[13vw] leading-none sm:leading-normal  scale-125 font-bold text-zinc-400 before:content-['About'] before:rounded before:absolute 
                    before:-translate-x-1 md:before:-translate-x-4 before:font-outline-2 before:text-transparent before:-translate-y-1 
                    md:before:-translate-y-3 before:transition-all before:duration-500 transition-opacity duration-300 opacity-0
                    before:w-10 before:break-words before:sm:w-fit before:sm:break-normal">
                    About
                </h3>
                <h3 id="about-me-desc" class="relative px-2 sm:px-3 translate-x-[130%] sm:translate-x-full md:translate-x-1/4 lg:translate-x-1/4 text-zinc-700 text-3xl sm:text-2xl lg:text-[2.50vw]  
                    tracking-wider font-black z-10 leading-loose sm:leading-relaxed lg:leading-relaxed 3xl:leading-relaxed 
                    text-justify transition-opacity duration-300 opacity-0">
                    I am a web developer that is passionate in developing robust and responsive
                    web applications and is excited to bring my skills and experience to new challenges.
                </h3>
            </div>

        </div>
    </section>
    
    <section id="about" class="sect about skill-section relative h-fit text-center sm:text-left bg-skill-large bg-cover bg-fixed overflow-hidden">
        <div class="relative">
            <div class="relative z-10 w-full">
                <div id="skill-1" class="skill-1 bg-zinc-400 w-full shadow origin-center absolute -rotate-[35deg] scale-150 -translate-x-3/4 translate-y-96 inset-x-0 -top-44 md:-top-28 overflow-hidden">
                    <span class="tracking-wide text-6xl sm:text-[4.5vw] text-black truncate text-clip ">
                        SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS
                    </span>
                </div>
                <div id="skill-2" class="skill-2 bg-zinc-200 w-full shadow origin-top-left absolute rotate-45 scale-150 -translate-x-3/4 sm:-translate-x-1/4 -translate-y-80 inset-x-0 -top-96 overflow-hidden">
                    <span class="tracking-wide text-6xl sm:text-[4.5vw] text-black truncate text-clip ">
                        SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS
                    </span>
                </div>
                <div id="skill-3" class="skill-3 bg-white w-full shadow origin-bottom-right absolute -rotate-12 scale-150 translate-x-full  right-0 top-28 overflow-hidden">
                    <span class="tracking-wide text-6xl sm:text-[4.5vw] text-black truncate text-clip ">
                        SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS
                    </span>
                </div>
                <div id="skill-4" class="skill-4 bg-white w-full shadow origin-right rotate-12 absolute scale-150 -translate-x-3/4 sm:-translate-x-20 inset-x-0 top-96 overflow-hidden">
                    <span class="tracking-wide text-6xl sm:text-[4.5vw] text-black truncate text-clip ">
                        SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS
                    </span>
                </div>
                <div id="skill-5" class="skill-5 bg-zinc-300 w-full shadow origin-bottom-right absolute -rotate-45 scale-150 translate-x-3/4 sm:translate-x-1/4 -right-56 sm:right-0 top-28 sm:-top-28 overflow-hidden">
                    <span class="tracking-wide text-6xl sm:text-[4.5vw] text-black truncate text-clip ">
                        SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS
                    </span>
                </div>
            </div>
            <div class="bg-[#064e3b]/80 z-20 relative">

                <div class="relative grid grid-cols-7 gap-3 lg:gap-8 h-full py-3 md:py-8 px-5 lg:px-[4vw] ">

                    <div class="relative col-start-1 col-span-7 text-start pt-24 pb-36 md:py-24 lg:py-[8vw]  px-2 md:px-[2.25vw]">
                        <div class="py-[2.5vw]">

                            <div class="grid grid-cols-3 md:grid-cols-5 lg:grid-cols-5 gap-2 text-white text-5xl md:text-6xl lg:text-[4.5vw] mt-0 md:mb-10 md:mt-5 lg:mt-0 lg:mb-[3.5vw]" data-aos="fade-left" data-aos-delay="50">

                                <div class="col-auto lg:mt-[1vw]">
                                    <div class="icon-box p-5 sm:p-[1.25vw] flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="50">
                                        <i class="devicon-html5-plain drop-shadow-xl rounded p-2 sm:p-[.5vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-[1vw]">
                                    <div class="icon-box p-5 sm:p-[1.25vw] flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="100">
                                        <i class="devicon-css3-plain drop-shadow-xl rounded p-2 sm:p-[.5vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-[1vw]">
                                    <div class="icon-box p-5 sm:p-[1.25vw] flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="150">
                                        <i class="devicon-javascript-plain drop-shadow-xl rounded p-2 sm:p-[.5vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-[1vw]">
                                    <div class="icon-box p-5 sm:p-[1.25vw] flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="200">
                                        <i class="devicon-jquery-plain-wordmark drop-shadow-xl rounded p-2 sm:p-[.5vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-[1vw]">
                                    <div class="icon-box p-5 sm:p-[1.25vw] flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="250">
                                        <i class="devicon-php-plain drop-shadow-xl rounded p-2 sm:p-[.5vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-[1vw]">
                                    <div class="icon-box p-5 sm:p-[1.25vw] flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="300">
                                        <i class="devicon-mysql-plain-wordmark drop-shadow-xl rounded p-2 sm:p-[.5vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-[1vw]">
                                    <div class="icon-box p-5 sm:p-[1.25vw] flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="350">
                                        <i class="devicon-laravel-plain-wordmark drop-shadow-xl rounded p-2 sm:p-[.5vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-[1vw]">
                                    <div class="icon-box p-5 sm:p-[1.25vw] flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="400">
                                        <i class="devicon-bootstrap-plain-wordmark drop-shadow-xl rounded p-2 sm:p-[.5vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-[1vw]">
                                    <div class="icon-box p-5 sm:p-[1.25vw] flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="450">
                                        <i class="devicon-tailwindcss-plain drop-shadow-xl rounded p-2 sm:p-[.5vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-[1vw]">
                                    <div class="icon-box p-5 sm:p-[1.25vw] flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="500">
                                        <i class="devicon-java-plain-wordmark drop-shadow-xl rounded p-2 sm:p-[.5vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <img src="images/skills-bg/torn-1-mins-min.png" class="absolute z-40 -top-2 left-0 sm:w-full h-44 sm:h-[11vw]" alt="">
                <img src="images/skills-bg/torn-2-mins-min.png" class="absolute z-40 -bottom-2 left-0 sm:w-full h-56 sm:h-[14vw]" alt="">
            </div>
        </div>
    </section>

    <section id="project" class="sect project relative bg-white h-fit z-30">
        <div id="project-section" class="px-5 md:px-20 lg:px-[7vw] py-10 md:py-14 lg:py-[6vw] relative h-full ">
            <div class="pt-10 sm:pt-[4vw] text-center" data-aos="fade-up">
                <h3 class="z-0 text-7xl md:text-[7vw] font-bold text-zinc-500 mb-4 transition-all
                    before:content-['Projects'] before:rounded before:absolute before:-translate-x-1 md:before:-translate-x-4 before:font-outline-2 before:text-transparent
                    before:-translate-y-1 md:before:-translate-y-3 before:transition-all before:duration-500 ">
                    Projects
                </h3>
            </div>
            <!-- <div class="grid grid-cols-2 sm:grid-cols-4 gap-0 w-full">
                <div class="col-auto h-60 w-60 lg:h-[23.5vw] lg:w-[23.5vw] flex justify-self-center">
                    <div class="relative h-full w-full">
                        <img src="images/pos/1.png" class="project-image absolute w-full drop-shadow-2xl opacity-0 rotate-6 -skew-y-[8deg] skew-x-6 transition-all duration-500 delay-100 ease-in-out" id="" alt="">
                    </div>
                </div>
                <div class="col-auto h-60 w-60 lg:h-[23.5vw] lg:w-[23.5vw] flex justify-self-center">
                    <div class="relative h-full w-full">
                        <img src="images/omnibus/1.png" class="project-image absolute w-full drop-shadow-2xl opacity-0 rotate-6 -skew-x-3 skew-y-3 transition-all duration-500 delay-200 ease-in-out" id="" alt="">
                    </div>
                </div>
                <div class="col-auto h-60 w-60 lg:h-[23.5vw] lg:w-[23.5vw] flex justify-self-center">
                    <div class="relative h-full w-full">
                        <img src="images/anishop/1.png" class="project-image absolute w-full drop-shadow-2xl opacity-0 rotate-6 skew-y-6 transition-all duration-500 delay-300 ease-in-out" id="" alt="">
                    </div>
                </div>
                <div class="col-auto h-60 w-60 lg:h-[23.5vw] lg:w-[23.5vw] flex justify-self-center">
                    <div class="relative h-full w-full">
                        <img src="images/quizam/1.png" class="project-image absolute w-full drop-shadow-2xl opacity-0 rotate-6 -skew-y-[10deg] skew-x-6 transition-all duration-500 delay-500 ease-in-out" id="" alt="">
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <section id="project" class="sect project relative bg-white h-fit z-30">
        <div class="pb-10 md:pb-14 lg:pb-[6vw] relative h-full">

            <div id="project1" class="relative flex flex-col lg:flex-row gap-4 sm:gap-[1vw] pt-20 sm:pt-[5vw] h-fit sm:h-[150rem] lg:h-[180vw]">
                <div id="projectImages" class="relative h-full w-full md:flex justify-start overflow-clip"">
                    
                    <div id="posDetails" class="sm:sticky sm:flex items-center sm:h-screen sm:w-[50vw] bg-white z-40 py-2 sm:py-0 px-4 top-0 text-zinc-600 text-xl sm:text-base 2xl:text-[1.2vw] sm:leading-[2.5vw] 2xl:leading-[1.85vw] transition-all duration-300 delay-300">
                        <img src="images/pos/pos-sm.png" class="w-full drop-shadow-xl block sm:hidden" id="myImg2" alt="">
                        <div id="posDesc" class=" px-5 py-5 sm:py-0 sm:px-[1.5vw] transition-all duration-300 sm:opacity-0 sm:-translate-x-16">
                            <!-- <div class="flex-auto items-end"> -->
                                <div class="flex justify-between items-center py-4 sm:py-3 2xl:py-[1vw]">
                                    <h3 class=" text-5xl sm:text-4xl 2xl:text-[3vw] font-bold text-emerald-600">Pos System</h3>
                                    <div class="flex gap-4">
                                        <div class="">
                                            <a href="https://quizam.markguilang.com/" target="_blank" rel="noopener noreferrer" class="text-white flex items-center py-2 sm:py-2 2xl:py-[.35vw] px-2 2xl:px-[.35vw] bg-emerald-400 rounded-full ">
                                                <i class='bx bx-link-external'></i>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="https://github.com/MarkGuil/Quizam-PUBLIC" target="_blank" rel="noopener noreferrer" class="text-white flex items-center py-2 sm:py-2 2xl:py-[.35vw] px-2 2xl:px-[.35vw] bg-emerald-400 rounded-full">
                                                <i class="devicon-github-original"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <p class="pb-5 sm:pb-3 2xl:pb-[1.15vw] font-bold italic">
                                    (Programmer, Developer, Designer)
                                </p>
                                <p class="pb-5 sm:pb-3 2xl:pb-[1.15vw] text-justify">
                                    A cloud-based point of sale system for small businesses. The system creates the intersection between sales, inventory management, payment processing, and customer management. This application allows customers to choose an option to pay a partial amount or pay later for their order.
                                </p>
                            <!-- </div> -->
                            <!-- <div class="flex-auto"> -->
                                <p class="pb-3 sm:pb-1 2xl:pb-[1.15vw]">
                                    Technologies:
                                </p>
                                <div class="grid grid-cols-3 md:grid-cols-4 gap-1 2xl:gap-[.25vw] text-5xl sm:text-3xl 2xl:text-[2.5vw]">
                                    <div class="col-auto ">
                                        <div class=" flex justify-center ">
                                            <i class="devicon-laravel-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                        </div>
                                    </div>
                                    <div class="col-auto ">
                                        <div class=" flex justify-center ">
                                            <i class="devicon-html5-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                        </div>
                                    </div>
                                    <div class="col-auto ">
                                        <div class=" flex justify-center ">
                                            <i class="devicon-css3-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                        </div>
                                    </div>
                                    <div class="col-auto ">
                                        <div class=" flex justify-center ">
                                            <i class="devicon-php-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                        </div>
                                    </div>
                                    <div class="col-auto ">
                                        <div class=" flex justify-center">
                                            <i class="devicon-jquery-plain-wordmark drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                        </div>
                                    </div>
                                    <div class="col-auto ">
                                        <div class=" flex justify-center ">
                                            <i class="devicon-javascript-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                        </div>
                                    </div>
                                    <div class="col-auto ">
                                        <div class=" flex justify-center">
                                            <i class="devicon-tailwindcss-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                        </div>
                                    </div>
                                    <div class="col-auto ">
                                        <div class=" flex justify-center">
                                            <i class="devicon-mysql-plain-wordmark drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                        </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <img src="images/pos/monitor1.png" id="projImage1" class=" w-[51rem] xl:w-[76vw] h-[29rem] xl:h-[38vw] absolute top-[15rem] lg:top-[15vw] 2xl:top-[10vw] -left-[10rem] lg:-left-[10vw] 2xl:-left-[18vw] hidden sm:block" alt=""> 
                    <img src="images/pos/monitor3.png" id="projImage2" class=" w-[51rem] xl:w-[76vw] h-[29rem] xl:h-[38vw] absolute bottom-[40rem] lg:bottom-[47vw] -left-[10rem] lg:left-[5rem] 2xl:-left-[11vw] hidden sm:block" alt=""> 
                    <img src="images/pos/monitor2.png" id="projImage3" class=" w-[51rem] xl:w-[76vw] h-[29rem] xl:h-[38vw] absolute bottom-[35rem] lg:bottom-[43vw] -right-[44rem] lg:-right-[40vw] 2xl:-right-[50vw] hidden sm:block" alt=""> 
                </div>
            </div>
            
            <div id="project2" class="relative flex flex-col sm:flex-row gap-4 sm:gap-[1vw] mt-20 sm:mt-[5vw] h-fit sm:h-[165rem] xl:h-[210vw]">
                <div id="omniImages" class="relative h-full w-full md:flex justify-start overflow-clip">

                    <div id="omniDetails" class="sm:sticky sm:flex items-center sm:h-screen sm:w-[50vw] bg-white z-40 py-2 sm:py-0 px-4 top-0 text-zinc-600 text-xl sm:text-base 2xl:text-[1.2vw] sm:leading-[2.5vw] 2xl:leading-[1.85vw] transition-all duration-300 delay-300">
                        <img src="images/omnibus/omnibus-sm.png" class="w-full drop-shadow-xl block sm:hidden" id="myImg1" alt="">
                        <div id="omniDesc" class="px-5 py-5 sm:py-0 sm:px-[1.5vw] transition-all duration-300 sm:opacity-0 sm:-translate-x-16">
                            <div class="flex justify-between items-center py-4 sm:py-3 2xl:py-[1vw]">
                                <h3 class=" text-5xl sm:text-4xl 2xl:text-[3vw] font-bold text-emerald-600">Omnibus</h3>
                                <div class="flex gap-4">
                                    <div class="">
                                        <a href="https://omnibus.markguilang.com/dist/" target="_blank" rel="noopener noreferrer" class="text-white flex items-center py-2 sm:py-2 2xl:py-[.35vw] px-2 2xl:px-[.35vw] bg-emerald-400 rounded-full ">
                                            <i class='bx bx-link-external'></i>
                                        </a>
                                    </div>
                                    <div class="">
                                        <a href="https://github.com/MarkGuil/Omnibus-PUBLIC" target="_blank" rel="noopener noreferrer" class="text-white flex items-center py-2 sm:py-2 2xl:py-[.35vw] px-2 2xl:px-[.35vw] bg-emerald-400 rounded-full">
                                            <i class="devicon-github-original"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="pb-5 sm:pb-3 2xl:pb-[1.125vw] font-bold italic">
                                (Programmer, Developer, Designer)
                            </p>
                            <p class="pb-5 sm:pb-3 2xl:pb-[1.125vw]  text-justify">
                                An online bus seat booking platform for point-to-point (P2P) buses.
                                This helps passengers to book bus tickets, upholding health safety protocols
                                that spaced out passengers to maintain social distancing.
                                The application envisioned to help improve the operations of P2P bus companies in terms of seat booking, e-ticket generation, management of terminals, terminal masters, conductors, drivers, buses, routes, trips, and bookings.
                            </p>
                            <p class="pb-3 sm:pb-1 2xl:pb-[1.15vw]">
                                Technologies:
                            </p>
                            <div class="grid grid-cols-3 md:grid-cols-4 gap-1 2xl:gap-[.25vw] text-5xl sm:text-3xl 2xl:text-[2.5vw]">
                                <div class="col-auto ">
                                    <div class=" flex justify-center  ">
                                        <i class="devicon-html5-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center ">
                                        <i class="devicon-css3-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center ">
                                        <i class="devicon-php-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center ">
                                        <i class="devicon-javascript-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center ">
                                        <i class="devicon-bootstrap-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center ">
                                        <i class="devicon-tailwindcss-original-wordmark drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center ">
                                        <i class="devicon-mysql-plain-wordmark drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center">
                                        <i class="devicon-java-plain-wordmark drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="images/omnibus/monitor1.png" id="omniImage1" class=" w-[54rem] xl:w-[79vw] h-[32rem] xl:h-[38vw] absolute top-[10rem] lg:top-[17vw] -right-[54rem] lg:-right-[75vw] hidden sm:block" alt="">
                    <img src="images/omnibus/monitor2.png" id="omniImage5" class=" w-[54rem] xl:w-[79vw] h-[32rem] xl:h-[38vw] absolute bottom-[50rem] lg:bottom-[65vw] 2xl:bottom-[82vw] -left-[20rem] lg:-left-[30vw] 2xl:-left-[40vw] hidden sm:block" alt="">
                    <img src="images/omnibus/phone1@4x.png" id="omniImage2" class="  w-[12rem] lg:w-[18vw] h-[43vw] lg:h-[34vw] absolute sm:top-[34rem] xl:top-[47vw] -right-[25vw] xl:-right-[21vw] hidden sm:block" alt="">
                    <img src="images/omnibus/phone2@4x.png" id="omniImage3" class=" w-[12rem] lg:w-[18vw] h-[43vw] lg:h-[34vw] absolute sm:top-[34rem] xl:top-[47vw] left-[22vw] xl:left-[18vw] hidden sm:block" alt="">
                    <img src="images/omnibus/phone3@4x.png" id="omniImage4" class=" w-[12rem] lg:w-[18vw] h-[43vw] lg:h-[34vw] absolute sm:bottom-[32rem] xl:bottom-[35vw] -right-[25vw] xl:-right-[21vw] hidden sm:block" alt="">
                </div>
            </div>

            <div id="project3" class="relative flex flex-col sm:flex-row gap-4 sm:gap-[1vw] mt-20 sm:mt-[5vw] h-fit sm:h-[165rem] lg:h-[210vw]">
                <div id="quizImages" class="relative h-full w-full  md:flex justify-start overflow-clip">
                    
                    <div id="quizDetails" class="sm:sticky sm:flex items-center sm:h-screen sm:w-[50vw] bg-white z-40 py-2 sm:py-0 px-4 top-0 text-zinc-600 text-xl sm:text-base 2xl:text-[1.2vw] sm:leading-[2.5vw] 2xl:leading-[1.85vw] transition-all duration-300 delay-300">
                        <img src="images/quizam/quizam-sm.png" class="w-full drop-shadow-xl block sm:hidden" id="myImg2" alt="">
                        <div id="quizDesc" class="px-5 py-5 sm:py-0 sm:px-[1.5vw] transition-all duration-300 sm:opacity-0 sm:-translate-x-16">
                            <div class="flex justify-between items-center py-4 sm:py-3 2xl:py-[1vw]">
                                <h3 class=" text-5xl sm:text-4xl 2xl:text-[3vw] font-bold text-emerald-600">Quizam</h3>
                                <div class="flex gap-4">
                                    <div class="">
                                        <a href="https://quizam.markguilang.com/" target="_blank" rel="noopener noreferrer" class="text-white flex items-center py-2 sm:py-2 2xl:py-[.35vw] px-2 2xl:px-[.35vw] bg-emerald-400 rounded-full ">
                                            <i class='bx bx-link-external'></i>
                                        </a>
                                    </div>
                                    <div class="">
                                        <a href="https://github.com/MarkGuil/Quizam-PUBLIC" target="_blank" rel="noopener noreferrer" class="text-white flex items-center py-2 sm:py-2 2xl:py-[.35vw] px-2 2xl:px-[.35vw] bg-emerald-400 rounded-full">
                                            <i class="devicon-github-original"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="pb-5 sm:pb-3 2xl:pb-[1.125vw] font-bold italic">
                                (Programmer, Developer, Designer)
                            </p>
                            <p class="pb-5 sm:pb-3 2xl:pb-[1.125vw] text-justify">
                                An online based quiz/ exam system that is designed and built with anti cheating functions. Set-up the assessment to show one question at a time, prohibiting users to backtrack while taking the test and prohibits them to take the test multiple times.
                                This web application allows users to manage and conduct online assessments. 
                            </p>
                            <p class="pb-5 sm:pb-1 2xl:mt-[1.25vw]">
                                Technologies:
                            </p>
                            <div class="grid grid-cols-3 md:grid-cols-4 gap-1 2xl:gap-[.25vw] text-5xl sm:text-3xl 2xl:text-[2.5vw]">
                                <div class="col-auto ">
                                    <div class=" flex justify-center ">
                                        <i class="devicon-html5-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center ">
                                        <i class="devicon-css3-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center ">
                                        <i class="devicon-php-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center">
                                        <i class="devicon-jquery-plain-wordmark drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center ">
                                        <i class="devicon-javascript-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center">
                                        <i class="devicon-bootstrap-plain drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center">
                                        <i class="devicon-mysql-plain-wordmark drop-shadow-xl rounded-full p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="images/quizam/monitor1.png" id="quizImage1" class=" w-[54rem] xl:w-[79vw] h-[32rem] xl:h-[38vw] absolute top-[10rem] lg:top-[17vw] -right-[54rem] lg:-right-[75vw] hidden sm:block" alt="">
                    <img src="images/quizam/monitor2.png" id="quizImage5" class=" w-[54rem] xl:w-[79vw] h-[32rem] xl:h-[38vw] absolute bottom-[50rem] lg:bottom-[65vw] 2xl:bottom-[82vw] -left-[20rem] lg:-left-[30vw] 2xl:-left-[40vw] hidden sm:block" alt="">
                    <img src="images/quizam/phone42.png" id="quizImage2" class=" w-52 lg:w-[18vw] h-[43vw] lg:h-[34vw] absolute sm:top-[34rem] xl:top-[47vw] -right-[25vw] xl:-right-[21vw] hidden sm:block" alt="">
                    <img src="images/quizam/phone12.png" id="quizImage3" class=" w-52 lg:w-[18vw] h-[43vw] lg:h-[34vw] absolute sm:top-[34rem] xl:top-[47vw] left-[22vw] xl:left-[18vw] hidden sm:block" alt="">
                    <img src="images/quizam/phone22.png" id="quizImage4" class=" w-52 lg:w-[18vw] h-[43vw] lg:h-[34vw] absolute sm:bottom-[32rem] xl:bottom-[35vw] -right-[25vw] xl:-right-[21vw] hidden sm:block" alt="">
                </div>
            </div>
            
            <div id="project4" class="relative flex flex-col sm:flex-row gap-4 sm:gap-[1vw] mt-20 sm:mt-[5vw] h-fit sm:h-[140rem] lg:h-[190vw]">
                <div id="aniImages" class="relative h-full w-full md:flex justify-start overflow-clip">
                    <div id="aniDetails" class="sm:sticky sm:flex items-center sm:h-screen sm:w-[50vw] bg-white z-40 py-2 px-4 top-0 text-zinc-600 text-xl sm:text-base 2xl:text-[1.2vw] sm:leading-[2.5vw] 2xl:leading-[1.85vw] transition-all duration-300 delay-300">
                        <img src="images/anishop/anishop-sm.png" class="w-full drop-shadow-xl block sm:hidden" id="myImg3" alt="">
                        <div id="aniDesc" class="px-5 py-5 sm:py-0 sm:px-[1.5vw] transition-all duration-300 sm:opacity-0 sm:-translate-x-16">
                            <div class="flex justify-between items-center py-4 sm:py-3 2xl:py-[1vw]">
                                <h3 class=" text-5xl sm:text-4xl 2xl:text-[3vw] font-bold text-emerald-600">Anishop</h3>
                                <div class="flex gap-4">
                                    <div class="">
                                        <a href="https://anishop.markguilang.com/" target="_blank" rel="noopener noreferrer" class="text-white flex items-center py-2 sm:py-2 2xl:py-[.35vw] px-2 2xl:px-[.35vw] bg-emerald-400 rounded-full ">
                                            <i class='bx bx-link-external'></i>
                                        </a>
                                    </div>
                                    <div class="">
                                        <a href="https://github.com/MarkGuil/e-commerce-shop" target="_blank" rel="noopener noreferrer" class="text-white flex items-center py-2 sm:py-2 2xl:py-[.35vw] px-2 2xl:px-[.35vw] bg-emerald-400 rounded-full">
                                            <i class="devicon-github-original"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="pb-5 sm:pb-3 2xl:pb-[1.125vw] font-bold italic">
                                (Programmer, Developer)
                            </p>
                            <p class="pb-5 sm:pb-3 2xl:pb-[1.125vw]  text-justify">
                                An e-commerce website, where anime fans can find all the products they need to show their love for their
                                favorite anime! Providing a vast selection of high-quality anime-related products,
                                from clothing to accessories and much more. The website features a design that reflects the anime aesthetic
                                and style, while still being easy to navigate.
                            </p>
                            <p class="pb-3 sm:pb-1 2xl:mt-[1.125vw]">
                                Technologies:
                            </p>
                            <div class="grid grid-cols-3 md:grid-cols-4 gap-1 2xl:gap-[.25vw] text-5xl sm:text-3xl 2xl:text-[2.5vw]">
                                <div class="col-auto">
                                    <div class=" flex justify-center  ">
                                        <i class="devicon-html5-plain drop-shadow-xl rounded-full p-4 sm:pb-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center  ">
                                        <i class="devicon-css3-plain drop-shadow-xl rounded-full p-4 sm:pb-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center ">
                                        <i class="devicon-php-plain drop-shadow-xl rounded-full p-4 sm:pb-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center ">
                                        <i class="devicon-javascript-plain drop-shadow-xl rounded-full p-4 sm:pb-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center ">
                                        <i class="devicon-bootstrap-plain drop-shadow-xl rounded-full p-4 sm:pb-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <div class=" flex justify-center ">
                                        <i class="devicon-mysql-plain-wordmark drop-shadow-xl rounded-full p-4 sm:pb-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="images/anishop/monitor1.png" id="aniImage1" class=" w-[54rem] xl:w-[79vw] h-[32rem] xl:h-[38vw] absolute top-[10rem] lg:top-[15vw] -right-[54rem] lg:-right-[75vw] hidden sm:block" alt="">
                    <img src="images/anishop/monitor2.png" id="aniImage4" class=" w-[54rem] xl:w-[79vw] h-[32rem] xl:h-[38vw] absolute bottom-[40rem] lg:bottom-[44vw] 2xl:bottom-[54vw] -right-[40rem] xl:-right-[60vw] hidden sm:block" alt="">
                    <div id="" class="absolute flex gap-16 lg:gap-28 sm:top-[74rem] lg:top-[68rem] xl:top-[95vw] left-[4rem] lg:left-[14vw]">
                        <img src="images/anishop/phone22.png" id="aniImage3" class=" rotate-[30deg] w-55 lg:w-[24vw] h-[40vw] lg:h-[34vw] hidden sm:block drop-shadow-xl" alt="">
                        <img src="images/anishop/phone12.png" id="aniImage2" class=" rotate-[30deg] w-55 lg:w-[24vw] h-[40vw] lg:h-[34vw] hidden sm:block drop-shadow-xl" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact s10 relative bg-white h-fit overflow-x-hidden z-30">
        <div class="px-7 md:px-20 lg:px-[10vw] pb-10 md:pb-14 lg:pb-[7vw] pt-10 sm:pt-[2.5vw] relative h-full">

            <div class="sm:pb-10" data-aos="fade-up">
                <h3 class="z-0 text-7xl md:text-[6vw] font-bold text-zinc-500 transition-all
                    before:content-['Contact'] before:rounded before:absolute before:-translate-x-1 md:before:-translate-x-4 before:font-outline-2 before:text-transparent
                    before:-translate-y-1 md:before:-translate-y-3 before:transition-all before:duration-500 
                    after:content-[''] after:absolute after:left-32 lg:after:left-40 after:bottom-1 sm:after:bottom-12 after:w-36 md:after:w-[18vw] after:h-px after:bg-emerald-400 after:inline-block after:mt-1 after:mr-2">
                    Contact
                </h3>
            </div>

            <div class="lg:grid grid-cols-12 gap-4">

                <div class="col-start-1 col-span-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="font-bold text-zinc-600 lg:text-[1.25vw]">

                        <div class="">
                            <div class="float-left w-16 sm:w-[3.5vw] h-16 sm:h-[3.5vw] text">
                                <div class="flex justify-center items-center w-16 sm:w-[3.5vw] h-full rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                    <i class="bx bx-map text-2xl sm:text-[2vw]"></i>
                                </div>
                            </div>
                            <h4 class="ml-0 lg:ml-[5vw] mb-2 sm:mb-[.5vw] mt-3 md:mt-0 lg:mt-0 font-bold text-2xl lg:text-[1.875vw] lg:leading-[2.25vw]"><a href="" class="transition duration-75 ease-in-out hover:text-emerald-300">Location:</a></h4>
                            <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-[5vw] text-sm lg:text-[1.125vw] leading-6">Rosales, Pangasinan</p>
                        </div>

                        <div class="mt-10 sm:mt-[2.5vw]">
                            <div class="float-left w-16 sm:w-[3.5vw] h-16 sm:h-[3.5vw] text">
                                <div class="flex justify-center items-center w-16 sm:w-[3.5vw] h-full rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                    <i class="bx bx-envelope text-2xl sm:text-[2vw]"></i>
                                </div>
                            </div>
                            <h4 class="ml-0 lg:ml-[5vw] mb-2 sm:mb-[.5vw] mt-3 md:mt-0 lg:mt-0 font-bold text-2xl lg:text-[1.875vw] lg:leading-[2.25vw]"><a href="" class="transition duration-75 ease-in-out hover:text-emerald-300">Email:</a></h4>
                            <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-[5vw] text-sm lg:text-[1.125vw] leading-6">guilangmarkarjay@gmail.com</p>
                        </div>

                        <div class="mt-10 sm:mt-[2.5vw]">
                            <div class="float-left w-16 sm:w-[3.5vw] h-16 sm:h-[3.5vw] text">
                                <div class="flex justify-center items-center w-16 sm:w-[3.5vw] h-full rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                    <i class="bx bx-phone text-2xl sm:text-[2vw]"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="ml-0 lg:ml-[5vw] mb-2 sm:mb-[.5vw] mt-3 md:mt-0 lg:mt-0 font-bold text-2xl lg:text-[1.875vw] lg:leading-[2.25vw]"><a href="" class="transition duration-75 ease-in-out hover:text-emerald-300">Call:</a></h4>
                                <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-[5vw] text-sm lg:text-[1.125vw] leading-6">+63 929 605 0070</p>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-start-5 col-span-12 mt-7 lg:mt-0" data-aos="fade-left" data-aos-delay="200">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form text-sm sm:text-[.875vw]" autocomplete="on">
                        <div class="grid grid-cols-2">
                            <div class="col-auto form-group w-full pb-3 sm:pb-[.75vw] px-2 sm:px-[.5vw]">
                                <input type="text" name="name" class="h-11 w-full py-1 sm:py-[.75vw] px-3 sm:px-[.75vw] border border-zinc-300 focus:outline-none focus:ring focus:ring-emerald-300 focus:border-emerald-300 " id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-auto form-group w-full pb-3 sm:pb-[.75vw] px-2 sm:px-[.5vw]">
                                <input type="email" class="h-11 w-full py-1 sm:py-[.75vw] px-3 sm:px-[.75vw] border border-zinc-300 focus:outline-none focus:ring focus:ring-emerald-300 focus:border-emerald-300" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group w-full pb-3 sm:pb-[.75vw] px-2 sm:px-[.5vw] mt-3 sm:mt-[.75vw]">
                            <input type="text" class="form-control h-11 w-full py-1 sm:py-[.75vw] px-3 sm:px-[.75vw] border border-zinc-300 focus:outline-none focus:ring focus:ring-emerald-300 focus:border-emerald-300" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group w-full pb-2 sm:pb-[.5vw] px-2 sm:px-[.5vw] mt-3 sm:mt-[.75vw]">
                            <textarea class="form-control w-full max-h-60 py-1 sm:py-[.75vw] px-3 sm:px-[.75vw] border border-zinc-300 focus:outline-none focus:ring focus:ring-emerald-300 focus:border-emerald-300" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit-contact-form" class="btn-get-started scrollto py-2 md:py-[.75vw] px-7 sm:px-[1.75vw] bg-emerald-400 rounded-full text-white lg:text-[1vw]">Send Message</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>

    <script defer src="script/app.js"></script>
    <script defer src="script/anav.js"></script>
    <script defer src="script/observer.js"></script>
    <script src="vendor/aos/dist/aos.js"></script>
    <script src="vendor/sweetalert/sweetalert2.all.min.js"></script>
    <script src="vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="vendor/lenis/lenis.js"></script>
    <script defer src="script/scroll.js"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    </script>
    <?php
    if (isset($_SESSION['form_title']) && $_SESSION['form_title'] != '') {
    ?>
        <script>
            Toast.fire({
                icon: "<?php echo $_SESSION['form_icon'] ?>",
                text: "<?php echo $_SESSION['form_message'] ?>"
            })
        </script>

    <?php
        unset($_SESSION['form_title']);
    }
    ?>

    <script>
        AOS.init();
        new PureCounter();
        gsap.registerPlugin(ScrollTrigger);

    </script>
</body>

</html>