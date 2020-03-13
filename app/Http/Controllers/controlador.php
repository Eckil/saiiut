<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumnos;
use App\materias;
use App\alumcompleto;

use App\aconocimiento;
use App\carreras;
use App\subcarreras;
class controlador extends Controller
{
	public function alumnos()
	{
		
		$alumno = alumnos::all();
		$materias = materias::all();
		return view('alumnos')
		->with('alumno',$alumno)
		->with('materias',$materias);
	}

    public function Guarda(Request $request)
	{
		
	
    	$matricula = $request->matricula;
		$nombre = $request->nombre;//recibir objetos del formulario
		$app = $request->app;
		$apm = $request->apm;
		$materias = $request->materias;

	  $usu = new alumcompleto;
		$usu->matricula = $request->matricula;
		$usu->nombre = $request->nombre;
		$usu->app = $request->app;
		$usu->apm = $request->apm;
		$usu->materias = $request->materias;
		$usu->save();

		echo "guardado";

	}
	public function index()
	{
		$materias = alumcompleto::all();
		return view('index')
		->with('materias',$materias);
	}

//------------------------------------------proyecto-------------------------
	public function indexaconocimiento()
	{
		$aconocimiento=aconocimiento::all();
		return view('indexaconocimiento')
		->with('aconocimiento',$aconocimiento);
	}
	public function nuevoAconocimiento(){
		return view('nuevoAconocimiento');
	}
	public function guardaAconocimiento(Request $request){
		$id = (int)$request->id;
		$aconocimiento = $request->aconocimiento;
		$activo = $request->activo;

		$acon = new aconocimiento;
		$acon->aconocimiento = $request->aconocimiento;
		$acon->activo = $request->activo;
		$acon ->save();
		return redirect()->route('indexaconocimiento')->with('success','registro exitoso');
	}
	public function modificaAconocimiento($id)
	{
	$consulta = aconocimiento::find($id);
	return view('editarAconocimiento')
	->with('consulta',$consulta)
    ->with('id',$id);
	}
	public function actualizarAconocimiento(Request $request){
		$id = $request->id;
		$aconocimiento = $request->aconocimiento;
		$activo = $request->activo;

		$acon = aconocimiento::find($id);

		$acon->id = $request->id;
		$acon->aconocimiento = $request->aconocimiento;
		$acon->activo = $request->activo;
		$acon ->save();
		return redirect()->route('indexaconocimiento')->with('success','registro exitoso');
	}

    public function eliminaAconocimiento($ida)
    {
        $acono = aconocimiento::find($ida);
        $acono->delete();
        return redirect('indexaconocimiento')->with('success','registro eliminado');
    }



    public function indexCarreras()
	{
		$carreras=carreras::all();
		return view('indexCarreras')
		->with('carreras',$carreras);
	}
	public function nuevoCarreras(){
		return view('nuevoCarreras');
	}
	public function guardaCarreras(Request $request){
		$ncarrera = $request->ncarrera;
		$activo = $request->activo;

		$carr = new carreras;
		$carr->ncarrera = $request->ncarrera;
		$carr->activo = $request->activo;
		$carr ->save();
		return redirect()->route('indexCarreras')->with('success','registro exitoso');
	}
	public function modificaCarreras($id)
	{
	$consulta = carreras::find($id);
	return view('editarCarreras')
	->with('consulta',$consulta)
    ->with('id',$id);
	}
	public function actualizarCarreras(Request $request){
		$id = $request->id;
		$ncarrera = $request->ncarrera;
		$activo = $request->activo;

		$carr = carreras::find($id);

		$carr->id = $request->id;
		$carr->ncarrera = $request->ncarrera;
		$carr->activo = $request->activo;
		$carr ->save();
		return redirect()->route('indexCarreras')->with('success','registro exitoso');
	}

    public function eliminaCarreras($idc)
    {
        $carr = carreras::find($idc);
        $carr->delete();
        return redirect('indexCarreras')->with('success','registro eliminado');
        }
//---------------------------------------------------------------------------------
        public function indexSubcarreras()
	{
		$subcarreras=subcarreras::all();
        $carreras=carreras::all();
		return view('indexSubcarreras')
        ->with('subcarreras',$subcarreras)
        ->with('carreras',$carreras);
        
	}
	public function nuevoSubcarreras(){
        $carreras=carreras::all();
		return view('nuevoSubcarreras')
        ->with('carreras',$carreras);
	}
	public function guardaSubcarreras(Request $request){
		$nsubcarrera = $request->nsubcarrera;
        $idcarrera = $request->idcarrera;
		$activo = $request->activo;

		$subcar = new subcarreras;
		$subcar->nsubcarrera = $request->nsubcarrera;
        $subcar->idcarrera = $request->idcarrera;
        $subcar->activo = $request->activo;
		$subcar ->save();
		return redirect()->route('indexSubcarreras')->with('success','registro exitoso');
	}
	public function modificaSubcarreras($id)
	{
    $subcarreras=subcarreras::all();
	$consulta = subcarreras::find($id);
    $carreras = carreras::all();
	return view('editarSubcarreras')
	->with('consulta',$consulta)
    ->with('subcarreras',$subcarreras)
    ->with('carreras',$carreras)
    ->with('id',$id);
	}
	public function actualizarSubcarreras(Request $request){
		$id = $request->id;
		$nsubcarrera = $request->nsubcarrera;
        $idcarrera = $request->idcarrera;
		$activo = $request->activo;

		$subcarreras = subcarreras::find($id);

		$subcarreras->update($request->all());
		
		
		return redirect()->route('indexSubcarreras')->with('success','registro exitoso');
	}

    public function eliminaSubcarreras($ids)
    {
        $carr = subcarreras::find($ids);
        $carr->delete();
        return redirect('indexSubcarreras')->with('success','registro eliminado');
        

        }
 //----------------------------------------------------------------------

}
