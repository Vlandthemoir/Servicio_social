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
      Schema::create('eventos', function (Blueprint $table) {
          $table->id();
          $table->string('nombre');
          $table->string('imagen');
          $table->DateTime('fecha');
          $table->string('lugar');
          $table->Time('hora_inicio');
          $table->Time('hora_fin');
          $table->string('descripcion');
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
      Schema::dropIfExists('eventos');
    }
};
