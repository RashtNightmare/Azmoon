<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->string("reference_id");
            $table->string("credit_card_number");
            $table->string("amount");
            $table->integer("status");
            $table->unsignedBigInteger('test_id');
            $table->foreignId('test_id')->references('id')->on('tests')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('payments');
    }
}
