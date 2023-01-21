<!DOCTYPE html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mark Arjay Guilang</title>
    <link href="output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
    </style>
</head>

<body class="m-0 p-0">
    <nav class="navbar fixed w-full py-5 px-5 md:px-20 lg:px-40 z-50 transition-all duration-500 3k:flex 3k:justify-center 3k:items-center ">
        <div class="flex 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px]">
            <a class="" href="#">
                <img src="images/logo.png" class="w-28 md:w-32 lg:w-32 3k:w-40" alt="">
            </a>
            <div class="ml-auto text-white">
                <button id="nav-btn" class="text-3xl cursor-pointer lg:hidden w-8 h-8">
                    <div id="hamburger" class="bg-white rounded absolute w-8 h-1 top-10 -mt-0.5 transition-all duration-500
                            before:content-[''] before:bg-white before:rounded before:absolute before:w-8 before:h-1 before:-translate-x-4 
                            before:-translate-y-3 before:transition-all before:duration-500 
                            after:content-[''] after:bg-white after:rounded after:absolute after:w-8 after:h-1 after:-translate-x-4 
                            after:translate-y-3 after:transition-all after:duration-500 ">
                    </div>
                </button>
                <div class="hidden lg:flex">
                    <ul class="flex pt-1 3k:pt-3">
                        <li class="mx-5 relative">
                            <a class="section-links s1 
                            font-extrabold text-lg 3k:text-xl text-slate-300 transition-all duration-500 pb-1 
                          hover:text-white hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6 active:before:text-white
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#s1">
                                <small>Home</small>
                            </a>
                        </li>
                        <li class="mx-5 relative">
                            <a class="section-links s2
                            font-semibold text-lg 3k:text-xl text-slate-300 transition-all duration-500 pb-1 
                          hover:text-white hover:before:visible hover:before:w-6
                            active:before:visible active:before:w-6
                            before:content-[''] before:absolute before:w-0 before:h-0.5 before:bottom-0.5 before:invisible
                          before:bg-emerald-400 before:transition-all before:duration-500 before:ease-in-out" href="#s2">
                                <small>About</small>
                            </a>
                        </li>
                    </ul>
                    <a href="customer/loginCustomer.php" class="bg-white text-gray-900 px-5 py-1 mt-1 3k:mt-3 rounded-md ml-3 shadow-sm">Login</a>
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

    <section id="s1" class="sect s1 relative h-fit lg:h-screen 3k:h-fit bg-cover bg-home-small md:bg-home-large text-white pb-24 md:pb-0 lg:pb-0 lg:flex justify-center items-center">

        <div class="grid grid-cols-7 gap-8 h-full py-5 3k:py-60 4k:py-40 px-4 md:px-40 lg:px-40 3k:px-5 pt-24 lg:pt-0 pb-0 md:pb-24 lg:pb-0 3k:w-[1320px] 3k:max-w-[1320px]">

            <div class="col-start-1 col-span-7 lg:col-span-4 flex justify-center order-last lg:order-first lg:justify-start items-center">
                <div class="animate-zoom-in w-10/12 md:w-11/12 lg:w-4/5 text-slate-300 text-center lg:text-left">
                    <h1 class="text-3xl md:text-4xl lg:text-6xl font-black ">Hi there! Welcome to <span class="border-b-4 border-emerald-400 text-white">Omnibus</span></h1>
                    <h2 class="text-lg lg:text-2xl 3k:text-3xl font-normal mt-5 md:mt-9 lg:mt-9">A bus seat booking platform for P2P buses</h2>
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
            <div class="col-start-1 col-span-7 lg:col-span-3 flex justify-center lg:justify-end items-center">
                <div class="animate-zoom-in">
                    <img src="images/Artboard 21.png" class="animate-slow-bounce w-52 md:w-72 lg:w-96 " alt="">
                </div>
            </div>

            <canvas id="canvas" class="animate-zoom-in  absolute w-40 h-40 bottom-0 left-0 transition-all"></canvas>

            <svg class="wave-group absolute block bottom-0 left-0 w-full h-16 z-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" class="" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" shape-rendering="auto">
                </defs>
                <g class="animate-wave1">
                    <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)" shape-rendering="optimizeQuality">
                </g>
                <g class="animate-wave2">
                    <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)" shape-rendering="optimizeQuality">
                </g>
                <g class="animate-wave3">
                    <use xlink:href="#wave-path" x="50" y="9" fill="#fff" shape-rendering="optimizeQuality">
                </g>
            </svg>
        </div>
    </section>

    <section id="s2" class="sect s2 relative h-fit text-center sm:text-left bg-white lg:flex justify-center items-center">
        <div class="grid grid-cols-7 gap-3 lg:gap-8 h-full top-10 py-3 md:py-8 lg:py-0 lg:pt-12 px-4 md:px:40 lg:px-20 3k:px-5 3k:w-[1320px] 3k:max-w-[1320px]">
            <div class="col-start-1 col-span-7 lg:col-span-3 flex justify-center lg:justify-start 3k:justify-start items-center " data-scroll data-scroll-direction="horizontal" data-scroll-speed="-3" data-scroll-class="appear" data-scroll-repeat="true">
                <img src="images/phone bus.png" class="w-10/12 md:w-6/12 lg:w-full" alt="">
            </div>

            <div class="col-start-1 col-span-7 lg:col-span-4 flex justify-start lg:justify-center items-center text-center md:text-start lg:text-start py-4 lg:py-10 px-2 md:px-10" data-scroll data-scroll-direction="horizontal" data-scroll-speed="3" data-scroll-class="appear" data-scroll-repeat="true">
                <div class="pb-24 lg:pb-8 3k:pb-3 3k:text-xl">
                    <h3 class="text-3xl font-bold text-dark-blue mb-4">For he who is in the pursuit of pleasures should avoid something</h3>
                    <p class="text-zinc-600">To be a pleasure or an exercise. We are here to reject the accusation. Not the very least, but the times of praise. They are freed from pleasure, but they will suffer bodily pains. They are free to be laborious and there is no obligation to do so. He accepts either with pleasure.</p>

                    <div class="mt-10" data-scroll data-scroll-speed="3" data-scroll-class="appear" data-scroll-repeat="true">
                        <div class="float-none md:float-left lg:float-left w-full md:w-16 lg:w-16 h-16 text flex md:block lg:block justify-center items-center">
                            <div class="flex justify-center items-center w-16 h-full border-2 border-emerald-400 text-emerald-400 rounded-full transition duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                <i class="bx bx-rocket text-3xl"></i>
                            </div>
                        </div>
                        <h4 class="ml-0 md:ml-20 lg:ml-20 mb-2 mt-3 md:mt-0 lg:mt-0 font-bold text-lg 3k:text-xl"><a href="" class="text-zinc-800 transition duration-75 ease-in-out hover:text-emerald-300">Fast Booking</a></h4>
                        <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-20 text-sm 3k:text-lg leading-6 text-zinc-600">The pleasures of the spoiled and corrupted do not foresee the pains and troubles they are about to experience, blinded by lust</p>
                    </div>

                    <div class="mt-10" data-scroll data-scroll-speed="3" data-scroll-class="appear" data-scroll-repeat="true">
                        <div class="float-none md:float-left lg:float-left w-full md:w-16 lg:w-16 h-16 text flex md:block lg:block justify-center items-center">
                            <div class="flex justify-center items-center w-16 md:w-full lg:w-full h-full border-2 border-emerald-400 text-emerald-400 rounded-full transition duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                <i class="bx bx-lock text-3xl"></i>
                            </div>
                        </div>
                        <h4 class="ml-0 md:ml-20 lg:ml-20 mb-2 mt-3 font-bold text-lg 3k:text-xl"><a href="" class="text-zinc-800 transition duration-75 ease-in-out hover:text-emerald-300">Secure Payment</a></h4>
                        <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-20 text-sm 3k:text-lg leading-6 text-zinc-600">But in truth we both accuse those who are worthy of just hatred, who are softened by the flattery of present pleasures</p>
                    </div>

                    <div class="mt-10" data-scroll data-scroll-speed="3" data-scroll-class="appear" data-scroll-repeat="true">
                        <div class="float-none md:float-left lg:float-left w-full md:w-16 lg:w-16 h-16 text flex md:block lg:block justify-center items-center">
                            <div class="flex justify-center items-center w-16 md:w-full lg:w-full h-full border-2 border-emerald-400 text-emerald-400 rounded-full transition duration-75 ease-in-out hover:border-emerald-300 hover:bg-emerald-300 hover:text-white">
                                <i class="bx bx-envelope text-3xl"></i>
                            </div>
                        </div>
                        <h4 class="ml-0 md:ml-20 lg:ml-20 mb-2 mt-3 font-bold text-lg 3k:text-xl"><a href="" class="text-zinc-800 transition duration-75 ease-in-out hover:text-emerald-300">Great Support</a></h4>
                        <p class="px-10 md:px-20 lg:px-0 ml-0 lg:ml-20 text-sm 3k:text-lg leading-6 text-zinc-600">I will explain that the harsher pleasures have a great effect. And he hates the truth. They either leave less or choose all</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="page-footer w-full py-5 px-5 md:px-20 lg:px-40 z-50 transition-all duration-500 3k:flex 3k:justify-center 3k:items-center bg-dark-blue text-zinc-300 bottom-0">
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

        new PureCounter();
    </script>
</body>

</html>