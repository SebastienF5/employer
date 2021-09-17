<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\Delivery;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName',
         'lastName',
        'pseudo',
        'email',
        'telephone',
        'cin',
        'adress',
        'birthdate',
        'gender',
        'profilPhoto',
        'password',
        'salaire',
        'fonction'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function deliveries(){
        return $this->hasMany(Delivery::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
