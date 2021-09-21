@extends('layouts.front')

@section('estilos')
<!-- Ionic icons -->
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

@endsection

@section('content')

<!-- Seccion Acerca de -->
<section class="flex justify-center items-center min-h-screen">
    <div class="relative">
        <div class="bg-card"></div>
        <div class="relative md:flex space-x-12 z-10 bg-white max-w-4xl p-12 rounded-md shadow-md">
            @foreach($acerca as $acerca)
            <div class="flex flex-col space-y-6 justify-between py-4">
                
                <div>
                    <p class="text-lg">Hola yo soy</p>
                    <h1 class="text-5xl font-bold text-gray-800">{{ $acerca->nombre }}</h1>
                </div>
                <p class="text-lg leading-relaxed">
                    {!! $acerca->descripcion !!}
                </p>
                <div class="inline-flex spacex4 text-5xl text-gray-600">
                <ion-icon name="logo-github"></ion-icon>
                <ion-icon name="logo-linkedin"></ion-icon>
                </div>

            </div>
            <img src="/storage/{{$acerca->imagen}}" alt="" class="w-80 rounded-full border-6 border-blue-300 shadow-md flex-shrink-0">
            @endforeach 
        </div>
    </div>
</section>

<!-- Seccion de servicios -->
<section class="bg-gray-50 pt-20 pb-20 px-8">
   <div class="max-w-5xl mx-auto">
       <div class="text-center">
         <h2 class="text-5xl text-gray-800 font-bold">Conocimientos</h2>
         <p class="pt-2">Lorem ipsum dolor sit amet consectetur.</p>
       </div> 
    </div>
    <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-16">

    @foreach($habilidad as $habilidad)
      <div class="relative">
        <div class="bg-card"></div>     
        <div class="relative bg-white p-12 rounded-md shadow-md">
         <img src="/storage/{{$habilidad->imagen}}" class="w-8 h-8" alt="">   
         <h3 class="mt-3 text-2xl font-bold text-gray-800">{{ $habilidad->nombre }}</h3>
         <p class="mt-4">{!! $habilidad->descripcion !!}</p>
        </div>
      </div>
    @endforeach
      <!-- <div class="relative">
        <div class="bg-card"></div>     
        <div class="relative bg-white p-12 rounded-md shadow-md">
         <ion-icon name="logo-buffer" class="text-5xl text-cyan-500"></ion-icon>
         <h3 class="mt-3 text-2xl font-bold">Web Apps</h3>
         <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor, tenetur numquam!</p>
        </div>
      </div>
      
      <div class="relative">
        <div class="bg-card"></div>     
        <div class="relative bg-white p-12 rounded-md shadow-md">
         <ion-icon name="chatboxes" class="text-5xl text-cyan-500"></ion-icon>
         <h3 class="mt-3 text-2xl font-bold">Consultoria</h3>
         <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor, tenetur numquam!</p>
        </div>
      </div> -->
      
      
    </div>
</section>  

<!-- Seccion para certificaciones -->
<section class="bg-gray-50 pt-20 pb-20 px-8">
  <div class="max-w-5xl mx-auto">
      <div class="text-center">
        <h2 class="text-5xl text-gray-800 font-bold">Certificaciones</h2>
        <p class="pt-2">Lorem ipsum dolor sit amet consectetur.</p>
      </div> 
   </div>
   <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-16">

   @foreach($certificacion as $certificacion)
     <div class="relative">
       <div class="bg-card"></div>     
       <div class="relative bg-white p-12 rounded-md shadow-md">
        <img src="/storage/{{$certificacion->imagen}}" class="w-8 h-8" alt="">   
        <h3 class="mt-3 text-2xl font-bold text-gray-800">{{ $certificacion->nombre }}</h3>
        <p class="mt-4">{!! $certificacion->descripcion !!}</p>
       </div>
     </div>
   @endforeach
     
   </div>
</section> 

<!-- Seccion de Portafolio -->
<section class="pt-20 pb-20 px-8 min-h-screen">
   <div class="max-w-5xl mx-auto">
       <div class="text-center">
         <h2 class="text-6xl text-gray-800 font-bold">Portafolio</h2>
         <p class="pt-2">Lorem ipsum dolor sit amet consectetur.</p>
       </div>
       <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            
          @foreach($portafoliouno as $uno)

            <div class="rounded-md shadow-md lg:col-span-2">
              <img src="/storage/{{$uno->imagen}}" class="bg-blue-300 h-50 w-full object-cover p-3" alt="">
              <div class="p-8">
                <h4 class="font-bold text-2xl text-gray-800">{{ $uno->titulo }}</h4>
                <p class="pt-3">
                  {!! $uno->descripcion !!}
                </p>
                <a href="#" class="boton-portafolio">
                  Ver mas
                </a>
              </div>
            </div>
          
          @endforeach
          
          @foreach($portafoliodos as $dos)
            <div class="rounded-md shadow-md">
              <img src="/storage/{{$uno->imagen}}" class="bg-blue-300 p-3 h-50 w-full object-cover" alt="">
              <div class="p-8">
                <h4 class="font-bold text-2xl text-gray-800">{{ $dos->titulo}}</h4>
                <p class="pt-3">
                  {!! $dos->descripcion !!}
                </p>
                <a href="#" class="boton-portafolio">
                  Ver mas
                </a>
              </div>
            </div>
          @endforeach

          @foreach($portafoliotres as $tres)
            <div class="rounded-md shadow-md">
              <img src="/storage/{{$uno->imagen}}" class="bg-blue-300 p-3 h-50 w-full object-cover" alt="">
              <div class="p-8">
                <h4 class="font-bold text-2xl text-gray-800">{{ $tres->titulo }}</h4>
                <p class="pt-3">
                  {!! $tres->descripcion !!}
                </p>
                <a href="#" class="boton-portafolio">
                  Ver mas
                </a>
              </div>
            </div>
            @endforeach

          @foreach($portafoliocuatro as $cuatro)
            <div class="rounded-md shadow-md lg:col-span-2">
              <img src="/storage/{{$uno->imagen}}" class="bg-blue-300 p-3 h-50 w-full object-cover" alt="">
              <div class="p-8">
                <h4 class="font-bold text-2xl text-gray-800">{{ $cuatro->titulo }}</h4>
                <p class="pt-3">
                  {!! $cuatro->descripcion !!}
                </p>
                <a href="#" class="boton-portafolio">
                  Ver mas
                </a>
              </div>
            </div>
            @endforeach

       </div> 
    </div>
</section> 

<!-- Seccion de contacto -->
<section class="pt-20 pb-36 px-8 bg-gray-50">
  <div class="max-w-6xl mx-auto">
    <div class="text-center">
        <h1 class="text-5xl font-bold text-gray-800">Contactame</h1>
        <p class="pt-2">Get in touch with me</p>
    </div>
  </div>
  <div class="mt-16 relative max-w-4xl mx-auto">
    <div class="absolute z-10 inset-0 bg-gradient-to-r from-blue-400 to-blue-400 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg"></div>
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
            <button class="boton-portafolio">
                  Enviar mensaje
            </button>
        </form>
    </div>
  </div>
</section>

@endsection