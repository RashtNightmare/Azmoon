<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('test_id');
            $table->foreignId('test_id')->references('id')->on('tests')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string("type");
            $table->string("action");
            $table->string("description");
            $table->integer("balance");
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
        Schema::dropIfExists('wallets');
    }
}
