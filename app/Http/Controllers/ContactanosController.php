<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// para mandar correcos electronicos
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;


class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'mail' => 'required|email',
            'message' => 'required',
        ]);

        //procesar y enviar el correo electronico
        $correo = new ContactanosMailable($request->all());
        Mail::to('201714029@uns.edu.pe')->send($correo);

        // varaible de sesion para alerta
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}
