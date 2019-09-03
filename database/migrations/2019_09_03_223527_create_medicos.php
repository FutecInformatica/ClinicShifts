<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Medicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->strin('name');
            $table->unsignedBigInteger('id_especialidades')
                    ->reference('id')
                    ->on('Especialidades')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('Medicos');
    }
}
