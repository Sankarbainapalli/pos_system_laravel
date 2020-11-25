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

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('cust_id')->unsigned()->default('0');
            $table->string('cus_name')->default('NULL');
            $table->string('cus_email')->default('NULL');
            $table->string('cus_mobile')->default('NULL');
            $table->bigInteger('total_items');
            $table->decimal('subtotal',10,2);
            $table->decimal('discount',10,2);
            $table->bigInteger('tax');
            $table->decimal('grandtotal',10,2);
            $table->integer('payment_method')->default('NULL');
            $table->string('card_number')->default('NULL');
            $table->decimal('paid_amt',10,2);
            $table->decimal('return_change',10,2)->default('0');
            $table->integer('user_id')->unsigned()->default('0');
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
