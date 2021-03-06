<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('game_server')->create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('transaction');
            $table->unsignedInteger('char_id');
            $table->foreign('char_id')->references('charId')->on('characters');
            $table->bigInteger('method_payment')->unsigned();
            $table->foreign('method_payment')->references('id')->on('payment_methods');
            $table->string('payment_status');
            $table->bigInteger('donate_status')->unsigned();
            $table->foreign('donate_status')->references('id')->on('donate_status');
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
        Schema::connection('game_server')->dropIfExists('orders');
    }
}
