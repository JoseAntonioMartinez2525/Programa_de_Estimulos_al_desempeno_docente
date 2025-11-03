<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirmaDictaminador extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'evaluator_name',
        'signature_image',

    ];

    protected $table = 'dictaminador_signatures'; 
    public function user()
    {
        return $this->belongsTo(User::class);
    }

// Relación muchos a muchos con los docentes evaluados
    public function docentes()
    {
        return $this->belongsToMany(
            \App\Models\User::class,                // Modelo al que se relaciona
            'dictaminador_docente',     // Tabla pivote
            'dictaminador_id',          // FK de este modelo en la tabla pivote
            'docente_id',                // FK del otro modelo en la tabla pivote
            'user_id',         // key local en FirmaDictaminador (user_id)
            'id'               // key en User (id)
        );
    }

}
