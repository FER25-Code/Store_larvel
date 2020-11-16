<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallettransactions', function (Blueprint $table) {
            $table->id();
            $table->integer('wallet_id')->unsigned();
            $table->foreign('wallet_id')->references('id')->on('wallets');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('amount');
            $table->string('type');
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
        Schema::dropIfExists('wallettransactions');
    }
}
