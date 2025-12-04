<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;

class UniqueDictaminadorForm implements ValidationRule
{
    protected $dictaminadorId;
    protected $docenteId;
    protected $table;

    public function __construct($dictaminadorId, $docenteId, $table)
    {
        $this->dictaminadorId = $dictaminadorId;
        $this->docenteId = $docenteId;
        $this->table = $table; // example: 'form2'
    }

    public function validate(string $attribute, mixed $value, \Closure $fail): void
    {
        $exists = DB::table($this->table)
            ->where('dictaminador_id', $this->dictaminadorId)
            ->where('user_id', $this->docenteId)
            ->exists();

        if ($exists) {
            $fail('El formulario ya existe');
        }
    }
}
