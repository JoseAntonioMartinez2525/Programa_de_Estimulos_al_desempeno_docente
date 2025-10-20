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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
