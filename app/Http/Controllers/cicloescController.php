<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\cicloescModel;

class cicloescController extends Controller
{
    public function indexCicloesc()
	{
		$cicloesc=cicloescModel::all();
		return view('indexCicloesc')
		->with('cicloesc',$cicloesc);
	}
	public function nuevoCicloesc(){
		return view('nuevoCicloesc');
	}
	public function guardaCicloesc(Request $request){
		$cicloesc = $request->cicloesc;
		$activo = $request->activo;

		$cicloesc = new cicloescModel;
		$cicloesc->cicloesc = $request->cicloesc;
		$cicloesc->activo = $request->activo;
		$cicloesc ->save();
		return redirect()->route('indexCicloesc')->with('success','registro exitoso');
	}
	public function modificaCicloesc($id)
	{
	$consulta = cicloescModel::find($id);
	return view('editarCicloesc')
	->with('consulta',$consulta)
    ->with('id',$id);
	}
	public function actualizarCicloesc(Request $request){
		$id = $request->id;
		$cicloesc = $request->cicloesc;
		$activo = $request->activo;

		$cicloesc = cicloescModel::find($id);

		$cicloesc->id = $request->id;
		$cicloesc->cicloesc = $request->cicloesc;
		$cicloesc->activo = $request->activo;
		$cicloesc ->save();
		return redirect()->route('indexCicloesc')->with('success','registro exitoso');
	}

    public function eliminaCicloesc($id)
    {
        $cicloesc = cicloescModel::find($id);
        $cicloesc->delete();
        return redirect('indexCicloesc')->with('success','registro eliminado');
        }
}
