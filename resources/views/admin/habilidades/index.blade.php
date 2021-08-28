@extends('layouts.app')

@section('content')

<div class="container px-4 mx-auto mt-6">

    <h1 class="text-2xl text-center text-black font-bold">Habilidades</h1>

    <a href="{{ route('habilidad.create') }}" class="bg-gradient-to-l from-red-600  hover:bg-indigo-700 p-2 mb-2 rounded" type="submit">Crear Habilidad</a>

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


<table class="w-full divide-y divide-gray-500 table-auto">

    <thead class="bg-indigo-600">
      <tr>
        <th class="px-6 py-3 text-lg font-medium text-white">Id</th>
        <th class="px-6 py-3 text-lg font-medium text-white">Nombre</th>
        <th class="px-6 py-3 text-lg font-medium text-white">descripcion</th>
        <th class="px-6 py-3 text-lg font-medium text-white">Imagen</th>
        <th class="px-6 py-3 text-lg font-medium text-white">Editar</th>
        <th class="px-6 py-3 text-lg font-medium text-white">Eliminar</th>
    </tr>
    </thead>

    <tbody class="divide-y divide-gray-200">
    @foreach ($habilidad as $habilidad)
      <tr class="text-center bg-white">
        <td class="text-center px-6 py-3">{{ $habilidad->id }}</td>
        <td class="text-center px-6 py-3">{{ $habilidad->nombre }}</td>
        <td class="text-center px-6 py-3">{!! $habilidad->descripcion !!}</td>
        <td class="text-center px-6 py-3">
            <img src="/storage/{{$habilidad->imagen}}" width="100" height="100">
        </td>
        <td>
            <a href="{{ route('habilidad.edit',['habilidad' => $habilidad->id]) }}" class="bg-gradient-to-l from-indigo-600 hover:bg-red-500 p-4 rounded" type="submit">Editar</a>
        </td>
        <td class="px-6 py-3">
            <form action="{{ route('habilidad.destroy', ['habilidad' => $habilidad->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="bg-gradient-to-l from-red-500  hover:bg-indigo-600 p-4 rounded" type="submit">Eliminar</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>

  </table>

</div>

</div>

@endsection


