<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('nProcesso')->unique();
            $table->string('nAluno');
            $table->string('email')->unique();
            $table->string('telemovel')->unique();
            $table->string('localidade');
            $table->string('residencia');
            $table->string('nacionalidade');
            $table->string('naturalidade');
            $table->string('codigoPostal');
            $table->string('cc');
            $table->date('ccValidade')->nullable();
            $table->date('dataNascimento')->nullable();

            $table->unsignedBigInteger('ee_id');
            $table->foreign('ee_id')->references('id')->on('e_educacao')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('u_id')->unique();
            $table->foreign('u_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno');
    }
}
