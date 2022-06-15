<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
        
            $table->id();
            $table->string('nombre');
            $table->foreignId('tipo_id')->constrained();
            $table->longText('objetivo');
            $table->longText('aprendizaje');
            $table->longText('descripcion');
            $table->longText('trabajo');
            $table->longText('perfil_ingreso');
            $table->longText('perfil_egreso');
            $table->longText('imagen');
            $table->foreignId('universidad_id')->constrained();
            $table->longText('plan_estudio');
            
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
        Schema::dropIfExists('carreras');
    }
};
