<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DictaminadorSignature extends Model
{
    protected $fillable = [
        'user_id', 
        'signature_path',
         'evaluator_name'
    ];

    protected $table = 'dictaminador_signatures';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
