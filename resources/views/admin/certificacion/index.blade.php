@extends('layouts.app')

@section('content')

<div class="container px-4 mx-auto mt-6">

    <h1 class="text-2xl text-center text-black font-bold">Certificaciones</h1>

    <a href="{{ route('certificacion.create') }}" class="bg-gradient-to-l from-red-600  hover:bg-indigo-700 p-2 mb-2 rounded" type="submit">Crear Certificacion</a>

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


<table class="w-full divide-y divide-gray-500 table-auto">

    <thead class="bg-indigo-600">
      <tr>
        <th class="px-6 py-3 text-lg font-medium text-white">Id</th>
        <th class="px-6 py-3 text-lg font-medium text-white">Nombre</th>
        <th class="px-6 py-3 text-lg font-medium text-white">descripcion</th>
        <th class="px-6 py-3 text-lg font-medium text-white">Imagen</th>
        <th class="px-6 py-3 text-lg font-medium text-white">Cert</th>
        <th class="px-6 py-3 text-lg font-medium text-white">Editar</th>
        <th class="px-6 py-3 text-lg font-medium text-white">Eliminar</th>
    </tr>
    </thead>

    <tbody class="divide-y divide-gray-200">
    @foreach ($certificacions as $certificacion)
      <tr class="text-center bg-white">
        <td class="text-center px-6 py-3">{{ $certificacion->id }}</td>
        <td class="text-center px-6 py-3">{{ $certificacion->nombre }}</td>
        <td class="text-center px-6 py-3">{!! $certificacion->descripcion !!}</td>
        <td class="text-center px-6 py-3">
            <img src="/storage/{{$certificacion->imagen}}" width="100" height="100">
        </td>
        <td class="text-center px-6 py-3">{!! $certificacion->url_certificacion !!}</td>
        <td>
            <a href="{{ route('certificacion.edit',['certificacion' => $certificacion->id]) }}" class="bg-gradient-to-l from-indigo-600 hover:bg-red-500 p-4 rounded" type="submit">Editar</a>
        </td>
        <td class="px-6 py-3">
            <form action="{{ route('certificacion.destroy', ['certificacion' => $certificacion->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="bg-gradient-to-l from-red-500  hover:bg-indigo-600 p-4 rounded" type="submit">Eliminar</button>
            </form>
        </td>
      </tr>
      @endforeach

    </tbody>

  </table>
  
  <div class="flex justify-around space-x-6 py-8 px-6">
    {{ $certificacions->links() }}
  </div>

</div>

</div>


@endsection


