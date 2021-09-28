@extends('layouts.front')


@section('content')

<div class="absolute w-full min-h-screen">
    <div class="absolute top-0 w-full h-1/2 bg-cover bg-bottom" 
         style="background-image: url('../img/background.jpg')">
    </div>
</div>

<!-- Seccion Acerca de -->
<section class="flex justify-center items-center min-h-screen">
    
    <div class="relative text-center">
    
          <div class="bg-card"></div>
         
          <div class="relative md:flex space-x-3 z-10 bg-white max-w-4xl p-12 rounded-md shadow-md">
         
            <img src="/storage/{{$certificacion->imagen}}" alt="" class="w-96 rounded-md border-6 border-blue-300 shadow-md flex-shrink-0">

              <div class="flex flex-col space-y-6 justify-between py-4">
                  
                  <div>
                      <h1 class="text-5xl font-bold text-gray-800">{{ $certificacion->nombre }}</h1>
                  </div>
                  <p class="text-lg leading-relaxed">
                      {!! $certificacion->descripcion !!}
                  </p>
                  
                  
                  <div class="inline-block">
                  
                    <a href="{{ url('/') }}" class="inline-block mt-4 bg-gradient-to-r from-red-400 to-red-400 hover:text-orange-800 font-bold text-white text-sm text-center px-6 py-2 rounded-md shadow-md">
                        Regresar
                    </a>
                    
                  </div>

              </div>
              
          </div>
        
          
    </div>

 </section>


@endsection