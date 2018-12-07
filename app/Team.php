<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** {@inheritdoc} */
    protected $table = 'teams';

    /** {@inheritdoc} */
    protected $fillable = [
        'name',
    ];
}
