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
    <nav class="navbar fixed w-screen py-5 px-7 z-50 transition-all duration-500 3k:flex justify-center items-center ">
        <div class="grid grid-cols-2 lg:grid-cols-3 3k:grid-cols-4 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px]">
            <a class="col lg:flex items-center" href="#">
                <span class=" tracking-normal md:tracking-widest text-3xl md:text-4xl text-zinc-600 font-molle font-black">GMAO</span>
            </a>
            <div class="col 3k:col-span-2 text-zinc-600 text-right lg:flex justify-center items-center">
                <button id="nav-btn" class="text-3xl cursor-pointer lg:hidden w-8 h-8">
                    <div id="hamburger" class="bg-zinc-600 rounded absolute w-8 h-1 top-10 -mt-0.5 transition-all duration-500
                            before:content-[''] before:bg-zinc-600 before:rounded before:absolute before:w-8 before:h-1 before:-translate-x-4 
                            before:-translate-y-3 before:transition-all before:duration-500 
                            after:content-[''] after:bg-zinc-600 after:rounded after:absolute after:w-8 after:h-1 after:-translate-x-4 
                            after:translate-y-3 after:transition-all after:duration-500 ">
                    </div>
                </button>
                <div class="hidden lg:flex justify-center items-center">
                    <ul class="flex text-center">
                        <li class="mx-5 3k relative">
                            <a class="section-links home 
                            font-extrabold text-lg 3xl:text-xl 3k:text-[1.6rem] text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#home" onclick="lenis.scrollTo('#home')">
                                <small><span class=" text-emerald-400">01</span> Home</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links about
                            font-semibold text-lg 3xl:text-xl 3k:text-[1.6rem] text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#about" onclick="lenis.scrollTo('#about')">
                                <small><span class=" text-emerald-400">02</span> About</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links project
                            font-semibold text-lg 3xl:text-xl 3k:text-[1.6rem] text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#project" onclick="lenis.scrollTo('#project')">
                                <small><span class=" text-emerald-400">03</span> Projects</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links contact
                            font-semibold text-lg 3xl:text-xl 3k:text-[1.6rem] text-zinc-400 transition-all duration-500 pb-1 
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
                <div class="social-links relative text-3xl">
                    <a href="resume/Mark Arjay O. Guilang.pdf" target="_blank" rel="noopener noreferrer" class="resume">
                        <div class="absolute text-sm top-11 -left-3 bg-emerald-300 px-3 py-1 rounded animate-cv-shake opacity-0 pointer-events-none">
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

    <section id="home" class="sect home relative h-fit 3k:h-fit bg-cover bg-home-large text-zinc-900 3k:flex justify-center items-center z-20">

        <div class="grid grid-cols-8 gap-8 h-full py-36 lg:py-36 xl:py-40 3xl:py-48 3k:py-60 4k:py-60 px-5 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px]">

            <div class="col-start-2 col-span-6 md:col-start-2 md:col-span-6 lg:col-start-3 lg:col-span-4 3k:col-start-2 3k:col-span-6 ">
                <div class="animate-zoom-in text-zinc-600 text-center">
                    <h1 class="text-2xl lg:text-3xl 3xl:text-4xl 3k:text-5xl font-semibold md:font-normal
                    before:content-[''] lg:before:w-20 3xl:before:w-40 before:h-px before:bg-zinc-400 before:inline-block before:mt-1 before:ml-2
                    after:content-[''] lg:after:w-20 3xl:after:w-40 after:h-px after:bg-zinc-400 after:inline-block after:mt-1 after:mr-2
                    ">
                        Hello! My name is
                    </h1>

                    <div class="relative mt-1 sm:mt-4 md:mt-7 lg:mt-8 3xl:mt-16 3k:mt-10">
                        <svg class="block stroke-zinc-700 stroke-2 fill-transparent animate-stroke-dashoffset scale-120 sm:scale-110 md:scale-110 lg:scale-100 3xl:scale-105 h-44 sm:h-52 md:h-72 lg:h-72 xl:h-80 3xl:h-96 3k:h-96" width="100%" preserveAspectRatio="xMidYMid meet" x="0" y="0" viewBox="-13 38 630 10">
                            <text x="0" y="0" class="text-9xl font-allura">Mark Arjay</text>
                            <text x="100" y="120" class="text-9xl font-allura">Guilang</text>
                        </svg>
                    </div>

                    <h2 class="text-2xl  lg:text-3xl 3xl:text-4xl 3k:text-5xl font-normal mt-1 sm:mt-4 md:mt-6 lg:mt-8 3xl:mt-16 3k:mt-10">I am a Web Developer</h2>
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

    <section id="about" class="sect about about-section relative h-fit lg:h-screen 3k:h-fit text-center sm:text-left bg-white lg:flex justify-center items-center z-20">
        <div class="relative h-full py-12 md:py-16 lg:py-0 3k:py-80 px-7 md:px-20 lg:px-28 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px] flex justify-start lg:justify-center items-center">

            <div class="relative py-12 md:py-20 lg:py-0  px-2 ">
                <h3 id="about-me" class=" absolute -translate-x-1/2 pointer-events-none z-0 text-9xl md:text-8xl lg:text-[8rem] 
                    3xl:text-[14rem] 3k:text-[8rem] scale-125 font-bold text-zinc-400 before:content-['About'] before:rounded before:absolute 
                    before:-translate-x-1 md:before:-translate-x-4 before:font-outline-2 before:text-transparent before:-translate-y-1 
                    md:before:-translate-y-3 before:transition-all before:duration-500 opacity-0 transition-opacity duration-300">
                    About
                </h3>
                <h3 id="about-me-desc" class="relative translate-x-full mr-2 text-zinc-700 text-2xl md:text-4xl 3xl:text-5xl 3k:text-4xl  
                    tracking-wider font-black z-10 leading-loose md:leading-loose lg:leading-relaxed 3xl:leading-relaxed 3k:leading-normal 
                    text-justify opacity-0 transition-opacity duration-300">
                    I am a web developer that is passionate in developing robust and responsive
                    web applications and is excited to bring my skills and experience to new challenges.
                </h3>
            </div>

        </div>
    </section>
    <section id="about" class="sect about skill-section relative h-fit text-center sm:text-left bg-skill-large bg-cover bg-fixed  overflow-hidden">
        <div>
            <div class="relative z-10 w-full">
                
                <!-- <svg class="absolute" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
                    <defs>
                        <style>.cls-1,.cls-2{fill:#34d399;}.cls-2{font-size:147.98px;font-family:Corbel;letter-spacing:0.13em;}.cls-3{letter-spacing:0.12em;}.cls-4{letter-spacing:0.13em;}</style>
                    </defs>
                    <path class="cls-1" d="M158.75,257.64q12.57-68.59,48.5-123.55Q273.25,34,399.92,34,492.33,34,552,91.19q41.58,40.1,67,117.81h17L619,0H601q-1.47,24.92-8.06,33.45T577.06,42q-9.79,0-36.65-10.25Q516,23,498.13,16.86a335.85,335.85,0,0,0-34-9.77,274.48,274.48,0,0,0-33.23-5.37Q413.82,0,390.88,0q-77.24,0-140,25.88T139.2,106.39A376.57,376.57,0,0,0,66.39,222.53q-6.82,17.31-11.94,35.11Z"/>
                    <path class="cls-1" d="M544,451.81V622a292.42,292.42,0,0,1-66.31,27.62A265,265,0,0,1,407,659a218.24,218.24,0,0,1-68.77-10.73A230.58,230.58,0,0,1,277.77,618a245.88,245.88,0,0,1-50.41-47.36,301.54,301.54,0,0,1-38.66-62.5,373.35,373.35,0,0,1-21.07-56.31H53Q71.16,515.21,114.75,569q99.66,123,291.69,123a547,547,0,0,0,62.78-3.44A445.65,445.65,0,0,0,526.88,678a431.59,431.59,0,0,0,55.45-18.18A580.48,580.48,0,0,0,639,633V451.81Z"/>
                    <text class="cls-2" transform="translate(150.89 409.73) scale(0.92 1)">
                        GM
                        <tspan class="cls-3" x="258.92" y="0">A</tspan>
                        <tspan class="cls-4" x="370.72" y="0">O</tspan>
                    </text>
                </svg> -->
                <div class="skill-1 bg-white w-full shadow origin-center fixed -rotate-[35deg] scale-150 -translate-x-full translate-y-96 inset-x-0 -top-44 md:top-0 overflow-hidden">
                    <span class="tracking-wide text-7xl 3k:text-8xl text-black truncate text-clip ">
                        SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS
                    </span>
                </div>
                <div class="skill-2 bg-white w-full shadow origin-top-left absolute rotate-45 scale-150 -translate-x-1/2 -translate-y-60 inset-x-0 top-60 overflow-hidden">
                    <span class="tracking-wide text-7xl 3k:text-8xl text-black truncate text-clip ">
                        SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS
                    </span>
                </div>
                <div class="skill-3 bg-white w-full shadow origin-bottom-right fixed -rotate-12 scale-150 translate-x-full  right-0 top-60 overflow-hidden">
                    <span class="tracking-wide text-7xl 3k:text-8xl text-black truncate text-clip ">
                        SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS
                    </span>
                </div>
                <div class="skill-4 bg-white w-full shadow origin-right rotate-12 absolute scale-150 -translate-x-20  inset-x-0 top-96 overflow-hidden">
                    <span class="tracking-wide text-7xl 3k:text-8xl text-black truncate text-clip ">
                        SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS SKILLS
                    </span>
                </div>
            </div>
            <div class="bg-[#064e3b]/80 z-20 relative 3k:flex justify-center items-center">

                <div class="relative grid grid-cols-7 gap-3 lg:gap-8 h-full py-3 md:py-8 px-5 lg:px-16 3xl:px-24 3k:px-10 3k:w-[1320px] 3k:max-w-[1320px]">

                    <div class="relative col-start-1 col-span-7 text-start pt-24 pb-36 md:py-24 lg:py-32 3k:py-28 px-2 md:px-10 3k:px-0">
                        <div class="py-10">

                            <div class="grid grid-cols-3 md:grid-cols-5 lg:grid-cols-5 3xl:grid-cols-5 3k:grid-cols-5 gap-2 text-white text-5xl md:text-6xl lg:text-7xl 3xl:text-8xl 3k:text-[5rem] mt-0 md:mb-10 md:mt-5 lg:mt-0 lg:mb-14 3k:mb-20" data-aos="fade-left" data-aos-delay="50">

                                <div class="col-auto lg:mt-4">
                                    <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="50">
                                        <i class="devicon-html5-plain drop-shadow-xl rounded p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-4">
                                    <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="100">
                                        <i class="devicon-css3-plain drop-shadow-xl rounded p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-4">
                                    <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="150">
                                        <i class="devicon-javascript-plain drop-shadow-xl rounded p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-4">
                                    <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="200">
                                        <i class="devicon-jquery-plain-wordmark drop-shadow-xl rounded p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-4">
                                    <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="250">
                                        <i class="devicon-php-plain drop-shadow-xl rounded p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-4">
                                    <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="300">
                                        <i class="devicon-mysql-plain-wordmark drop-shadow-xl rounded p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-4">
                                    <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="350">
                                        <i class="devicon-laravel-plain-wordmark drop-shadow-xl rounded p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-4">
                                    <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="400">
                                        <i class="devicon-bootstrap-plain-wordmark drop-shadow-xl rounded p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-4">
                                    <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="450">
                                        <i class="devicon-tailwindcss-plain drop-shadow-xl rounded p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <div class="col-auto lg:mt-4">
                                    <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="500">
                                        <i class="devicon-java-plain-wordmark drop-shadow-xl rounded p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div>
                                <!-- <div class="col-auto lg:mt-4">
                                    <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out animate-slow-bounce" data-aos="zoom-in" data-aos-delay="550">
                                        <i class="devicon-csharp-plain-wordmark drop-shadow-xl rounded p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                    </div>
                                </div> -->
                            </div>

                        </div>

                    </div>
                </div>
                <img src="images/skills-bg/torn-1-mins-min.png" class="absolute z-30 -top-2 left-0 md:w-full h-44" alt="">
                <img src="images/skills-bg/torn-2-mins-min.png" class="absolute z-30 -bottom-2 left-0 md:w-full h-56" alt="">
            </div>
        </div>
    </section>

    <section id="project" class="sect project relative bg-white h-fit 3k:flex justify-center items-center z-30">
        <div class="px-5 md:px-20 lg:px-28 3k:px-5 pt-10 md:pt-14 lg:pt-24 relative h-full 3k:w-[1320px] 3k:max-w-[1320px]">
            <div class="pb-10" data-aos="fade-up">
                <h3 id="about-me" class="z-0 text-7xl md:text-8xl lg:9xl font-bold text-zinc-500 mb-4 transition-all
                    before:content-['Projects'] before:rounded before:absolute before:-translate-x-1 md:before:-translate-x-4 before:font-outline-2 before:text-transparent
                    before:-translate-y-1 md:before:-translate-y-3 before:transition-all before:duration-500 
                    after:content-[''] after:absolute after:left-32 md:after:left-40 after:bottom-16 after:w-36 md:after:w-72 after:h-px after:bg-emerald-400 after:inline-block after:mt-1 after:mr-2">
                    Projects
                </h3>
            </div>
        </div>
    </section>

    <section id="project" class="sect project relative bg-white h-fit 3k:flex justify-center items-center z-30">
        <div class="px-5 md:px-20 lg:px-28 3k:px-5 pb-10 md:pb-14 lg:pb-24 relative h-full 3k:w-[1320px] 3k:max-w-[1320px]">

            <div class="relative grid grid-cols-12 gap-4">

                <div class="relative col-start-1 col-span-12  lg:col-span-5 flex justify-center lg:justify-start items-center px-2 md:px-28 lg:px-3.5 3xl:px-24 3k:px-3" data-aos="fade-left">
                    <img src="images/omnibus/screens.png" class="w-full " alt="">
                </div>
                <div class="relative col-start-1 col-span-12  lg:col-span-7 pt-4 px-4 text-zinc-600 text-xl 3k:text-2xl" data-aos="fade-up">

                    <!-- <div class="sticky inset-y-[12%] 3k:inset-y-[10%]"> -->
                    <div class="inset-y-[12%] 3k:inset-y-[10%]">
                        <h3 class="text-5xl 3xl:text-7xl 3k:text-6xl font-bold text-emerald-600 my-4">Omnibus</h3>
                        <p class="pb-5 font-bold italic">
                            (Programmer, Developer, Designer)
                        </p>
                        <p class="pb-5 text-justify">
                            An online bus seat booking platform for point-to-point (P2P) buses.
                            This helps passengers to book bus tickets, and upholding health safety protocols
                            that spaced out the passengers to maintain social distancing.
                            The application envisioned to help improve the operations of P2P bus companies in terms of seat booking and e-ticket generation.
                            This application has 4 users:
                        </p>
                        <ul>
                            <li class="pb-4"><i class="bi bi-check text-emerald-400"></i> Company Admin - manages terminals, terminal masters, conductors, drivers, buses, routes, trips, and bookings. </li>
                            <li class="pb-4"><i class="bi bi-check text-emerald-400"></i> Terminal Master - can manage own trips and bookings for their terminal.</li>
                            <li class="pb-4"><i class="bi bi-check text-emerald-400"></i> Conductor - manages booked seats.</li>
                            <li class="pb-5"><i class="bi bi-check text-emerald-400"></i> Passenger - search trips, book and generate e-tickets.</li>
                        </ul>
                        <div class="text-lg-start mt-5 mb-10 md:inline-flex">
                            <div class="md:mr-2">
                                <a href="https://omnibus.markguilang.com/dist/" target="_blank" rel="noopener noreferrer" class="text-white text-xl 3k:text-2xl py-2 px-10 bg-emerald-400 rounded-full ">
                                    Open Live
                                </a>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <a href="https://github.com/MarkGuil/Omnibus-PUBLIC" target="_blank" rel="noopener noreferrer" class="text-white text-xl 3k:text-2xl py-2 px-10 bg-emerald-400 rounded-full">
                                    Github
                                </a>
                            </div>
                        </div>
                        <p class="mt-5">
                            Technologies:
                        </p>
                        <div class="mt-2 grid grid-cols-3 md:grid-cols-5 lg:grid-cols-6 3k:grid-cols-7 gap-1 text-5xl">
                            <div class="col-auto ">
                                <div class=" flex justify-center  ">
                                    <i class="devicon-html5-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-css3-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-php-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-javascript-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-bootstrap-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-tailwindcss-original-wordmark drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-mysql-plain-wordmark drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center">
                                    <i class="devicon-java-plain-wordmark drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="relative grid grid-cols-12 gap-4 mt-32">
                <div class="col-start-1 col-span-12  lg:col-span-7 pt-4 px-4 text-zinc-600 text-xl 3k:text-2xl" data-aos="fade-up">
                    <!-- <div class="sticky inset-y-[18%] 3k:inset-y-[25%]"> -->
                    <div class=" inset-y-[18%] 3k:inset-y-[25%]">
                        <h3 class="text-5xl 3xl:text-7xl 3k:text-6xl font-bold text-emerald-600 my-4">Quizam</h3>
                        <p class="pb-5 font-bold italic">
                            (Programmer, Developer, Designer)
                        </p>
                        <p class="pb-5 text-justify">
                            An online based quiz/ exam system that is designed and built with anti cheating functions.
                            This web application allows users to manage and conduct online assessments.
                        </p>
                        <ul>
                            <li class="pb-4"><i class="bi bi-check text-emerald-400"></i> Set-up the exam to show one question at a time.</li>
                            <li class="pb-4"><i class="bi bi-check text-emerald-400"></i> Prohibiting users to backtrack while taking the test.</li>
                            <li class="pb-4"><i class="bi bi-check text-emerald-400"></i> Prohibit users to take the test multiple times.</li>
                            <li class="pb-5"><i class="bi bi-check text-emerald-400"></i> Delay score availability.</li>
                        </ul>
                        <div class="text-lg-start mt-5 mb-10 md:inline-flex">
                            <div class="md:mr-2">
                                <a href="https://quizam.markguilang.com/" target="_blank" rel="noopener noreferrer" class="text-white text-xl 3k:text-2xl py-2 px-10 bg-emerald-400 rounded-full ">
                                    Open Live
                                </a>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <a href="https://github.com/MarkGuil/Quizam-PUBLIC" target="_blank" rel="noopener noreferrer" class="text-white text-xl 3k:text-2xl py-2 px-10 bg-emerald-400 rounded-full">
                                    Github
                                </a>
                            </div>
                        </div>
                        <p class="mt-5">
                            Technologies:
                        </p>
                        <div class="mt-2 grid grid-cols-3 md:grid-cols-5 lg:grid-cols-6 3k:grid-cols-7 gap-1 text-5xl">
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-html5-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-css3-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-php-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center">
                                    <i class="devicon-jquery-plain-wordmark drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-javascript-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center">
                                    <i class="devicon-bootstrap-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center">
                                    <i class="devicon-mysql-plain-wordmark drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative col-start-1 col-span-12  lg:col-span-5 order-first lg:order-last flex justify-center lg:justify-end items-center px-2 md:px-28 lg:px-3.5 3xl:px-24 3k:px-3" data-aos="fade-right">
                    <img src="images/quizam/screens.png" class="w-full" alt="">
                </div>
            </div>

            <div class="relative grid grid-cols-12 gap-4 mt-32">

                <div class="relative col-start-1 col-span-12 lg:col-span-5 flex justify-center lg:justify-start items-center px-2 md:px-28 lg:px-3.5 3xl:px-24 3k:px-3" data-aos="fade-left">
                    <img src="images/anishop/anishop.png" class="w-full" alt="">
                </div>
                <div class="col-start-1 col-span-12 lg:col-span-7 pt-4 px-4 text-zinc-600 text-xl 3k:text-2xl" data-aos="fade-up">
                    <!-- <div class="sticky inset-y-[18%] 3k:inset-y-[16%]"> -->
                    <div class=" inset-y-[18%] 3k:inset-y-[16%]">
                        <h3 class="text-5xl 3xl:text-7xl 3k:text-6xl font-bold text-emerald-600 my-4">Anishop </h3>
                        <p class="pb-5 font-bold italic">
                            (Programmer, Developer)
                        </p>
                        <p class="pb-5 text-justify">
                            An e-commerce website, where anime fans can find all the products they need to show their love for their
                            favorite anime! Providing a vast selection of high-quality anime-related products,
                            from clothing to accessories and much more. Our website features a design that reflects the anime aesthetic
                            and style, while still being easy to navigate.
                        </p>
                        <ul>
                            <li class="pb-4"><i class="bi bi-check text-emerald-400"></i> Vast selection of high-quality anime-related products, including clothing, accessories, and more.</li>
                            <li class="pb-4"><i class="bi bi-check text-emerald-400"></i> Design that reflects the anime aesthetic and style, while being easy to navigate.</li>
                            <li class="pb-4"><i class="bi bi-check text-emerald-400"></i> Engaging and informative product descriptions.</li>
                            <li class="pb-4"><i class="bi bi-check text-emerald-400"></i> Management of products.</li>
                        </ul>
                        <div class="text-lg-start mt-5 mb-10 md:inline-flex">
                            <div class="md:mr-2">
                                <a href="https://anishop.markguilang.com/" target="_blank" rel="noopener noreferrer" class="text-white text-xl 3k:text-2xl py-2 px-10 bg-emerald-400 rounded-full ">
                                    Open Live
                                </a>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <a href="https://github.com/MarkGuil/e-commerce-shop" target="_blank" rel="noopener noreferrer" class="text-white text-xl 3k:text-2xl py-2 px-10 bg-emerald-400 rounded-full">
                                    Github
                                </a>
                            </div>
                        </div>
                        <p class="mt-5">
                            Technologies:
                        </p>
                        <div class="mt-2 grid grid-cols-3 md:grid-cols-5 lg:grid-cols-6 3k:grid-cols-7 gap-1 text-5xl">
                            <div class="col-auto">
                                <div class=" flex justify-center  ">
                                    <i class="devicon-html5-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center  ">
                                    <i class="devicon-css3-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-php-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-javascript-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-bootstrap-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-mysql-plain-wordmark drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-12 gap-4 mt-32 relative">
                <div class="col-start-1 col-span-12 lg:col-span-7 pt-4 px-4 text-zinc-600 text-xl 3k:text-2xl" data-aos="fade-up">
                    <!-- <div class="sticky inset-y-[19%] 3k:inset-y-[19%]"> -->
                    <div class=" inset-y-[19%] 3k:inset-y-[19%]">
                        <h3 class="text-5xl 3xl:text-7xl 3k:text-6xl font-bold text-emerald-600 my-4">PSU Main Supply Office Inventory System</h3>
                        <p class="pb-5 font-bold italic">
                            (Developer, Designer)
                        </p>
                        <p class="pb-5 italic text-justify">
                            A web application that helps in the management and monitoring of supplies across many PSU campuses.
                            It can track requested supplies, and create an annual
                            procurement plan for budget utilization.
                        </p>
                        <ul>
                            <li class="pb-4"><i class="bi bi-check text-emerald-400"></i> Main Admin - managing and monitoring inventory of campuses</li>
                            <li class="pb-4"><i class="bi bi-check text-emerald-400"></i> Campus Admin - manages offices and creates their procurement plan for their campus</li>
                        </ul>
                        <div class="text-lg-start mt-5 mb-10 md:inline-flex">
                            <div class="md:mr-2">
                                <a href="" target="_blank" rel="noopener noreferrer" class="text-white text-xl 3k:text-2xl py-2 px-10 bg-emerald-400 rounded-full ">
                                    Open Live
                                </a>
                            </div>
                        </div>
                        <p class="mt-5">
                            Technologies:
                        </p>
                        <div class="mt-2 grid grid-cols-3 md:grid-cols-5 lg:grid-cols-6 3k:grid-cols-7 gap-1 text-5xl">
                            <div class="col-auto">
                                <div class=" flex justify-center ">
                                    <i class="devicon-html5-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-css3-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-php-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-javascript-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-bootstrap-plain drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class=" flex justify-center ">
                                    <i class="devicon-mysql-plain-wordmark drop-shadow-xl rounded-full p-4 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="relative col-start-1 col-span-12  lg:col-span-5 order-first lg:order-last flex justify-center lg:justify-end items-center px-2 md:px-28 lg:px-3.5 3xl:px-24 3k:px-3" data-aos="fade-right">
                    <img src="images/psu/screens.png" class="w-full" alt="">
                </div>
            </div>

        </div>
    </section>

    <section id="contact" class="contact s10 relative bg-white h-fit 3k:flex justify-center items-center overflow-x-hidden z-30">
        <div class="px-7 md:px-20 lg:px-40 3k:px-5 pb-10 md:pb-14 lg:pb-20 pt-10 md:pt-10 lg:pt-20 relative h-full 3k:w-[1320px] 3k:max-w-[1320px]">

            <div class="pb-10" data-aos="fade-up">
                <h3 id="about-me" class="z-0 text-7xl md:text-8xl lg:9xl font-bold text-zinc-500 mb-4 transition-all
                    before:content-['Contact'] before:rounded before:absolute before:-translate-x-1 md:before:-translate-x-4 before:font-outline-2 before:text-transparent
                    before:-translate-y-1 md:before:-translate-y-3 before:transition-all before:duration-500 
                    after:content-[''] after:absolute after:left-32 md:after:left-40 after:bottom-16 after:w-36 md:after:w-72 after:h-px after:bg-emerald-400 after:inline-block after:mt-1 after:mr-2">
                    Contact
                </h3>
            </div>

            <div class="lg:grid grid-cols-12 gap-4">

                <div class="col-start-1 col-span-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="font-bold text-zinc-800 3k:text-xl">

                        <div class="">
                            <div class="float-left w-16 h-16 text">
                                <div class="flex justify-center items-center w-16 h-full rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                    <i class="bi bi-geo-alt text-2xl"></i>
                                </div>
                            </div>
                            <h4 class="ml-0 md:ml-20 lg:ml-20 mb-2 mt-3 md:mt-0 lg:mt-0 font-bold text-2xl 3k:text-3xl"><a href="" class=transition duration-75 ease-in-out hover:text-emerald-300">Location:</a></h4>
                            <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-20 text-sm 3k:text-lg leading-6">Rosales, Pangasinan</p>
                        </div>

                        <div class="mt-10">
                            <div class="float-left w-16 h-16 text">
                                <div class="flex justify-center items-center w-16 h-full rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                    <i class="bi bi-envelope text-2xl"></i>
                                </div>
                            </div>
                            <h4 class="ml-0 md:ml-20 lg:ml-20 mb-2 mt-3 md:mt-0 lg:mt-0 font-bold text-2xl 3k:text-3xl"><a href="" class=transition duration-75 ease-in-out hover:text-emerald-300">Email:</a></h4>
                            <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-20 text-sm 3k:text-lg leading-6">guilangmarkarjay@gmail.com</p>
                        </div>

                        <div class="mt-10">
                            <div class="float-left w-16 h-16 text">
                                <div class="flex justify-center items-center w-16 h-full rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                    <i class="bi bi-phone text-2xl"></i>
                                </div>
                            </div>
                            <h4 class="ml-0 md:ml-20 lg:ml-20 mb-2 mt-3 md:mt-0 lg:mt-0 font-bold text-2xl 3k:text-3xl"><a href="" class=transition duration-75 ease-in-out hover:text-emerald-300">Call:</a></h4>
                            <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-20 text-sm 3k:text-lg leading-6">+63 929 605 0070</p>
                        </div>

                    </div>

                </div>

                <div class="col-start-5 col-span-12 mt-7 lg:mt-0" data-aos="fade-left" data-aos-delay="200">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form text-sm">
                        <div class="grid grid-cols-2">
                            <div class="col-auto form-group w-full pb-3 px-2">
                                <input type="text" name="name" class="h-11 w-full py-1 px-3 border border-zinc-300 text-black" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-auto form-group w-full pb-3 px-2">
                                <input type="email" class="h-11 w-full py-1 px-3 border border-zinc-300" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group w-full pb-3 px-2 mt-3">
                            <input type="text" class="form-control h-11 w-full py-1 px-3 border border-zinc-300" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group w-full pb-2 px-2 mt-3">
                            <textarea class="form-control w-full py-1 px-3 border border-zinc-300" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class=" invisible">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit-contact-form" class="btn-get-started scrollto py-2 md:py-3 lg:py-3 px-7 bg-emerald-400 rounded-full text-white 3k:text-2xl">Send Message</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>

    <footer class="page-footer relative w-full py-5 px-10 z-50 transition-all duration-500 3k:flex justify-center items-center bg-emerald-800 text-zinc-100 bottom-0">
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

    </footer>


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