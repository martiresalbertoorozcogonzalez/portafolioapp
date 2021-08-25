<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categoria_portafolios')->insert([
            'nombre' => 'Pagina-portafolio',
              'slug' => Str::slug('pagina-portfolio'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);


        DB::table('categoria_portafolios')->insert([
            'nombre' => 'Pagina-informativa',
              'slug' => Str::slug('pagina-informativa'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);


        DB::table('categoria_portafolios')->insert([
            'nombre' => 'Pagina-ecommerce',
              'slug' => Str::slug('pagina-ecommerce'),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

    }
}
