<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiceListVersionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piceListversions', function (Blueprint $table) {
            $table->id();
            $table->integer('pricelist_id')->unsigned();
            $table->foreign('pricelist_id')->references('id')->on('pricelists');
            $table->string('name');
            $table->integer('version');
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
        Schema::dropIfExists('piceListversions');
    }
}
