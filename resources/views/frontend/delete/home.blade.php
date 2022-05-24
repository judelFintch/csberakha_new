@extends('layouts.app')

@section('title')
    ACCEUIL
@endsection

@section('content')
<!-- ======= Hero Section ======= -->
<section class="relative bg-no-repeat bg-center bg-cover h-[75vh] lg:h-[80vh] 2xl:h-[60vh] before:absolute before:w-full before:h-full before:top-0 before:left-0 before:bg-opacity-70 before:bg-gray-800 before:z-20" style="background-image: url('https://csberakah.org/assets/images/berakahImg/1.jpg');">
    <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto h-full">
        <div class="h-full w-full flex items-center max-w-screen-xl">
            <div class="w-full flex flex-wrap flex-row justify-center space-y-5 lg:space-y-7 z-50">
                <h1 class="text-white text-3xl md:text-4xl lg:text-5xl lg:leading-snug text-center font-bold">
                    Bienvenue au Complexe Scolaire Berakah(Travaux encours sur le site).</h1>
                <p class="text-center block text-white text-lg">
                    Une école d'excellence pour
                    l'étude et la formation de votre enfant. La qualité, les meilleurs enseignants, les programmes
                    scolaires conçues sur-mesure, des salles de classes avec de fournitures modernes.
                </p>
                <a href="about.php" class="px-4 py-3 md:text-md text-sm bg-primary hover:bg-green-500 focus:bg-blue-500 transition duration-300 text-white rounded-md font-semibold">Savoir
                    plus</a>
            </div>
        </div>
    </div>
</section>

