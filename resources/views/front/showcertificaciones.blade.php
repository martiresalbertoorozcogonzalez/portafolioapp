@extends('layouts.front')

@section('content')


<!-- Seccion para certificaciones -->
<section class="pt-10 pb-10 px-10 bg-gray-900">
    <div class="max-w-5xl mx-auto">
        <div class="flex justify-center gap-3 text-center">
          <h2 class="text-5xl text-white font-bold">Certificaciones</h2>
          <a href="{{ url('/') }}" class="boton-certificaciones">
            regresar
          </a>
        </div> 
     </div>
     <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-16">
  
     @foreach($certificacions as $certificacion)
       <div class="relative">
         <div class="bg-card"></div>     
         <div class="relative bg-white p-12 rounded-md shadow-md flex flex-col items-center">
          <img src="/storage/{{$certificacion->imagen}}" class="w-52 h-36" alt="">   
          <h3 class="mt-3 text-xl font-bold text-gray-800">{{ $certificacion->nombre }}</h3>
          {{-- <p class="mt-4">{!! $certificacion->descripcion !!}</p> --}}
          <a href="{{ route('front.vercertificacion',['certificacion' => $certificacion->id]) }}" class="boton-certificaciones">
            Ver
          </a>
         </div>
       </div>
     @endforeach
    </div>   
  </section> 
  
  <div class="mt-3 mb-3 flex justify-center">
    {{ $certificacions->links() }}
  </div>


@endsection