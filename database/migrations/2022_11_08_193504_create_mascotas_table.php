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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('descripcion',400);
            $table->string('tamanio',30);

            $table->integer('id_refugio')->unsigned();
            $table->foreign('id_refugio')->references('id_refugio')->on('refugios');

            $table->integer('id_tipo_mascota')->unsigned();
            $table->foreign('id_tipo_mascota')->references('id_tipo_mascota')->on('tipo_mascotas');
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
        Schema::dropIfExists('mascotas');
    }
};
