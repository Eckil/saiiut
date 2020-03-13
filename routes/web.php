<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/plantilla', function () {
    return view('plantilla');
});
//------------- Pagina de inicio ----------------
Route::get('/index', function () {
    return view('index');
});
//--------------------------------------------------------
Route::get('/indexaconocimiento', 'controlador@indexaconocimiento')->name('indexaconocimiento');
Route::get('/modificaAconocimiento/{ida}','controlador@modificaAconocimiento')->name('modificaAconocimiento');
Route::POST('/actualizarAconocimiento','controlador@actualizarAconocimiento')->name('actualizarAconocimiento');
Route::get('/nuevoAconocimiento', 'controlador@nuevoAconocimiento')->name('nuevoAconocimiento');
Route::POST('/guardaAconocimiento', 'controlador@guardaAconocimiento')->name('guardaAconocimiento');
Route::delete('/eliminaAconocimiento/{ida}', 'controlador@eliminaAconocimiento')->name('eliminaAconocimiento');

Route::get('/indexCarreras', 'controlador@indexCarreras')->name('indexCarreras');
Route::get('/modificaCarreras/{idc}','controlador@modificaCarreras')->name('modificaCarreras');
Route::POST('/actualizarCarreras','controlador@actualizarCarreras')->name('actualizarCarreras');
Route::get('/nuevoCarreras', 'controlador@nuevoCarreras')->name('nuevoCarreras');
Route::POST('/guardaCarreras', 'controlador@guardaCarreras')->name('guardaCarreras');
Route::delete('/eliminaCarreras/{idc}', 'controlador@eliminaCarreras')->name('eliminaCarreras');

Route::get('/indexSubcarreras', 'controlador@indexSubcarreras')->name('indexSubcarreras');
Route::get('/modificaSubcarreras/{ids}','controlador@modificaSubcarreras')->name('modificaSubcarreras');
Route::POST('/actualizarSubcarreras','controlador@actualizarSubcarreras')->name('actualizarSubcarreras');
Route::get('/nuevoSubcarreras', 'controlador@nuevoSubcarreras')->name('nuevoSubcarreras');
Route::POST('/guardaSubcarreras', 'controlador@guardaSubcarreras')->name('guardaSubcarreras');
Route::delete('/eliminaSubcarreras/{ids}', 'controlador@eliminaSubcarreras')->name('eliminaSubcarreras');

Route::get('/indexAspirantes', 'aspirantesController@indexAspirantes')->name('indexAspirantes');
Route::get('/modificaAspirantes/{idas}','aspirantesController@modificaAspirantes')->name('modificaAspirantes');
Route::POST('/actualizarAspirantes','aspirantesController@actualizarAspirantes')->name('actualizarAspirantes');
Route::get('/nuevoAspirantes', 'aspirantesController@nuevoAspirantes')->name('nuevoAspirantes');
Route::POST('/guardaAspirantes', 'aspirantesController@guardaAspirantes')->name('guardaAspirantes');
Route::delete('/eliminaAspirantes/{idas}', 'aspirantesController@eliminaAspirantes')->name('eliminaAspirantes');

Route::get('/indexCicloesc', 'cicloescController@indexCicloesc')->name('indexCicloesc');
Route::get('/modificaCicloesc/{ides}','cicloescController@modificaCicloesc')->name('modificaCicloesc');
Route::POST('/actualizarCicloesc','cicloescController@actualizarCicloesc')->name('actualizarCicloesc');
Route::get('/nuevoCicloesc', 'cicloescController@nuevoCicloesc')->name('nuevoCicloesc');
Route::POST('/guardaCicloesc', 'cicloescController@guardaCicloesc')->name('guardaCicloesc');
Route::delete('/eliminaCicloesc/{ides}', 'cicloescController@eliminaCicloesc')->name('eliminaCicloesc');


Route::name('enviar')->get('enviar', 'CorreoController@enviar');
Route::get('/correo', 'CorreoController@correo')->name('correo');