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
            'tag' => $requestData['tag'],
            'category' => $requestData['category'],
            'image' => $requestData['image'],
            'thumbnail' => $requestData['thumbnail'] ?? null,
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
