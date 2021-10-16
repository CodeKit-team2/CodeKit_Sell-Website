<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cost')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('order_status_id');
            $table->text('comment')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();

            $table->foreign('order_status_id', 'orders_order_statuses_id_fk')->references('id')->on('order_statuses');
            $table->foreign('customer_id', 'orders_customers_id_fk')->references('id')->on('customers');
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
