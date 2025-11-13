<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('evaluadores_capture_dates', function (Blueprint $table) {
            $table->id();
            $table->date('start_date')->comment('Fecha de inicio de captura');
            $table->date('end_date')->comment('Fecha de fin de captura');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evaluadores_capture_dates');
    }
};
