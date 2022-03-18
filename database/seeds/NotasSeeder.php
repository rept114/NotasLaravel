<?php

use Illuminate\Database\Seeder;
use app\Notas
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notas::create([
            'titulo' => 'Mi primera nota',
            'contenido' => 'Contenido prueba',

        ]);

        Notas::create([
            'titulo' => 'Instalación de Laravel',
            'contenido' => file::get(__DIR__.'/notas/install.html'),

        ]);

        Notas::create([
            'titulo' => 'Cambia el formato de parámetros dinámicos',
            'contenido' => file::get(__DIR__.'/notas/formato.html'),

        ]);

        Notas::create([
            'titulo' => 'Rutas y JSON',
            'contenido' => file::get(__DIR__.'/notas/rutas.html'),

        ]);
    }
}
