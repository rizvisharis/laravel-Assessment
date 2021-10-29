<?php

namespace App\Repositories;

use App\Models\Runner;
use App\Repositories\Interfaces\RunnerRepositoryInterface;

class RunnerRepository implements RunnerRepositoryInterface
{
    public function get($condition = null)
    {
        return Runner::where($condition);
    }

    public function find($id)
    {
        return Runner::find($id);
    }

    public function create($requestData)
    {
        return Runner::create([
            'name' => $requestData['name'],
            'external_id' => $requestData['external_id'],
            'age' => $requestData['age'],
            'sex' => $requestData['sex'],
            'colour' => $requestData['colour'],
            'sire' => $requestData['sire'],
            'dam' => $requestData['dam'] ,
            'owners' => $requestData['owners'] ,
            'avatar' => $requestData['avatar'] ,
            'race_id' => $requestData['race_id'] ,
        ]);
    }
    public function update($data)
    {
        $data->save();
    }

    public function delete($data)
    {
        $data->delete();
    }
}
