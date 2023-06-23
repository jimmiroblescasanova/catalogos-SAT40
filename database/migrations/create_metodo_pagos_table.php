<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('metodo_pagos', function (Blueprint $table) {
            $table->string('id');
            $table->text('descripcion')->nullable();
            $table->string('fechaInicioDeVigencia')->nullable();
            $table->string('fechaFinDeVigencia')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('metodo_pagos');
    }
};
