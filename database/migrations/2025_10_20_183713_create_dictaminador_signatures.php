<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dictaminador_signatures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('evaluator_name');
            $table->longText('signature_image'); // almacenará la firma como cadena base64
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dictaminador_signatures');
    }
};
