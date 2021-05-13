<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewWhereToBuyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_where_to_buys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale')->index();
            $table->string('name');
            $table->string('address', 1000);
            $table->string('phone');
            $table->string('city');
            $table->string('state');
            $table->string('pin');
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
        Schema::dropIfExists('new__where__to__buy');
    }
}
