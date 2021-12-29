<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // $table->id();
    // $table->string('name');
    // $table->string('email')->unique();
    // $table->string('identity_card')->unique();
    // $table->string('national_code')->unique();
    // $table->string('mobile')->unique();
    // $table->string('username')->unique();
    // $table->string('password')->unique();
    // $table->string('email')->unique();
    // $table->string('avatar')->unique();
    // $table->foreignId('role_id')->unique();
    // $table->foreignId('major_id')->unique();
    // $table->timestamp('mobile_verified_at')->nullable();
    // $table->timestamp('email_verified_at')->nullable();
    // $table->string('password');
    // $table->rememberToken();
    // $table->softDeletes();
    // $table->timestamps();

    protected $fillable = ['name','email','identity_card','national_code','mobile','username','password','email','avatar'
    ,'role_id','major_id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
