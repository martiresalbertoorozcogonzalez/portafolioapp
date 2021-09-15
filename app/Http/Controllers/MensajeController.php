<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
    public function index()
    {

        $portafolio = Portafolio::all();
        return view('admin.mensajes.index');

    }
}
