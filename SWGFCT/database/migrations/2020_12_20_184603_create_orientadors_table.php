<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrientadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orientador', function (Blueprint $table) {
            $table->id();
            $table->string('orientNome');
            $table->string('orientEmail');
            $table->string('orientTm');

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
        Schema::dropIfExists('orientador');
    }
}
