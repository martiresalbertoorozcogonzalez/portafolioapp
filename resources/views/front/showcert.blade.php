@extends('layouts.front')

@section('content')

<!-- Seccion Acerca de -->
<section class="flex justify-center items-center min-h-screen bg-white">
    
    <div class="relative text-center">
    
          <div class="bg-card"></div>
         
          <div class="relative md:flex space-x-3 z-10 bg-gray-100 max-w-4xl p-12 rounded-md shadow-md">
         
            <img src="/storage/{{$certificacion->imagen}}" alt="" class="w-96 rounded-md flex-shrink-0">

              <div class="flex flex-col space-y-6 justify-between py-4">
                  
                  <div>
                      <h1 class="text-5xl font-bold text-gray-800">{{ $certificacion->nombre }}</h1>
                  </div>
                  <p class="text-lg leading-relaxed">
                      {!! $certificacion->descripcion !!}
                  </p>
                                    
                  <div class="flex flex-col justify-around md:flex-row">
                  
                    <a href="{{ url('/') }}" class="inline-block mt-4 bg-gradient-to-r from-red-400 to-red-400 hover:text-orange-800 font-bold text-white text-sm text-center px-6 py-2 rounded-md shadow-md">
                        Regresar
                    </a>
                    <a href="{{ $certificacion->url_certificacion }}" class="inline-block mt-4 bg-gradient-to-r from-blue-400 to-blue-400 hover:text-orange-800 font-bold text-white text-sm text-center px-6 py-2 rounded-md shadow-md">
                        Ver pagina
                    </a>   
                                   
                  </div>

              </div>
              
          </div>
                  
    </div>

 </section>

@endsection