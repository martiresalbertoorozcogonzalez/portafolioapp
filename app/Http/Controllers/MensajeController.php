<?php

namespace App\Http\Controllers;

use App\Mail\MensajeMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MensajeController extends Controller
{
    public function store(Request  $request)
    {

        //Validacion 
        $message = request()->validate([
           'name' => 'required',
           'email' => 'required|email',
           'subject' => 'required',
           'content' => 'required|min:3',
        ]);

        //enviar los datos del email
        Mail::to('martiresalbertoorozcogonzalez@gmail.com')->queue(new MensajeMailable($message));

        return back();
    }
}
