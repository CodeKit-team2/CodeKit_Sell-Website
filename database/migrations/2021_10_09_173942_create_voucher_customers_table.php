<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoucherCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->integer('count');
            $table->unsignedBigInteger('voucher_id')->nullable();

            $table->foreign('customer_id', 'voucher_users_customers_id_fk')->references('id')->on('customers');
            $table->foreign('voucher_id', 'voucher_users_vouchers_id_fk')->references('id')->on('vouchers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voucher_customers');
    }
}
