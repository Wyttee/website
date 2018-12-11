<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'body', 'image_url',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'image',
    ];

    /**
     * Get the post image attribute.
     *
     * @return UrlGenerator|string
     */
    public function getImageAttribute()
    {
        return empty($this->getAttribute('image_url')) ? 'https://via.placeholder.com/150' : url($this->getAttribute('image_url'));
    }

    /**
     * Get the category of the post.
     *
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
