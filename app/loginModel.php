<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class loginModel extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'login';
    protected $fillable = [
        'nombreUsuario',
        'apellidoPaterno',
        'apellidoMaterno',
        'login',
        'correo',
        'activo',
        'activarSistema'
    ];
}
