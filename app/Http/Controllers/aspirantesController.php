<?php

namespace App\Http\Controllers;
use App\aspirantesModel;
use Illuminate\Http\Request;
use App\estadosModel;
use App\municipiosModel;
use App\prepaModel;

class aspirantesController extends Controller
{
    public function indexAspirantes()
	{
		$aspirantes=aspirantesModel::all();
		return view('indexAspirantes')
        ->with('aspirantes',$aspirantes);
        
	}
	public function nuevoAspirantes(){
        $aspirantes=aspirantesModel::all();
		$estados=estadosModel::all();
		$municipios=municipiosModel::all();
		$preparatorias=prepaModel::all();

		return view('nuevoAspirantes')
		->with('aspirantes',$aspirantes)
		->with('estados',$estados)
		->with('municipios',$municipios)
		->with('preparatorias',$preparatorias);
	}
	public function guardaAspirantes(Request $request){



		$nAspirante = $request->nAspirante;
        $apAspirante = $request->apAspirante;
		$amAspirante = $request->amAspirante;
		$sexo = $request->sexo;
		$fechaNac = $request->fechaNac;
		$paisOrigen = $request->paisOrigen;
		$EstadoCivil = $request->EstadoCivil;
		$CURP = $request->CURP;
		$RFC = $request->RFC;
		$peso = $request->peso;
		$estatura = $request->estatura;
		$tSangre = $request->tSangre;
		$famDiabetico = $request->famDiabetico;
		$famHipertenso = $request->famHipertenso;
		$famCardiaco = $request->famCardiaco;
		$ceneval = $request->ceneval;
		$folioInt = $request->folioInt;
		$estadoProc = $request->estadoProc;
		$munProc = $request->munProc;
		$escProcedencia = $request->escProcedencia;
		$espProcedencia = $request->espProcedencia;
		$anoIniProce = $request->anoIniProce;
		$anoFinProce = $request->anoFinProce;
		$promedioProce = $request->promedioProce;
		$nTutor = $request->nTutor;
		$apTutor = $request->apTutor;
		$amTutor = $request->amTutor;

		$aspirantes = aspirantesModel::create($request->all());

		return redirect()->route('indexAspirantes')->with('success','registro exitoso');
	}
	public function modificaAspirantes($id)
	{
	$consulta = aspirantesModel::find($id);
	$estados=estadosModel::all();
	$municipios=municipiosModel::all();
	$preparatorias=prepaModel::all();

	return view('editarAspirantes')
	->with('consulta',$consulta)
	->with('id',$id)
	->with('estados',$estados)
	->with('municipios',$municipios)
	->with('preparatorias',$preparatorias);
	
}
	public function actualizarAspirantes(Request $request){
		$id = $request->id;
		$nAspirante = $request->nAspirante;
        $apAspirante = $request->apAspirante;
		$amAspirante = $request->amAspirante;
		$sexo = $request->sexo;
		$fechaNac = $request->fechaNac;
		$paisOrigen = $request->paisOrigen;
		$EstadoCivil = $request->EstadoCivil;
		$CURP = $request->CURP;
		$RFC = $request->RFC;
		$peso = $request->peso;
		$estatura = $request->estatura;
		$tSangre = $request->tSangre;
		$famDiabetico = $request->famDiabetico;
		$famHipertenso = $request->famHipertenso;
		$famCardiaco = $request->famCardiaco;
		$ceneval = $request->ceneval;
		$folioInt = $request->folioInt;
		$estadoProc = $request->estadoProc;
		$munProc = $request->munProc;
		$escProcedencia = $request->escProcedencia;
		$espProcedencia = $request->espProcedencia;
		$anoIniProce = $request->anoIniProce;
		$anoFinProce = $request->anoFinProce;
		$promedioProce = $request->promedioProce;
		$nTutor = $request->nTutor;
		$apTutor = $request->apTutor;
		$amTutor = $request->amTutor;

		$aspi = aspirantesModel::find($id);

		$aspi->update($request->all());

		return redirect()->route('indexAspirantes')->with('success','registro exitoso');
	}

    public function eliminaAspirantes($id)
    {
        $aspi = aspirantesModel::find($id);
        $aspi->delete();
        return redirect('indexAspirantes')->with('success','registro eliminado');
        
        }
}
