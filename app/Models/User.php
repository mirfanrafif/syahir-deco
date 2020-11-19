<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "user";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama',
        'email',
        'password',
        'level',
        'alamat',
        'notelepon',
        'noktp'
    ];

    public $timestamps = false;
}
