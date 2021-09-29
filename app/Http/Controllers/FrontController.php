<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acerca;
use App\Models\Certificacion;
use App\Models\Habilidad;
use App\Models\Portafolio;
use Illuminate\Support\Facades\DB;


class FrontController extends Controller
{
    // Front del portafolioapp
    public function acerca()
    {
        //Acerca de
        $acerca = Acerca::all();
    
        //Portafolio
        $portafolio = Portafolio::all();

        //Cetificaciones
        // $certificacions = Certificacion::all()->take(6);
        $certificacions = Certificacion::latest()->take(6)->get();

        // dd($certificacions);

        return view('front.inicio')->with('acerca', $acerca)
                             ->with('certificacions', $certificacions)
                             ->with('portafolio', $portafolio);
    }


    // Ruta para mostrar el portafolio
    public function show(Portafolio $portafolio)
    {

        return view('front.show')->with('portafolio',$portafolio);

    }


    // Ruta para mostrar la certificacion
    public function vercertificacion(Certificacion $certificacion)
    {
        
        return view('front.showcert')->with('certificacion',$certificacion);
        
    }
    
    
    //Ruta para mostrar el resto de certificaciones
    public function certificaciones(Certificacion $certificacion)
    {
        $certificacions = Certificacion::first()->take(7)->paginate(6);
        // $certificacions = Certificacion::orderBy('id')->paginate(6);
        return view('front.showcertificaciones')->with('certificacions', $certificacions);
    }
}