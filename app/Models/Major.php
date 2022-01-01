<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    
    public function lessons(){
        $this->hasMany(Lesson::class);
    }
    public function users(){
        $this->hasMany(User::class);
    }
}
