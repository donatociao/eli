<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sliders', function (Blueprint $table) {
          $table->Increments('id');
          $table->timestamps();
      });

      Schema::table('sliders', function (Blueprint $table) {
        $table->integer('immobile_id')->unsigned()->nullable();
        $table->foreign('immobile_id')->references('id')->on('immobiles');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider');
    }
}
