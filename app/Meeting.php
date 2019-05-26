<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'title', 'details', 'location', 'start_date', 'end_date',
    ];
    
    public function users()
    {
        return $this->belongsToMany('\App\User', 'attendees')
                    ->as('attendance')
                    ->withPivot('attending');
    }
}
