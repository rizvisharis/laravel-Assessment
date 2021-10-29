<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RunnerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'runner_name' => $this->name,
            'age' => $this->age,
            'sex' => $this->sex,
            'color' => $this->age,
            'last_runs' => LastRunResource::collection($this->lastRunrs),
        ];
    }
}
