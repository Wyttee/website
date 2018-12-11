<?php

namespace App;

use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author_name', 'author_photo_url', 'body',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'author_photo',
    ];

    /**
     * Get the author photo attribute.
     *
     * @return UrlGenerator|string
     */
    public function getAuthorPhotoAttribute()
    {
        return empty($this->getAttribute('author_photo_url')) ? 'https://via.placeholder.com/150' : url($this->getAttribute('author_photo_url'));
    }
}
