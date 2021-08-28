<?php

namespace App\Http\Controllers;

use App\Models\Habilidad;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;


class HabilidadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show','search']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $usuario = auth()->user();

        //Habilidades con paginacion
        $habilidad = Habilidad::all();

        // dd($portafolio);

         return view('admin.habilidades.index')
               ->with('habilidad',$habilidad)
               ->with('usuario',$usuario);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.habilidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();

       //validacion
       $data = $request->validate([
        'nombre' =>  'required',
        'descripcion' => 'required',
        'imagen' => 'required|image',
    ]);

     //Obtener la ruta de la imagen
     $ruta_imagen = $request['imagen']->store('habilidad','public');

     //Resize de la imagen
     $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1220,550);
     $img->save();

             //Almacenar en la DB con modelo
    Habilidad::create([
        'nombre' => $data['nombre'] ,
        'descripcion' => $data['descripcion'],
        'imagen' => $ruta_imagen,
    ]);


    return redirect()->route('habilidad.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function show(Habilidad $habilidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Habilidad $habilidad)
    {
        return view('admin.habilidades.edit',compact('habilidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habilidad $habilidad)
    {

        //  //Revisar el policy
        //  $this->authorize('update', $habilidad);

         //validacion
         $data = $request->validate([
            'nombre' =>  'required',
            'descripcion' => 'required',
            'imagen' =>'required|image',
            ]);


            //Asiganr los valores
            $habilidad->nombre = $data['nombre'];
            $habilidad->descripcion = $data['descripcion'];

            // Si el usuario sube un anueva imagen
            if (request('imagen')) {

            //Obtener la ruta de la imagen
            $ruta_imagen = $request['imagen']->store('habilidad','public');

            //Resize de la imagen
            $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1220,550);

            $img->save();

            //Asiganr al objeto
            $habilidad->imagen = $ruta_imagen;
        }

            $habilidad->save();

            //redireccionar
            return redirect()->route('habilidad.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habilidad $habilidad)
    {
        // //Ejecutar el Policy
        // $this->authorize('delete',$habilidad);

        //Eliminar el portafolio
        $habilidad->delete();

        return redirect()->route('habilidad.index');
    }
}