<section class="relative py-7 bg-white">
    <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto overflow-x-hidden">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">A Propos De <span class="text-primary">Nous</span>
        </h1>
        <div class="grid w-full gap-3 md:gap-4 grid-cols-1 md:grid-cols-2">
            <div class="flex flex-wrap flex-row col-span-1">
                <h2 class="text-lg mb-4 font-bold text-gray-1200 ">Complexe Scolaire <span class="text-primary">BERAKAH</span></h2>
                <div class="block">
                    <p class="text-justify mb-4 text-base font-normal  text-gray ">
                        En suivant les empreintes de nos visionnaires Félicien Tshibangu YAMBA et
                        Marie-Françoise Kabedi Mamulomba, le Complexe Scolaires Berakah a été créé dans
                        l’objectif de forger l’Homme de demain en créant une tradition d’excellence basée sur la
                        foi chrétienne. Le Complexe Scolaire Berakah, la bénédiction du Père, tire son origine
                        de Genèse 12 Chapitre 2 : « Je ferai de toi une grande nation, je te bénirai et je rendrai ton nom célèbre. Je bénirai les autres par toi. »
                    </p>
                </div>
                <div class="block">
                    <a href="about.php" class="block px-4 py-3 md:text-md text-sm bg-primary hover:bg-green-500 focus:bg-blue-500 transition duration-300 text-white rounded-md font-semibold">Plus
                        sur nous</a>
                </div>
            </div>
            <div class="col-span-1 fromRight transition duration-1000 -translate-x-full">
                <div class="">
                    <img src="assets/images/berakahImg/2.jpg" class="rounded-lg max-h-72 object-cover w-full" alt="Eleves dans la salle de pratique">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="relative py-7">
    <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Sections <span class="text-primary">organisées</span>
        </h1>
        <div class="grid gap-6 md:grid-cols-3 md:gap-8">
            <div class="col-span-1 bg-white shadow-md transition hover:shadow-lg p-4 rounded-md hover:cursor-pointer">
                <div class="flex flex-row flex-wrap space-y-3 justify-center">
                    <img src="assets/images/icon_maternal.png" class="w-12 h-12" alt="icone section">
                    <div class="flex flex-row flex-wrap justify-center space-y-3">
                        <h1 class="font-medium text-lg w-full text-center text-gray-800">Maternelle</h1>
                        <p class="text-sm font-normal text-gray-700 text-center">
                            Nous offrons à chaque enfant une première expérience scolaire réussie à travers une
                            pédagogie spécifique.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-1 bg-white shadow-md transition hover:shadow-lg p-4 rounded-md hover:cursor-pointer">
                <div class="flex flex-row flex-wrap space-y-3 justify-center">
                    <img src="assets/images/icon_primary.png" class="w-12 h-12" alt="icone section">
                    <div class="flex flex-row flex-wrap justify-center space-y-3">
                        <h1 class="font-medium text-lg w-full text-center text-gray-800">Primaire</h1>
                        <p class="text-sm font-normal text-gray-700 text-center">
                            Notre école facilite l'apprentissage de la lecture, de l'écriture et des bases de
                            mathématiques aux enfants.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-1 bg-white shadow-md transition hover:shadow-lg p-4 rounded-md hover:cursor-pointer">
                <div class="flex flex-row flex-wrap space-y-3 justify-center">
                    <img src="assets/images/icon_secondary.png" class="w-12 h-12" alt="icone section">
                    <div class="flex flex-row flex-wrap justify-center space-y-3">
                        <h1 class="font-medium text-lg w-full text-center text-gray-800">Secondaire</h1>
                        <p class="text-sm font-normal text-gray-700 text-center">
                            Nous preperons les enfants à la réalité de la vie, à aquerir de bonnes bases pour etre
                            utile à la communauté et à eux-mêmes, et aussi preparer à la vie estudiantine.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-7 w-full overflow-hidden">
    <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
        <div class="flex flex-wrap flex-col justify-center">

            <div class="grid md:grid-cols-2 gap-5">
                <div class="col-span-1 block flex-wrap space-y-4 text-justify fromLeft transition duration-1000 translate-x-full">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">Options <span class="text-primary">organisées</span></h1>
                    <p class="text-justify text-lg font-medium text-gray-800">Pour un bon encadrement et la réussite
                        de la formation des enfants, notre Ecole organise differentes options. Nous visons
                        l'excellence dans chaque option. Nos options sont les suivantes </p>
                    <div class="block">
                        <div class="w-full block mb-2 pl-5">
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#DF504B" class="h-4 w-4" viewBox="0 0 16 16">
                                    <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
                                </svg>
                                <div class="text-base font-medium">
                                    Pédagogie générale
                                </div>
                            </div>
                        </div>

                        <div class="w-full block mb-2 pl-5">
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#DF504B" class="h-4 w-4" viewBox="0 0 16 16">
                                    <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
                                </svg>
                                <div class="text-base font-medium">
                                    Coupe et couture
                                </div>
                            </div>
                        </div>

                        <div class="w-full block mb-2 pl-5">
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#DF504B" class="h-4 w-4" viewBox="0 0 16 16">
                                    <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
                                </svg>
                                <div class="text-base font-medium">
                                    Scientifique
                                </div>
                            </div>
                        </div>

                        <div class="w-full block mb-2 pl-5">
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#DF504B" class="h-4 w-4" viewBox="0 0 16 16">
                                    <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
                                </svg>
                                <div class="text-base font-medium">
                                    Construction & Architecture
                                </div>
                            </div>
                        </div>

                        <div class="w-full block mb-2 pl-5">
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#DF504B" class="h-4 w-4" viewBox="0 0 16 16">
                                    <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
                                </svg>
                                <div class="text-base font-medium">
                                    Electricité
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <a href="options.php" class="px-4 py-3 md:text-md text-sm bg-primary hover:bg-green-500 focus:bg-blue-500 transition duration-300 text-white rounded-md font-normal">Toutes
                            les options</a>
                    </div>
                </div>

                <div class="col-span-1 fromRight transition duration-1000  -translate-x-full">
                    <img src="assets/images/happy_studies.png" class="max-auto w-full object-cover" alt="La joie d'etudier">
                </div>

            </div>
        </div>
    </div>
</section>

