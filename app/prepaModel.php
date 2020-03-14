<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class prepaModel extends Model
{
    protected $connection = 'mongodb';
	protected $collection = 'preparatorias';
    protected $fillable = [
    	'institucion',
        'id_localidad',
    ];
}
