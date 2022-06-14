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
        Schema::create('universidads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->longText('imagen');
            $table->foreignId('estado_id')->constrained();
            $table->foreignId('lugar_id')->constrained();
            $table->foreignId('tipo_id')->constrained();
            $table->string('telefono');
            $table->string('url_web');
            $table->string('direccion');
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
        Schema::dropIfExists('universidads');
    }
};
