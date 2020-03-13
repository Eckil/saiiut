<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class cicloescModel extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'carreras';
    protected $fillable = [
    	'cicloesc',
    	'activo'
    ];
}
