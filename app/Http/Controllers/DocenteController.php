<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DocenteController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->query('query');

        // Busca por nombre o correo, limitado a 10 resultados
        $docentes = User::where('user_type', 'docente')
            ->where(function ($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                  ->orWhere('email', 'like', "%{$query}%");
            })
            ->limit(10)
            ->get(['name as nombre', 'email']);

        return response()->json($docentes);
    }
}
