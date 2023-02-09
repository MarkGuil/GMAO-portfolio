<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mark Arjay Guilang</title>
    <link href="output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/aos/dist/aos.css" rel="stylesheet">
    <link href="vendor/remixIcon/fonts/remixicon.css" rel="stylesheet">
    <link href="vendor/remixIcon/fonts/remixicon.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        .blur-all {
            box-shadow: inset 0 0 40px 28px red;
        }
    </style>
</head>

<body class="m-0 p-0 font-crimson overflow-x-hidden">
    <nav class="navbar fixed w-full py-5 px-7 z-50 transition-all duration-500 3k:flex justify-center items-center ">
        <div class="grid grid-cols-2 lg:grid-cols-3 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px]">
            <a class="col lg:flex items-end" href="#">
                <span class=" tracking-normal md:tracking-widest text-3xl md:text-4xl text-zinc-600 font-molle font-black">GMAO</span>
            </a>
            <div class="col text-zinc-600 text-right lg:flex justify-center items-center">
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
                            <a class="section-links s1 
                            font-extrabold text-lg 3xl:text-xl 3k:text-2xl text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#s1" onclick="lenis.scrollTo('#s1')">
                                <small><span class=" text-emerald-400">01</span> Home</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links s2
                            font-semibold text-lg 3xl:text-xl 3k:text-2xl text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#s2" onclick="lenis.scrollTo('#s2')">
                                <small><span class=" text-emerald-400">02</span> About</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links s4
                            font-semibold text-lg 3xl:text-xl 3k:text-2xl text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#s4" onclick="lenis.scrollTo('#s4')">
                                <small><span class=" text-emerald-400">03</span> Projects</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links s9
                            font-semibold text-lg 3xl:text-xl 3k:text-2xl text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#s9" onclick="lenis.scrollTo('#s9')">
                                <small><span class=" text-emerald-400">04</span> Contact</small>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col hidden lg:block text-right">
                <div class="social-links text-3xl">
                    <a href="#" class="facebook"><i class="bx bxs-file-pdf text-zinc-600 px-2 py-2 rounded-full transition-color duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-github text-zinc-600 px-2 py-2 rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxs-envelope text-zinc-600 px-2 py-2 rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin-square text-zinc-600 px-2 py-2 rounded-full transition-all duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                </div>
            </div>
            <div id="nav-menu" class="absolute bg-white text-zinc-900 top-20 left-0 text-4xl w-full flex-col justify-center origin-top animate-nav-bounce hidden lg:hidden transition-all duration-500">
                <div class="min-h-screen flex flex-col items-center py-7" aria-label="mobile">
                    <a href="#s1" class="w-full text-center py-5 hover:opacity-75">Home</a>
                    <a href="partners.php" class="w-full text-center py-5 hover:opacity-75">Partners</a>
                    <a href="#s2" class="w-full text-center py-5 hover:opacity-75">About</a>
                    <a href="#s3" class="w-full text-center py-5 hover:opacity-75">Features</a>
                    <a href="#s5" class="w-full text-center py-5 hover:opacity-75">Details</a>
                    <a href="#s6" class="w-full text-center py-5 hover:opacity-75">Contact Us</a>
                    <a href="customer/registerCustomer.php" class="w-full text-center py-5 hover:opacity-75">Sign Up</a>
                    <a href="customer/loginCustomer.php" class="w-full text-center py-5 hover:opacity-75">Login</a>
                </div>
            </div>
        </div>

    </nav>

    <section id="s1" class="sect s1 relative h-fit 3k:h-fit bg-cover bg-home-small md:bg-home-large text-zinc-900 3k:flex justify-center items-center">

        <div class="grid grid-cols-8 gap-8 h-full py-28 lg:py-36 xl:py-40 3xl:py-48 3k:py-60 4k:py-40 px-5 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px]">

            <div class="col-start-2 col-span-6 md:col-start-3 md:col-span-4 lg:col-start-3 lg:col-span-4 ">
                <div class="animate-zoom-in text-zinc-600 text-center">
                    <h1 class="text-xl lg:text-3xl 3xl:text-4xl font-semibold md:font-normal
                    before:content-[''] lg:before:w-20 3xl:before:w-40 before:h-px before:bg-zinc-300 before:inline-block before:mt-1 before:ml-2
                    after:content-[''] lg:after:w-20 3xl:after:w-40 after:h-px after:bg-zinc-300 after:inline-block after:mt-1 after:mr-2
                    ">
                        Hello! My name is
                    </h1>

                    <div class="relative mt-1 sm:mt-4 md:mt-7 lg:mt-8 3xl:mt-16 3k:mt-5">
                        <svg class="block stroke-zinc-700 stroke-2 fill-transparent animate-stroke-dashoffset scale-120 sm:scale-110 md:scale-120 lg:scale-100 3xl:scale-105 h-44 sm:h-52 md:h-56 lg:h-72 xl:h-80 3xl:h-96 3k:h-80" width="100%" preserveAspectRatio="xMidYMid meet" x="0" y="0" viewBox="-13 38 630 10">
                            <text x="0" y="0" class="text-9xl font-allura">Mark Arjay</text>
                            <text x="100" y="120" class="text-9xl font-allura">Guilang</text>
                        </svg>
                    </div>

                    <h2 class="text-lg md:text-xl lg:text-3xl 3xl:text-4xl font-normal mt-1 sm:mt-4 md:mt-6 lg:mt-8 3xl:mt-16 3k:mt-5">I am a Web Developer</h2>
                </div>
            </div>

            <svg class="wave-group absolute block bottom-0 left-0 w-full h-16 z-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" class="" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" shape-rendering="auto">
                </defs>
                <g class="animate-wave1">
                    <use xlink:href="#wave-path" x="50" y="3" stroke="rgb(82 82 91 / var(--tw-text-opacity))" stroke-opacity="0.2" fill="rgba(0,0,0, .1)" shape-rendering="optimizeQuality">
                </g>
                <g class="animate-wave2">
                    <use xlink:href="#wave-path" x="50" y="0" stroke="rgb(82 82 91 / var(--tw-text-opacity))" stroke-opacity="0.4" fill="rgba(135,135,135, .2)" shape-rendering="optimizeQuality">
                </g>
                <g class="animate-wave3">
                    <use xlink:href="#wave-path" x="50" y="7" stroke="rgb(82 82 91 / var(--tw-text-opacity))" stroke-opacity="0.6" fill="#fff" shape-rendering="optimizeQuality">
                </g>
            </svg>
        </div>
    </section>

    <section id="s2" class="sect s2 about-section relative h-fit lg:h-screen 3k:h-fit text-center sm:text-left bg-white lg:flex justify-center items-center">
        <div class="relative h-full py-3 md:py-8  px-7 lg:px-10 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px] flex justify-start lg:justify-center items-center">

            <div class="relative py-4 md:py-8 lg:py-10 px-2 md:px-10">
                <div class="py-0 3k:py-3 text-start lg:text-right lg:flex justify-end items-end">
                    <h3 id="about-me" class="lg:absolute lg:translate-y-5 3xl:translate-y-20 3k:-translate-y-5 pointer-events-none z-0 text-6xl md:text-7xl lg:text-[12rem] 3xl:text-[18rem] font-bold text-zinc-300/40 mb-4 transition-all duration-700
                    before:content-['About'] before:rounded before:absolute before:-translate-x-1 md:before:-translate-x-4 before:font-outline-1 before:text-transparent
                    before:-translate-y-1 md:before:-translate-y-3 before:transition-all before:duration-500 left-0 opacity-0">
                        About
                    </h3>
                    <p class="text-zinc-700 text-2xl md:text-3xl lg:text-4xl 3xl:text-5xl lg:w-10/12 tracking-wider font-black z-10" data-aos="fade-left">
                        I'm a full stack web developer that is passionate in developing robust and responsive
                        web solutions and is excited to bring my skills and experience to new challenges.
                    </p>
                </div>
            </div>
            <!-- <div class="relative col-start-1 col-span-7 md:col-span-4 lg:col-span-5 flex justify-start lg:justify-center items-center text-start py-4 lg:py-10 px-2 md:px-10">
                <div class="py-0 md:py-8 3k:py-3 3k:text-xl" data-aos="fade-right">
                    <h3 id="about-me" class="pointer-events-none z-0 text-5xl md:text-7xl lg:text-9xl font-bold text-zinc-400/40 mb-4 transition-all
                    before:content-['About'] before:rounded before:absolute before:-translate-x-1 md:before:-translate-x-4 before:font-outline-1 before:text-transparent
                    before:-translate-y-1 md:before:-translate-y-3 before:transition-all before:duration-500 
                    after:content-[''] after:w-24 lg:after:w-56 after:h-px lg:after:h-1 after:bg-emerald-400/60 after:inline-block after:mt-1 after:mr-2">
                        About
                    </h3>
                    <p class="text-zinc-700 text-xl md:text-2xl 3xl:text-3xl tracking-wider font-black z-10">
                        I'm a full stack web developer, I specialize in creating dynamic and engaging websites using various technologies
                        and best practices. My portfolio showcases a range of projects, from simple to complex web applications,
                        that demonstrate my expertise in front-end and back-end technologies. I am passionate in developing robust and responsive
                        web solutions and I am excited to bring my skills and experience to new challenges.
                    </p>
                </div>
            </div>

            <div class="relative col-start-1 col-span-7 md:col-span-3 lg:col-span-2 order-first md:order-last flex justify-start lg:justify-center items-center py-4 lg:py-10 px-2 md:px-10">
                <div class="py-0 lg:py-8 3k:py-3 3k:text-xl flex justify-center items-center">
                    <img src="images/profile/test-3.png" class="w-2/4 md:w-full " alt="" data-aos="fade-left">
                </div>
            </div> -->

            <!-- <div class="relative">
                <canvas id="canvas" class="animate-zoom-in  absolute w-40 h-40 bottom-0 left-0 transition-all"></canvas>
            </div> -->
        </div>
    </section>

    <section id="s3" class="sect s3 relative h-fit text-center sm:text-left bg-skill-large bg-cover bg-fixed 3k:flex justify-center items-center">
        <div class="relative grid grid-cols-7 gap-3 lg:gap-8 h-full py-3 md:py-8 px-14 lg:px-16 3xl:px-24 3k:px-10 3k:w-[1320px] 3k:max-w-[1320px]">

            <div class="relative col-start-1 col-span-7 text-start pt-24 pb-36 md:py-24 px-2 md:px-10">
                <div class="py-10">
                    <h3 id="about-me" class="text-center text-7xl md:text-8xl lg:text-[9rem] font-bold text-white mb-4 transition-all
                    before:content-['Skills'] before:rounded before:absolute before:-translate-x-1 md:before:-translate-x-4 before:font-outline-2 before:text-transparent
                    before:-translate-y-1 md:before:-translate-y-3 before:transition-all before:duration-500" data-aos="fade-right" data-aos-delay="50">
                        Skills
                    </h3>
                    <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 3xl:grid-cols-9 gap-2 text-white text-5xl md:text-6xl lg:text-7xl 3xl:text-8xl mt-0 md:mb-10 md:mt-5 lg:mt-0 lg:mb-14 3k:mb-20" data-aos="fade-left" data-aos-delay="50">

                        <div class="col-auto lg:mt-4">
                            <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out" data-aos="zoom-in" data-aos-delay="50">
                                <i class="devicon-html5-plain rounded-full p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                            </div>
                        </div>
                        <div class="col-auto lg:mt-4">
                            <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out" data-aos="zoom-in" data-aos-delay="50">
                                <i class="devicon-css3-plain rounded-full p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                            </div>
                        </div>
                        <div class="col-auto lg:mt-4">
                            <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out" data-aos="zoom-in" data-aos-delay="50">
                                <i class="devicon-javascript-plain rounded-full p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                            </div>
                        </div>
                        <div class="col-auto lg:mt-4">
                            <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out" data-aos="zoom-in" data-aos-delay="50">
                                <i class="devicon-php-plain rounded-full p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                            </div>
                        </div>
                        <div class="col-auto lg:mt-4">
                            <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out" data-aos="zoom-in" data-aos-delay="50">
                                <i class="devicon-mysql-plain-wordmark rounded-full p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                            </div>
                        </div>
                        <div class="col-auto lg:mt-4">
                            <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out" data-aos="zoom-in" data-aos-delay="50">
                                <i class="devicon-laravel-plain rounded-full p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                            </div>
                        </div>
                        <div class="col-auto lg:mt-4">
                            <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out" data-aos="zoom-in" data-aos-delay="50">
                                <i class="devicon-heroku-original rounded-full p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                            </div>
                        </div>
                        <div class="col-auto lg:mt-4">
                            <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out" data-aos="zoom-in" data-aos-delay="50">
                                <i class="devicon-bootstrap-plain rounded-full p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                            </div>
                        </div>
                        <div class="col-auto lg:mt-4">
                            <div class="icon-box p-5 flex justify-center transition duration-75 ease-in-out" data-aos="zoom-in" data-aos-delay="50">
                                <i class="devicon-tailwindcss-plain rounded-full p-2 duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <img src="images/skills-bg/torn-1-min.png" class="absolute top-0 left-0 w-full h-44 " alt="">
        <img src="images/skills-bg/torn-2-min.png" class="absolute bottom-0 left-0 w-full h-56" alt="">
    </section>

    <section id="projects" class="sect projects h-fit 3k:flex justify-center items-center">
        <div class="px-7 md:px-20 relative h-full 3k:w-[1320px] 3k:max-w-[1320px]">

            <div data-aos="fade-right">
                <h3 id="about-me" class="z-0 text-7xl md:text-9xl font-bold text-zinc-500/40 mb-4 transition-all
                    before:content-['Projects'] before:rounded before:absolute before:-translate-x-1 md:before:-translate-x-4 before:font-outline-1 before:text-transparent
                    before:-translate-y-1 md:before:-translate-y-3 before:transition-all before:duration-500 ">
                    Projects
                </h3>
            </div>

        </div>
    </section>

    <section id="s4" class="sect s4 relative h-fit text-center sm:text-left bg-white 3k:flex justify-center items-center">
        <div class="grid grid-cols-7 gap-3 lg:gap-8 h-full top-10 py-3 md:py-8 lg:py-0 lg:pt-12 px-7 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px]">

            <div class="col-start-1 col-span-7 lg:col-span-3 h-full">
                <div class="lg:h-screen lg:sticky top-0 " data-aos="fade-right" data-aos-delay="450">
                    <h1 class="lg:absolute top-20 text-5xl ">01</h1>
                    <div class="lg:absolute text-5xl inset-y-2/4 -mt-24 h-fit">
                        <h1 class="text-6xl font-extrabold">Omnibus</h1>
                        <h1 class=" text-5xl">Thesis Project/ Programmer/ Developer</h1>
                        <h1 class=" text-5xl">Online P2P bus seat booking</h1>
                        <div class="text-lg-start mt-5 mb-10 md:inline-flex">
                            <div class="md:mr-2">
                                <a href="" class="text-white text-3xl 3k:text-4xl py-2 px-10 bg-emerald-400 rounded-full ">
                                    Open Live
                                </a>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <a href="" class="text-white text-3xl 3k:text-4xl py-2 px-10 bg-emerald-400 rounded-full">
                                    Github
                                </a>
                            </div>
                        </div>
                    </div>
                    <h1 class="absolute text-5xl bottom-3">Web and Mobile</h1>
                </div>
            </div>

            <div class="col-start-1 col-span-7 lg:col-span-4 flex justify-start lg:justify-center items-center text-center md:text-start lg:text-start py-4 lg:py-10 px-2 md:px-10" data-scroll data-scroll-direction="horizontal" data-scroll-speed="3" data-scroll-class="appear" data-scroll-repeat="true">
                <div class="relative pb-24 lg:pb-8 3k:pb-3 3k:text-xl w-full">

                    <!-- <div class="grid grid-cols-2 gap-1"> -->
                    <div class="  border border-red-800 h-96">
                        <img src="images/phone bus.png" class="w-6/12 " alt="">
                    </div>
                    <div class=" border border-red-800 h-96">
                        <img src="images/phone bus.png" class="w-6/12" alt="">
                    </div>
                    <div class=" border border-red-800 h-96">
                        <img src="images/phone bus.png" class="w-6/12" alt="">
                    </div>
                    <div class=" border border-red-800 h-96">
                        <img src="images/phone bus.png" class="w-6/12" alt="">
                    </div>
                    <!-- </div> -->

                </div>
            </div>
        </div>
    </section>

    <section id="s5" class="sect s5 relative h-fit text-center sm:text-left bg-white 3k:flex justify-center items-center ">
        <div class="grid grid-cols-7 gap-3 lg:gap-8 h-full top-10 py-3 md:py-8 lg:py-0 lg:pt-12 px-7 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px]">
            <div class="col-start-1 col-span-7 lg:col-span-3 h-full">
                <div class="lg:h-screen lg:sticky top-0 " data-aos="fade-right" data-aos-delay="450">
                    <h1 class="lg:absolute top-20 text-5xl ">04</h1>
                    <div class="lg:absolute text-5xl inset-y-2/4 -mt-28 h-fit">
                        <h1 class="text-6xl font-extrabold">Quizam</h1>
                        <h1 class=" text-5xl">Programmer/ Developer</h1>
                        <div class="text-lg-start mt-5 mb-10 md:inline-flex">
                            <div class="md:mr-2">
                                <a href="http://reinventedcoach.com/index" class="text-white text-3xl 3k:text-4xl py-2 px-10 bg-emerald-400 rounded-full ">
                                    Open Live
                                </a>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <a href="" class="text-white text-3xl 3k:text-4xl py-2 px-10 bg-emerald-400 rounded-full">
                                    Github
                                </a>
                            </div>
                        </div>
                    </div>
                    <h1 class="absolute text-5xl bottom-3">Web</h1>
                </div>
            </div>

            <div class="col-start-1 col-span-7 lg:col-span-4 flex justify-start lg:justify-center items-center text-center md:text-start lg:text-start py-4 lg:py-10 px-2 md:px-10">
                <div class="pb-24 lg:pb-8 3k:pb-3 3k:text-xl">
                    <h3 class="text-3xl font-bold text-dark-blue mb-4">For he who is in the pursuit of pleasures should avoid something</h3>
                    <p class="text-zinc-600">
                        As a full stack web developer, I specialize in creating dynamic and engaging websites using various technologies
                        and best practices. My portfolio showcases a range of projects, from simple brochure websites to complex web applications,
                        that demonstrate my expertise in front-end and back-end technologies. I am passionate about developing robust and responsive
                        web solutions and staying up-to-date with the latest web development trends.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore hic repellat blanditiis facilis debitis a placeat natus, quidem fugiat, ea voluptates voluptate veritatis repellendus corrupti rem sit, asperiores assumenda mollitia omnis veniam ad at aliquid. Sunt aliquid repellat a accusamus illum tenetur ducimus perferendis placeat possimus voluptas quam, repudiandae at debitis est expedita assumenda cupiditate voluptates blanditiis. Doloremque vitae sunt tempora odit similique sed molestias sequi. Quos esse ab perspiciatis error deserunt nam perferendis voluptatem maxime earum molestiae quod similique impedit, id voluptatibus vel atque? Laudantium perferendis dolore, saepe facilis quia rerum harum eius, vitae atque amet non veritatis! Ab perferendis labore illo eligendi sed sunt minus vel tempora dolorem neque nisi quia, consequatur cumque, repellendus quasi facilis minima. Beatae, ipsa minima culpa dicta porro nisi? Quo officia quis nisi iure qui voluptatum omnis inventore temporibus velit aliquid natus, officiis dolorum ducimus eveniet fugit maiores eos aliquam veritatis debitis placeat magnam accusamus totam? Placeat consectetur illum molestias, dolore consequatur dicta laboriosam, sed recusandae quidem blanditiis culpa corporis voluptatum nam est autem odio aut possimus similique assumenda? Iusto corporis officiis quas rerum. Rem, repellat tempore? Quisquam itaque eligendi nisi, omnis recusandae doloremque enim delectus placeat corrupti architecto quia rem explicabo provident!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores velit ea repellat maxime obcaecati voluptates odio qui illum pariatur, explicabo itaque laudantium similique nam provident. Eligendi ab perferendis soluta obcaecati enim veritatis nostrum necessitatibus vero error molestias possimus quidem velit, cum tempore sapiente, beatae ut, voluptates nemo. Adipisci expedita deleniti facere rem eaque ipsam quas illum, vero blanditiis totam inventore a vel vitae odio obcaecati doloribus nisi nam. Earum at exercitationem, magni eum qui illum eius soluta mollitia. A, libero voluptate tempore consequatur nulla eaque ex at, commodi rem excepturi eveniet earum, quaerat tempora eligendi nisi exercitationem dolorem dicta enim atque culpa quos quam sunt. Blanditiis, beatae? Ullam doloribus veritatis, dolorem obcaecati fugiat, nam pariatur provident temporibus harum odit dignissimos voluptates! Eum corrupti, at veritatis id nihil, dolores ullam excepturi, provident voluptates earum dolorem velit. Veritatis sed vero laborum consequuntur soluta labore qui quibusdam laudantium sunt placeat laboriosam unde accusamus ipsum exercitationem asperiores, tempore atque hic voluptate magni eius in totam quod, praesentium rem? Vel, dolor at! Fugiat id ut, consequatur ipsa iure dolores? Officiis provident enim ducimus, adipisci quia eligendi reprehenderit mollitia voluptatem veritatis consequuntur? Ducimus dicta deleniti error. Expedita asperiores aliquid iste quisquam modi sequi laudantium hic! Animi voluptate similique a, rerum excepturi inventore eum exercitationem voluptatum praesentium tenetur accusamus enim esse veniam unde aut culpa perferendis quasi omnis eos ipsum. Ea natus hic esse explicabo, nesciunt sunt dicta, quas libero velit asperiores, ab et? Unde tempora modi provident culpa numquam aperiam voluptates voluptatum et eveniet officia a architecto corporis illum hic soluta vel eos repellendus, amet quibusdam nesciunt optio illo? Laborum dignissimos exercitationem voluptate error, fuga nemo minus maxime voluptates, voluptatibus, obcaecati et! Laboriosam eveniet eligendi voluptas repellendus maiores voluptatum, voluptate, voluptatem quis iste est molestias facere rerum quisquam temporibus soluta. Ad commodi ea numquam quo nesciunt inventore deleniti, tempore fugiat modi repudiandae esse suscipit quae natus eligendi vel fuga consectetur qui aspernatur non iure sunt quibusdam cum nemo id. Eligendi eum, quam ratione in corporis velit? Repellat ratione exercitationem natus quam vitae, dolores at unde alias molestias aspernatur et eius voluptas sed ipsum consectetur est quis corrupti sint quidem laboriosam. Illo impedit aut itaque. Incidunt veritatis eaque nemo nam, autem fuga laborum alias, ex est ab natus quisquam amet similique consectetur voluptatibus, facilis exercitationem suscipit repudiandae placeat rem? Explicabo distinctio vero, modi odio dicta magnam voluptate rem earum eum voluptatum, vitae accusamus nam dolor reiciendis placeat.</p>
                    <div class="mt-10">
                        <div class="float-none md:float-left lg:float-left w-full md:w-16 lg:w-16 h-16 text flex md:block lg:block justify-center items-center">
                            <div class="flex justify-center items-center w-16 h-full border-2 border-emerald-400 text-emerald-400 rounded-full transition duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                <i class="bx bx-rocket text-3xl"></i>
                            </div>
                        </div>
                        <h4 class="ml-0 md:ml-20 lg:ml-20 mb-2 mt-3 md:mt-0 lg:mt-0 font-bold text-lg 3k:text-xl"><a href="" class="text-zinc-800 transition duration-75 ease-in-out hover:text-emerald-300">Fast Booking</a></h4>
                        <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-20 text-sm 3k:text-lg leading-6 text-zinc-600">
                            As a full stack web developer, I possess a diverse set of skills that allows me to handle all aspects of web development,
                            from the front-end user interface to the back-end logic and database. My portfolio showcases a variety of projects that
                            demonstrate my expertise in technologies such as HTML, CSS, JavaScript, React, Angular, Vue.js, Node.js, and PHP. My experience
                            with different frameworks, libraries, and databases gives me the ability to build efficient and scalable web applications,
                            whether it be a simple brochure website or a complex web application. I am passionate about developing robust and responsive
                            web solutions that deliver a seamless user experience and meet the needs of my clients. I always strive to stay up-to-date
                            with the latest web development trends and technologies and I am excited to bring my skills and experience to new challenges.
                        </p>
                    </div>

                    <div class="mt-10">
                        <div class="float-none md:float-left lg:float-left w-full md:w-16 lg:w-16 h-16 text flex md:block lg:block justify-center items-center">
                            <div class="flex justify-center items-center w-16 md:w-full lg:w-full h-full border-2 border-emerald-400 text-emerald-400 rounded-full transition duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                <i class="bx bx-lock text-3xl"></i>
                            </div>
                        </div>
                        <h4 class="ml-0 md:ml-20 lg:ml-20 mb-2 mt-3 font-bold text-lg 3k:text-xl"><a href="" class="text-zinc-800 transition duration-75 ease-in-out hover:text-emerald-300">Secure Payment</a></h4>
                        <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-20 text-sm 3k:text-lg leading-6 text-zinc-600">
                            As a web developer, I specialize in creating dynamic and engaging websites using the latest technologies and best practices in the industry. My portfolio showcases a diverse range of projects,
                            from simple brochure websites to complex web applications. Each project represents my skills in areas such as HTML, CSS, JavaScript, and responsive design. My experience and expertise in web
                            development have allowed me to deliver high-quality, fully-functional websites that meet the needs of my clients and exceed their expectations. I am passionate about creating beautiful,
                            user-friendly websites and always strive to stay up-to-date with the latest web development trends and technologies.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="s6" class="sect s6 relative h-fit text-center sm:text-left bg-white 3k:flex justify-center items-center">
        <div class="grid grid-cols-7 gap-3 lg:gap-8 h-full top-10 py-3 md:py-8 lg:py-0 lg:pt-12 px-7 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px]">

            <div class="col-start-1 col-span-7 lg:col-span-3 h-full">
                <div class="lg:h-screen lg:sticky top-0 " data-aos="fade-right" data-aos-delay="450">
                    <h1 class="lg:absolute top-20 text-5xl ">02</h1>
                    <div class="lg:absolute text-5xl inset-y-2/4 -mt-40 h-fit">
                        <h1 class="lg:text-6xl font-extrabold">Pangasinan State University Inventory And Planning Of Procurement Plan System</h1>
                        <h1 class=" text-5xl">Programmer/ Developer</h1>
                        <div class="text-lg-start mt-5 mb-10 md:inline-flex">
                            <div class="mt-10 md:mt-0">
                                <a href="" class="text-white text-3xl 3k:text-4xl py-2 px-10 bg-emerald-400 rounded-full">
                                    Github
                                </a>
                            </div>
                        </div>
                    </div>
                    <h1 class="absolute text-5xl bottom-3">Web and Mobile</h1>
                </div>
            </div>

            <div class="col-start-1 col-span-7 lg:col-span-4 flex justify-start lg:justify-center items-center text-center md:text-start lg:text-start py-4 lg:py-10 px-2 md:px-10">
                <div class="relative pb-24 lg:pb-8 3k:pb-3 3k:text-xl">

                    <!-- <div class="grid grid-cols-2 gap-1"> -->
                    <div class="border-2 border-black h-96 mb-5 p-4">
                        <img src="images/psu/psu3-min.PNG" class="h-full w-full object-cover" alt="">
                    </div>
                    <div class="border-2 border-black h-96 mb-5 p-4">
                        <img src="images/psu/psu-min.PNG" class="h-full w-full object-cover" alt="">
                    </div>
                    <div class="border-2 border-black h-96 mb-5 p-4">
                        <img src="images/psu/psu2-min.PNG" class="h-full w-full object-cover" alt="">
                    </div>
                    <!-- </div> -->

                </div>
            </div>
    </section>

    <section id="s7" class="sect s7 relative h-fit text-center sm:text-left bg-white 3k:flex justify-center items-center ">
        <div class="grid grid-cols-7 gap-3 lg:gap-8 h-full top-10 py-3 md:py-8 lg:py-0 lg:pt-12 px-7 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px]">
            <div class="col-start-1 col-span-7 lg:col-span-3 h-full">
                <div class="lg:h-screen lg:sticky top-0 " data-aos="fade-right" data-aos-delay="450">
                    <h1 class="lg:absolute top-20 text-5xl ">03</h1>
                    <div class="lg:absolute text-5xl inset-y-2/4 -mt-28 h-fit">
                        <h1 class="text-6xl font-extrabold">Reinvented Coaching</h1>
                        <h1 class=" text-5xl">Programmer/ Developer</h1>
                        <div class="text-lg-start mt-5 mb-10 md:inline-flex">
                            <div class="md:mr-2">
                                <a href="http://reinventedcoach.com/index" class="text-white text-3xl 3k:text-4xl py-2 px-10 bg-emerald-400 rounded-full ">
                                    Open Live
                                </a>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <a href="" class="text-white text-3xl 3k:text-4xl py-2 px-10 bg-emerald-400 rounded-full">
                                    Github
                                </a>
                            </div>
                        </div>
                    </div>
                    <h1 class="absolute text-5xl bottom-3">Web and Mobile</h1>
                </div>
            </div>

            <div class="col-start-1 col-span-7 lg:col-span-4 flex justify-start lg:justify-center items-center text-center md:text-start lg:text-start py-4 lg:py-10 px-2 md:px-10">
                <div class="pb-24 lg:pb-8 3k:pb-3 3k:text-xl">
                    <h3 class="text-3xl font-bold text-dark-blue mb-4">For he who is in the pursuit of pleasures should avoid something</h3>
                    <p class="text-zinc-600">
                        As a full stack web developer, I specialize in creating dynamic and engaging websites using various technologies
                        and best practices. My portfolio showcases a range of projects, from simple brochure websites to complex web applications,
                        that demonstrate my expertise in front-end and back-end technologies. I am passionate about developing robust and responsive
                        web solutions and staying up-to-date with the latest web development trends.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore hic repellat blanditiis facilis debitis a placeat natus, quidem fugiat, ea voluptates voluptate veritatis repellendus corrupti rem sit, asperiores assumenda mollitia omnis veniam ad at aliquid. Sunt aliquid repellat a accusamus illum tenetur ducimus perferendis placeat possimus voluptas quam, repudiandae at debitis est expedita assumenda cupiditate voluptates blanditiis. Doloremque vitae sunt tempora odit similique sed molestias sequi. Quos esse ab perspiciatis error deserunt nam perferendis voluptatem maxime earum molestiae quod similique impedit, id voluptatibus vel atque? Laudantium perferendis dolore, saepe facilis quia rerum harum eius, vitae atque amet non veritatis! Ab perferendis labore illo eligendi sed sunt minus vel tempora dolorem neque nisi quia, consequatur cumque, repellendus quasi facilis minima. Beatae, ipsa minima culpa dicta porro nisi? Quo officia quis nisi iure qui voluptatum omnis inventore temporibus velit aliquid natus, officiis dolorum ducimus eveniet fugit maiores eos aliquam veritatis debitis placeat magnam accusamus totam? Placeat consectetur illum molestias, dolore consequatur dicta laboriosam, sed recusandae quidem blanditiis culpa corporis voluptatum nam est autem odio aut possimus similique assumenda? Iusto corporis officiis quas rerum. Rem, repellat tempore? Quisquam itaque eligendi nisi, omnis recusandae doloremque enim delectus placeat corrupti architecto quia rem explicabo provident!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores velit ea repellat maxime obcaecati voluptates odio qui illum pariatur, explicabo itaque laudantium similique nam provident. Eligendi ab perferendis soluta obcaecati enim veritatis nostrum necessitatibus vero error molestias possimus quidem velit, cum tempore sapiente, beatae ut, voluptates nemo. Adipisci expedita deleniti facere rem eaque ipsam quas illum, vero blanditiis totam inventore a vel vitae odio obcaecati doloribus nisi nam. Earum at exercitationem, magni eum qui illum eius soluta mollitia. A, libero voluptate tempore consequatur nulla eaque ex at, commodi rem excepturi eveniet earum, quaerat tempora eligendi nisi exercitationem dolorem dicta enim atque culpa quos quam sunt. Blanditiis, beatae? Ullam doloribus veritatis, dolorem obcaecati fugiat, nam pariatur provident temporibus harum odit dignissimos voluptates! Eum corrupti, at veritatis id nihil, dolores ullam excepturi, provident voluptates earum dolorem velit. Veritatis sed vero laborum consequuntur soluta labore qui quibusdam laudantium sunt placeat laboriosam unde accusamus ipsum exercitationem asperiores, tempore atque hic voluptate magni eius in totam quod, praesentium rem? Vel, dolor at! Fugiat id ut, consequatur ipsa iure dolores? Officiis provident enim ducimus, adipisci quia eligendi reprehenderit mollitia voluptatem veritatis consequuntur? Ducimus dicta deleniti error. Expedita asperiores aliquid iste quisquam modi sequi laudantium hic! Animi voluptate similique a, rerum excepturi inventore eum exercitationem voluptatum praesentium tenetur accusamus enim esse veniam unde aut culpa perferendis quasi omnis eos ipsum. Ea natus hic esse explicabo, nesciunt sunt dicta, quas libero velit asperiores, ab et? Unde tempora modi provident culpa numquam aperiam voluptates voluptatum et eveniet officia a architecto corporis illum hic soluta vel eos repellendus, amet quibusdam nesciunt optio illo? Laborum dignissimos exercitationem voluptate error, fuga nemo minus maxime voluptates, voluptatibus, obcaecati et! Laboriosam eveniet eligendi voluptas repellendus maiores voluptatum, voluptate, voluptatem quis iste est molestias facere rerum quisquam temporibus soluta. Ad commodi ea numquam quo nesciunt inventore deleniti, tempore fugiat modi repudiandae esse suscipit quae natus eligendi vel fuga consectetur qui aspernatur non iure sunt quibusdam cum nemo id. Eligendi eum, quam ratione in corporis velit? Repellat ratione exercitationem natus quam vitae, dolores at unde alias molestias aspernatur et eius voluptas sed ipsum consectetur est quis corrupti sint quidem laboriosam. Illo impedit aut itaque. Incidunt veritatis eaque nemo nam, autem fuga laborum alias, ex est ab natus quisquam amet similique consectetur voluptatibus, facilis exercitationem suscipit repudiandae placeat rem? Explicabo distinctio vero, modi odio dicta magnam voluptate rem earum eum voluptatum, vitae accusamus nam dolor reiciendis placeat.</p>
                    <div class="mt-10" data-scroll data-scroll-speed="3" data-scroll-class="appear" data-scroll-repeat="true">
                        <div class="float-none md:float-left lg:float-left w-full md:w-16 lg:w-16 h-16 text flex md:block lg:block justify-center items-center">
                            <div class="flex justify-center items-center w-16 h-full border-2 border-emerald-400 text-emerald-400 rounded-full transition duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                <i class="bx bx-rocket text-3xl"></i>
                            </div>
                        </div>
                        <h4 class="ml-0 md:ml-20 lg:ml-20 mb-2 mt-3 md:mt-0 lg:mt-0 font-bold text-lg 3k:text-xl"><a href="" class="text-zinc-800 transition duration-75 ease-in-out hover:text-emerald-300">Fast Booking</a></h4>
                        <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-20 text-sm 3k:text-lg leading-6 text-zinc-600">
                            As a full stack web developer, I possess a diverse set of skills that allows me to handle all aspects of web development,
                            from the front-end user interface to the back-end logic and database. My portfolio showcases a variety of projects that
                            demonstrate my expertise in technologies such as HTML, CSS, JavaScript, React, Angular, Vue.js, Node.js, and PHP. My experience
                            with different frameworks, libraries, and databases gives me the ability to build efficient and scalable web applications,
                            whether it be a simple brochure website or a complex web application. I am passionate about developing robust and responsive
                            web solutions that deliver a seamless user experience and meet the needs of my clients. I always strive to stay up-to-date
                            with the latest web development trends and technologies and I am excited to bring my skills and experience to new challenges.
                        </p>
                    </div>

                    <div class="mt-10" data-scroll data-scroll-speed="3" data-scroll-class="appear" data-scroll-repeat="true">
                        <div class="float-none md:float-left lg:float-left w-full md:w-16 lg:w-16 h-16 text flex md:block lg:block justify-center items-center">
                            <div class="flex justify-center items-center w-16 md:w-full lg:w-full h-full border-2 border-emerald-400 text-emerald-400 rounded-full transition duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                <i class="bx bx-lock text-3xl"></i>
                            </div>
                        </div>
                        <h4 class="ml-0 md:ml-20 lg:ml-20 mb-2 mt-3 font-bold text-lg 3k:text-xl"><a href="" class="text-zinc-800 transition duration-75 ease-in-out hover:text-emerald-300">Secure Payment</a></h4>
                        <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-20 text-sm 3k:text-lg leading-6 text-zinc-600">
                            As a web developer, I specialize in creating dynamic and engaging websites using the latest technologies and best practices in the industry. My portfolio showcases a diverse range of projects,
                            from simple brochure websites to complex web applications. Each project represents my skills in areas such as HTML, CSS, JavaScript, and responsive design. My experience and expertise in web
                            development have allowed me to deliver high-quality, fully-functional websites that meet the needs of my clients and exceed their expectations. I am passionate about creating beautiful,
                            user-friendly websites and always strive to stay up-to-date with the latest web development trends and technologies.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="s8" class="sect s8 relative h-fit text-center sm:text-left bg-white 3k:flex justify-center items-center ">
        <div class="grid grid-cols-7 gap-3 lg:gap-8 h-full top-10 py-3 md:py-8 lg:py-0 lg:pt-12 px-7 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px]">
            <div class="col-start-1 col-span-7 lg:col-span-3 h-full">
                <div class="lg:h-screen lg:sticky top-0 " data-aos="fade-right" data-aos-delay="450">
                    <h1 class="lg:absolute top-20 text-5xl ">04</h1>
                    <div class="lg:absolute text-5xl inset-y-2/4 -mt-28 h-fit">
                        <h1 class="text-6xl font-extrabold">Quizam</h1>
                        <h1 class=" text-5xl">Programmer/ Developer</h1>
                        <div class="text-lg-start mt-5 mb-10 md:inline-flex">
                            <div class="md:mr-2">
                                <a href="http://reinventedcoach.com/index" class="text-white text-3xl 3k:text-4xl py-2 px-10 bg-emerald-400 rounded-full ">
                                    Open Live
                                </a>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <a href="" class="text-white text-3xl 3k:text-4xl py-2 px-10 bg-emerald-400 rounded-full">
                                    Github
                                </a>
                            </div>
                        </div>
                    </div>
                    <h1 class="absolute text-5xl bottom-3">Web</h1>
                </div>
            </div>

            <div class="col-start-1 col-span-7 lg:col-span-4 flex justify-start lg:justify-center items-center text-center md:text-start lg:text-start py-4 lg:py-10 px-2 md:px-10">
                <div class="pb-24 lg:pb-8 3k:pb-3 3k:text-xl">
                    <h3 class="text-3xl font-bold text-dark-blue mb-4">For he who is in the pursuit of pleasures should avoid something</h3>
                    <p class="text-zinc-600">
                        As a full stack web developer, I specialize in creating dynamic and engaging websites using various technologies
                        and best practices. My portfolio showcases a range of projects, from simple brochure websites to complex web applications,
                        that demonstrate my expertise in front-end and back-end technologies. I am passionate about developing robust and responsive
                        web solutions and staying up-to-date with the latest web development trends.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore hic repellat blanditiis facilis debitis a placeat natus, quidem fugiat, ea voluptates voluptate veritatis repellendus corrupti rem sit, asperiores assumenda mollitia omnis veniam ad at aliquid. Sunt aliquid repellat a accusamus illum tenetur ducimus perferendis placeat possimus voluptas quam, repudiandae at debitis est expedita assumenda cupiditate voluptates blanditiis. Doloremque vitae sunt tempora odit similique sed molestias sequi. Quos esse ab perspiciatis error deserunt nam perferendis voluptatem maxime earum molestiae quod similique impedit, id voluptatibus vel atque? Laudantium perferendis dolore, saepe facilis quia rerum harum eius, vitae atque amet non veritatis! Ab perferendis labore illo eligendi sed sunt minus vel tempora dolorem neque nisi quia, consequatur cumque, repellendus quasi facilis minima. Beatae, ipsa minima culpa dicta porro nisi? Quo officia quis nisi iure qui voluptatum omnis inventore temporibus velit aliquid natus, officiis dolorum ducimus eveniet fugit maiores eos aliquam veritatis debitis placeat magnam accusamus totam? Placeat consectetur illum molestias, dolore consequatur dicta laboriosam, sed recusandae quidem blanditiis culpa corporis voluptatum nam est autem odio aut possimus similique assumenda? Iusto corporis officiis quas rerum. Rem, repellat tempore? Quisquam itaque eligendi nisi, omnis recusandae doloremque enim delectus placeat corrupti architecto quia rem explicabo provident!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores velit ea repellat maxime obcaecati voluptates odio qui illum pariatur, explicabo itaque laudantium similique nam provident. Eligendi ab perferendis soluta obcaecati enim veritatis nostrum necessitatibus vero error molestias possimus quidem velit, cum tempore sapiente, beatae ut, voluptates nemo. Adipisci expedita deleniti facere rem eaque ipsam quas illum, vero blanditiis totam inventore a vel vitae odio obcaecati doloribus nisi nam. Earum at exercitationem, magni eum qui illum eius soluta mollitia. A, libero voluptate tempore consequatur nulla eaque ex at, commodi rem excepturi eveniet earum, quaerat tempora eligendi nisi exercitationem dolorem dicta enim atque culpa quos quam sunt. Blanditiis, beatae? Ullam doloribus veritatis, dolorem obcaecati fugiat, nam pariatur provident temporibus harum odit dignissimos voluptates! Eum corrupti, at veritatis id nihil, dolores ullam excepturi, provident voluptates earum dolorem velit. Veritatis sed vero laborum consequuntur soluta labore qui quibusdam laudantium sunt placeat laboriosam unde accusamus ipsum exercitationem asperiores, tempore atque hic voluptate magni eius in totam quod, praesentium rem? Vel, dolor at! Fugiat id ut, consequatur ipsa iure dolores? Officiis provident enim ducimus, adipisci quia eligendi reprehenderit mollitia voluptatem veritatis consequuntur? Ducimus dicta deleniti error. Expedita asperiores aliquid iste quisquam modi sequi laudantium hic! Animi voluptate similique a, rerum excepturi inventore eum exercitationem voluptatum praesentium tenetur accusamus enim esse veniam unde aut culpa perferendis quasi omnis eos ipsum. Ea natus hic esse explicabo, nesciunt sunt dicta, quas libero velit asperiores, ab et? Unde tempora modi provident culpa numquam aperiam voluptates voluptatum et eveniet officia a architecto corporis illum hic soluta vel eos repellendus, amet quibusdam nesciunt optio illo? Laborum dignissimos exercitationem voluptate error, fuga nemo minus maxime voluptates, voluptatibus, obcaecati et! Laboriosam eveniet eligendi voluptas repellendus maiores voluptatum, voluptate, voluptatem quis iste est molestias facere rerum quisquam temporibus soluta. Ad commodi ea numquam quo nesciunt inventore deleniti, tempore fugiat modi repudiandae esse suscipit quae natus eligendi vel fuga consectetur qui aspernatur non iure sunt quibusdam cum nemo id. Eligendi eum, quam ratione in corporis velit? Repellat ratione exercitationem natus quam vitae, dolores at unde alias molestias aspernatur et eius voluptas sed ipsum consectetur est quis corrupti sint quidem laboriosam. Illo impedit aut itaque. Incidunt veritatis eaque nemo nam, autem fuga laborum alias, ex est ab natus quisquam amet similique consectetur voluptatibus, facilis exercitationem suscipit repudiandae placeat rem? Explicabo distinctio vero, modi odio dicta magnam voluptate rem earum eum voluptatum, vitae accusamus nam dolor reiciendis placeat.</p>
                    <div class="mt-10">
                        <div class="float-none md:float-left lg:float-left w-full md:w-16 lg:w-16 h-16 text flex md:block lg:block justify-center items-center">
                            <div class="flex justify-center items-center w-16 h-full border-2 border-emerald-400 text-emerald-400 rounded-full transition duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                <i class="bx bx-rocket text-3xl"></i>
                            </div>
                        </div>
                        <h4 class="ml-0 md:ml-20 lg:ml-20 mb-2 mt-3 md:mt-0 lg:mt-0 font-bold text-lg 3k:text-xl"><a href="" class="text-zinc-800 transition duration-75 ease-in-out hover:text-emerald-300">Fast Booking</a></h4>
                        <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-20 text-sm 3k:text-lg leading-6 text-zinc-600">
                            As a full stack web developer, I possess a diverse set of skills that allows me to handle all aspects of web development,
                            from the front-end user interface to the back-end logic and database. My portfolio showcases a variety of projects that
                            demonstrate my expertise in technologies such as HTML, CSS, JavaScript, React, Angular, Vue.js, Node.js, and PHP. My experience
                            with different frameworks, libraries, and databases gives me the ability to build efficient and scalable web applications,
                            whether it be a simple brochure website or a complex web application. I am passionate about developing robust and responsive
                            web solutions that deliver a seamless user experience and meet the needs of my clients. I always strive to stay up-to-date
                            with the latest web development trends and technologies and I am excited to bring my skills and experience to new challenges.
                        </p>
                    </div>

                    <div class="mt-10">
                        <div class="float-none md:float-left lg:float-left w-full md:w-16 lg:w-16 h-16 text flex md:block lg:block justify-center items-center">
                            <div class="flex justify-center items-center w-16 md:w-full lg:w-full h-full border-2 border-emerald-400 text-emerald-400 rounded-full transition duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                <i class="bx bx-lock text-3xl"></i>
                            </div>
                        </div>
                        <h4 class="ml-0 md:ml-20 lg:ml-20 mb-2 mt-3 font-bold text-lg 3k:text-xl"><a href="" class="text-zinc-800 transition duration-75 ease-in-out hover:text-emerald-300">Secure Payment</a></h4>
                        <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-20 text-sm 3k:text-lg leading-6 text-zinc-600">
                            As a web developer, I specialize in creating dynamic and engaging websites using the latest technologies and best practices in the industry. My portfolio showcases a diverse range of projects,
                            from simple brochure websites to complex web applications. Each project represents my skills in areas such as HTML, CSS, JavaScript, and responsive design. My experience and expertise in web
                            development have allowed me to deliver high-quality, fully-functional websites that meet the needs of my clients and exceed their expectations. I am passionate about creating beautiful,
                            user-friendly websites and always strive to stay up-to-date with the latest web development trends and technologies.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="s9" class="sect s9 h-fit 3k:flex justify-center items-center overflow-x-hidden">
        <div class="px-4 md:px-20 lg:px-40 3k:px-5 pb-10 md:pb-14 lg:pb-20 pt-0 md:pt-10 lg:pt-20 relative h-full 3k:w-[1320px] 3k:max-w-[1320px]">

            <div class="pb-10" data-aos="fade-up">
                <h2 class="font-semibold text-sm leading-none mb-1 tracking-widest uppercase text-neutral-400
                after:content-[''] after:w-32 after:h-px after:bg-emerald-400 after:inline-block after:mt-1 after:mr-2">
                    Contact
                </h2>
                <p class="m-0 text-4xl font-bold uppercase text-zinc-800">Contact Me</p>
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
                        <div class="text-center"><button type="submit" class="btn-get-started scrollto py-2 md:py-3 lg:py-3 px-7 bg-emerald-400 rounded-full text-white 3k:text-2xl">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section>

    <footer class="page-footer w-full py-5 px-7 z-50 transition-all duration-500 3k:flex justify-center items-center bg-dark-blue text-zinc-300 bottom-0">
        <div class=" md:flex 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px] text-center md:text-start">
            <div class="text-light mt-3 bg-primary 3k:text-lg">
                © 2021 Copyright
                <a class="text-light font-bold" href="">GMAO</a>
                . All Rights Reserved
            </div>
            <div class="ml-auto">
                <div class="social-links mt-3 text-lg">
                    <a href="#" class="twitter"><i class="bx bxl-twitter px-2 py-2 transition-all rounded-full duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook px-2 py-2 transition-all rounded-full duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram px-2 py-2 transition-all rounded-full duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-google-plus px-2 py-2 transition-all rounded-full duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin px-2 py-2 transition-all rounded-full duration-500 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                </div>
            </div>
        </div>

    </footer>


    <script defer src="app.js"></script>
    <script defer src="anav.js"></script>
    <script src="vendor/aos/dist/aos.js"></script>
    <!-- <script src="animation.js"></script> -->
    <script src="vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <!-- <script src="script/navbar.js"></script> -->
    <script src="vendor/lenis/lenis.js"></script>
    <script defer src="scroll.js"></script>

    <script>
        AOS.init();
        new PureCounter();
    </script>
</body>

</html>