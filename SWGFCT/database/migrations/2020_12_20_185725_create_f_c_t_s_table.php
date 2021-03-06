<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFCTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fct', function (Blueprint $table) {
            $table->id();

            $table->string('dataInicialFCT');
            $table->string('dataFinalFCT');
            $table->unique(['dataInicialFCT','dataFinalFCT','aluno_id']);
            $table->float('nota')->nullable()->default(0);

            $table->unsignedBigInteger('orientador_id');
            $table->foreign('orientador_id')->references('id')->on('orientador')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresa')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('aluno_id');
            $table->foreign('aluno_id')->references('id')->on('aluno')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('visita_id')->nullable();
            $table->foreign('visita_id')->references('id')->on('visita')
                ->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fct');
    }
}
