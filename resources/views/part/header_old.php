
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
                            <a href="{{}}" class="text-gray-700 w-full transition duration-300 hover:text-primary text-lg" >
                                A propos de nous
                            </a>
                        </li>
                        <li class="block">
                            <a href="{{}}" class="text-gray-700 w-full transition duration-300 hover:text-primary text-lg" >
                                Admission
                            </a>
                        </li>
                        <li class="block">
                            <a href="innovation.php" class=" text-gray-700 w-full transition duration-300 hover:text-primary text-lg" >
                                Inovations
                            </a>
                        </li>
                        

                    </ul>

                </li>
                <li class="relative">
                    <a href="options.php"
                        class="relative transition-all before:w-full before:absolute before:bottom-0 before:left-0 before:h-0.5 before:transform before:scale-0 lg:hover:before:scale-100 before:transition hover:before:transition hover:before:duration-300 before:bg-primary duration-300 hover:text-primary block md:flex py-3">Options</a>
                </li>
                <li class="relative">
                    <a href="actualite.php"
                        class="relative transition-all before:w-full before:absolute before:bottom-0 before:left-0 before:h-0.5 before:transform before:scale-0 lg:hover:before:scale-100 before:transition hover:before:transition hover:before:duration-300 before:bg-primary duration-300 hover:text-primary block md:flex py-3">Actualités</a>
                </li>
                <li class="relative">
                    <a href="galerie.php"
                        class="relative transition-all before:w-full before:absolute before:bottom-0 before:left-0 before:h-0.5 before:transform before:scale-0 lg:hover:before:scale-100 before:transition hover:before:transition hover:before:duration-300 before:bg-primary duration-300 hover:text-primary block md:flex py-3">Galerie</a>
                </li>
                <li class="relative">
                    <a href="contact.php"
                        class="block w-full text-center px-5 py-3 md:text-md text-sm bg-primary hover:bg-green-500 focus:bg-blue-500 transition duration-300 text-white rounded-md font-semibold lg:px-3 xl:px-5">Nous
                        contacter</a>
                </li>
            </ul>
        </nav>
    </header>