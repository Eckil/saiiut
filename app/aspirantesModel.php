<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class aspirantesModel extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'aspirantes';
    protected $fillable = [
    	'nAspirante',
    	'apAspirante',
    	'amAspirante',
    	'sexo',
    	'fechaNac',
    	'paisOrigen',
    	'EstadoCivil',
    	'CURP',
    	'RFC',
    	'peso',
    	'estatura',
    	'tSangre',
    	'famDiabetico',
    	'famHipertenso',
    	'famCardiaco',
    	'ceneval',
    	'folioInt',
    	'estadoProc',
    	'munProc',
    	'escProcedencia',
    	'espProcedencia',
    	'anoIniProce',
    	'anoFinProce',
    	'promedioProce',
    	'nTutor',
    	'apTutor',
    	'amTutor'
    ];
}
