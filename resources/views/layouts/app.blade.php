<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS BERAKAH</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400&display=swap" rel="stylesheet">

</head>

<body class="min-h-screen bg-[#F1F5F9] font-Oxygen w-full overflow-x-hidden">
<header class="relative top-0 left-0 w-full bg-white shadow-lg mx-auto z-900 px-4">
        <nav class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 lg:h-20 flex justify-between  sm:w-[85%] mx-auto h-16 items-center">
            
            <div class="flex w-full h-full justify-between items-center lg:w-auto">
                <a href="/" class="flex space-x-2 items-center">
                    <img src="{{asset('assets/images/favicon.png')}}" class="h-6 xsm:h-8 sm:h-10" alt="">
                    <div class="flex flex-wrap">
                        <span class="w-full text-lg sm:text-xl font-bold text-gray-800">BERAKAH</span>
                        <span class="w-full text-xs font-normal text-primary">Complexe-scolaire</span>
                    </div>
                </a>
                <button id="toogleNav" class="flex lg:hidden flex-wrap w-5 h-5 z-[1050]">
                    <span id="bar-1"
                        class="block inset w-5 h-0.5 rounded-full bg-gray-800 transition duration-400 ease-in"></span>
                    <span id="bar-2"
                        class="block inset w-5 h-0.5 mt-1.5 rounded-full bg-gray-800 transition duration-400 ease-in transform ">
                    </span>
                    <span id="bar-3"
                        class="block inset w-5 h-0.5 mt-1.5 rounded-full bg-gray-800 transition duration-400 ease-in">
                    </span>
                </button>
            </div>
            <div id="overlayMenu" class="opacity-0 overlay fixed top-0 z-[999] w-full h-screen bg-black bg-opacity-60 backdrop-filter blur-md transition-all duration-300 lg:hidden scale-x-0"></div>
            <ul id="navBar" class="fixed bg-white h-full top-0 -left-full w-full xsm:w-4/5 space-y-2 md:w-56 lg:h-auto lg:bg-transparent z-[1000] lg:left-0 lg:w-auto lg:relative lg:z-auto lg:flex lg:space-y-0 lg:space-x-4 text-lg pt-10 px-2 pb-2 xsm:p-4 lg:p-0 transition-all duration-300 lg:items-center">
                <li class="relative">
                    <a href="/"
                        class="relative transition-all before:w-full before:absolute before:bottom-0 before:left-0 before:h-0.5 before:transform before:scale-0 lg:hover:before:scale-100 before:transition hover:before:transition hover:before:duration-300 before:bg-primary duration-300 hover:text-primary block md:flex py-3">Accueil</a>
                </li>
                <li id="mItem_sub" class="relative group">
                    <a id="openSubMenu" href="#"
                        class="relative transition-all before:w-full before:absolute before:bottom-0 before:left-0 before:h-0.5 before:transform before:scale-0 lg:hover:before:scale-100 before:transition hover:before:transition hover:before:duration-300 before:bg-primary duration-300 hover:text-primary block md:flex py-3">
                        <span class="flex justify-between w-full items-center">
                            <span>Apropos</span>
                            <span id="angl_subm"  class="group lg:hidden lg:group-hover:rotate-180 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="pl-1 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu relative h-0 w-full pl-5 py-0 pr-2 bg-transparent lg:absolute lg:top-full lg:w-52 lg:p-3 lg:rounded-lg lg:h-auto lg:shadow-lg transition-all duration-500 lg:bg-white lg:opacity-0 lg:translate-y-8 lg:group-hover:opacity-100 lg:group-hover:translate-y-0 overflow-hidden lg:border block">
                        <li class="block">
                            <a href="{{route('pages.about')}}" class="text-gray-700 w-full transition duration-300 hover:text-primary text-lg" >
                                A propos de nous
                            </a>
                        </li>
                        <li class="block">
                            <a href="{{route('pages.under')}}" class="text-gray-700 w-full transition duration-300 hover:text-primary text-lg" >
                                Admission
                            </a>
                        </li>
                        <li class="block">
                            <a href="{{route('pages.under')}}" class=" text-gray-700 w-full transition duration-300 hover:text-primary text-lg" >
                                Inovations
                            </a>
                        </li>
                        

                    </ul>

                </li>
                <li id="mItem_sub" class="relative group">
                    <a id="openSubMenu" href="#"
                        class="relative transition-all before:w-full before:absolute before:bottom-0 before:left-0 before:h-0.5 before:transform before:scale-0 lg:hover:before:scale-100 before:transition hover:before:transition hover:before:duration-300 before:bg-primary duration-300 hover:text-primary block md:flex py-3">
                        <span class="flex justify-between w-full items-center">
                            <span>Reservation</span>
                            <span id="angl_subm"  class="group lg:hidden lg:group-hover:rotate-180 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="pl-1 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu relative h-0 w-full pl-5 py-0 pr-2 bg-transparent lg:absolute lg:top-full lg:w-52 lg:p-3 lg:rounded-lg lg:h-auto lg:shadow-lg transition-all duration-500 lg:bg-white lg:opacity-0 lg:translate-y-8 lg:group-hover:opacity-100 lg:group-hover:translate-y-0 overflow-hidden lg:border block">
                        <li class="block">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScjrkZQ3RaojYiCUN5m5LSDrprD9motavd8TiyM3_jgDUrpQg/viewform?usp=pp_url"
                        class="relative transition-all before:w-full before:absolute before:bottom-0 before:left-0 before:h-0.5 before:transform before:scale-0 lg:hover:before:scale-100 before:transition hover:before:transition hover:before:duration-300 before:bg-primary duration-300 hover:text-primary block md:flex py-3">Inscription</a>
                        </li>
                        <li class="block">
                            <a href="{{route('pages.under')}}" class="text-gray-700 w-full transition duration-300 hover:text-primary text-lg" >
                                Fiches 
                            </a>
                        </li>
                        <li class="block">
                            <a href="{{route('pages.under')}}" class=" text-gray-700 w-full transition duration-300 hover:text-primary text-lg" >
                                Dossiers
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="relative">
                    <a href="{{route('pages.options')}}"
                        class="relative transition-all before:w-full before:absolute before:bottom-0 before:left-0 before:h-0.5 before:transform before:scale-0 lg:hover:before:scale-100 before:transition hover:before:transition hover:before:duration-300 before:bg-primary duration-300 hover:text-primary block md:flex py-3">Options</a>
                </li>

                <li class="relative">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScjrkZQ3RaojYiCUN5m5LSDrprD9motavd8TiyM3_jgDUrpQg/viewform?usp=pp_url"
                        class="relative transition-all before:w-full before:absolute before:bottom-0 before:left-0 before:h-0.5 before:transform before:scale-0 lg:hover:before:scale-100 before:transition hover:before:transition hover:before:duration-300 before:bg-primary duration-300 hover:text-primary block md:flex py-3">Inscription</a>
                </li>
                <li class="relative">
                    <a href="{{route('pages.actu')}}"
                        class="relative transition-all before:w-full before:absolute before:bottom-0 before:left-0 before:h-0.5 before:transform before:scale-0 lg:hover:before:scale-100 before:transition hover:before:transition hover:before:duration-300 before:bg-primary duration-300 hover:text-primary block md:flex py-3">Actualités</a>
                </li>
                <li class="relative">
                    <a href="{{route('pages.galery')}}"
                        class="relative transition-all before:w-full before:absolute before:bottom-0 before:left-0 before:h-0.5 before:transform before:scale-0 lg:hover:before:scale-100 before:transition hover:before:transition hover:before:duration-300 before:bg-primary duration-300 hover:text-primary block md:flex py-3">Gallerie</a>
                </li>
                <li class="relative">
                    <a href="{{route('pages.under')}}"
                        class="block w-full text-center px-5 py-3 md:text-md text-sm bg-primary hover:bg-green-500 focus:bg-blue-500 transition duration-300 text-white rounded-md font-semibold lg:px-3 xl:px-5">Nous
                        contacter</a>
                </li>
            </ul>
        </nav>
    </header>
        @yield('content')
    
     <!-- ======= Footer ======= -->
