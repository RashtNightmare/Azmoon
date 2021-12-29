<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    // $table->id();
    // $table->unsignedBigInteger('test_id');
    // $table->foreignId('test_id')->references('id')->on('tests')->onDelete('cascade');
    // $table->unsignedBigInteger('user_id');
    // $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
    // $table->string("type");
    // $table->string("action");
    // $table->string("description");
    // $table->integer("balance");
    // $table->timestamps();

    protected $fillable = [
        'test_id','user_id','type','action','description','balance'
    ];
}
