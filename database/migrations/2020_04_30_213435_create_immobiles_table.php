<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmobilesTable extends Migration
{
    /**
       * Run the migrations.
       *
     * @return void
     */
    public function up()
    {
        Schema::create('immobiles', function (Blueprint $table) {
          $table->increments('id');
          $table->string('titolo')->nullable();
          $table->string('description');
          $table->integer('price');
          $table->string('address');
          $table->string('img_preview')->default('public/preview/default.png');
          $table->string('slug')->nullable()->unique();
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
        Schema::dropIfExists('immobiles');
    }
}
