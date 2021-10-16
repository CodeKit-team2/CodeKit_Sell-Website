<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            $table->unsignedBigInteger('rated_product_id')->nullable();
            $table->unsignedBigInteger('rating_id')->nullable();
            $table->timestamps();
            $table->foreign('rated_product_id', 'feedbacks_products_id_fk')->references('id')->on('products');
            $table->foreign('rating_id', 'feedbacks_rated_id_fk')->references('id')->on('rating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedbacks');
    }
}
