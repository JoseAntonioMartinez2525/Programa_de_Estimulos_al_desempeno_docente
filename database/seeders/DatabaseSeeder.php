<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // En response guardas el resultado
        $response = Http::withOptions([
                        'verify' => false, // Recomendable unicamente en desarrollo, desactiva la verificación del certificado SSL.
                    ])
                    ->withHeaders([ // Agregas en Bearer Toke, en Authorization, la estructura es la palabra "Bearer" un espacio y despues el token 
                        'Authorization' => 'Bearer '. env('API_AUTHENTICATED_TOKEN'),
                    ])->get(env('API_AUTHENTICATION_URL'), [ // Aqui va el Metodo que vayas a emplear, get, post, put, etc.
                        // 'nombreCariable' => $valor_a_enviar, // Variable en caso de ser requerida
                    ]);
        echo "response: ".$response."\n";
        // Verificas que se haya obtenido un resultado y lo retornas en formato Json para su lectura
        if($response && $response->successful()){
            // convierte esa cadena JSON en un objeto PHP
            \Log::info(json_decode($response->getBody()->getContents()));
            
        }else if($response->failed()){
             \Log::error("Error de conexión");
        }

    }
}
