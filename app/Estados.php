<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Estados extends Eloquent
{
    protected $connection = 'mongodb';
    protected $guarded = '[]';
    protected $primarykey = 'id_estado';
    protected $fillable = [
        'estado',
    ];
}