<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('forma_pagos', function (Blueprint $table) {
            $table->string('id');
            $table->text('descripcion')->nullable();
            $table->string('bancarizado')->nullable();
            $table->string('numeroDeOperacion')->nullable();
            $table->string('rfcDelEmisorDeLaCuentaOrdenante')->nullable();
            $table->string('cuentaOrdenante')->nullable();
            $table->string('patronParaCuentaOrdenante')->nullable();
            $table->string('rfcDelEmisorCuentaDeBeneficiario')->nullable();
            $table->string('cuentaDeBenenficiario')->nullable();
            $table->string('patronParaCuentaBeneficiaria')->nullable();
            $table->string('tipoCadenaPago')->nullable();
            $table->string('nombreDelBancoEmisorDeLaCuentaOrdenanteEnCasoDeExtranjero')->nullable();
            $table->string('fechaInicioDeVigencia')->nullable();
            $table->string('fechaFinDeVigencia')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('forma_pagos');
    }
};
