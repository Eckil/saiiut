<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class municipiosModel extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'municipios';
    protected $fillable = [
    	'id_municipio',
        'municipio',
    	'estado',
    ];
}
