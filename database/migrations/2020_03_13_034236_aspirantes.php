<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Aspirantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Aspirantes', function (Blueprint $collection) {
            $collection->string('nAspirante',50);
            $collection->string('apAspirante',50);
            $collection->string('amAspirante',50);
            $collection->string('sexo',15);
            $collection->date('fechaNac');
            $collection->string('paisOrigen',50);
            $collection->string('EstadoCivil',15);
            $collection->string('CURP',18);
            $collection->string('RFC',10);
            $collection->int('peso',3);
            $collection->int('estatura',3);
            $collection->string('tSangre',2);
            $collection->string('famDiabetico',2);
            $collection->string('famHipertenso',2);
            $collection->string('famCardiaco',2);
            $collection->int('ceneval',20);
            $collection->int('folioInt',20);
            $collection->string('estadoProc',50);
            $collection->string('munProc',50);
            $collection->string('escProcedencia',50);
            $collection->string('espProcedencia',50);
            $collection->date('anoIniProce');
            $collection->date('anoFinProce');
            $collection->int('promedioProce');
            $collection->string('nTutor',50);
            $collection->string('apTutor',50);
            $collection->string('amTuto',50);
            $collection->rememberToken();
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Aspirantes');
    }
}
