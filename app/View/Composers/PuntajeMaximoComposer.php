<?php
namespace App\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class PuntajeMaximoComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $puntajeMaximo = DB::table('puntajes_maximos')
            ->where('clave', 'puntajeMaximo')
            ->value('valor');

        $view->with('puntajeMaximoGlobal', $puntajeMaximo);
    }
}
