@extends('layouts.app')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.css"
        integrity="sha512-EQF8N0EBjfC+2N2mlaH4tNWoUXqun/APQIuFmT1B+ThTttH9V1bA0Ors2/UyeQ55/7MK5ZaVviDabKbjcsnzYg=="
        crossorigin="anonymous" />

@endsection()

@section('content')

<div class="py-6">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <h1 class="text-center mb-5 text-lg font-bold">Crear Portafolio</h1>

                <form action="{{ route('portafolio.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto my-10">
                    @csrf

                    <div class="mb-5">

                        <label for="titulo" class="block text-gray-700 text-sm mb-2">Titulo</label>

                        <input id="titulo" type="text"
                            class="p-3 bg-white rounded form-input w-full @error('titulo') border-blue-500 border @enderror"
                            name="titulo" placeholder="Titulo" value="{{ old('titulo') }}">
                        @error('titulo')
                        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6"
                            role="alert">
                            <strong class="font-bold">Error!!</strong>
                            <span class="block">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                    <div class="mb-5">

                        <label for="url_portafolio" class="block text-gray-700 text-sm mb-2">urlportafolio</label>

                        <input id="url_Portafolio" type="text"
                            class="p-3 bg-white rounded form-input w-full @error('url_Portafolio') border-blue-500 border @enderror"
                            name="url_Portafolio" placeholder="url_Portafolio" value="{{ old('url_Portafolio') }}">
                        @error('urlPortafolio')
                        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6"
                            role="alert">
                            <strong class="font-bold">Error!!</strong>
                            <span class="block">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                    <div class="mb-5">  

                        <label for="url_Git" class="block text-gray-700 text-sm mb-2">urlportafolio</label>

                        <input id="url_Git" type="text"
                            class="p-3 bg-white rounded form-input w-full @error('url_Git') border-blue-500 border @enderror"
                            name="url_Git" placeholder="url_Git" value="{{ old('url_Git') }}">
                        @error('urlPortafolio')
                        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6"
                            role="alert">
                            <strong class="font-bold">Error!!</strong>
                            <span class="block">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="categoria" class="block text-gray-700 text-sm mb-2">
                            Categoria;
                        </label>
                        <select id="categoria" class="block appearance-none border border-gray-200
                                      text-gray-700 rounded leading-tight focus:outline-none
                                      focus:bg-white focus:border-gray-500 p-3 bg-gray-100
                                      w-full" name="categoria">
                            <option disabled selected> Selecciona </option>
                            @foreach ($categorias as $categoria)
                            <option {{old('categoria') == $categoria->id ? 'selected' : ''}}
                                value="{{ $categoria->id }}">
                                {{ $categoria->nombre }}
                            </option>
                            @endforeach
                        </select>
                        @error('categoria')
                        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6"
                            role="alert">
                            <strong class="font-bold">Error!!</strong>
                            <span class="block">{{$message}}</span>
                        </div>
                        @enderror()
                    </div>


                    <div class="mb-5">
                        <label for="descripcion" class="block text-gray-700 text-sm mb-2">
                            Descripcion del Portafolio
                        </label>

                        <input type="hidden" id="descripcion" name="descripcion" value="{{ old('descripcion') }}">
                        <trix-editor class="form-control @error('descripcion') is-invalid @enderror " input="descripcion">
                        </trix-editor>

                        @error('descripcion')
                        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                            <strong class="font-bold">Error!!</strong>
                            <span class="block">{{$message}}</span>
                        </div>
                        @enderror()
                    </div>

                    <div class="mb-5">
                        <label for="imagen">Imagen Portafolio</label>
                        <input id="imagen" type="file" name="imagen" value="{{old('imagen')}}">

                        @error('imagen')
                        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6">
                            <strong class="font-bold">Error!!</strong>
                            <span class="block">{{$message}}</span>
                        </div>
                        @enderror

                    </div>

                    <div class="text-center pt-6">
                        <button href="#" class="bg-blue-500  hover:bg-blue-400 p-2 mb-2 rounded" type="submit">Crear Portafolio</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.js"
        integrity="sha512-S9EzTi2CZYAFbOUZVkVVqzeVpq+wG+JBFzG0YlfWAR7O8d+3nC+TTJr1KD3h4uh9aLbfKIJzIyTWZp5N/61k1g=="
        crossorigin="anonymous" defer></script>

@endsection()
