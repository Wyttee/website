<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vacancy extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body',
    ];

    /**
     * Get the position of the vacancy.
     *
     * @return BelongsTo
     */
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
