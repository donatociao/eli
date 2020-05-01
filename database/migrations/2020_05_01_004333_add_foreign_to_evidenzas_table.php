<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToEvidenzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evidenzas', function (Blueprint $table) {
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
        Schema::table('evidenzas', function (Blueprint $table) {
          $table->dropForeign('evidenzas_immobile_id_foreign');
          $table->dropColumn('immobile_id');
        });
    }
}
