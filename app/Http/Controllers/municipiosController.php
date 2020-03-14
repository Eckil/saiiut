<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estadosModel;
use App\municipiosModel;


class municipiosController extends Controller
{
    public function reporteMunicipios(){
        
        $municipios=municipiosModel::all();
		return view('reporteMunicipios')
		->with('municipios',$municipios);
    }
}