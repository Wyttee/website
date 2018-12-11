<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Routing\UrlGenerator;

class Project extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'url',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'photo',
    ];

    /**
     * Get the user photo attribute.
     *
     * @return UrlGenerator|string
     */
    public function getPhotoAttribute()
    {
        return empty($this->getAttribute('photo_url')) ? 'https://via.placeholder.com/150' : url($this->getAttribute('photo_url'));
    }
}
