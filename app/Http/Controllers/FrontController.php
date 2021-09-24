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

        //Habilidades
        $habilidad = Habilidad::all();
        
        
        //Portafolio
        $portafolio = Portafolio::all();

        
        
        //Cetificaciones
        $certificacion = Certificacion::all();

        // dd($portafolio);

        return view('front.inicio')->with('acerca', $acerca)
                             ->with('habilidad', $habilidad)
                             ->with('certificacion', $certificacion)
                             ->with('portafolio', $portafolio);
    }


    // Ruta para mostrar el portafolio
    public function show(Portafolio $portafolio)
    {

       return view('front.show')->with('portafolio',$portafolio);

    }











}
