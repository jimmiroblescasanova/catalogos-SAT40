<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('regimen_fiscales', function (Blueprint $table) {
            $table->string('id');
            $table->text('descripcion')->nullable();
            $table->string('fisica')->nullable();
            $table->string('moral')->nullable();
            $table->string('fechaDeInicioDeVigencia')->nullable();
            $table->string('fechaDeFinDeVigencia')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('regimen_fiscales');
    }
};
