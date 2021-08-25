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

                    <a href="{{ route('portafolio.index') }}" class="rounded-2x backdrop-filter backdrop-blur-lg bg-opacity-20 bg-blue-700 p-4 flex flex-col relative undefined text-center">
                        <div class="absolute right-2">
                        </div>
                        <div class="text-lg font-medium mb-2 mt-4">Portafolio</div>
                        <div class="font-normal">Visual page, graphic pages, colors, button positions and
                            interfaces Required skills are HTML ,CSS , JAVASCRIPT.
                        </div>
                    </a>

                    <a href="" class="rounded-2x backdrop-filter backdrop-blur-lg bg-opacity-20 bg-blue-700 p-4 flex flex-col relative undefined">
                        <div class="absolute right-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-lg font-medium mb-2 mt-4">Mi perfil</div>
                        <div class="font-normal">Writing the actual code for the site, as it controls everything
                            that happens behind the scenes of the site.</div>
                    </a>
                    
                    <a href="" class="rounded-2x backdrop-filter backdrop-blur-lg bg-opacity-20 bg-blue-700 p-4 flex flex-col relative undefined">
                        <div class="absolute right-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd" />
                              </svg>
                        </div>
                        <div class="text-lg font-medium mb-2 mt-4">Mensajes</div>
                        <div class="font-normal">Writing the actual code for the site, as it controls everything
                            that happens behind the scenes of the site.</div>
                    </a>
                    
                </div>
            </div>
        </main>
    </div>


@endsection
