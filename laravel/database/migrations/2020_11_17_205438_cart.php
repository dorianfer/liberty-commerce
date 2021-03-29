<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('ID');
            $table->decimal('Price_total', 10, 2);
            $table->integer('Number_product');
            $table->integer('Users_ID');
            $table->timestamps();
        });
        Schema::table('cart', function (Blueprint $table) {
            $table->foreign('Users_ID')->references('ID')->on('users');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
