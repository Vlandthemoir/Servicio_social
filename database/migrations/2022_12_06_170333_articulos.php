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
      Schema::create('articulos', function (Blueprint $table) {
          $table->id();
          $table->string('titulo');
          $table->string('portada');
          $table->date('fecha');
          $table->string('categoria');
          $table->longText('resumen');
          $table->longText('cuerpo');
          $table->timestamp('fecha_creado')->nullable();
          $table->timestamp('fecha_modificado')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('articulos');
    }
};
