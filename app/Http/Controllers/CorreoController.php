<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

class CorreoController extends Controller
{
    public function enviar(Request $request){
        $correo = $request->correo;
        $nombre = $request->nombre;
        $asunto = $request->asunto;
        $cuerpo = $request->cuerpo;
        $imagen = $request->imagen;
        
        $data = array('nombre'=>"Laravel UTVT","texto"=>"Gmail de laravel");

        Mail::send('Mail',$request->all(),function($message) use($correo,$nombre,$asunto,$cuerpo,$imagen){
            $message->to("$correo","$nombre")
            ->subject($asunto);
            $message->from('oscarsaiiut@gmail.com','Oscar');
        });

        if (Mail::failures()){
            return response()->Fail('Disculpa!, intenta mas tarde');
        }else{
            return response()->json('si, se ha enviado un email');
        }
    }
    public function correo (){
        return view('correo');
    }
}