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

                <h1 class="text-center mb-5 text-lg font-bold">Editar acerca</h1>

                <form action="{{ route('acerca.update',['acerca'=> $acerca->id]) }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto my-10">
                    @csrf
                    @method('PUT')

                    <div class="mb-5">

                        <label for="nombre" class="block text-gray-700 text-sm mb-2">Nombre</label>

                        <input id="nombre" type="text"
                            class="p-3 bg-white rounded form-input w-full @error('nombre') border-blue-500 border @enderror"
                            name="nombre" placeholder="nombre" value="{{ $acerca->nombre }}">
                        @error('nombre')
                        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6"
                            role="alert">
                            <strong class="font-bold">Error!!</strong>
                            <span class="block">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                    <div class="mb-5">

                        <label for="url_git" class="block text-gray-700 text-sm mb-2">Url Github</label>

                        <input id="url_git" type="text"
                            class="p-3 bg-white rounded form-input w-full @error('url_git') border-blue-500 border @enderror"
                            name="url_git" placeholder="url_git" value="{{ $acerca->url_git }}">
                        @error('url_git')
                        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6"
                            role="alert">
                            <strong class="font-bold">Error!!</strong>
                            <span class="block">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                    <div class="mb-5">

                        <label for="url_linkedin" class="block text-gray-700 text-sm mb-2">Url Linkedin</label>

                        <input id="url_linkedin" type="text"
                            class="p-3 bg-white rounded form-input w-full @error('url_linkedin') border-blue-500 border @enderror"
                            name="url_linkedin" placeholder="url_linkedin" value="{{ $acerca->url_linkedin }}">
                        @error('url_linkedin')
                        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6"
                            role="alert">
                            <strong class="font-bold">Error!!</strong>
                            <span class="block">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>



                    <div class="mb-5">
                        <label for="descripcion" class="block text-gray-700 text-sm mb-2">
                            Descripcion Acerca de
                        </label>

                        <input type="hidden" id="descripcion" name="descripcion" value="{{$acerca->descripcion}}">
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
                        <label for="imagen">Imagen Acerca de</label>
                        <input id="imagen" type="file" name="imagen">

                        <div class="mt-4">
                            <p>Imagen Actual</p>
                            <img src="/storage/{{$acerca->imagen}}" style="width:300px;">
                        </div>

                        @error('imagen')
                        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6">
                            <strong class="font-bold">Error!!</strong>
                            <span class="block">{{$message}}</span>
                        </div>
                        @enderror

                    </div>

                    <div class="text-center pt-6">
                        <button href="#" class="bg-blue-500  hover:bg-blue-400 p-2 mb-2 rounded" type="submit">Editar Acerca de</button>
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
