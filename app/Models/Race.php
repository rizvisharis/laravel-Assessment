<?php

namespace App\Models;

class Race extends BaseModel
{
    protected $table = 'tbm_races';

    protected $fillable = [
        'external_id', 'name','meeting_id'
    ];

    public function runner()
    {
        return $this->belongsTo(Runner::class);
    }
}
