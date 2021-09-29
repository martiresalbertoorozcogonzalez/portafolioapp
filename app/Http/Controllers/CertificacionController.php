<?php

namespace App\Http\Controllers;

use App\Models\Certificacion;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class CertificacionController extends Controller
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
        $certificacions = Certificacion::paginate(5);

        // dd($portafolio);

         return view('admin.certificacion.index')
               ->with('certificacions',$certificacions)
               ->with('usuario',$usuario);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.certificacion.create');
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
     $ruta_imagen = $request['imagen']->store('certificacion','public');

     //Resize de la imagen
     $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1220,550);
     $img->save();

             //Almacenar en la DB con modelo
    Certificacion::create([
        'nombre' => $data['nombre'] ,
        'descripcion' => $data['descripcion'],
        'imagen' => $ruta_imagen,
    ]);


    return redirect()->route('certificacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function show(Certificacion $certificacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificacion $certificacion)
    {
        return view('admin.certificacion.edit',compact('certificacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificacion $certificacion)
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
            $certificacion->nombre = $data['nombre'];
            $certificacion->descripcion = $data['descripcion'];

            // Si el usuario sube un anueva imagen
            if (request('imagen')) {

            //Obtener la ruta de la imagen
            $ruta_imagen = $request['imagen']->store('certificacion','public');

            //Resize de la imagen
            $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1220,550);

            $img->save();

            //Asiganr al objeto
            $certificacion->imagen = $ruta_imagen;
        }

            $certificacion->save();

            //redireccionar
            return redirect()->route('certificacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificacion $certificacion)
    {
        // //Ejecutar el Policy
        // $this->authorize('delete',$habilidad);

        //Eliminar el portafolio
        $certificacion->delete();

        return redirect()->route('certificacion.index');
    }
}
