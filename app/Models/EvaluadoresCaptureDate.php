<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvaluadoresCaptureDate extends Model
{
    protected $table = 'files_capture_dates'; // Especifica el nombre correcto de la tabla
    protected $fillable = ['start_date', 'end_date', 'type'];
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}