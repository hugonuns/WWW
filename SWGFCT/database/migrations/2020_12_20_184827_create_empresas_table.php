<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('proprietario');
            $table->string('NIF');
            $table->string('CP');
            $table->string('morada');
            $table->string('cidade');
            $table->string('empresaTF');
            $table->string('horaIM');
            $table->string('horaFM');
            $table->string('horaIT');
            $table->string('horaFT');
            $table->string('tutorTf');
            $table->string('departamento');
            $table->string('monitor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
