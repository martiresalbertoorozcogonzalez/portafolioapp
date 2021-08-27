@extends('layouts.app')

@section('content')


    <div class="flex flex-row justify-center items-center min-h-screen bg-center bg-no-repeat bg-cover">
        <main class="flex flex-col lg:flex-ro backdrop-filter backdrop-blur-lg bg-opacity-20 rounded-xl overflow-hidden w-full max-w-5xl shadow-lg m-4 lg:m-6">
            <div class="flex-1 p-4 lg:p-6 bg-white">

                <div class="text-lg mb-8 flex items-center justify-center">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg>
                    <div class="ml-4 font-bold">Administracion Portafolio</div>
                </div>

                <div class="grid grid-rows-4 grid-cols-1 gap-4 md:grid-rows-2 md:grid-cols-2">

                    <a href="#"
                         class="rounded-2x backdrop-filter backdrop-blur-lg bg-opacity-20  bg-gradient-to-r from-indigo-400 p-4 flex flex-col relative undefined text-center hover:bg-indigo-300">
                         <div class="absolute right-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                              </svg>
                        </div>
                         <div class="text-lg mb-2 mt-4 font-bold">Habilidades</div>
                        <div class="font-normal">Aca puedes encontrar todas los trabajos hechos
                            a lo largo de mi trayectoria como progrmador.
                        </div>
                    </a>

                    <a href="#"
                         class="rounded-2x backdrop-filter backdrop-blur-lg bg-opacity-20  bg-gradient-to-r from-indigo-400 p-4 flex flex-col relative undefined text-center hover:bg-indigo-300">
                        <div class="absolute right-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-lg font-bold mb-2 mt-4">Acerca de mi</div>
                        <div class="font-normal">Aca puedes encontrar la informacion de tu perfil</div>
                    </a>



                    <a href=""
                         class="rounded-2x backdrop-filter backdrop-blur-lg bg-opacity-20  bg-gradient-to-r from-indigo-400 p-4 flex flex-col relative undefined text-center hover:bg-indigo-300">
                         <div class="absolute right-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                              </svg>
                        </div>
                         <div class="text-lg mb-2 mt-4 font-bold">Certificaciones</div>
                        <div class="font-normal">Aca puedes encontrar todas los trabajos hechos
                            a lo largo de mi trayectoria como progrmador.
                        </div>
                    </a>

                    <a href="{{ route('portafolio.index') }}"
                        class="rounded-2x backdrop-filter backdrop-blur-lg bg-opacity-20  bg-gradient-to-r from-indigo-400 p-4 flex flex-col relative undefined text-center hover:bg-indigo-300">
                        <div class="absolute right-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                        </div>
                        <div class="text-lg mb-2 mt-4 font-bold">Portafolio</div>
                        <div class="font-normal">Aca puedes encontrar todas los trabajos hechos
                            a lo largo de mi trayectoria como progrmador.
                        </div>
                    </a>

                    <a href="#" class="rounded-2x backdrop-filter backdrop-blur-lg bg-opacity-20  bg-gradient-to-r from-indigo-400 p-4 flex flex-col relative undefined text-center hover:bg-indigo-300">
                        <div class="absolute right-2">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd" />
                              </svg>
                            </div>

                        <div class="text-lg font-bold mb-2 mt-4">Contactame</div>
                        <div class="font-normal">Writing the actual code for the site, as it controls everything
                            that happens behind the scenes of the site.</div>
                    </a>

                </div>
            </div>
        </main>
    </div>


@endsection
