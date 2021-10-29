<?php

namespace App\Models;

class Runner extends BaseModel
{
    protected $table = 'tbm_runners';

    protected $fillable = [
        'external_id', 'name','age','sex','colour','sire','dam','owners','avatar','race_id'
    ];

    public function lastRunrs()
    {
        return $this->hasMany(FormLastRun::class);
    }

    public function formData()
    {
        return $this->belongsTo(FormData::class);
    }
}
