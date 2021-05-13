<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewServiceCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('new_service_center', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale')->index();
            $table->string('name');
            $table->string('address', 1000);
            $table->string('opening_hour');
            $table->string('phone');
            $table->string('email');
            $table->string('city');
            $table->string('state');
            $table->string('pin');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('new_service_center');

    }
}
