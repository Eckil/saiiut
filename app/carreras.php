<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class carreras extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'carreras';
    protected $fillable = [
    	'ncarrera',
    	'activo'
    ];
}
