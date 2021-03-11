<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->Integer('telemovel')->unique();
            $table->string('localidade');
            $table->string('residencia');
            $table->string('nacionalidade');
            $table->string('naturalidade');
            $table->Integer('codigoPostal');
            $table->Integer('cc');
            $table->timestamp('ccValidade')->nullable();
            $table->timestamp('dataNascimento')->nullable();

            $table->unsignedBigInteger('ee_id');
            $table->foreign('ee_id')->references('id')->on('e_educacao')
                ->onUpdate('cascade')->onDelete('cascade');
            /* $table->foreignId('ee_id')->constrained('encaEducacao')
                ->onUpdate('cascade')->onDelete('cascade'); */

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
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
