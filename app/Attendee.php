<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'user_id', 'meeting_id', 'attending',
    ];
}
