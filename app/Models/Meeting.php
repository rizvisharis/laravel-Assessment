<?php

namespace App\Models;

class Meeting extends BaseModel
{
    protected $table = 'tbm_meetings';

    protected $fillable = [
        'external_id', 'name'
    ];

    public function races()
    {
        return $this->hasMany(Race::class);
    }
}
