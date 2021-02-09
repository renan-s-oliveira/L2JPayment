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
            $table->bigInteger('char_id')->unsigned();
            $table->foreign('char_id')->reference('charId')->on('characters');
            $table->bigInteger('method_payment')->unsigned();
            $table->foreign('method_payment')->reference('id')->on('payment_methods');
            $table->string('payment_status');
            $table->bigInteger('donate_status')->unsigned();
            $table->foreign('donate_status')->reference('id')->on('donate_status');
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
        Schema::dropIfExists('orders');
    }
}
