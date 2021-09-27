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
            'nombre' => 'Martires Alberto OG',
            'descripcion' => 'Soy un programador Y desarrollador web con conocimientos básicos para la creación de paginas web soy muy apasionado y me entrego al máximo en todos los proyectos a continuación detallo las habilidades que he adquirido a lo largo de 4 anos de estudio y practica. *FRONT-END : Html5 , Css3 , Bootstrap , y Plantillas. *BACKEND : Php , Javascript y el Framework LARAVEL en todas sus versiones y para las bases de datos utilizo *Datos : Sql , Mysql',
            'imagen' => 'default.jpg',
            'url_git' => 'https://github.com/martiresalbertoorozcogonzalez',
            'url_linkedin' => 'https://www.linkedin.com/in/martires-alberto-orozco-gonzalez-121b5820a/',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
