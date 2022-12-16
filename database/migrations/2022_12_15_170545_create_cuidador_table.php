<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuidadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuidador', function (Blueprint $table) {
            $table->string('dni-nif')->primary();
                $table->foreign('dni-nif')
                      ->references('dni-nif')->on('users')
                      ->onDelete('cascade');
            $table->string('especialidad')->nullable();
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
        Schema::dropIfExists('cuidador');
    }
}