<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class aconocimiento extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'aconocimiento';
    protected $fillable = [
    	'aconocimiento',
    	'activo'
    ];
}
