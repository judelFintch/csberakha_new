@extends('layout.app')
@section('content')
    <section class="py-10 w-full overflow-hidden">
        <div class="xl:max-w-screen-xl 2xl:max-w-screen-2xl px-4 md:w-4/5 mx-auto overflow-x-hidden flex justify-center">
            <div class="w-full md:container mx-auto p-2 xsm:p-3 md:p-10 overflow-hidden relative transition-all duration-300">
                <div
                    class="relative overflow-hidden mx-auto w-full grid lg:grid-cols-2 md:w-4/5 max-w-[820px] bg-white shadow-card-sh rounded-md">
                    <div class="col-span-1 p-4 relative overflow-hidden">
                        
                        <div class="flex flex-col h-full space-y-5 relative">
                            <h1 class="text-base font-bold z-20 text-primary">Nos Adresses</h1>
                            <div class="flex flex-col flex-wrap z-20">
                                <div class="flex flex-wrap space-y-3">
                                    <div class="flex items-center w-full space-x-2">
                                        <div class="w-10 flex-0">
                                            
                                        </div>
                                        <div class="text-sm text-gray-700 font-normal"><span>Adresse physique</span></div>
                                    </div>
                                    <div class="flex items-center w-full space-x-2">
                                        <div class="w-10 flex-0">
                                            
                                        </div>
                                        <div class="text-sm text-gray-700 font-normal"><span>
                                            info@csberakah.org
                                        </span></div>
                                    </div>
                                    <div class="flex items-center w-full space-x-2">
                                        <div class="w-10 flex-0">
                                            
                                        </div>
                                        <div class="text-sm text-gray-700 font-normal"><span>
                                            +243 974 275 000
                                            +243 808 606 282
                                            +243 823 293 323
                                            +243 904 497 664
                                        </span></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-span-1 bg-primary rounded-b-md lg:rounded-b-none lg:rounded-r-md p-4 relative shadow-lg">
                        <div class="w-full">
                            <form action="" class="w-full bg-transparent">
                                <div class="flex w-full flex-wrap pb-5 bg-transparent">
                                    <h1 class="text-xl font-bold text-gray-50 z-30">Laissez nous un message</h1>
                                </div>
                                <div class="flex w-full flex-wrap pb-4 bg-transparent">
                                    <label class="pb-2 text-gray-100 z-20">Nom</label>
                                    <input type="text"
                                        class="z-20 bg-transparent outline-none text-gray-50 w-full rounded-md px-4 py-2 border border-gray-300 text-sm font-normal placeholder:text-gray-400 placeholder:font-light transition-all duration-300">
                                </div>
                                <div class="flex w-full flex-wrap pb-4 bg-transparent">
                                    <label class="z-20 pb-2 text-gray-100">Adresse mail</label>
                                    <input type="email"
                                        class="z-20 bg-transparent outline-none text-gray-50 w-full rounded-md px-4 py-2 border border-gray-300 text-sm font-normal placeholder:text-gray-400 placeholder:font-light transition-all duration-300">
                                </div>
                                <div class="flex w-full flex-wrap pb-4 bg-transparent">
                                    <label class="z-20 pb-2 text-gray-100">Objet</label>
                                    <input type="text"
                                        class="z-20 bg-transparent outline-none text-gray-50 w-full rounded-md px-4 py-2 border border-gray-300 text-sm font-normal placeholder:text-gray-400 placeholder:font-light transition-all duration-300">
                                </div>
                                <div class="flex w-full flex-wrap pb-4 bg-transparent">
                                    <label class="z-20 pb-2 text-gray-100">Message</label>
                                    <textarea name=""
                                        class="z-20 bg-transparent outline-none text-gray-50 w-full rounded-md px-4 py-2 border border-gray-300 text-sm font-normal placeholder:text-gray-400 placeholder:font-light transition-all duration-300"></textarea>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="z-20 text-center px-6 py-2 rounded-md text-primary bg-gray-50 transition-all duration-300 hover:bg-blue-700 hover:text-gray-50">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gap-2 grid md:grid-cols-2 lg:grid-cols-3 overflow-x-hidden -->
@endsection