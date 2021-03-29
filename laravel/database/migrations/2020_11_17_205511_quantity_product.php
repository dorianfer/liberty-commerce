<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuantityProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quantity_product', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('Quantity');
            $table->unsignedBiginteger('Cart_ID');
            $table->unsignedBiginteger('Product_ID');
            $table->timestamps();
        });
        Schema::table('quantity_product', function (Blueprint $table) {
            $table->foreign('Cart_ID')->references('ID')->on('cart');
            $table->foreign('Product_ID')->references('ID')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quantity_product');
    }
}
