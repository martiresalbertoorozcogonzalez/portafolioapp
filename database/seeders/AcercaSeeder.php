<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class AcercaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acercas')->insert([
            'nombre' => 'Martires Alberto',
            'descripcion' => 'Descripcion de ejemplo programador web',
            'imagen' => 'default.jpg',
            'url_git' => 'https://github.com/martiresalbertoorozcogonzalez',
            'url_linkedin' => 'https://www.linkedin.com/in/martires-alberto-orozco-gonzalez-121b5820a/',
            'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
        ]);
    }
}
