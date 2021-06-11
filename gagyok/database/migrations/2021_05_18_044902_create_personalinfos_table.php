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
            $table->string('phone_number')->nullable();
            $table->string('user_email')->references('email')->on('users');
            $table->string('user_address')->nullable();
            $table->string('user_picture')->nullable();
            $table->string('user_city')->nullable();
            $table->string('user_disctrict')->nullable();
            $table->string('user_province')->nullable();
            $table->string('user_posCode')->nullable();
            $table->string('user_country')->nullable();
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
