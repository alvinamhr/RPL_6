<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id')->unique();
            $table->char('product_name',100);
            $table->string('product_image');
            $table->double('product_price', 11, 2);
            $table->string('product_stock');
            $table->string('product_desc',);
            $table->string('product_category',);
            $table->double('product_discount',11, 2)->nullable();
            $table->foreign('product_category')->references('category_name')->on('categories');
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
        Schema::dropIfExists('products');
    }
}
