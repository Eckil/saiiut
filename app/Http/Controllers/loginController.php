<?php

namespace App\Http\Controllers;

use App\loginModel;

use Illuminate\Http\Request;

class loginController extends Controller
{

   public function reporteLogin()
   {
      $datosLogin = loginModel::all();
      return view('reporteLogin')
         ->with('datosLogin', $datosLogin);
   }

   public function AltaLogin()
   {
      return view('AltaLogin');
   }

   public function guardaLogin(Request $request)
   {
      $nombreUsuario = $request->nombreUsuario;
      $apellidoPaterno = $request->apellidoPaterno;
      $apellidoMaterno = $request->apellidoMaterno;
      $login = $request->login;
      $perfil = $request->perfil;
      $correo = $request->correo;
      $activo = $request->activo;
      $activarSistema = $request->activarSistema;

      $AltaL = new loginModel;
      $AltaL->nombreUsuario = $request->nombreUsuario;
      $AltaL->apellidoPaterno = $request->apellidoPaterno;
      $AltaL->apellidoMaterno = $request->apellidoMaterno;
      $AltaL->login = $request->login;
      $AltaL->perfil = $request->perfil;
      $AltaL->correo = $request->correo;
      $AltaL->activo = $request->activo;
      $AltaL->activarSistema = $request->activarSistema;
      $AltaL->save();

      //return ('registro Exitoso');
      return redirect()->route('ReporteLogin');
   }

   public function modificaLogin($idLogin)
   {
      //obtiene el ID del empleado desde la vista de reporteEmpleados 
      $consulta = loginModel::find($idLogin);
      //return $consulta; //Para ver si hay errores de consulta
      return view('editaLogin')
         ->with('consulta', $consulta);
   }

   public function editaLogin(Request $request)
   {
      //return $request;
      $id = $request->id;
      $nombreUsuario = $request->nombreUsuario;
      $apellidoPaterno = $request->apellidoPaterno;
      $apellidoMaterno = $request->apellidoMaterno;
      $login = $request->login;
      $perfil = $request->perfil;
      $correo = $request->correo;
      $activo = $request->activo;
      $activarSistema = $request->activarSistema;

      $login = loginModel::find($id);
      $login->nombreUsuario = $request->nombreUsuario;
      $login->apellidoPaterno = $request->apellidoPaterno;
      $login->apellidoMaterno = $request->apellidoMaterno;
      $login->login = $request->login;
      $login->perfil = $request->perfil;
      $login->correo = $request->correo;
      $login->activo = $request->activo;
      $login->activarSistema = $request->activarSistema;
      $login->save();

      return redirect()->route('ReporteLogin');
   }

   public function eliminaLogin($id)
   {
      $Login = loginModel::find($id);
      $Login->delete();
      return redirect('ReporteLogin');
   }
}
