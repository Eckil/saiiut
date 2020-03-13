<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class subcarreras extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'subcarreras';
    protected $fillable = [
    	'nsubcarrera',
        'idcarrera',
    	'activo'
    ];
}
