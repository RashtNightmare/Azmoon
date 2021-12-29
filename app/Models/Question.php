<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    // $table->id();
    // $table->text("text");
    // $table->string("option1");
    // $table->string("option2");
    // $table->string("option3");
    // $table->string("option4");
    // $table->tinyInteger("true_answer");
    // $table->unsignedBigInteger('test_id');
    // $table->foreignId('test_id')->references('id')->on('tests')->onDelete('cascade');
    // $table->timestamps();

    protected $fillable =[
        'text','option1','option2','option3','option4','true_answer','test_id'
    ];
}
