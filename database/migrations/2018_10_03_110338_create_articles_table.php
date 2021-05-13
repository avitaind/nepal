<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
     {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');

            $table->string('slug')->nullable()->unique();
            $table->string('thumbnail_path', 1000)->nullable();
            $table->string('image_path', 1000 )->nullable();
            $table->string('status')->index();
            $table->boolean('is_publish')->default(false);
            $table->boolean('is_feature')->default(false);
            $table->datetime('start_date');
            $table->datetime('end_date')->nullable();

            $table->timestamps();
        });

        Schema::create('article_translations', function(Blueprint $table){

            $table->increments('id');

            $table->integer('article_id')->unsigned();
            $table->string('locale', 10)->index();
            $table->string('title', 1000);
            $table->longText('content');

            $table->unique(['article_id', 'locale']);
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_translations');
        Schema::dropIfExists('articles');
    }
}
