<?php

namespace App\Repositories\Interfaces;

interface RunnerRepositoryInterface
{
    public function get($condition = null);

    public function find($id);

    public function create($requestData);

    public function update($requestData);

    public function delete($requestData);
}
