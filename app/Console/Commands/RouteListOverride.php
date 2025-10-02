<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Console\RouteListCommand;
use Symfony\Component\Console\Input\ArrayInput;

class RouteListOverride extends Command
{
    protected $signature = 'route:list
        {name? : Filter the routes by name}
        {--method= : Filter the routes by method}
        {--path= : Filter the routes by path}
        {--sort= : Sort the routes by a given column}
        {--reverse : Reverse the ordering of the routes}
        {--json : Output routes as JSON}
        {--columns= : (Ignorado) Opción para evitar error}
    ';

    protected $description = 'Override temporal para route:list que acepta --columns para evitar error';

    public function handle()
    {

        $this->info('Ejecutando override RouteListOverride');
        
        $args = [];

        if ($this->argument('name')) {
            $args['name'] = $this->argument('name');
        }

        foreach ($this->options() as $key => $value) {
            if ($key === 'columns') {
                continue;
            }
            if (is_bool($value)) {
                if ($value) {
                    $args["--$key"] = true;
                }
            } elseif ($value !== null) {
                $args["--$key"] = $value;
            }
        }

        // Creamos el comando original, inyectando el router
        $command = new RouteListCommand(app('router'));

        // INYECTAMOS MANUALMENTE el contenedor app para evitar error
        $command->setLaravel(app());

        // Establecemos la salida para que imprima en consola
        $command->setOutput($this->output);

        // Ejecutamos el comando original con los argumentos filtrados
        return $command->run(new ArrayInput($args), $this->output);
    }
}
