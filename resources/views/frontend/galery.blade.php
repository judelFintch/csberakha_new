@extends('layouts.app')
@section('title', 'CS Berakha: Notre Gallerie')
@section('content')
    <section class="relative py-7">
        <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
            <div class="w-full">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 w-full max-h-80 md:max-h-[80vh] lg:max-h-[70vh] mb-2 py-2">
                    <div class="swiper-wrapper w-full h-full">
                        <div class="swiper-slide py-3 relative w-full h-full">
                            <img src="{{asset('assets/images/berakahImg/4.jpg')}}" class="w-full h-full rounded-lg object-cover z-10"/>
                            <div class="absolute bg-blue-500 z-30 bottom-0 left-0 w-full p-4">
                                Salle de pratique
                            </div>
                        </div>
                            @foreach($galleries as $gallery)
                                <div class="swiper-slide py-3 relative">
                                    <img src="{{ asset('storage/'.$gallery->picture) }}" class="w-full h-full rounded-lg object-cover" />
                                </div>
                            @endforeach 
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($galleries as $gallery)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/'.$gallery->picture) }}" class="rounded-lg w-full h-20 object-cover"/>
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h-auto py-7 z-10 flex items-center w-full">
        <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
            <div class="">
                
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8 w-full">
                <div class="col-span-1 p-1 rounded-lg bg-gray-300 shadow-md overflow-hidden relative group transition-all duration-300">
                    <img src="{{asset('assets/images/berakahImg/2.jpg')}}" alt="image" class="w-full h-full object-cover group-hover:h-auto transition-all duration-300 rounded-lg">
                    <div class="opacity-0 absolute bottom-2 w-11/12 left-[50%] translate-x-[-50%]  p-4 rounded-lg bg-black translate-y-4 bg-opacity-70 transition-all duration-300 group-hover:opacity-100 hover:translate-y-0">
                        <h1 class="text-lg font-bold text-gray-50">Salle de pratique</h1>
                    </div>
                </div>
                <div class="col-span-1 p-1 rounded-lg bg-gray-300 shadow-md overflow-hidden relative group transition-all duration-300">
                    <img src="{{asset('assets/images/berakahImg/2.jpg')}}" alt="image" class="w-full h-full object-cover group-hover:h-auto transition-all duration-300 rounded-lg">
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
    
@endsection