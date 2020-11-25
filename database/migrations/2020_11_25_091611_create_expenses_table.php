<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->integer('franchisee_id')->unsigned();
            $table->date('cur_date');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->text('purpose');
            $table->decimal('amount',5,2);
            $table->text('in_words');
            $table->string('payment_mode');
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
        Schema::dropIfExists('expenses');
    }
}
