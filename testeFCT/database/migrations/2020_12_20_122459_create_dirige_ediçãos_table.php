<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirigeEdiçãosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dirige_edicao', function (Blueprint $table) {
            $table->id();
            $table->Integer('anoLetivoInicial');
            $table->Integer('anoLetivoFinal');
            $table->unique('anoLetivoInicial');
            $table->unique('anoLetivoFinal');

            $table->unsignedBigInteger('dirCurso_id');
            $table->foreign('dirCurso_id')->references('id')->on('diretor_curso')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('aluno_id');
            $table->foreign('aluno_id')->references('id')->on('alunos')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('curso')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('dirige_edicao');
    }
}
