<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Routing\UrlGenerator;

class Human extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'photo_url', 'additional_photo_url', 'position',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'name',
        'photo',
        'additional_photo',
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

    /**
     * Get the user additional photo attribute.
     *
     * @param $value
     * @return UrlGenerator|string
     */
    public function getAdditionalPhotoAttribute($value)
    {
        return empty($value) ? 'https://via.placeholder.com/150' : url($value);
    }
}
