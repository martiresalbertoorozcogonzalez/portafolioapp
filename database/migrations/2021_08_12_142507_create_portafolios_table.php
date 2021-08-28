<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortafoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('categoria_portafolios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('acercas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('url_git');
            $table->string('url_linkedin');
            $table->string('imagen')->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });

        Schema::create('habilidads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('imagen')->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });

        Schema::create('portafolios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('imagen')->nullable();
            $table->string('urlPortafolio')->nullable();
            $table->text('descripcion');

            $table->foreignId('user_id')->references('id')->on('users')->comment('El usuario que crea la receta');
            $table->foreignId('categoria_id')->index('id')->on('categoria_portafolios')->comment('La categoria del portafolio');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portafolios');
        Schema::dropIfExists('categoria_portafolios');
        Schema::dropIfExists('habilidads');
    }
}
