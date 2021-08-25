<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Admin') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <h2 class="text-center mb-5">Crear Nueva Portafolio</h2>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <form action="" method="post">

                    <div class="form-group">
                        <label for="titulo">Titulo</label>

                        <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" id="titulo"
                            placeholder="Titulo Receta" value={{ old('titulo') }}>

                        @error('titulo')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="categoria">Categorias</label>

                        <select name="categoria" id="categoria" class="form-control @error('categoria') is-invalid @enderror">
                            <option value="">--Seleccione--</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}" {{ old('categoria') == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}
                                </option>
                            @endforeach
                        </select>

                        @error('categoria')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror()

                    </div>

                    <div class="form-group mt-3">
                        <label for="urlportafolio">urlPortafolio</label>
                        <input type="hidden" id="urlportafolio" name="urlportafolio" value="{{ old('urlportafolio') }}">
                        <trix-editor class="form-control @error('urlportafolio') is-invalid @enderror " input="urlportafolio">
                        </trix-editor>

                        @error('urlportafolio')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror()

                    </div>

                    <div class="form-group mt-3">
                        <label for="descripcion">Descripcion</label>
                        <input type="hidden" id="descripcion" name="descripcion" value="{{ old('descripcion') }}">
                        <trix-editor class="form-control @error('descripcion') is-invalid @enderror " input="descripcion">
                        </trix-editor>

                        @error('descripcion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror()

                    </div>

                    <div class="form-group mt-3">
                        <label for="imagen">Elige una imagen</label>
                        <input type="file" name="imagen" id="imagen"
                            class="form-control @error('imagen') is-invalid @enderror ">

                        @error('imagen')
                        <span class=" invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror()
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Agregar Receta">
                    </div>


                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
