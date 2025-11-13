<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('evaluation_dates', function (Blueprint $table) {
            $table->id();
            $table->date('start_date')->comment('Fecha de inicio de llenado');
            $table->date('end_date')->comment('Fecha de fin de llenado');
            $table->string('type')->nullable()->comment('Tipo de fecha, ej: docentes_llenado');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evaluation_dates');
    }
};
