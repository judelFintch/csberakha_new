@extends('layout.app')
@section('content')
    <section
        class="relative h-40 z-10 bg-cover bg-no-repeat bg-right-bottom sm:bg-left-top md:bg-center flex items-center before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-gray-800 before:opacity-70 before:z-10"
        style="background-image: url(assets/images/banner_header.png);">
        <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto h-full">
            <div class="transition-all z-40 h-full">
                <div class="flex items-center flex-wrap w-full justify-center h-full">
                    <h1
                        class="text-gray-50 w-full font-bold text-3xl text-center lg:text-6xl 2xl:leading-snug animate-title z-50">
                        Actualités</h1>
                </div>
            </div>
        </div>
    </section>



    <section class="py-10 w-full overflow-hidden news">
        <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
            <h3 class="text-base text-prinary font-medium md:text-center animatedText">- Les nouvelles de nous</h3>
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6 md:text-center">Nos <span
                    class="text-prinary">Actualités</span></h1>
            <div class="w-full grid md:grid-cols-3 gap-4 md:gap-6 lg:gap-8 left-to-right">
            @foreach ($articles as $article)
                <div
                    class="item-blog col-span-1 opacity-0 scale-x-50 scale-y-50 item-blog flex flex-row flex-wrap group transition duration-700 bg-white rounded-md shadow-md p-4">
                    <div
                        class="relative w-full overflow-hidden h-60 max-h-60 sm:h-40 sm:max-h-40 2xl:h-60 2xl:max-h-72 rounded-md mb-3">
                        <img src="{{asset('assets/images/image1.jpg')}}"
                            class="h-full object-cover w-full transition-all duration-300 group-hover:transform group-hover:scale-110 rounded-md"
                            alt="Image d'illustration">
                        <div
                            class="absolute bottom-0 left-0 px-5 py-2 bg-gray-900 bg-opacity-70 text-gray-800 rounded-bl-md">
                            <span class="text-gray-50">12-12-2021</span>
                        </div>
                    </div>
                    <h1 class="font-medium text-lg w-full text-gray-800 mb-3 line-clamp-1 group-hover:cursor-default">
                    {{$article->titre}}</h1>
                    <p
                        class="line-clamp-3 text-base font-normal text-justify text-gray-500 mb-3 group-hover:cursor-default">
                        {{$article->extrait}}
                    </p>
                    <div class="flex">
                        <a href=""
                            class="px-4 py-1.5 bg-gray-300 rounded-md font-medium text-gray-600 text-lg transition hover:text-white hover:bg-primary">Lire
                            plus</a>
                    </div>
                </div>

                @endforeach
              

              

                

            </div>

        </div>
    </section>
@endsection