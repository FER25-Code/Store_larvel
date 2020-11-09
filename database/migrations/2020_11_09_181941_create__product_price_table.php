<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productprices', function (Blueprint $table) {
            $table->id();
            $table->integer('pricelistversion_id')->unsigned();
            $table->foreign('pricelistversion_id')->references('id')->on('piceListversions');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->double('unitprice');
            $table->integer('qtytodiscount');
            $table->double('discount');
            $table->double('discountprice');
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
        Schema::dropIfExists('productprices');
    }
}
