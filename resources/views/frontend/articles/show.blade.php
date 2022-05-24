@extends('layouts.app')

@section('title')
    DETAIL
@endsection
@section('content')
<section
        class="relative h-40 z-10 bg-cover bg-no-repeat bg-right-bottom sm:bg-left-top md:bg-center flex items-center before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-gray-800 before:opacity-70 before:z-10"
        style="background-image: url(assets/images/banner_header.png);">
        <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto h-full">
            <div class="transition-all z-40 h-full">
                <div class="flex items-center flex-wrap w-full justify-center h-full">
                    <h2
                        class="text-gray-50 w-full font-bold text-3xl text-center lg:text-2xl 2xl:leading-snug animate-title z-50">
                        {{ $article->title }}</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 w-full overflow-hidden bg-white">
        <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
            <div class="flex flex-wrap flex-col justify-center">
                <div class="grid gap-5 md:grid-cols-2">
                    <div
                        class="col-span-1 flex flex-wrap items-center mb-5 md:mb-0 fromLeft transition duration-1000 translate-x-full">
                        <div class="block">
                            <h2 class="text-lg mb-4 font-bold text-gray-800 ">Par Admin | {{ $article->created_at->format('Y-m-d') }}| <span
                                    class="text-primary">BERAKAH</span></h2>
                        </div>
                        <div class="block">
                            <p class="text-justify mb-4 text-base font-normal text-gray-700 ">
                               {{ $article->content }}
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 fromRight transition duration-1000 -translate-x-full">
                        <div class="">
                            <img src="{{ asset('storage/'.$article->picture) }}" class="rounded-lg max-h-72 object-cover w-full"
                                alt="batiment ecole">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
