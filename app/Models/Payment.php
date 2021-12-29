<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    // $table->string("reference_id");
    // $table->string("credit_card_number");
    // $table->string("amount");
    // $table->integer("status");
    // $table->unsignedBigInteger('test_id');
    // $table->foreignId('test_id')->references('id')->on('tests')->onDelete('cascade');
    // $table->unsignedBigInteger('user_id');
    // $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
    // $table->timestamps();
    protected $fillable=[
     'reference_id','credit_card_number','amount','test_id','user_id'
    ];

}
