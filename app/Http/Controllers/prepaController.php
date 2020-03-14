<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\prepaModel;
use App\localidadesModel;

class prepaController extends Controller
{
    public function nuevaPrepa(){
        $localidades=localidadesModel::all();
        return view('nuevaPrepa')
        ->with('localidades',$localidades);
    }
    public function guardaPrepa(Request $request){
        $id = (int)$request->id;
		$institucion = $request->aconocimiento;
		$id_localidad = $request->id_localidad;

		$prep = new prepaModel;
		$prep->institucion = $request->institucion;
		$prep->id_localidad = $request->id_localidad;
		$prep ->save();
		return view('reportePrepa');
    }
    public function reportePrepa(){
        $preparatorias=prepaModel::all();
        $localidades=localidadesModel::all();
        return view('reportePrepa') 
        ->with('preparatorias',$preparatorias)
        ->with('localidades',$localidades);
    }
    public function modificaPrepa($id){
		return view('nuevaPrepa');
    }
    public function actualizaPrepa(Request $request){
		return view('nuevaPrepa');
    }
    public function eliminaPrepa($id){
		return view('nuevaPrepa');
    }
    
}