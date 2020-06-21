<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->string('order_details');
            $table->string('order_subtotal');
            $table->string('shipping_charge');
            $table->string('order_total');
            $table->string('transaction_id')->nullable();
            $table->tinyInteger('payment_status')->default(0)->comment('0=unpaid, 1=paid');
            $table->integer('shipping_id');
            $table->integer('order_placed_by');
            $table->dateTime('created_at');
            $table->dateTime('modified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('place_orders');
    }
}
