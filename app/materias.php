<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class materias extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'materias';
    protected $fillable = [
    	'nombre',
    	'creditos',
    ];
}
