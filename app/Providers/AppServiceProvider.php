<?php

namespace App\Providers;

use App\Models\UsersResponseForm1;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Schema::defaultStringLength(255);
        if ($this->app->environment() !== 'production') {
                $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
            }
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        DB::listen(function ($query) {
            \Log::info($query->sql, $query->bindings);
        });
        Schema::defaultStringLength(255);

        //convocatoria
         // @php-intel-disable-next-line
        if (\Illuminate\Support\Facades\Auth::check()) {
            $convocatoria = UsersResponseForm1::where('user_id', Auth::id())->latest()->first();
            if ($convocatoria) {
                view()->share('convocatoria', $convocatoria->convocatoria);
            }
        }

        //Puntaje máximo global
        View::share('puntajeMaximoGlobal', DB::table('puntajes_maximos')
            ->where('clave', 'puntajeMaximo')
            ->value('valor'));
        
    }
}
