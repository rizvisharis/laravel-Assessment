<?php

namespace App\Models;

class FormData extends BaseModel
{
    protected $table = 'tbm_form_data';

    protected $fillable = [
        'career', '1st_up', '2nd_up', '3rd_up', '4th_up', 'track', 'distance', 'trk_dist', 'firm', 'good', 'soft',
        'heavy', 'synthetic', 'night', 'runner_id'
    ];

    public function runner()
    {
        return $this->belongsTo(Runner::class,'runner_id');
    }
}
