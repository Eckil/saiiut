<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class alumnos extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'Alumnos';
    protected $fillable = [
    	'clave',
    	'nombre',
    	'app',
    	'apm'
    ];
   
}
