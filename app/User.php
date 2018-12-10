<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Routing\UrlGenerator;
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
        'first_name', 'last_name', 'email', 'password',
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
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'name',
        'photo',
    ];

    /**
     * Get the user name attribute.
     *
     * @return string
     */
    public function getNameAttribute()
    {
        return ucfirst($this->getAttribute('first_name')) . ' ' . ucfirst($this->getAttribute('last_name'));
    }

    /**
     * Get the user photo attribute.
     *
     * @param $value
     * @return UrlGenerator|string
     */
    public function getPhotoAttribute($value)
    {
        return empty($value) ? 'https://via.placeholder.com/150' : url($value);
    }
}
