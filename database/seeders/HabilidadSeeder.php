<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HabilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habilidads')->insert([
            'nombre' => 'HTML5',
            'slug' => Str::slug('HTML5'),
            'descripcion' => 'Descripcion de ejemplo de la habilidad',
            'imagen' => 'default.jpg',
            'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
        ]);

    }
}
