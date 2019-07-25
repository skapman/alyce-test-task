<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    /**
     * User apples relation
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apples()
    {
        return $this->hasMany(Apple::class, 'user_id', 'id');
    }

    public function getApplesCount()
    {
        return 0;
    }


    /**
     * @param Apple $apple
     * @throws \Throwable
     */
    public function takeApple(Apple $apple)
    {
        $apple->fill(['user_id' => $this->id])->save();
    }
}
