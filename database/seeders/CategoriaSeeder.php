<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);


        DB::table('categoria_portafolios')->insert([
            'nombre' => 'Pagina-informativa',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);


        DB::table('categoria_portafolios')->insert([
            'nombre' => 'Pagina-ecommerce',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

    }
}
