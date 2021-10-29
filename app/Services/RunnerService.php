<?php

namespace App\Services;

use App\Http\Resources\RunnerResource;
use App\Repositories\Interfaces\RunnerRepositoryInterface;
use App\Services\Interfaces\RunnerServiceInterface;
use App\Utils\Constants;
use Exception;

class RunnerService implements RunnerServiceInterface
{
    private $runnerRepository;

    public function __construct(RunnerRepositoryInterface $runnerRepository)
    {
        $this->runnerRepository = $runnerRepository;
    }

    public function index($requestData, $runnerId)
    {
        try {
            $runner = $this->runnerRepository->find($runnerId);
            if (!$runner)
                throw new Exception(Constants::$ERROR_MESSAGE['id_not_exist'], Constants::$ERROR_CODE['not_found']);

            return new RunnerResource($runner);
        } catch (Exception $exception) {
            throw $exception;
        }

    }
}
