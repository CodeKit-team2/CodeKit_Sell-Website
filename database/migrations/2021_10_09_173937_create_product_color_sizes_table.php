<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductColorSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_color_sizes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->bigInteger('quantity');
            $table->decimal('price', 16, 2);
            $table->unsignedBigInteger('product_color_id')->nullable();
            $table->unsignedBigInteger('size_id')->nullable();

            $table->foreign('product_color_id', 'product_color_sizes_product_colors_id_fk')->references('id')->on('product_colors');
            $table->foreign('size_id', 'product_color_sizes_sizes_id_fk')->references('id')->on('sizes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_color_sizes');
    }
}
