
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
                        A propos de nous</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="py-10 w-full overflow-hidden bg-white">
        <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
            <div class="flex flex-wrap flex-col justify-center">
                <h3 class="text-base text-primary font-medium md:text-center">- Qui nous sommes</h3>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 md:text-center mb-6">A Propos De <span
                        class="text-primary">Nous</span></h1>
                <div class="grid gap-5 md:grid-cols-2">
                    <div
                        class="col-span-1 flex flex-wrap items-center mb-5 md:mb-0 fromLeft transition duration-1000 translate-x-full">
                        <div class="block">
                            <h2 class="text-lg mb-4 font-bold text-gray-800 ">Complexe Scolaire <span
                                    class="text-primary">BERAKAH</span></h2>
                        </div>
                        <div class="block">
                            <p class="text-justify mb-4 text-base font-normal text-gray-700 ">
                                Berakah est un √©tablissement scolaire d'enseignement g√©n√©ral et technique oeuvrant en
                                R√©publique D√©mocratique du Congo, ville de Lubumbashi, province du Haut-Katanga. <br>
                                En suivant les empreintes de nos visionnaires F√©licien Tshibangu YAMBA et
                                Marie-Fran√ßoise Kabedi Mamulomba, le Complexe Scolaires Berakah a √©t√© cr√©√© dans
                                l‚Äôobjectif de forger l‚ÄôHomme de demain en cr√©ant une tradition d‚Äôexcellence bas√©e sur la
                                foi chr√©tienne. Le Complexe Scolaire Berakah, la b√©n√©diction du P√®re, tire son origine
                                de Gen√®se 12 Chapitre 2 : ¬ę Je ferai de toi une grande nation, je te b√©nirai et je
                                rendrai ton nom c√©l√®bre. Je b√©nirai les autres par toi. ¬Ľ
                            </p>
                            <div class="flex">
                                <a href="{{route('pages.options')}}"
                                    class="block py-2 px-3 sm:py-3 sm:px-5 bg-primary text-gray-100 sm:font-medium rounded-lg text-sm sm:text-base">Options
                                    organis√©es</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-span-1 fromRight transition duration-1000 -translate-x-full">
                        <div class="">
                            <img src="assets/images/berakahImg/6.jpg" class="rounded-lg max-h-72 object-cover w-full"
                                alt="batiment ecole">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="relative py-7">
        <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
            <h1 class="text-2xl font-semibold text-gray-800 mb-6">Sections <span class="text-primary">organis√©es</span>
            </h1>
            <div class="grid gap-6 md:grid-cols-3 md:gap-8">
                <div
                    class="col-span-1 bg-white shadow-md transition hover:shadow-lg p-4 rounded-md hover:cursor-pointer">
                    <div class="flex flex-row flex-wrap space-y-3 justify-center">
                        <img src="assets/images/icon_maternal.png" class="w-12 h-12" alt="icone section">
                        <div class="flex flex-row flex-wrap justify-center space-y-3">
                            <h1 class="font-medium text-lg w-full text-center text-gray-800">Maternelle</h1>
                            <p class="text-sm font-normal text-gray-700 text-center">
                                Nous offrons √† chaque enfant une premi√®re exp√©rience scolaire r√©ussie √† travers une
                                p√©dagogie sp√©cifique.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="col-span-1 bg-white shadow-md transition hover:shadow-lg p-4 rounded-md hover:cursor-pointer">
                    <div class="flex flex-row flex-wrap space-y-3 justify-center">
                        <img src="assets/images/icon_primary.png" class="w-12 h-12" alt="icone section">
                        <div class="flex flex-row flex-wrap justify-center space-y-3">
                            <h1 class="font-medium text-lg w-full text-center text-gray-800">Primaire</h1>
                            <p class="text-sm font-normal text-gray-700 text-center">
                                Notre √©cole facilite l'apprentissage de la lecture, de l'√©criture et des bases de
                                math√©matiques aux enfants.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="col-span-1 bg-white shadow-md transition hover:shadow-lg p-4 rounded-md hover:cursor-pointer">
                    <div class="flex flex-row flex-wrap space-y-3 justify-center">
                        <img src="assets/images/icon_secondary.png" class="w-12 h-12" alt="icone section">
                        <div class="flex flex-row flex-wrap justify-center space-y-3">
                            <h1 class="font-medium text-lg w-full text-center text-gray-800">Secondaire</h1>
                            <p class="text-sm font-normal text-gray-700 text-center">
                                Nous preperons les enfants √† la r√©alit√© de la vie, √† aquerir de bonnes bases pour etre
                                utile √† la communaut√© et √† eux-m√™mes, et aussi preparer √† la vie estudiantine.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 w-full overflow-hidden bg-white">
        <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
            <div class="flex flex-wrap flex-col justify-center">
                <div class="w-full grid">
                    <div class="col-span-1">
                        <h1 class="text-2xl md:text-3xl font-bold text-primary mb-3">NOTRE MISSION</h1>
                        <p class="text-justify mb-4 text-base font-normal text-gray-700">
                            Dans sa philosophie, le Complexe Scolaire Berakah s‚Äôest donn√© comme mission d‚Äôassurer un
                            environnement d‚Äôapprentissage favorable √† tous, o√Ļ un programme d‚Äô√©ducation de d√©veloppement
                            int√©gral sera d√©velopp√© par des hommes et femmes de valeurs et comp√©tences av√©r√©es. Nous
                            offrons un syst√®me √©ducatif qui vise √† bien pr√©parer nos √©l√®ves √† r√©pondre aux complexes
                            probl√®mes que pr√©sente le monde d‚Äôaujourd‚Äôhui, tout en am√©liorant significativement leurs
                            performances et ceci d√®s l‚Äô√©cole maternelle. Nous visons aussi √† pr√©parer et motiver nos
                            √©l√®ves √† s'adapter √† un monde changeant en leur inculquant des comp√©tences de pens√©e
                            critique, une perspective globale et le respect des valeurs fondamentales d‚Äôhonn√™tet√©, de
                            compassion, de pers√©v√©rance, de discipline personnelle et de foi en Dieu. Au Complexe
                            Scolaires Berakah, nous aspirons √† l‚Äôexcellence, la discipline et le travail assidu dans
                            tous les aspects de la vie. C‚Äôest sur ces principes que Berakah a √©t√© cr√©√© et ce sont ces
                            principes que nous voulons inculquer √† tous nos √©l√®ves.
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section class="py-7 w-full overflow-x-hidden relative">
        <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto grid">
            <div class="col-span-1">
                <h1 class="text-2xl md:text-3xl font-bold text-primary mb-3">Pourquoi nous?</h1>
                <p class="text-justify mb-4 text-base font-normal text-gray-700">
                    Il existe sans doute, des √©coles modernes en R√©publique D√©mocratique du Congo et vous vous
                    demander pourquoi nous ? simplement parce que nous disposons de meilleurs enseignants, des
                    infrastructures et des mat√©riels didactiques pour un bon d'enseignement. Voici pourquoi nous
                    :
                </p>
                <div class="block">
                    <div class="flex space-x-2 items-center mb-1">
                        <img class="h-4" src="assets/images/check.svg" alt="-">
                        <span class="text-primary text-lg font-medium">Prix le plus bas?</span>
                    </div>
                    <p class="text-justify text-gray-500 text-base pl-5">Chez nous nous distnguons pas des
                        enfants riches ou pauvres, nous voulons que chaque enfant puisse √™tre √©ligible √† nos
                        contenus √©ducatifs.</p>
                </div>
                <div class="block">
                    <div class="flex space-x-2 items-center mb-1">
                        <img class="h-4" src="assets/images/check.svg" alt="-">
                        <span class="text-primary text-lg font-medium">Prix le plus bas?</span>
                    </div>
                    <p class="text-justify text-gray-500 text-base pl-5">Nous disposons de bus scolaires pour le
                        transport des √©l√®ves dans toute la ville de Lubumbashi et ses environs.</p>
                </div>
                <div class="block">
                    <div class="flex space-x-2 items-center mb-1">
                        <img class="h-4" src="assets/images/check.svg" alt="-">
                        <span class="text-primary text-lg font-medium">Enseignement accessible √† tous?</span>
                    </div>
                    <p class="text-justify text-gray-500 text-base pl-5">Chez nous nous distnguons pas des
                        enfants riches ou pauvres, nous voulons que chaque enfant puisse √™tre √©ligible √† nos
                        contenus √©ducatifs.</p>
                </div>
                <div class="block">
                    <div class="flex space-x-2 items-center mb-1">
                        <img class="h-4" src="assets/images/check.svg" alt="-">
                        <span class="text-primary text-lg font-medium"> Biblioth√®que avec des ouvrages
                            modernes?</span>
                    </div>
                    <p class="text-justify text-gray-500 text-base pl-5">Chaque √©l√®ve a acc√®s √† la biblioth√®que
                        pour effectuer ses devoirs et ses exercices suivant ses besoins.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-7 w-full overflow-hidden bg-white">
        <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto">
            <div class="grid">
                <div class="col-span-1 flex flex-wrap flex-row space-y-3">
                    <h1 class="text-2xl md:text-3xl font-bold text-primary md:text-center mb-6">STRUCTURE FONCTIONNELLE
                    </h1>
                    <p class="text-base font-medium text-gray-800 text-justify">
                        Le Complexe Scolaire Berakah dispose d‚Äôun b√Ętiment √† trois niveaux. Ce b√Ętiment compte au total
                        36 salles de classe dont une pour la pr√©maternelle, 3 pour la maternelle, 12 pour le primaire,
                        et 20 pour le secondaire g√©n√©ral et technique, (chacune avec une capacit√© 50 √©l√®ves). N√©anmoins,
                        afin de promouvoir la qualit√© des apprentissages, le nombre d‚Äô√©l√®ves par classe est limit√© √† 30
                        √©l√®ves √† la maternelle et 36 au primaire et au secondaire. L‚Äô√©cole dispose d‚Äôaussi de:
                    </p>
                    <div class="flex flex-row flex-wrap space-y-2">
                        <div class="flex space-x-1 w-full">
                            <div class="w-8"><img src="assets/images/check-circle.svg" class="w-6 h-6" alt="->"></div>
                            <p class="flex-1 font-medium text-gray-600 text-base">
                                Une salle bien √©quip√©e pour la coupe et couture, des ateliers pour l‚Äô√©lectronique,
                                l‚Äô√©lectronique, la construction et un laboratoire de chimie et biologie.
                            </p>
                        </div>
                        <div class="flex space-x-1 w-full">
                            <div class="w-8"><img src="assets/images/check-circle.svg" class="w-6 h-6" alt="->"></div>
                            <p class="flex-1 flex font-medium text-gray-600 text-base">
                                Une salle bien √©quip√©e de 40 ordinateurs a √©t√© pr√©vue pour les exercices en
                                informatique, et commercial et gestion.
                            </p>
                        </div>
                        <div class="flex space-x-1 w-full">
                            <div class="block w-8"><img src="assets/images/check-circle.svg" class="w-6 h-6" alt="->">
                            </div>
                            <p class="flex  font-medium text-gray-600 text-base">
                                Une biblioth√®que de plus de 3000 livres est √† la disposition des √©l√®ves.
                            </p>
                        </div>
                        <div class="flex space-x-1 w-full">
                            <div class="w-8"><img src="assets/images/check-circle.svg" class="w-6 h-6" alt="->"></div>
                            <p class="flex-1 font-medium text-gray-600 text-base">
                                Bus scolaires pour faciliter la transportation des √©l√®ves.
                            </p>
                        </div>
                        <div class="flex space-x-1 w-full">
                            <div class="w-8"><img src="assets/images/check-circle.svg" class="w-6 h-6" alt="->"></div>
                            <p class="flex-1 font-medium text-gray-600 text-base">
                                Une cantine pour la restauration des √©l√®ves.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   @endsection