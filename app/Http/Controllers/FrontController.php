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
    public function acerca()
    {
        //Acerca de
        $acerca = Acerca::all();

        //Habilidades
        $habilidad = Habilidad::all();
        
        //Portafolio
        $portafoliouno = DB::table('portafolios')->where('id', '1')->get();
        $portafoliodos = DB::table('portafolios')->where('id', '2')->get();
        $portafoliotres = DB::table('portafolios')->where('id', '3')->get();
        $portafoliocuatro = DB::table('portafolios')->where('id', '4')->get();
        
        //Cetificaciones
        $certificacion = Certificacion::all();

        // dd($portafoliouno);

        return view('inicio')->with('acerca', $acerca)
                             ->with('habilidad', $habilidad)
                             ->with('certificacion', $certificacion)
                             ->with('portafoliouno', $portafoliouno)
                             ->with('portafoliodos', $portafoliodos)
                             ->with('portafoliotres', $portafoliotres)
                             ->with('portafoliocuatro', $portafoliocuatro);
    }
}
