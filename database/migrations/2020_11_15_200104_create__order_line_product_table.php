<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderLineProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderlineproducts', function (Blueprint $table) {
            $table->id();
            $table->integer('orderline_id')->unsigned();
            $table->foreign('orderline_id')->references('id')->on('orderlines');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('productinstrance_id')->unsigned();
            $table->foreign('productinstrance_id')->references('id')->on('productinstances');
            $table->integer('code');
            $table->timestamp('created',0);
            $table->timestamp('updated',0);
            $table->timestamp('updatedby',0);
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
        Schema::dropIfExists('orderlineproduct');
    }
}
