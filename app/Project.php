<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** {@inheritdoc} */
    protected $table = 'projects';

    /** {@inheritdoc} */
    protected $fillable = [
        'title', 'description', 'image_url',
    ];
}
