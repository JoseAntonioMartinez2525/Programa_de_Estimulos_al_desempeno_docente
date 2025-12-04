<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvaluationDate extends Model
{
    protected $fillable = ['start_date', 'end_date', 'type', 'key']; // Añadimos 'key' por si se usa, aunque tu código usa 'type'
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}