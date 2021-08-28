<?php

namespace App\Http\Controllers;

use App\Models\CategoriaPortafolio;
use App\Models\Habilidad;
use App\Models\Portafolio;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use Symfony\Component\HttpKernel\Event\RequestEvent;

class PortafolioController extends Controller
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
               // Auth::user()->recetas->dd();
        // $recetas =  auth()->user()->recetas;

        $usuario = auth()->user();

        //Recetas con paginacion
        $portafolio = Portafolio::where('user_id',$usuario->id)->paginate(5);

        // dd($portafolio);

         return view('admin.portafolio.index')
               ->with('portafolio',$portafolio)
               ->with('usuario',$usuario);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriaPortafolio::all(['id','nombre']);
        $habilidad = Habilidad::all(['id','nombre']);

        return view('admin.portafolio.create')->with('categorias',$categorias)
                                              ->with('habilidad',$habilidad);
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
            'titulo' =>  'required|min:6',
            'categoria' => 'required',
            'descripcion' => 'required',
            'urlPortafolio' =>'required',
            'imagen' => 'required|image',
        ]);

         //Obtener la ruta de la imagen
         $ruta_imagen = $request['imagen']->store('portafolio','public');

         //Resize de la imagen
         $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1220,550);
         $img->save();

                 //Almacenar en la DB con modelo
        auth()->user()->portafolios()->create([
            'titulo' => $data['titulo'] ,
            'categoria_id' => $data['categoria'],
            'descripcion' => $data['descripcion'],
            'urlPortafolio' => $data['urlPortafolio'],
            'imagen' => $ruta_imagen,
        ]);


        return redirect()->route('portafolio.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portafolio $portafolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portafolio $portafolio)
    {

        $habilidad = Habilidad::all(['id','nombre']);

        $categorias = CategoriaPortafolio::all(['id','nombre']);

        return view('admin.portafolio.edit',compact('categorias','portafolio','habilidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portafolio $portafolio)
    {

        //Revisar el policy
        $this->authorize('update', $portafolio);

         //validacion
        $data = $request->validate([
        'titulo' =>  'required|min:6',
        'categoria' => 'required',
        'descripcion' => 'required',
        'urlPortafolio' =>'required',
        ]);


        //Asiganr los valores
        $portafolio->titulo = $data['titulo'];
        $portafolio->urlPortafolio = $data['urlPortafolio'];
        $portafolio->descripcion = $data['descripcion'];
        $portafolio->categoria_id = $data['categoria'];

        // Si el usuario sube un anueva imagen
        if (request('imagen')) {

        //Obtener la ruta de la imagen
        $ruta_imagen = $request['imagen']->store('portafolio','public');

        //Resize de la imagen
        $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1220,550);

        $img->save();

        //Asiganr al objeto
        $portafolio->imagen = $ruta_imagen;
    }

        $portafolio->save();

        //redireccionar
        return redirect()->route('portafolio.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portafolio $portafolio)
    {
        //Ejecutar el Policy
        $this->authorize('delete',$portafolio);

        //Eliminar el portafolio
        $portafolio->delete();

        return redirect()->route('portafolio.index');
    }
}
