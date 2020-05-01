<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToImmobilesImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('immobiles_images', function (Blueprint $table) {
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
        Schema::table('immobile_images', function (Blueprint $table) {
          $table->dropForeign('immobile_images_immobile_id_foreign');
          $table->dropColumn('immobile_id');
        });
    }
}
