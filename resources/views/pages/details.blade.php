@extends('layout.app')
@section('content')
  

    <section class="h-auto py-7 z-10 flex items-center w-full">
        <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
            <div class="">
                <h1 class="text-lg font-semibold text-gray-800 mb-5">Travaux en cours</h1>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8 w-full">
                <div class="col-span-1 p-1 rounded-lg bg-gray-300 shadow-md overflow-hidden relative group transition-all duration-300">
                    <img src="assets/images/berakahImg/2.jpg" alt="image" class="w-full h-full object-cover group-hover:h-auto transition-all duration-300 rounded-lg">
                    <div class="opacity-0 absolute bottom-2 w-11/12 left-[50%] translate-x-[-50%]  p-4 rounded-lg bg-black translate-y-4 bg-opacity-70 transition-all duration-300 group-hover:opacity-100 hover:translate-y-0">
                        <h1 class="text-lg font-bold text-gray-50">Salle de pratique</h1>
                    </div>
                </div>
                <div class="col-span-1 p-1 rounded-lg bg-gray-300 shadow-md overflow-hidden relative group transition-all duration-300">
                    <img src="assets/images/berakahImg/2.jpg" alt="image" class="w-full h-full object-cover group-hover:h-auto transition-all duration-300 rounded-lg">
                    <div class="opacity-0 absolute bottom-2 w-11/12 left-[50%] translate-x-[-50%]  p-4 rounded-lg bg-black translate-y-4 bg-opacity-70 transition-all duration-300 group-hover:opacity-100 hover:translate-y-0">
                        <h1 class="text-lg font-bold text-gray-50">Salle de pratique</h1>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- <section class="h-auto py-7 z-10 flex items-center w-full">
        <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
            <div class="flex flex-wrap w-full relative overflow-x-hidden">
                <div id="carousel" class="inline-flex w-full">
                    <div class="transition duration-300 relative inline-flex flex-full w-full group">
                        <img src="assets/images/image2.jpg"
                            class="rounded-lg w-full object-cover max-h-80 md:max-h-[80vh] lg:max-h-[70vh]"
                            alt="photo galerie">
                        <div class="absolute z-40 bg-gray-800 bg-opacity-50 p-4 w-full bottom-0 rounded-b-md">
                            <div class="flex flex-wrap flex-row justify-center text-center w-full">
                                <h1 class="w-full text-gray-50 font-bold text-3xl">Visite à la plage</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- gap-2 grid md:grid-cols-2 lg:grid-cols-3 overflow-x-hidden -->
    
    <script src="assets/js/main.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
@endsection