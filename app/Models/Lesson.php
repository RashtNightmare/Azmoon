<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    // $table->id();
    // $table->string("name");
    // $table->foreignId("major_id");
    // $table->timestamps();
    protected $fillable=[
        'name','major_id'
    ];
}
