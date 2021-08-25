@extends('layouts.app')

@section('content')

<div class="container px-4 mx-auto mt-6">

    <a href="{{ route('portafolio.create') }}" class="bg-blue-500  hover:bg-blue-400 p-2 mb-2 rounded" type="submit">Crear Portafolio</a>

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


<table class="w-full divide-y divide-gray-500 table-auto">

    <thead class="bg-gray-200">
      <tr>
        <th class="px-6 py-3 text-lg font-medium text-gray-500">Title</th>
        <th class="px-6 py-3 text-lg font-medium text-gray-500">Author</th>
        <th class="px-6 py-3 text-lg font-medium text-gray-500">Categoria</th>
        <th class="px-6 py-3 text-lg font-medium text-gray-500">Imagen</th>
        <th class="px-6 py-3 text-lg font-medium text-gray-500">Editar</th>
        <th class="px-6 py-3 text-lg font-medium text-gray-500">Eliminar</th>
    </tr>
    </thead>

    <tbody class="divide-y divide-gray-200">
    @foreach ($portafolio as $portafolio)
      <tr class="text-center bg-white">
        <td class="text-center px-6 py-3">{{ $portafolio->titulo }}</td>
        <td class="text-center px-6 py-3">{{ $portafolio->autor->name }}</td>
        <td class="text-center px-6 py-3">{{ $portafolio->categoria->nombre }}</td>
        <td class="text-center px-6 py-3">
            <img src="/storage/{{$portafolio->imagen}}" style="width:200px;">
        </td>
        <td>
            <a href="{{ route('portafolio.edit',['portafolio' => $portafolio->id]) }}" class="bg-blue-500  hover:bg-blue-400 p-4 rounded" type="submit">Editar</a>
        </td>
        <td class="px-6 py-3">
            <form action="{{ route('portafolio.destroy', ['portafolio' => $portafolio->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="bg-red-500  hover:bg-red-400 p-4 rounded" type="submit">Eliminar</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>

  </table>

</div>

</div>

@endsection


