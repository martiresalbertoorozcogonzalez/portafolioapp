<?php

namespace App\Http\Controllers;

use App\Models\Acerca;
use Illuminate\Http\Request;
use App\Models\Habilidad;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class AcercaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show', 'search']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Acerca de
        $acerca = Acerca::all();

        // dd($portafolio);

        return view('admin.acerca.index')
            ->with('acerca', $acerca);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.acerca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion
        $data = $request->validate([
            'nombre' =>  'required',
            'url_git' =>  'required',
            'url_linkedin' =>  'required',
            'descripcion' => 'required',
            'imagen' => 'required|image',
        ]);

        //Obtener la ruta de la imagen
        $ruta_imagen = $request['imagen']->store('habilidad', 'public');

        //Redimensionar de la imagen
        $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1250, 850);
        $img->save();

        //Almacenar en la DB con modelo
        Habilidad::create([
            'nombre' => $data['nombre'],
            'url_git' => $data['url_git'],
            'url_linkedin' => $data['url_linkedin'],
            'descripcion' => $data['descripcion'],
            'imagen' => $ruta_imagen,
        ]);


        return redirect()->route('acerca.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acerca  $acerca
     * @return \Illuminate\Http\Response
     */
    public function show(Acerca $acerca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acerca  $acerca
     * @return \Illuminate\Http\Response
     */
    public function edit(Acerca $acerca)
    {
        return view('admin.acerca.edit', compact('acerca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acerca  $acerca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acerca $acerca)
    {
        //  //Revisar el policy
        //  $this->authorize('update', $habilidad);

        //validacion
        $data = $request->validate([
            'nombre' =>  'required',
            'url_git' =>  'required',
            'url_linkedin' =>  'required',
            'descripcion' => 'required',
            'imagen' => 'required|image',
        ]);


        //Asiganr los valores
        $acerca->nombre = $data['nombre'];
        $acerca->url_git = $data['url_git'];
        $acerca->url_linkedin = $data['url_linkedin'];
        $acerca->descripcion = $data['descripcion'];

        // Si el usuario sube un anueva imagen
        if (request('imagen')) {

            //Obtener la ruta de la imagen
            $ruta_imagen = $request['imagen']->store('acerca', 'public');

            //Resize de la imagen
            $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1250, 850);

            $img->save();

            //Asiganr al objeto
            $acerca->imagen = $ruta_imagen;
        }

        $acerca->save();

        //redireccionar
        return redirect()->route('acerca.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acerca  $acerca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acerca $acerca)
    {
        // //Ejecutar el Policy
        // $this->authorize('delete',$habilidad);

        //Eliminar el portafolio
        $acerca->delete();

        return redirect()->route('acerca.index');
    }
}
