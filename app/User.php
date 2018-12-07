<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /** {@inheritdoc} */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /** {@inheritdoc} */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return BelongsTo
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
