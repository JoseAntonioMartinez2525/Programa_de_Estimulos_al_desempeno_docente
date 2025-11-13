<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('docentes_evaluation_dates', function (Blueprint $table) {
            $table->id();
            $table->date('start_date')->comment('Fecha de inicio de evaluación');
            $table->date('end_date')->comment('Fecha de fin de evaluación');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('docentes_evaluation_dates');
    }
};
