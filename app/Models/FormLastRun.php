<?php

namespace App\Models;

class FormLastRun extends BaseModel
{
    protected $table = 'tbm_form_last_runrs';

    protected $fillable = [
        'name','distance','type','price','date','runner_id'
    ];

    public function runner()
    {
        return $this->belongsTo(Runner::class);
    }
}
