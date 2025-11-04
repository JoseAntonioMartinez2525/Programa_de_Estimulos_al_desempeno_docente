<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DictaminadorSignature extends Model
{
    protected $fillable = [
        'user_id', 
        'evaluator_name',
        'signature_image',
        'mime'
    ];

    protected $table = 'dictaminador_signatures';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A dictaminador (via their signature) can evaluate many docentes
    public function docentesEvaluados()
    {
        return $this->belongsToMany(
            User::class,
            'dictaminador_docente',
            'dictaminador_id', // Foreign key on pivot table for DictaminadorSignature's user
            'docente_id'       // Foreign key on pivot table for the User (docente)
        );
    }
}
