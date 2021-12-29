<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreignId('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('teacher_id');
            $table->foreignId('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('score'); //total
            $table->integer('acceptance_quorum');
            $table->integer('amount');
            $table->integer('title');
            $table->unsignedBigInteger('major_id');
            $table->foreignId('major_id')->references('id')->on('majors')->onDelete('cascade');
            $table->unsignedBigInteger('lesson_id');
            $table->foreignId('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
            $table->timestamps('date');
            $table->time('duration'); //per minuet
            $table->integer('start_time');
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
        Schema::dropIfExists('tests');
    }
}
