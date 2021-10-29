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
            'external_id' => $requestData['tag'],
            'age' => $requestData['category'],
            'sex' => $requestData['image'],
            'colour' => $requestData['thumbnail'],
            'sire' => $requestData['thumbnail'],
            'dam' => $requestData['thumbnail'] ,
            'owners' => $requestData['thumbnail'] ,
            'avatar' => $requestData['thumbnail'] ,
            'race_id' => $requestData['thumbnail'] ,
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
