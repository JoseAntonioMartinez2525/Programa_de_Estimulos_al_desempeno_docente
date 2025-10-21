<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dictaminador_signatures', function (Blueprint $table) {
            $table->id();

            // Relación con el usuario que firma
            $table->unsignedBigInteger('user_id')->unique(); // Un dictaminador solo puede tener una firma

            // Aquí guardamos la firma en base64 o texto largo
            $table->longText('signature_image')->nullable(); // Ideal para base64 (más portable que BLOB)

            // Nombre visible del evaluador
            $table->string('evaluator_name');

            // Tipo MIME de la imagen (ejemplo: image/png, image/jpeg)
            $table->string('mime')->nullable();

            $table->timestamps();

            // Eliminación en cascada si se borra el usuario
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dictaminador_signatures');
    }
};
