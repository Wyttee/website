<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Technology extends Model
{
    use SoftDeletes;

    /** {@inheritdoc} */
    protected $table = 'technologies';

    /** {@inheritdoc} */
    protected $fillable = [
        'title', 'slug',
    ];
}
