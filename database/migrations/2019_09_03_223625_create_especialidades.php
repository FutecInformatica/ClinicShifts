<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Especialidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        
        Schema::create('especialidad_medico', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('medico_id');
            $table->unsignedBigInteger('especialidad_id');
            
            $table->foreign('medico_id')
                ->references('id')
                ->on('Medicos');
            
            $table->foreign('especialidad_id')
                ->references('id')
                ->on('Especialidades');
            
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
        Schema::dropIfExists('Especialidades');
    }
}
