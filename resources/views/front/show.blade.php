@extends('layouts.front')


@section('content')

<div class="absolute w-full min-h-screen">
    <div class="absolute top-0 w-full h-1/2 bg-cover bg-bottom" 
         style="background-image: url('../img/background.jpg')">
    </div>
</div>

<section class="flex justify-center items-center min-h-screen">
    <div class="relative">
        <div class="bg-card"></div>
        <div class="relative md:flex space-x-12 z-10 bg-white max-w-4xl p-12 rounded-md shadow-md">
            <div class="flex flex-col space-y-6 justify-between py-4">
                
                <div>
                    <h1 class="text-5xl font-bold text-gray-800">{{ $portafolio->titulo }}</h1>
                </div>
                <p class="text-lg leading-relaxed">
                    {!! $portafolio->descripcion !!}
                </p>

            </div>
            <img src="/storage/{{$portafolio->imagen}}" alt="" class="w-80 rounded-md border-6 border-blue-300 shadow-md flex-shrink-0">
        </div>

    </div>
</section>


@endsection