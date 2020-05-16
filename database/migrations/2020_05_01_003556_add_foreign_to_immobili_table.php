<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToImmobiliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('immobiles', function (Blueprint $table) {
          $table->integer('city_id')->unsigned()->nullable();
          $table->integer('category_id')->unsigned()->nullable();
          $table->integer('stato_id')->unsigned()->nullable();
          $table->integer('feature_id')->unsigned()->nullable();
          $table->integer('detail_id')->unsigned()->nullable();
          $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
          $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
          $table->foreign('stato_id')->references('id')->on('statos')->onDelete('cascade');
          $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
          $table->foreign('detail_id')->references('id')->on('details')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('immobiles', function (Blueprint $table) {
          $table->dropForeign('immobiles_city_id_foreign');
          $table->dropForeign('immobiles_category_id_foreign');
          $table->dropForeign('immobiles_stato_id_foreign');
          $table->dropForeign('immobiles_features_id_foreign');
          $table->dropForeign('immobiles_details_id_foreign');
          $table->dropColumn('city_id');
          $table->dropColumn('category_id');
          $table->dropColumn('stato_id');
          $table->dropColumn('feature_id');
          $table->dropColumn('detail_id');
        });
    }
}