<!-- gap-2 grid md:grid-cols-2 lg:grid-cols-3 overflow-x-hidden -->
        <footer
                class="py-10 w-full overflow-hidden bg-[#211f36] opacity-0 scale-x-50 scale-y-50 item-blog transition duration-300">
                <div class="container px-3 xsm:px-4 md:px-6 lg:px-10 2xl:px-12">
                    <div class="w-full py-2 flex flex-wrap lg:flex-nowrap">
                        <div class="w-full lg:w-2/3 mb-4 lg:mb-0">
                            <h1 class="text-gray-100 text-xl font-medium mb-3 lg:mb-4">Nos adresses</h1>
                            <div class="grid gap-3 sm:gap-x-4 sm:gap-y-5 md:gap-6 lg:gap-7 sm:grid-cols-2 md:grid-cols-3">

                                <div class="col-span-1 flex flex-nowrap xsm:space-x-2">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-gray-300 h-6 w-6 xsm:h-8 xsm:w-8"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div class="block">
                                        <span class="block text-lg font-medium text-gray-300 mb-2">Adresse physique</span>
                                        <div class="block">
                                            <span class="text-base font-normal text-gray-500 text-justify">Quartier Gambela III,
                                                Commune Annexe, Ville de Lubumbashi</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-1 flex flex-nowrap xsm:space-x-2">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-gray-300 h-6 w-6 xsm:h-8 xsm:w-8"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div class="block">
                                        <span class="text-lg font-medium text-gray-300 mb-2">Numero Telephone</span>
                                        <div class="flex flex-wrap">
                                            <span class="text-base font-normal text-gray-500 text-justify">+243 97 10 67 495  <br> +243 90004583 </br>+243 978503377</span>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-1 flex flex-nowrap xsm:space-x-2">
                                    <div class="flex ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-gray-300 h-6 w-6 xsm:h-8 xsm:w-8"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                        </svg>
                                    </div>
                                    <div class="block">
                                        <span class="block text-lg font-medium text-gray-300 mb-2">Adresse electronique</span>
                                        <div class="block w-full">
                                            <span
                                                class="text-base font-normal text-gray-500 text-justify">info@csberakah.org</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/3">
                            <div class="flex flex-wrap w-full">
                                <h1 class="block text-gray-100 text-xl font-medium mb-3 lg:mb-4">News-letter</h1>
                                <p class="block w-full text-base font-normal text-gray-500 text-justify mb-3">Pour rester
                                    informer, souscrivez à la boite à message.</p>
                                <div class="flex w-full">
                                    <form class="relative w-full">
                                        <div class="flex w-full">
                                            <input type="email"
                                                class="font-normal text-sm text-gray-400 placeholder:text-gray-500 bg-gray-700 border-t-2 border-b-2 border-l-2 border-gray-800 px-4 py-2 rounded-l-2xl outline-none w-full"
                                                placeholder="Ex  : info@csberakah.org" required>
                                            <button
                                                class="rounded-r-2xl bg-gray-800 px-3 border-t-2 border-b-2 border-r-2 border-gray-800 text-base font-medium text-gray-300">Souscrire</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-gray-500 w-full flex pt-3 flex-wrap lg:flex-nowrap md:justify-between">
                        <div class="w-full md:w-1/2 lg:w-1/3">
                            <ul class="flex flex-wrap justify-center md:justify-start">
                                <li class="px-3 py-2">
                                    <a href="index.php"
                                        class="text-gray-100 font-medium text-lg transition duration-300 hover:text-gray-200">Accueil</a>
                                </li>
                                <li class="px-3 py-2">
                                    <a href="about.php"
                                        class="text-gray-100 font-medium text-lg transition duration-300 hover:text-gray-200">A
                                        propos</a>
                                </li>
                                <li class="px-3 py-2">
                                    <a href="communique.html"
                                        class="text-gray-100 font-medium text-lg transition duration-300 hover:text-gray-200">Actualités</a>
                                </li>
                                <li class="px-3 py-2">
                                    <a href="galerie.html"
                                        class="text-gray-100 font-medium text-lg transition duration-300 hover:text-gray-200">Galerie</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3">
                            <ul class="flex flex-wrap w-full justify-center md:justify-end lg:justify-center">
                                <li class="px-3 py-2">
                                    <a href="https://web.facebook.com/Complexe-Scolaire-Berakah-265649521982738" 
                                        class="text-gray-100 font-medium text-lg transition duration-300 hover:text-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                            class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="px-3 py-2">
                                    <a href=""
                                        class="text-gray-100 font-medium text-lg transition duration-300 hover:text-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                            class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="px-3 py-2">
                                    <a href=""
                                        class="text-gray-100 font-medium text-lg transition duration-300 hover:text-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                            class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="w-full flex justify-center lg:justify-end lg:w-1/3">
                            <span class="text-lg text-gray-100 font-medium">&COPY; <a
                                    href="https://web.facebook.com/Complexe-Scolaire-Berakah-265649521982738" class="text-gray-500 font-bold">CS BERAKAH
                                    </a>
                                Tous droits reservés. </span>
                        </div>
                    </div>

                </div>
                
            </footer>

            <!--Start of Tawk.to Script-->

        <!-- <div></div> -->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/61fa6f5eb9e4e21181bd180c/1fqt462tt';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 5,
                navigation: {
                    nextEl: '.swiper-btn-nxt',
                    prevEl: '.swiper-btn-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 32,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 32,
                    },
                    1204: {
                        slidesPerView: 3,
                        spaceBetween: 32,
                    }
                },
                loop: true,
            });
        </script>
        </body>

        </html>