<section class="py-7 w-full overflow-hidden">
    <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
        <div class="flex">
            <div class="swiper mySwiper relative sm:px-6 py-10">
                <div class="swiper-wrapper bg-transparent relative pb-6">
                    <div class="swiper-slide p-4">
                        <div class="w-full h-auto rounded-lg relative shadow-md group cursor-pointer">
                            <div class="opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col relative w-full">
                                <div class="relative w-full rounded-lg z-[340] bg-primarybg h-full">

                                    <div class="flex w-full flex-col relative px-12 py-16 h-full justify-between">
                                        <div class="flex items-center justify-between">
                                            <div class="flex flex-col mb-4">
                                                <span class="font-bold text-xl text-white mb-2">Un terrain de basket</span>
                                            </div>

                                        </div>
                                        <div class="flex text-gray-100 flex-col space-y-2 mb-4">
                                            <span class="text-justify sm:text-left">Un terrain de basket à  la disposition des enfants pour le sport.</span>
                                            <span class="font-semibold text-white">Yes, We have it</span>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="group-hover:scale-x-0 top-0 left-0 z-[350] absolute w-full h-full transition duration-300">
                                <img src="assets/images/berakahImg/3.jpg" class="w-full h-full rounded-lg object-center object-cover" alt="Eleve sur Terrain ">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide p-4">
                        <div class="w-full h-auto rounded-lg relative shadow-md group cursor-pointer">
                            <div class="opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col relative w-full">
                                <div class="relative w-full rounded-lg z-[340] bg-primarybg h-full">

                                    <div class="flex w-full flex-col relative px-12 py-16 h-full justify-between">
                                        <div class="flex items-center justify-between">
                                            <div class="flex flex-col mb-4">
                                                <span class="font-bold text-xl text-white mb-2">Moyen de transport rassuré</span>
                                            </div>

                                        </div>
                                        <div class="flex text-gray-100 flex-col space-y-2 mb-4">
                                            <span class="text-justify sm:text-left">Nous disponibilisons de bus pour faliciter le moyens de transport à nos élèves.</span>
                                            <span class="font-semibold text-white">Yes, We have it</span>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="group-hover:scale-x-0 top-0 left-0 z-[350] absolute w-full h-full transition duration-300">
                                <img src="assets/images/berakahImg/4.jpg" class="w-full h-full rounded-lg object-center object-cover" alt="Eleve vers bus ">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-btn-prev absolute left-0 top-[50%] shadow-md z-900 p-2 rounded-full bg-[#F7FAFF]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 md:h-8 md:w-8" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="swiper-btn-nxt absolute right-0 top-[50%] shadow-md z-900 p-2 rounded-full bg-[#F7FAFF]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 md:h-8 md:w-8" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-7 w-full overflow-hidden bg-white">
    <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
        <div style="background-image: url(assets/images/bg.png);" class="p-5 md:p-7 lg:p-10 w-full bg-no-repeat bg-cover bg-center rounded-lg opacity-0 scale-x-50 scale-y-50 item-blog transition duration-300">
            <div class="mb-5">
                <h1 class="text-center text-xl font-medium sm:text-2xl md:font-bold text-gray-100">Nous sommes à notre première année dans l'enseignement.</h1>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="col-span-1 flex justify-center flex-wrap">
                    <div class="text-gray-200 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-12 w-12" viewBox="0 0 16 16">
                            <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                        </svg>
                    </div>
                    <div class="w-full text-center text-gray-300">+ 465 Eleves</div>
                </div>
                <div class="col-span-1 flex justify-center flex-wrap">
                    <div class="text-gray-200 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-12 w-12" viewBox="0 0 16 16">
                            <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z" />
                            <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z" />
                        </svg>
                    </div>
                    <div class="w-full text-center text-gray-300">Un corp professoral experimenté</div>
                </div>

                <div class="col-span-1 flex justify-center flex-wrap">
                    <div class="text-gray-200 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-12 w-12" viewBox="0 0 16 16">
                            <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                            <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
                        </svg>
                    </div>
                    <div class="w-full text-center text-gray-300"> + 70 Distinctions</div>
                </div>
                <div class="col-span-1 flex justify-center flex-wrap">
                    <div class="text-gray-200 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-12 w-12" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
                        </svg>
                    </div>
                    <div class="w-full text-center text-gray-300">+ 300 Satisfations</div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="py-7 w-full relative">
    <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">Actualités <span class="text-primary">Recentes</span></h1>

        <div class="grid gap-6 md:grid-cols-3 md:gap-8">
            <div class="col-span-1 opacity-0 scale-x-50 scale-y-50 item-blog flex flex-row flex-wrap group transition duration-700 bg-white rounded-md shadow-md p-4">
                <div class="relative w-full overflow-hidden h-60 max-h-60 sm:h-40 sm:max-h-40 2xl:h-60 2xl:max-h-72 rounded-md mb-3">
                    <img src="assets/images/berakahImg/berakah_bus.jpg" class="h-full object-cover w-full transition-all duration-300 group-hover:transform group-hover:scale-110 rounded-md" alt="Image d'illustration">
                    <div class="absolute bottom-0 left-0 px-5 py-2 bg-gray-900 bg-opacity-70 text-gray-800 rounded-bl-md">
                        <span class="text-gray-50">12-12-2021</span>
                    </div>
                </div>
                <h1 class="font-medium text-lg w-full text-gray-800 mb-3 line-clamp-1 group-hover:cursor-default">
                    Travaux encours</h1>
                <p class="line-clamp-3 text-base font-normal text-justify text-gray-500 mb-3 group-hover:cursor-default">

                </p>

            </div>
            <div class="col-span-1 opacity-0 scale-x-50 scale-y-50 item-blog flex flex-row flex-wrap group transition duration-700 bg-white rounded-md shadow-md p-4">
                <div class="relative w-full overflow-hidden h-60 max-h-60 sm:h-40 sm:max-h-40 2xl:h-60 2xl:max-h-72 rounded-md mb-3">
                    <img src="assets/images/berakahImg/cours_cs_berakah.JPG" class="h-full object-cover w-full transition-all duration-300 group-hover:transform group-hover:scale-110 rounded-md" alt="Image d'illustration">
                    <div class="absolute bottom-0 left-0 px-5 py-2 bg-gray-900 bg-opacity-70 text-gray-800 rounded-bl-md">
                        <span class="text-gray-50">12-12-2021</span>
                    </div>
                </div>
                <h1 class="font-medium text-lg w-full text-gray-800 mb-3 line-clamp-1 group-hover:cursor-default">
                    Travaux en cours</h1>
                <p class="line-clamp-3 text-base font-normal text-justify text-gray-500 mb-3 group-hover:cursor-default">

                </p>

            </div>
            <div class="col-span-1 opacity-0 scale-x-50 scale-y-50 item-blog flex flex-row flex-wrap group transition duration-700 bg-white rounded-md shadow-md p-4">
                <div class="relative w-full overflow-hidden h-60 max-h-60 sm:h-40 sm:max-h-40 2xl:h-60 2xl:max-h-72 rounded-md mb-3">
                    <img src="assets/images/berakahImg/cours_berakah.jpg" class="h-full object-cover w-full transition-all duration-300 group-hover:transform group-hover:scale-110 rounded-md" alt="Image d'illustration">
                    <div class="absolute bottom-0 left-0 px-5 py-2 bg-gray-900 bg-opacity-70 text-gray-800 rounded-bl-md">
                        <span class="text-gray-50">12-12-2021</span>
                    </div>
                </div>
                <h1 class="font-medium text-lg w-full text-gray-800 mb-3 line-clamp-1 group-hover:cursor-default">
                    Travaux en cours</h1>
                <p class="line-clamp-3 text-base font-normal text-justify text-gray-500 mb-3 group-hover:cursor-default">

                </p>

            </div>
        </div>
    </div>
</section>
<section class="py-7 w-full relative bg-white">
    <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
        <div class="w-full rounded-lg opacity-0 scale-x-50 scale-y-50 item-blog transition duration-300 overflow-hidden">
            <div class="flex flex-wrap md:justify-between w-full md:bg-primary">
                <div class="bg-primary block md:w-1/2 lg:w-4/5 p-2 pb-5 md:pb-0 md:p-0 relative before:w-full before:h-7 before:absolute before:left-0 before:bottom-[-2px] before:rounded-t-full before:bg-gray-200 md:before:h-0 md:before:hidden">
                    <div class="block p-5">
                        <h1 class="font-bold text-2xl md:text-3xl text-gray-50 mb-3">Étudiez en ligne sur notre plate-forme</h1>
                        <p class="w-full block text-gray-300">
                            Nous disposons d'une plate-forme d'étude en ligne pour assurer un enseignement d'à domicile et à distance
                        </p>
                    </div>
                </div>
                <div class="w-full rounded-b-sm md:w-1/2 lg:w-1/5 bg-gray-200 md:rounded-r-sm md:rounded-l-full pb-5 px-2 md:p-2 lg:p-0 xl:p-5  flex justify-center md:items-center">
                    <a href="https://csberakah.com/" class="py-3 px-3 rounded-2xl md:rounded-3xl bg-primary text-gray-50">Cliquez-ici</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-7 relative w-full">
    <div class="px-4 mx-auto lg:max-w-screen-sm flex flex-wrap flex-row space-y-5 justify-center w-4/5">
        <h1 class="font-bold text-3xl text-gray-800">News-letter</h1>
        <p class="text-center text-gray-600">Souscrivez à notre News-letter pour recevoir toutes nos publications directement dans votre boite mail.</p>
        <form class="flex w-full relative items-center">
            <input type="email" class="outline-none hover:outline-none px-5 md:px-8 py-3 rounded-3xl w-full shadow-md text-gray-600 text-base placeholder:text-gray-400" placeholder="Votre adresse mail" required>
            <button class="outline-none hover:outline-none absolute right-1 text-gray-50 bg-primary py-2 px-4 rounded-3xl">Souscrire</button>
        </form>
    </div>
</section>



 
@endsection
