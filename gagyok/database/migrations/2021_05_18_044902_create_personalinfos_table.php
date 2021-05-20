<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personalinfos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->references('id')->on('users');
            $table->string('phone_number');
            $table->string('user_email')->references('email')->on('users');
            $table->string('user_address');
            $table->string('user_city');
            $table->string('user_disctrict');
            $table->string('user_province');
            $table->string('user_posCode');
            $table->string('user_country');
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
        Schema::dropIfExists('personalinfos');
    }
}
