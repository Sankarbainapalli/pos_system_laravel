<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFranchiseesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchisees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('addhar_no');
            $table->string('ref_id');
            $table->string('account_no');
            $table->string('mobile');
            $table->string('city');
            $table->date('start_date');
            $table->text('remarks');
            $table->text('address');
            $table->string('user_name');
            $table->string('password');
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
        Schema::dropIfExists('franchisees');
    }
}
