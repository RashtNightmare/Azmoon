<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    // $table->id();
    // $table->unsignedBigInteger('student_id');
    // $table->foreignId('student_id')->references('id')->on('users')->onDelete('cascade');
    // $table->unsignedBigInteger('teacher_id');
    // $table->foreignId('teacher_id')->references('id')->on('users')->onDelete('cascade');
    // $table->integer('score'); //total
    // $table->integer('acceptance_quorum');
    // $table->integer('amount');
    // $table->integer('title');
    // $table->foreignId('major_id');
    // $table->foreignId('lesson_id');
    // $table->timestamps('date');
    // $table->time('duration'); //per minuet
    // $table->integer('start_time');
    // $table->timestamps();
    protected $fillable =[
        'student_id','teacher_id','score','acceptance_quorum','amount','title','major_id','lesson_id','date','duration','start_time'
    ];
    public function students(){
        return $this->hasMany(TestStudent::class);
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
    public function wallets(){
        return $this->hasMany(Wallet::class);
    }
}
