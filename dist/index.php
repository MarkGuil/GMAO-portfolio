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
    <link href="vendor/remixIcon/fonts/remixicon.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/locomotive-scroll/locomotive-scroll.min.css" rel="stylesheet">
	<link rel="icon" type="jpg/png" href="images/logo1111.png">
   
</head>

<body class="relative m-0 p-0 font-crimson overflow-x-hidden">
    <nav class="navbar fixed w-screen py-5 sm:py-[1.25vw] px-7 lg:px-[1.75vw] z-[60] transition-all duration-500 ">
        <div class="grid grid-cols-2 lg:grid-cols-3 ">
            <a class="col lg:flex items-center" href="#">
                <span class=" tracking-normal md:tracking-widest text-3xl md:text-[2.25vw] text-zinc-600 font-molle font-black">GMAO</span>
            </a>
            <div class="col text-zinc-600 text-right lg:flex justify-center items-center">
                <button id="nav-btn" class="text-3xl cursor-pointer lg:hidden w-7 h-7">
                    <div id="hamburger" class="bg-zinc-600 rounded absolute w-7 h-1 top-9 -mt-0.5 transition-all duration-500
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
                            font-extrabold text-lg 3xl:text-[1.25vw] text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#home" onclick="lenis.scrollTo('#home')">
                                <small><span class=" text-emerald-400">01</span> Home</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links about
                            font-semibold text-lg 3xl:text-[1.25vw] text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#about" onclick="lenis.scrollTo('#about')">
                                <small><span class=" text-emerald-400">02</span> About</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links project
                            font-semibold text-lg 3xl:text-[1.25vw] text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#project" onclick="lenis.scrollTo('#project')">
                                <small><span class=" text-emerald-400">03</span> Projects</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links contact
                            font-semibold text-lg 3xl:text-[1.25vw] text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#contact" onclick="lenis.scrollTo('#contact')">
                                <small><span class=" text-emerald-400">04</span> Contact</small>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col hidden lg:flex justify-end items-center">
                <div class="social-links relative text-[1.875vw]">
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
            <div id="nav-menu" class="absolute z-[60] bg-white text-zinc-900 top-20 left-0 text-4xl w-full flex-col justify-center origin-top animate-nav-bounce hidden lg:hidden transition-all duration-500">
                <div class="relative min-h-screen flex flex-col items-center py-7" aria-label="mobile">
                    <a href="#home" onclick="lenis.scrollTo('#home')" class="w-full text-center py-5 hover:opacity-75">Home</a>
                    <a href="#about" onclick="lenis.scrollTo('#about')" class="w-full text-center py-5 hover:opacity-75">About</a>
                    <a href="#project" onclick="lenis.scrollTo('#project')" class="w-full text-center py-5 hover:opacity-75">Projects</a>
                    <a href="#contact" onclick="lenis.scrollTo('#contact')" class="w-full text-center py-5 hover:opacity-75">Contact</a>
                    <div class="social-links absolute bottom-32 text-4xl">
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

    <section id="home" class="sect home relative h-fit bg-cover bg-home-large text-zinc-900 z-20">

        <div class="grid grid-cols-8 gap-8 h-full py-40 lg:py-36 xl:py-[10vw] 3xl:py-[10vw] px-[1.25vw] ">

            <div class="col-start-2 col-span-6 md:col-start-2 md:col-span-6 lg:col-start-3 lg:col-span-4  ">
                <div class="animate-zoom-in text-zinc-600 text-center">
                    <h1 class="text-2xl lg:text-3xl 3xl:text-[2.25vw] font-semibold md:font-normal
                    before:content-[''] lg:before:w-20 3xl:before:w-40 before:h-px before:bg-zinc-400 before:inline-block before:mt-1 before:ml-2
                    after:content-[''] lg:after:w-20 3xl:after:w-40 after:h-px after:bg-zinc-400 after:inline-block after:mt-1 after:mr-2
                    ">
                        Hello! My name is
                    </h1>

                    <div class="relative mt-1 sm:mt-4 md:mt-7 lg:mt-8 3xl:mt-[3.75vw]">
                        <svg class="block stroke-zinc-700 stroke-2 fill-transparent animate-stroke-dashoffset scale-120 sm:scale-110 md:scale-110 lg:scale-100 3xl:scale-105 h-44 sm:h-52 md:h-72 lg:h-72 xl:h-80 3xl:h-[23vw] " width="100%" preserveAspectRatio="xMidYMid meet" x="0" y="0" viewBox="-13 38 630 10">
                            <text x="0" y="0" class="text-9xl font-allura">Mark Arjay</text>
                            <text x="100" y="120" class="text-9xl font-allura">Guilang</text>
                        </svg>
                    </div>

                    <h2 class="text-2xl  lg:text-3xl 3xl:text-[2.25vw] font-normal mt-1 sm:mt-4 md:mt-6 lg:mt-8 3xl:mt-[3.75vw]">I am a Web Developer</h2>
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

    <section id="about" class="sect about about-section relative h-fit lg:h-screen text-center sm:text-left bg-white lg:flex justify-center items-center z-20">
        <div class="relative h-full py-12 md:py-16 lg:py-0 px-7 md:px-20 lg:px-[7vw] flex justify-start lg:justify-center items-center">

            <div class="relative py-20 lg:py-0 px-2 ">
                <h3 id="about-me" class=" absolute -translate-x-1/2 pointer-events-none z-0 text-9xl md:text-[6rem] 
                    lg:text-[13vw] scale-125 font-bold text-zinc-400 before:content-['About'] before:rounded before:absolute 
                    before:-translate-x-1 md:before:-translate-x-4 before:font-outline-2 before:text-transparent before:-translate-y-1 
                    md:before:-translate-y-3 before:transition-all before:duration-500 opacity-0 transition-opacity duration-500">
                    About
                </h3>
                <h3 id="about-me-desc" class="relative translate-x-full mr-[.5vw] text-zinc-700 text-2xl md:text-[2.25vw]  
                    tracking-wider font-black z-10 leading-loose md:leading-loose lg:leading-relaxed 3xl:leading-relaxed 
                    text-justify opacity-0 transition-opacity duration-500">
                    I am a web developer that is passionate in developing robust and responsive
                    web applications and is excited to bring my skills and experience to new challenges.
                </h3>
            </div>

        </div>
    </section>
    
    <section id="about" class="sect about skill-section relative h-fit text-center sm:text-left bg-skill-large bg-cover bg-fixed overflow-hidden">
        <div>
            <div class="relative z-10 w-full">
                <div class="skill-1 bg-white w-full shadow origin-center fixed -rotate-[35deg] scale-150 -translate-x-full translate-y-96 inset-x-0 -top-44 md:top-0 overflow-hidden">
                    <span class="tracking-wide text-6xl sm:text-[4.5vw] text-black truncate text-clip ">
                        SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS
                    </span>
                </div>
                <div class="skill-2 bg-white w-full shadow origin-top-left absolute rotate-45 scale-150 -translate-x-1/2 -translate-y-60 inset-x-0 top-60 overflow-hidden">
                    <span class="tracking-wide text-6xl sm:text-[4.5vw] text-black truncate text-clip ">
                        SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS
                    </span>
                </div>
                <div class="skill-3 bg-white w-full shadow origin-bottom-right fixed -rotate-12 scale-150 translate-x-full  right-0 top-60 overflow-hidden">
                    <span class="tracking-wide text-6xl sm:text-[4.5vw] text-black truncate text-clip ">
                        SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS
                    </span>
                </div>
                <div class="skill-4 bg-white w-full shadow origin-right rotate-12 absolute scale-150 -translate-x-20  inset-x-0 top-96 overflow-hidden">
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
                <img src="images/skills-bg/torn-1-mins-min.png" class="absolute z-30 -top-2 left-0 md:w-full h-44 sm:h-[11vw]" alt="">
                <img src="images/skills-bg/torn-2-mins-min.png" class="absolute z-30 -bottom-2 left-0 md:w-full h-56 sm:h-[14vw]" alt="">
            </div>
        </div>
    </section>

    <section id="project" class="sect project relative bg-white h-fit z-30">
        <div class="px-5 md:px-20 lg:px-[7vw] pt-10 md:pt-14 lg:pt-[6vw] relative h-full ">
            <div class="pb-10" data-aos="fade-up">
                <h3 id="about-me" class="z-0 text-7xl md:text-[6vw] font-bold text-zinc-500 mb-4 transition-all
                    before:content-['Projects'] before:rounded before:absolute before:-translate-x-1 md:before:-translate-x-4 before:font-outline-2 before:text-transparent
                    before:-translate-y-1 md:before:-translate-y-3 before:transition-all before:duration-500 
                    after:content-[''] after:absolute after:left-32 md:after:left-40 after:bottom-16 after:w-36 md:after:w-72 after:h-px after:bg-emerald-400 after:inline-block after:mt-1 after:mr-2">
                    Projects
                </h3>
            </div>
        </div>
    </section>

    <section id="project" class="sect project relative bg-white h-fit z-30">
        <div class="px-5 md:px-20 lg:px-[7vw]  pb-10 md:pb-14 lg:pb-[6vw] relative h-full">

            <div class="relative grid grid-cols-12 gap-4 sm:gap-[1vw]">

                <div class="relative col-start-1 col-span-12  lg:col-span-5 flex justify-center lg:justify-start items-center px-2 md:px-28 lg:px-[3vw]" data-aos="fade-left">
                    <img src="images/omnibus/screens.png" class="w-full drop-shadow-xl" id="myImg1" alt="">
                </div>
                <div class="relative col-start-1 col-span-12  lg:col-span-7 pt-[1vw] px-[1vw] text-zinc-600 text-lg sm:text-[1.2vw] sm:leading-[1.75vw] " data-aos="fade-up">

                    <!-- <div class="sticky inset-y-[12%]"> -->
                    <div class="inset-y-[12%]">
                        <h3 class="text-5xl sm:text-[3vw]  font-bold text-emerald-600 my-4 sm:my-[1vw]">Omnibus</h3>
                        <p class="pb-5 sm:pb-[1.25vw] font-bold italic">
                            (Programmer, Developer, Designer)
                        </p>
                        <p class="pb-5 sm:pb-[1.25vw]  text-justify">
                            An online bus seat booking platform for point-to-point (P2P) buses.
                            This helps passengers to book bus tickets, and upholding health safety protocols
                            that spaced out the passengers to maintain social distancing.
                            The application envisioned to help improve the operations of P2P bus companies in terms of seat booking and e-ticket generation.
                            This application has 4 users:
                        </p>
                        <ul>
                            <li class=" pb-4 sm:pb-[1vw]"><i class="bi bi-check text-emerald-400"></i> Company Admin - manages terminals, terminal masters, conductors, drivers, buses, routes, trips, and bookings. </li>
                            <li class="pb-4 sm:pb-[1vw]"><i class="bi bi-check text-emerald-400"></i> Terminal Master - can manage own trips and bookings for their terminal.</li>
                            <li class="pb-4 sm:pb-[1vw]"><i class="bi bi-check text-emerald-400"></i> Conductor - manages booked seats.</li>
                            <li class="pb-5 sm:pb-[1.25vw]"><i class="bi bi-check text-emerald-400"></i> Passenger - search trips, book and generate e-tickets.</li>
                        </ul>
                        <div class="text-lg sm:text-[1.125vw] mt-5 sm:mt-[1.25vw] mb-10 sm:mb-[2.5vw] md:inline-flex">
                            <div class="md:mr-2">
                                <a href="https://omnibus.markguilang.com/dist/" target="_blank" rel="noopener noreferrer" class="text-white py-2 sm:py-[.5vw] px-10 sm:px-[2.5vw] bg-emerald-400 rounded-full ">
                                    Open Live
                                </a>
                            </div>
                            <div class="mt-6 sm:mt-[2.5vw] md:mt-0">
                                <a href="https://github.com/MarkGuil/Omnibus-PUBLIC" target="_blank" rel="noopener noreferrer" class="text-white py-2 sm:py-[.5vw] px-10 sm:px-[2.5vw] bg-emerald-400 rounded-full">
                                    Github
                                </a>
                            </div>
                        </div>
                        <p class="mt-5 sm:mt-[1.25vw]">
                            Technologies:
                        </p>
                        <div class="mt-2 sm:mt-[.5vw] grid grid-cols-3 md:grid-cols-5 lg:grid-cols-6 gap-1 text-5xl sm:text-[3vw]">
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

            </div>

            <div class="relative grid grid-cols-12 gap-4 sm:gap-[1vw] mt-32 sm:mt-[8vw]">
                <div class="col-start-1 col-span-12  lg:col-span-7 pt-4 sm:pt-[1vw] px-4 sm:px-[1vw] text-zinc-600 text-xl sm:text-[1.2vw] sm:leading-[1.75vw] " data-aos="fade-up">
                    <!-- <div class="sticky inset-y-[18%]"> -->
                    <div class=" inset-y-[18%]">
                        <h3 class=" text-5xl sm:text-[3vw]  font-bold text-emerald-600 my-4 sm:my-[1vw]">Quizam</h3>
                        <p class="pb-5 sm:pb-[1.25vw] font-bold italic">
                            (Programmer, Developer, Designer)
                        </p>
                        <p class="pb-5 sm:pb-[1.25vw] text-justify">
                            An online based quiz/ exam system that is designed and built with anti cheating functions.
                            This web application allows users to manage and conduct online assessments.
                        </p>
                        <ul>
                            <li class="pb-4 sm:pb-[1vw]"><i class="bi bi-check text-emerald-400"></i> Set-up the exam to show one question at a time.</li>
                            <li class="pb-4 sm:pb-[1vw]"><i class="bi bi-check text-emerald-400"></i> Prohibiting users to backtrack while taking the test.</li>
                            <li class="pb-4 sm:pb-[1vw]"><i class="bi bi-check text-emerald-400"></i> Prohibit users to take the test multiple times.</li>
                            <li class="pb-5 sm:pb-[1.25vw]"><i class="bi bi-check text-emerald-400"></i> Delay score availability.</li>
                        </ul>
                        <div class="text-lg sm:text-[1.125vw] mt-5 sm:mt-[1.25vw] mb-10 sm:mb-[2.5vw] md:inline-flex">
                            <div class="md:mr-2">
                                <a href="https://quizam.markguilang.com/" target="_blank" rel="noopener noreferrer" class="text-white py-2 sm:py-[.5vw] px-10 sm:px-[2.5vw] bg-emerald-400 rounded-full ">
                                    Open Live
                                </a>
                            </div>
                            <div class="mt-6 sm:mt-[2.5vw] md:mt-0">
                                <a href="https://github.com/MarkGuil/Quizam-PUBLIC" target="_blank" rel="noopener noreferrer" class="text-white py-2 sm:py-[.5vw] px-10 sm:px-[2.5vw] bg-emerald-400 rounded-full">
                                    Github
                                </a>
                            </div>
                        </div>
                        <p class="mt-5 sm:mt-[1.25vw]">
                            Technologies:
                        </p>
                        <div class="mt-[.5vw] grid grid-cols-3 md:grid-cols-5 lg:grid-cols-6 gap-1 sm:gap-[.25vw] text-5xl sm:text-[3vw]">
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
                <div class="relative col-start-1 col-span-12  lg:col-span-5 order-first lg:order-last flex justify-center lg:justify-end items-center px-2 md:px-28 lg:px-[1vw] " data-aos="fade-right">
                    <img src="images/quizam/screens.png" class="w-full drop-shadow-xl" id="myImg2" alt="">
                </div>
            </div>

            <div class="relative grid grid-cols-12 gap-4 mt-32 sm:mt-[8vw]">

                <div class="relative col-start-1 col-span-12 lg:col-span-5 flex justify-center lg:justify-start items-center px-2 md:px-28 lg:px-[1vw]" data-aos="fade-left">
                    <img src="images/anishop/screens.png" class="w-full drop-shadow-xl" id="myImg3" alt="">
                </div>
                <div class="col-start-1 col-span-12 lg:col-span-7 pt-4 px-4 text-zinc-600 text-xl sm:text-[1.2vw] sm:leading-[1.75vw]" data-aos="fade-up">
                    <!-- <div class="sticky inset-y-[18%]"> -->
                    <div class=" inset-y-[18%]">
                        <h3 class="text-5xl sm:text-[3vw] font-bold text-emerald-600 my-4 sm:my-[1vw]">Anishop </h3>
                        <p class="pb-5 sm:pb-[1.25vw] font-bold italic">
                            (Programmer, Developer)
                        </p>
                        <p class="pb-5 sm:pb-[1.25vw]  text-justify">
                            An e-commerce website, where anime fans can find all the products they need to show their love for their
                            favorite anime! Providing a vast selection of high-quality anime-related products,
                            from clothing to accessories and much more. Our website features a design that reflects the anime aesthetic
                            and style, while still being easy to navigate.
                        </p>
                        <ul>
                            <li class="pb-4 sm:pb-[1vw] "><i class="bi bi-check text-emerald-400"></i> Vast selection of high-quality anime-related products, including clothing, accessories, and more.</li>
                            <li class="pb-4 sm:pb-[1vw] "><i class="bi bi-check text-emerald-400"></i> Design that reflects the anime aesthetic and style, while being easy to navigate.</li>
                            <li class="pb-4 sm:pb-[1vw] "><i class="bi bi-check text-emerald-400"></i> Engaging and informative product descriptions.</li>
                            <li class="pb-4 sm:pb-[1.25vw] "><i class="bi bi-check text-emerald-400"></i> Management of products.</li>
                        </ul>
                        <div class="text-lg sm:text-[1.125vw] mt-5 sm:mt-[1.25vw] mb-10 sm:mb-[2.5vw] md:inline-flex">
                            <div class="md:mr-2">
                                <a href="https://anishop.markguilang.com/" target="_blank" rel="noopener noreferrer" class="text-white py-2 sm:py-[.5vw] px-10 sm:px-[2.5vw] bg-emerald-400 rounded-full ">
                                    Open Live
                                </a>
                            </div>
                            <div class="mt-6 sm:mt-[2.5vw] md:mt-0">
                                <a href="https://github.com/MarkGuil/e-commerce-shop" target="_blank" rel="noopener noreferrer" class="text-white py-2 sm:py-[.5vw] px-10 sm:px-[2.5vw] bg-emerald-400 rounded-full">
                                    Github
                                </a>
                            </div>
                        </div>
                        <p class="mt-5 sm:mt-[1.25vw]">
                            Technologies:
                        </p>
                        <div class="mt-2 sm:mt-[.5vw] grid grid-cols-3 md:grid-cols-5 lg:grid-cols-6 gap-1 sm:gap-[.25vw] text-5xl sm:text-[3vw]">
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
            </div>

            <div class="grid grid-cols-12 gap-4 sm:gap-[1vw] mt-32 sm:mt-[8vw] relative">
                <div class="col-start-1 col-span-12 lg:col-span-7 pt-4 sm:pt-[1vw] px-4 sm:px-[1vw] text-zinc-600 text-xl sm:text-[1.25vw] sm:leading-[1.75vw]" data-aos="fade-up">
                    <!-- <div class="sticky inset-y-[19%]"> -->
                    <div class=" inset-y-[19%]">
                        <h3 class="text-5xl sm:text-[3vw] font-bold text-emerald-600 my-4 sm:my-[1vw]">PSU Main Supply Office Inventory System</h3>
                        <p class="pb-5 sm:pb-[1.25vw] font-bold italic">
                            (Developer, Designer)
                        </p>
                        <p class="pb-5 sm:pb-[1.25vw] italic text-justify">
                            A web application that helps in the management and monitoring of supplies across many PSU campuses.
                            It can track requested supplies, and create an annual
                            procurement plan for budget utilization.
                        </p>
                        <ul>
                            <li class="pb-4 sm:pb-[1vw]"><i class="bi bi-check text-emerald-400"></i> Main Admin - managing and monitoring inventory of campuses</li>
                            <li class="pb-4 sm:pb-[1vw]"><i class="bi bi-check text-emerald-400"></i> Campus Admin - manages offices and creates their procurement plan for their campus</li>
                        </ul>
                        <div class="text-lg sm:text-[1.125vw] mt-5 sm:mt-[1.25vw] mb-10 sm:mb-[2.5vw] md:inline-flex">
                            <div class="">
                                <a href="" target="_blank" rel="noopener noreferrer" class="text-white py-2 sm:py-[.5vw] px-10 sm:px-[2.5vw] bg-emerald-400 rounded-full ">
                                    Open Live
                                </a>
                            </div>
                        </div>
                        <p class="mt-5 sm:mt-[1.25vw]">
                            Technologies:
                        </p>
                        <div class="mt-2 sm:mt-[.5vw] grid grid-cols-3 md:grid-cols-5 lg:grid-cols-6 gap-1 sm:gap-[.25vw] text-5xl sm:text-[3vw]">
                            <div class="col-auto">
                                <div class=" flex justify-center ">
                                    <i class="devicon-html5-plain drop-shadow-xl rounded-full p-4 sm:p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-css3-plain drop-shadow-xl rounded-full p-4 sm:p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-php-plain drop-shadow-xl rounded-full p-4 sm:p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-javascript-plain drop-shadow-xl rounded-full p-4 sm:p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-bootstrap-plain drop-shadow-xl rounded-full p-4 sm:p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-mysql-plain-wordmark drop-shadow-xl rounded-full p-4 sm:p-[1vw] duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="relative col-start-1 col-span-12 lg:col-span-5 order-first lg:order-last flex justify-center lg:justify-end items-center px-2 md:px-28 lg:px-[.875vw]" data-aos="fade-right">
                    <img src="images/psu/screens.png" class="w-full drop-shadow-xl" id="myImg4" alt="">
                </div>
            </div>

        </div>
    </section>

    <section id="contact" class="contact s10 relative bg-white h-fit overflow-x-hidden z-30">
        <div class="px-7 md:px-20 lg:px-[10vw] pb-10 md:pb-14 lg:pb-[7vw] pt-10 sm:pt-[2.5vw] relative h-full">

            <div class="sm:pb-10" data-aos="fade-up">
                <h3 id="about-me" class="z-0 text-7xl md:text-[6vw] font-bold text-zinc-500 transition-all
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
                                    <i class="bi bi-geo-alt text-2xl sm:text-[1.5vw]"></i>
                                </div>
                            </div>
                            <h4 class="ml-0 lg:ml-[5vw] mb-2 sm:mb-[.5vw] mt-3 md:mt-0 lg:mt-0 font-bold text-2xl lg:text-[1.875vw] lg:leading-[2.25vw]"><a href="" class="transition duration-75 ease-in-out hover:text-emerald-300">Location:</a></h4>
                            <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-[5vw] text-sm lg:text-[1.125vw] leading-6">Rosales, Pangasinan</p>
                        </div>

                        <div class="mt-10 sm:mt-[2.5vw]">
                            <div class="float-left w-16 sm:w-[3.5vw] h-16 sm:h-[3.5vw] text">
                                <div class="flex justify-center items-center w-16 sm:w-[3.5vw] h-full rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                    <i class="bi bi-envelope text-2xl sm:text-[1.5vw]"></i>
                                </div>
                            </div>
                            <h4 class="ml-0 lg:ml-[5vw] mb-2 sm:mb-[.5vw] mt-3 md:mt-0 lg:mt-0 font-bold text-2xl lg:text-[1.875vw] lg:leading-[2.25vw]"><a href="" class="transition duration-75 ease-in-out hover:text-emerald-300">Email:</a></h4>
                            <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-[5vw] text-sm lg:text-[1.125vw] leading-6">guilangmarkarjay@gmail.com</p>
                        </div>

                        <div class="mt-10 sm:mt-[2.5vw]">
                            <div class="float-left w-16 sm:w-[3.5vw] h-16 sm:h-[3.5vw] text">
                                <div class="flex justify-center items-center w-16 sm:w-[3.5vw] h-full rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                    <i class="bi bi-phone text-2xl sm:text-[1.5vw]"></i>
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
                                <input type="text" name="name" class="h-11 w-full py-1 sm:py-[.25vw] px-3 sm:px-[.75vw] border border-zinc-300 focus:outline-none focus:ring focus:ring-emerald-300 focus:border-emerald-300 " id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-auto form-group w-full pb-3 sm:pb-[.75vw] px-2 sm:px-[.5vw]">
                                <input type="email" class="h-11 w-full py-1 sm:py-[.25vw] px-3 sm:px-[.75vw] border border-zinc-300 focus:outline-none focus:ring focus:ring-emerald-300 focus:border-emerald-300" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group w-full pb-3 sm:pb-[.75vw] px-2 sm:px-[.5vw] mt-3 sm:mt-[.75vw]">
                            <input type="text" class="form-control h-11 w-full py-1 sm:py-[.25vw] px-3 sm:px-[.75vw] border border-zinc-300 focus:outline-none focus:ring focus:ring-emerald-300 focus:border-emerald-300" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group w-full pb-2 sm:pb-[.5vw] px-2 sm:px-[.5vw] mt-3 sm:mt-[.75vw]">
                            <textarea class="form-control w-full py-1 sm:py-[.25vw] px-3 sm:px-[.75vw] border border-zinc-300 focus:outline-none focus:ring focus:ring-emerald-300 focus:border-emerald-300" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit-contact-form" class="btn-get-started scrollto py-2 md:py-[.75vw] px-7 sm:px-[1.75vw] bg-emerald-400 rounded-full text-white lg:text-[1vw]">Send Message</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>

    <!-- <footer class="page-footer relative w-full py-5 px-10 z-50 transition-all duration-500 3k:flex justify-center items-center bg-emerald-800 text-zinc-100 bottom-0">
        <div class=" md:flex 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px] text-center md:text-start">
            <div class="text-light mt-3 bg-primary 3k:text-lg">
                © 2022 Copyright
                <a class="text-light font-bold" href="">GMAO</a>
                . All Rights Reserved
            </div>
            <div class="ml-auto">
                <div class="social-links mt-3 text-lg">
                    <a href="https://github.com/MarkGuil" target="_blank" rel="noopener noreferrer" class="github">
                        <i class="bx bxl-github px-2 py-2 rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i>
                    </a>
                    <a href="mailto:guilangmarkarjay@gmail.com" class="google-plus">
                        <i class="bx bxs-envelope px-2 py-2 rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/mark-arjay-guilang/" target="_blank" rel="noopener noreferrer" class="linkedin">
                        <i class="bx bxl-linkedin-square px-2 py-2 rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i>
                    </a>
                </div>
            </div>
        </div>

    </footer> -->


    <script defer src="script/app.js"></script>
    <script defer src="script/anav.js"></script>
    <script src="vendor/aos/dist/aos.js"></script>
    <script src="vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="vendor/sweetalert/sweetalert2.all.min.js"></script>
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
    </script>
</body>

</html>