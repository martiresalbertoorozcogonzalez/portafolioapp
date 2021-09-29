@extends('layouts.front')

@section('estilos')
<!-- Ionic icons -->
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

@endsection

@section('content')

@include('front.partials.imagen')

<!-- Seccion Acerca de -->
<section class="flex justify-center items-center min-h-screen bg-gray-900">
    
  <div class="relative">
  
      <div class="bg-card"></div>
       
        <div class="relative md:flex space-x-3 z-10 bg-white max-w-4xl p-12 rounded-md shadow-md">
       
          @foreach($acerca as $acerca)
            <div class="flex flex-col space-y-6 py-4">
                
                <div>
                    <p class="text-lg">Hola yo soy</p>
                    <h1 class="text-4xl font-bold text-gray-800">{{ $acerca->nombre }}</h1>
                <p class="text-lg leading-relaxed">
                    {!! $acerca->descripcion !!}
                </p>
                </div>

                <div class="flex  space-x4 text-5xl text-gray-900 py-3">
                  <ion-icon name="logo-github"></ion-icon>
                  <ion-icon name="logo-linkedin"></ion-icon>
                </div>

  
            </div>
            <img src="/storage/{{$acerca->imagen}}" alt="" class="w-64 h-64 rounded-full border-6 border-blue-300 shadow-md flex-shrink-0">
            @endforeach 
        </div>

    </div>
</section>

<!-- Seccion para certificaciones -->
<section class="pt-20 pb-20 px-8 bg-gray-900">
  <div class="max-w-5xl mx-auto">
      <div class="text-center">
        <h2 class="text-6xl text-white font-bold">Certificaciones</h2>
        <p class="pt-2">hooaLorem ipsum dolor sit amet consectetur.</p>
      </div> 
   </div>
   <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-16">

   @foreach($certificacions as $certificacion)
     <div class="relative">
       <div class="bg-card"></div>     
       <div class="relative bg-white p-12 rounded-md shadow-md flex flex-col items-center">
        <img src="/storage/{{$certificacion->imagen}}" class="w-52 h-36" alt="">
        
        <div class="flex">
         <div>
          <h3 class="mt-3 mr-5 text-xl font-bold text-gray-800">{{ $certificacion->nombre }}</h3>
         </div>
          {{-- <p class="mt-4">{!! $certificacion->descripcion !!}</p> --}}
         <div>
          <a href="{{ route('front.vercertificacion',['certificacion' => $certificacion->id]) }}" class="boton-certificaciones">
            Ver Info
          </a>
         </div> 
        </div>
       </div>
     </div>
   @endforeach
  </div>

  <div class="mt-12 flex justify-center">
    <a href="{{ route('certificaciones') }}" class="boton-vercertificaciones">
      Ver todas las certificaciones
    </a>
  </div>
</section> 

<!-- Seccion de Portafolio -->
<section class="bg-gray-900 pt-20 pb-20 px-8 min-h-screen">

   <div class="max-w-5xl mx-auto">
       <div class="text-center">
         <h2 class="text-6xl text-white font-bold">Portafolio</h2>
         <p class="pt-2">Lorem ipsum dolor sit amet consectetur.</p>
       </div>
       <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            
          @foreach($portafolio as $index => $port)
            @if ($index == 0)
            <div class="rounded-md shadow-md lg:col-span-2 bg-white">
              <img src="/storage/{{$port->imagen}}" class="py-3 px-3 h-50 w-full object-cover" alt="">
              <hr class="bg-gray-900 h-1 my-4">
              <div class="flex justify-center gap-3 mb-3">
                <h4 class="font-bold text-3xl text-gray-800">{{ $port->titulo }}</h4>
                <a href="{{ route('front.show',['portafolio' => $port->id]) }}" class="boton-portafolio">
                  Ver mas
                </a>
              </div>
            </div>
            @endif

          @if ($index == 1)
          <div class="rounded-md shadow-md bg-white">
            <img src="/storage/{{$port->imagen}}" class="py-3 px-3 h-50 w-full object-cover" alt="">
            <div class="p-8">
              <hr class="bg-gray-900 h-1 my-4">
              <div class="flex justify-around mb-3">
               <h4 class="font-bold text-3xl text-gray-800">{{ $port->titulo}}</h4>
               {{-- <p class="pt-3">
                {!! $port->descripcion !!}
               </p> --}}
               <a href="{{ route('front.show',['portafolio' => $port->id]) }}" class="boton-portafolio">
                Ver mas
              </a>
              </div> 
            </div>
          </div>
          @endif  
        
          @if ($index == 3)
          <div class="rounded-md shadow-md bg-white">
            <img src="/storage/{{$port->imagen}}" class="py-3 px-3 h-50 w-full object-cover" alt="">
            <div class="p-8">
              <hr class="bg-gray-900 h-1 my-4">
              <div class="flex justify-around mb-3">
               <h4 class="font-bold text-3xl text-gray-800">{{ $port->titulo}}</h4>
               {{-- <p class="pt-3">
                {!! $port->descripcion !!}
               </p> --}}
               <a href="{{ route('front.show',['portafolio' => $port->id]) }}" class="boton-portafolio">
                Ver mas
              </a>
              </div> 
            </div>
          </div>
        @endif  


          @if ($index == 2)
          <div class="rounded-md shadow-md lg:col-span-2 bg-white">
            <img src="/storage/{{$port->imagen}}" class="py-3 px-3 h-50 w-full object-cover" alt="">
            <hr class="bg-gray-900 h-1 my-4">
            <div class="flex justify-center gap-3 mb-3">
              <h4 class="font-bold text-3xl text-gray-800">{{ $port->titulo }}</h4>
              <a href="{{ route('front.show',['portafolio' => $port->id]) }}" class="boton-portafolio">
                Ver mas
              </a>
            </div>
          </div>
          @endif

        
          @endforeach

       </div> 
   </div>
   
</section> 

<!-- Seccion de contacto -->
<section class="pt-20 pb-36 px-8 bg-gray-900">
  <div class="max-w-6xl mx-auto">
    <div class="text-center">
        <h1 class="text-5xl font-bold text-white">Contactame</h1>
        <p class="pt-2">Get in touch with me</p>
    </div>
  </div>
  <div class="mt-16 relative max-w-4xl mx-auto">
    <div class="absolute z-10 inset-0 bg-gradient-to-r from-blue-400 to-red-400 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg"></div>
    <div class="relative z-20 bg-white rounded-md shadow-md p-12">

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