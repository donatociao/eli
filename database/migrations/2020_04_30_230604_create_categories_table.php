<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });


        // Inserisco Categoria Appartamento
        DB::table('categories')->insert(
        array(
            'name' => 'Appartamento',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Attività commerciale',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Box auto',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Capannone commerciale',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Capannone industriale',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Deposito',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Locale commerciale',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Mansarda',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Palazzo storico',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Piazzale deposito',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Soluzione indipendente',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Sottotetto',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Terreno agricolo',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Terreno industriale',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Ufficio',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Villa',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Villa bifamiliare',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Villa a schiera',
          )
        );
        DB::table('categories')->insert(
        array(
            'name' => 'Monolocale ammobiliato',

          )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
