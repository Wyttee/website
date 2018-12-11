<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
     * @return UrlGenerator|string
     */
    public function getPhotoAttribute()
    {
        return empty($this->getAttribute('photo_url')) ? 'https://via.placeholder.com/250' : url($this->getAttribute('photo_url'));
    }

    /**
     * Get the user additional photo attribute.
     *
     * @return UrlGenerator|string
     */
    public function getAdditionalPhotoAttribute()
    {
        return empty($this->getAttribute('additional_photo_url')) ? 'https://via.placeholder.com/250' : url($this->getAttribute('additional_photo_url'));
    }

    /**
     * Get the position of the user.
     *
     * @return BelongsTo
     */
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
