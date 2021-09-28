<?php

namespace Database\Seeders;

use App\Models\Habilidad;
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

		$data = array(
		
	        [
				'nombre' 			=> 'HTML5',
				'descripcion' 	=> 'HTML5 es la última versión de HTML.El término representa dos conceptos diferentes:Se trata de una nueva versión con nuevos elementos, atributos ',
				'imagen' 		=> 'http://gdurl.com/LnQQ',
				'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
			],
			[
				'nombre' 			=> 'CSS3',
				'descripcion' 	=> 'es un lenguaje usado para definir la presentación de un documento estructurado escrito en HTML.',
				'imagen' 		=> 'http://gdurl.com/X-0u',
				'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
			],
			[
				'nombre' 			=> 'JAVASCRIP',
				'descripcion' 	=> 'es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos,​ basado en prototipos, imperativo, débilmente tipado y dinámico.',
				'imagen' 		=> 'http://gdurl.com/s_d6',
				'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
			],
			[
				'nombre' 			=> 'BOOTSTRAP',
				'descripcion' 	=> 'es un framework o conjunto de herramientas de Código abierto para diseño de sitios y aplicaciones web.',
				'imagen'         => 'http://gdurl.com/h1Qh',
				'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
			],
			[
				'nombre' 			=> 'PHP',
				'descripcion' 	=> 'Es un lenguaje de programación interpretado, diseñado originalmente para la creación de páginas web dinámicas.',
				'imagen' 		=> 'http://gdurl.com/6HtE',
				'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
			],
			[
				'nombre' 			=> 'LARAVEL 5.4 , 5.5 , 5.6, 5.7 y 5.8',
				'descripcion' 	=> 'Es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5 y PHP 7.',
				'imagen'         => 'http://gdurl.com/MmJH',
				'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
			],
       
        );
		Habilidad::insert($data);

    }
}
