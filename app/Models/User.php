<?php

namespace App\Models;

<<<<<<< HEAD
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
>>>>>>> 51532f6 (Fixed adding files issue)

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
<<<<<<< HEAD
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
=======
>>>>>>> 51532f6 (Fixed adding files issue)
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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
<<<<<<< HEAD
        'password' => 'hashed',
    ];
}
=======
    ];
}
>>>>>>> 51532f6 (Fixed adding files issue)
