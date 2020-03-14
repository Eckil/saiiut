<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Login extends Migration
{
    public function up()
    {
        Schema::create('login', function (Blueprint $table) {
            //$table->Increments('id'); No es necesario porque lo crea mongo
            $table->string('nombreUsuario');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('login');
            $table->string('perfil');
            $table->timestamp('correo');
            $table->string('activo');
            $table->string('activarSistema');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login');
    }
}
