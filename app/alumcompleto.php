<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class alumcompleto extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'alumcompleto';
    protected $fillable = [
    	'matricula',
    	'nombre',
    	'app',
    	'materias'
    ];
}
