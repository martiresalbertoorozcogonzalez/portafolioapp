@extends('layouts.front')

@section('estilos')
<!-- Ionic icons -->
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

@endsection

@section('content')

{{-- Acerca de mi seccion --}}

<section class="bg-gray-100 text-gray-600 body-font" id="inicio">
  @foreach ($acerca as $item)
      
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
        {{ $item->nombre }}
      </h1>
      <h3 class="titulo-acerca text-2xl text-gray-900">Mi portafolio Web</h3>
      <p class="mb-8 leading-relaxed">{!! $item->descripcion !!}</p>
      <div class="flex justify-center mt-4">
        <ion-icon class="w-16 h-16" name="logo-github"></ion-icon>
        <ion-icon class="w-16 h-16" name="logo-linkedin"></ion-icon>        
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded-full lg:rounded-full" alt="hero" src="/storage/{{$item->imagen}}">
    </div>
  </div>

  @endforeach

</section>

{{-- Sertificacodos seccion --}}

<section class="bg-white text-gray-600 body-font" id="certificaciones">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col">
        <div class="h-1 bg-gray-200 rounded overflow-hidden">
          <div class="w-24 h-full bg-indigo-500"></div>
        </div>
        <div class="flex flex-col py-6 mb-12 text-center">
          <h1 class="text-gray-900 font-medium title-font text-5xl mb-2 sm:mb-0">Mis Certificaciones</h1>
        </div>
      </div>


      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
        
        @foreach ($certificaciones as $item)
            

        <div class="p-4 md:w-1/3 sm:mb-0 mb-6 text-center">
          <div class="bg-white rounded-lg h-64 overflow-hidden">
            <img alt="content" class="object-cover object-center h-full w-full" src="/storage/{{$item->imagen}}">
          </div>
          <h2 class="text-xl text-center font-medium title-font text-gray-900 mt-5">{{ $item->nombre }}</h2>
          {{-- <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p> --}}
          <div>
            <a href="{{ route('front.vercertificacion',['certificacion' => $item->id]) }}" class="boton-certificaciones">
              Ver Info
            </a>
          </div> 
          
        </div>
        
        @endforeach


      </div>
    </div>
</section>

{{-- Seccion portafolio --}}

<section class="bg-gray-100 text-gray-600 body-font" id="portafolio">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col">
      <div class="h-1 bg-gray-200 rounded overflow-hidden">
        <div class="w-24 h-full bg-indigo-500"></div>
      </div>
      <div class="flex flex-col text-center py-6 mb-12">
        <h1 class="text-gray-900 font-medium title-font text-5xl mb-2 sm:mb-0">Portafolio</h1>
      </div>
    </div>


    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
      
      @foreach ($portafolio as $item)
          

      <div class="p-4 md:w-1/3 sm:mb-0 mb-6 text-center">
        <div class="bg-white rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="/storage/{{$item->imagen}}">
        </div>
        <h2 class="text-xl text-center font-medium title-font text-gray-900 mt-5">{{ $item->titulo }}</h2>
        {{-- <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p> --}}
      
        <a href="{{ route('front.show',['portafolio' => $item->id]) }}" class="boton-portafolio">
          Ver mas
        </a>
  
      </div>
      
      @endforeach


    </div>
  </div>
</section>
  
<!-- Seccion de contacto -->
<section class="bg-white pt-20 pb-36 px-8" id="contacto">
  <div class="max-w-6xl mx-auto">
    <div class="text-center">
        <h1 class="text-5xl font-bold text-gray-900">Contactame</h1>
        <p class="pt-2">Aca puedes enviarme tus mensajes o dudas</p>
    </div>
  </div>
  <div class="mt-16 relative max-w-4xl mx-auto">
    <div class="absolute z-10 inset-0 bg-gradient-to-r from-blue-400 to-red-400 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg"></div>
    <div class="relative z-20 bg-gray-300 rounded-md shadow-md p-12">

        <form action="{{ route('mensaje') }}" method="POST">
        @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" class="border border-gray-200 outline-none px-4 py-2 rounded-md hover:border-gray-400 focus:border-gray-400"/>
                {!! $errors->first('name', '<small class=" font-bold">:message</small>')!!}

                <input type="text" placeholder="Email" name="email" value="{{ old('email') }}" class="border border-gray-200 outline-none px-4 py-2 rounded-md hover:border-gray-400 focus:border-gray-400"/>
                {!! $errors->first('email', '<small class=" font-bold">:message</small>')!!}

                <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}" class="border border-gray-200 outline-none px-4 py-2 rounded-md hover:border-gray-400 focus:border-gray-400 md:col-span-2"/>
                {!! $errors->first('subject', '<small class=" font-bold">:message</small>')!!}

                <textarea rows="5" name="content" placeholder="Message" value="{{ old('content') }}" class="border border-gray-200 outline-none px-4 py-2 rounded-md hover:border-gray-400 focus:border-gray-400 md:col-span-2"></textarea>
                {!! $errors->first('content', '<small class=" font-bold">:message</small>')!!}
                           
            </div>
            <button class="boton-contacto">
                  Enviar mensaje
            </button>
        </form>
    </div>
  </div>
</section>

@endsection