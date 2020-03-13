<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subcarreras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcarreras', function (Blueprint $collection) {
            $collection->string('nsubcarrera',50);
            $collection->integer('idcarrera')->unsigned();
            $collection->foreign('_id')->references('id_')->on('carreras');
            $collection->string('activo',2);
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
        Schema::drop('subcarreras');
    }
}
