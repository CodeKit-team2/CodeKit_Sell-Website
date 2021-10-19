<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('one');
            $table->bigInteger('two');
            $table->bigInteger('three');
            $table->bigInteger('four');
            $table->bigInteger('five');
            $table->unsignedBigInteger('product_id')->nullable();

            $table->foreign('product_id', 'rating_products_id_fk')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rating');
    }
}
