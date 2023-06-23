<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('usos_cfdi', function (Blueprint $table) {
            $table->string('id');
            $table->text('descripcion');
            $table->string('aplicaParaTipoPersonaFisica');
            $table->string('aplicaParaTipoPersonaMoral');
            $table->string('fechaInicioDeVigencia');
            $table->string('fechaFinDeVigencia')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usos_cfdi');
    }
};
