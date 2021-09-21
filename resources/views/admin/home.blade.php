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

                    <a href="{{ route('habilidad.index') }}"
                         class="rounded-2x backdrop-filter backdrop-blur-lg bg-opacity-20  bg-gradient-to-r from-indigo-400 p-4 flex flex-col relative undefined text-center hover:bg-indigo-300">
                         <div class="absolute right-2">

                              <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                              </svg>
                        </div>
                         <div class="text-lg mb-2 mt-4 font-bold">Habilidades</div>
                        <div class="font-normal">Aca puedes encontrar todas los trabajos hechos
                            a lo largo de mi trayectoria como progrmador.
                        </div>
                    </a>

                    <a href="{{ route('acerca.index') }}"
                         class="rounded-2x backdrop-filter backdrop-blur-lg bg-opacity-20  bg-gradient-to-r from-indigo-400 p-4 flex flex-col relative undefined text-center hover:bg-indigo-300">
                        <div class="absolute right-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-lg font-bold mb-2 mt-4">Acerca de mi</div>
                        <div class="font-normal">Aca puedes encontrar la informacion de tu perfil</div>
                    </a>



                    <a href="{{ route('certificacion.index') }}"
                         class="rounded-2x backdrop-filter backdrop-blur-lg bg-opacity-20  bg-gradient-to-r from-indigo-400 p-4 flex flex-col relative undefined text-center hover:bg-indigo-300">
                         <div class="absolute right-2">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
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
