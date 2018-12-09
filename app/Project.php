<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    /** {@inheritdoc} */
    protected $table = 'projects';

    /** {@inheritdoc} */
    protected $fillable = [
        'title', 'description', 'image_url',
    ];

    public function image(): string
    {
        return asset($this->image_url);
    }
}
