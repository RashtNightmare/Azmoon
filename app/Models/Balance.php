<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;
    // $table->id();
    // $table->unsignedBigInteger('user_id');
    // $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
    // $table->foreignId("user_id");
    // $table->integer("amount");
    // $table->timestamps();
    protected $fillable = [
        'user_id','amount'
    ];
}
