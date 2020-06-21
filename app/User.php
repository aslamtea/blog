<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function asaKau()
    {
        if (!$this->avatar) {
            return asset('img/beb3.png');
        }
        return asset('img/' . $this->avatar);
    }
    public function ohKau()
    {
        if (!$this->role) {
            return asset('1');
        }
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function Cek()
    {
        return $this->Cek;
    }
}
