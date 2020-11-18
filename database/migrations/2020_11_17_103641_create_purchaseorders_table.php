<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaseorders', function (Blueprint $table) {
            $table->id();
             $table->integer('branch_id')->unsigned();
             $table->integer('franchisee_id')->unsigned();
             $table->decimal('qty',10,2);
             $table->decimal('rate',10,2);
             $table->decimal('total_amount',10,2);
             $table->string('sup_name');
             $table->string('sup_mobile');
             $table->string('pur_date');
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
        Schema::dropIfExists('purchaseorders');
    }
}
