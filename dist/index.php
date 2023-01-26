<!DOCTYPE html>
<html class="scroll-smooth">

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
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/aos/dist/aos.css" rel="stylesheet">
    <link href="vendor/remixIcon/fonts/remixicon.css" rel="stylesheet">
    <link href="vendor/remixIcon/fonts/remixicon.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        .wave-group {
            outline: 1px solid transparent;
            -webkit-backface-visibility: hidden;
            transform: translateZ(0);
            will-change: transform;
            -webkit-perspective: 1000;
        }

        .without-fill {
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke: 2px rgb(113 113 122 / var(--tw-text-opacity));
        }
    </style>
</head>

<body class="m-0 p-0">
    <nav class="navbar fixed w-full py-5 px-7 z-50 transition-all duration-500 3k:flex justify-center items-center ">
        <div class="grid grid-cols-2 lg:grid-cols-3 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px]">
            <a class="col" href="#">
                <span class=" tracking-widest text-3xl md:text-4xl text-zinc-600 font-molle font-black">GMAO</span>
            </a>
            <div class="col text-zinc-900 text-right">
                <button id="nav-btn" class="text-3xl cursor-pointer lg:hidden w-8 h-8">
                    <div id="hamburger" class="bg-zinc-900 rounded absolute w-8 h-1 top-10 -mt-0.5 transition-all duration-500
                            before:content-[''] before:bg-zinc-900 before:rounded before:absolute before:w-8 before:h-1 before:-translate-x-4 
                            before:-translate-y-3 before:transition-all before:duration-500 
                            after:content-[''] after:bg-zinc-900 after:rounded after:absolute after:w-8 after:h-1 after:-translate-x-4 
                            after:translate-y-3 after:transition-all after:duration-500 ">
                    </div>
                </button>
                <div class="hidden lg:flex justify-center items-center">
                    <ul class="flex pt-1 3k:pt-3 text-center">
                        <li class="mx-5 relative">
                            <a class="section-links s1 
                            font-extrabold text-lg 3k:text-xl text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#s1">
                                <small>Home</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links s2
                            font-semibold text-lg 3k:text-xl text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#s2">
                                <small>About</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links s6
                            font-semibold text-lg 3k:text-xl text-zinc-400 transition-all duration-500 pb-1 
                          hover:text-zinc-600 hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-zinc-400
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#s2">
                                <small>Contact</small>
                            </a>
                        </li>
                    </ul>
                    <!-- <a href="customer/loginCustomer.php" class=" font-semibold border border-zinc-500 shadow text-zinc-500 px-5 py-1 mt-1 3k:mt-3 rounded-md ml-3">Login</a> -->
                </div>

            </div>
            <div class="col hidden lg:block text-right">
                <div class="social-links text-2xl">
                    <a href="#" class="facebook"><i class="bx bxs-file-pdf text-zinc-600 px-2 py-2 transition-all rounded-full duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-github text-zinc-600 px-2 py-2 transition-all rounded-full duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-google-plus text-zinc-600 px-2 py-2 transition-all rounded-full duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin text-zinc-600 px-2 py-2 transition-all rounded-full duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
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

    <section id="s1" class="sect s1 relative h-fit lg:h-screen 3k:h-fit bg-cover bg-home-small md:bg-home-large text-zinc-900 pb-24 md:pb-0 lg:pb-0 3k:flex justify-center items-center">

        <div class="lg:grid grid-cols-8 gap-8 h-full py-5 3k:py-60 4k:py-40 px-7 3k:px-5 pt-24 lg:pt-32 pb-0 md:pb-24 lg:pb-0 3k:w-[1320px] 3k:max-w-[1320px]">

            <div class="col-start-1 col-span-8 md:col-start-3 md:col-span-4 lg:col-start-3 lg:col-span-4">
                <div class="animate-zoom-in text-zinc-400 text-center">
                    <h1 class="text-2xl lg:text-3xl font-semibold md:font-semibold">Hi there! I'm</h1>
                    <div class="relative mt-2 lg:mt-16">
                        <!-- <h1 class="text-3xl md:text-4xl lg:text-9xl font-extrabold text-zinc-900 font-allura z-10 ">Mark Arjay Guilang</h1> -->
                        <!-- <h1 class="absolute top-0 text-3xl md:text-4xl lg:text-9xl font-black text-white font-allura z-10 ">Mark Arjay Guilang</h1> -->
                        <svg class="block w-full stroke-zinc-800 stroke-2 fill-transparent animate-stroke-dashoffset" height="270">
                            <text x="60" y="80" class="text-5xl md:text-7xl lg:text-9xl font-allura">Mark Arjay</text>
                            <text x="160" y="210" class="text-5xl md:text-7xl lg:text-9xl font-allura">Guilang</text>
                        </svg>
                        <!-- <svg id="svg-name" class="border-2" viewBox="0 0 200 80" xmlns="http://www.w3.org/2000/svg">
                            <text x="5" y="50" class="text-3xl md:text-3xl lg:text-4xl font-allura">Mark Arjay Guilang</text>
                            <foreignObject x="20" y="0" width="160" height="80">
                                <div class="text-lg lg:text-2xl 3k:text-4xl font-normal text-zinc-800 font-allura " xmlns="http://www.w3.org/1999/xhtml">
                                    Mark Arjay Guilang
                                </div>
                            </foreignObject>
                        </svg> -->
                        <!-- <h1 id="svg-name" class="text-5xl md:text-7xl lg:text-9xl text-zinc-800 font-allura z-0 ">Mark Arjay Guilang</h1> -->
                    </div>
                    <h2 class="text-lg lg:text-2xl 3k:text-3xl font-normal mt-5 md:mt-8 lg:mt-8">a Full Stack Web Developer</h2>
                    <div class="text-lg-start mt-14 mb-10 md:inline-flex">
                        <div class="md:mr-2">
                            <a href="apps/Omnibus.zip" download="filename" class="relative btn-get-started scrollto pb-2 px-12 pt-7 bg-emerald-400 rounded-full ">
                                <span class="absolute -translate-x-1 -translate-y-5 text-sm 3k:text-xl text-zinc-200">For Passenger</span> <span class="text-white text-lg 3k:text-2xl">Download</span>
                            </a>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <a href="apps/Omnibus_conductor.zip" download="filename" class="relative btn-get-started scrollto pb-2 px-12 pt-7 bg-emerald-400 rounded-full">
                                <span class="absolute -translate-x-1 -translate-y-5 text-sm 3k:text-xl text-zinc-200">For Conductor</span> <span class="text-white text-lg 3k:text-2xl">Download</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <canvas id="canvas" class="animate-zoom-in  absolute w-40 h-40 bottom-0 left-0 transition-all"></canvas>

            <svg class="wave-group absolute block bottom-0 left-0 w-full h-16 z-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" class="" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" shape-rendering="auto">
                </defs>
                <g class="animate-wave1">
                    <use xlink:href="#wave-path" x="50" y="3" stroke="black" stroke-opacity="0.2" fill="rgba(0,0,0, .1)" shape-rendering="optimizeQuality">
                </g>
                <g class="animate-wave2">
                    <use xlink:href="#wave-path" x="50" y="0" stroke="black" stroke-opacity="0.4" fill="rgba(135,135,135, .2)" shape-rendering="optimizeQuality">
                </g>
                <g class="animate-wave3">
                    <use xlink:href="#wave-path" x="50" y="7" stroke="black" stroke-opacity="0.6" fill="#fff" shape-rendering="optimizeQuality">
                </g>
            </svg>
        </div>
    </section>

    <section id="s2" class="sect s2 relative h-fit text-center sm:text-left bg-white lg:flex justify-center items-center">
        <div class="grid grid-cols-7 gap-3 lg:gap-8 h-full top-10 py-3 md:py-8 lg:py-0 lg:pt-12 px-7 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px]">
            <div class="col-start-1 col-span-7 lg:col-span-3 flex justify-center lg:justify-start 3k:justify-start items-center " data-scroll data-scroll-direction="horizontal" data-scroll-speed="-3" data-scroll-class="appear" data-scroll-repeat="true">
                <img src="images/phone bus.png" class="w-10/12 md:w-6/12 lg:w-full" alt="">
            </div>

            <div class="col-start-1 col-span-7 lg:col-span-4 flex justify-start lg:justify-center items-center text-center md:text-start lg:text-start py-4 lg:py-10 px-2 md:px-10" data-scroll data-scroll-direction="horizontal" data-scroll-speed="3" data-scroll-class="appear" data-scroll-repeat="true">
                <div class="pb-24 lg:pb-8 3k:pb-3 3k:text-xl">
                    <h3 class="text-3xl font-bold text-dark-blue mb-4">For he who is in the pursuit of pleasures should avoid something</h3>
                    <p class="text-zinc-600">
                        As a full stack web developer, I specialize in creating dynamic and engaging websites using various technologies
                        and best practices. My portfolio showcases a range of projects, from simple brochure websites to complex web applications,
                        that demonstrate my expertise in front-end and back-end technologies. I am passionate about developing robust and responsive
                        web solutions and staying up-to-date with the latest web development trends.
                    </p>

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

    <section id="s6" class="sect s6 h-fit 3k:flex justify-center items-center">
        <div class="px-4 md:px-20 lg:px-40 3k:px-5 pb-10 md:pb-14 lg:pb-20 relative h-full 3k:w-[1320px] 3k:max-w-[1320px]">

            <div class="pb-10" data-aos="fade-up">
                <h2 class="font-semibold text-sm leading-none mb-1 tracking-widest uppercase text-neutral-400
                after:content-[''] after:w-32 after:h-px after:bg-emerald-400 after:inline-block after:mt-1 after:mr-2">
                    Contact
                </h2>
                <p class="m-0 text-4xl font-bold uppercase text-zinc-800">Contact Us</p>
            </div>

            <div class="lg:grid grid-cols-12 gap-4">

                <div class="col-start-1 col-span-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="font-bold text-zinc-800 3k:text-xl">

                        <div class="">
                            <div class="float-left w-16 h-16 text">
                                <div class="flex justify-center items-center w-16 h-full rounded-full transition duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                    <i class="bi bi-geo-alt text-2xl"></i>
                                </div>
                            </div>
                            <h4 class="ml-0 md:ml-20 lg:ml-20 mb-2 mt-3 md:mt-0 lg:mt-0 font-bold text-2xl 3k:text-3xl"><a href="" class=transition duration-75 ease-in-out hover:text-emerald-300">Location:</a></h4>
                            <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-20 text-sm 3k:text-lg leading-6">Rosales, Pangasinan</p>
                        </div>

                        <div class="mt-10">
                            <div class="float-left w-16 h-16 text">
                                <div class="flex justify-center items-center w-16 h-full rounded-full transition duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                    <i class="bi bi-envelope text-2xl"></i>
                                </div>
                            </div>
                            <h4 class="ml-0 md:ml-20 lg:ml-20 mb-2 mt-3 md:mt-0 lg:mt-0 font-bold text-2xl 3k:text-3xl"><a href="" class=transition duration-75 ease-in-out hover:text-emerald-300">Email:</a></h4>
                            <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-20 text-sm 3k:text-lg leading-6">guilangmarkarjay@gmail.com</p>
                        </div>

                        <div class="mt-10">
                            <div class="float-left w-16 h-16 text">
                                <div class="flex justify-center items-center w-16 h-full rounded-full transition duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
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

    <footer class="page-footer w-full py-5 px-7 z-50 transition-all duration-500 3k:flex 3k:justify-center 3k:items-center bg-dark-blue text-zinc-300 bottom-0">
        <div class=" md:flex 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px] text-center md:text-start">
            <div class="text-light py-3 bg-primary 3k:text-lg">
                © 2021 Copyright
                <a class="text-light font-bold" href="">GMAO</a>
                . All Rights Reserved
            </div>
            <div class="ml-auto">
                <div class="social-links mt-3 text-lg">
                    <a href="#" class="twitter"><i class="bx bxl-twitter px-2 py-2 transition-all rounded-full duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook px-2 py-2 transition-all rounded-full duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram px-2 py-2 transition-all rounded-full duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-google-plus px-2 py-2 transition-all rounded-full duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin px-2 py-2 transition-all rounded-full duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white"></i></a>
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

    <script>
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
        }) => {})

        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }

        requestAnimationFrame(raf);

        AOS.init();
        new PureCounter();
    </script>
</body>

</html>