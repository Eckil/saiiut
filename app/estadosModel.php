<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class estadosModel extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'estados';
    protected $fillable = [
        'id_estado',
        'estado',
    ];
}
