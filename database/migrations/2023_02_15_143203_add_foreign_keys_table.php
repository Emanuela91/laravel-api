<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {

            $table->foreignId('tag_id')
                ->constrained();
        });
        Schema::table('tag_movie', function (Blueprint $table) {

            $table->foreignId('tag_id')
                ->constrained();
            $table->foreignId('movie_id')
                ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {

            $table->dropForeign('movies_tag_id_foreign');
        });
        Schema::table('tag_movie', function (Blueprint $table) {

            $table->dropForeign('category_product_tag_id_foreign');
            $table->dropForeign('category_product_movie_id_foreign');
        });
    }
};