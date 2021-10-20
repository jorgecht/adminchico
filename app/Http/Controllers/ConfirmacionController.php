<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ConfirmacionMailable;
use Illuminate\Support\Facades\Mail;


class ConfirmacionController extends Controller
{
    public function store(Request $request, $accion){

    
  
        //return redirect()->route('confirmacion.index')->with('info','Mensaje enviado');

    }
}
