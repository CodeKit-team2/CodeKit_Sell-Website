<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductInforsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product_infors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('quantity')->nullable();
            $table->text('comment')->nullable();
            $table->unsignedBigInteger('oder_id');
            $table->unsignedBigInteger('feedback_id')->nullable();
            $table->unsignedBigInteger('product_color_size_id');
            $table->integer('discount')->nullable()->default(0);
            $table->bigInteger('price_after_discount');

            $table->foreign('feedback_id', 'order_product_infor_feedbacks_id_fk')->references('id')->on('feedbacks');
            $table->foreign('oder_id', 'order_product_infor_orders_id_fk')->references('id')->on('orders');
            $table->foreign('product_color_size_id', 'order_product_infor_products_id_fk')->references('id')->on('product_color_sizes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product_infors');
    }
}
