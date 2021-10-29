<?php

namespace App\Services;

use App\Http\Resources\RunnerResource;
use App\Repositories\Interfaces\RunnerRepositoryInterface;
use App\Services\Interfaces\RunnerServiceInterface;
use App\Utils\Constants;
use Exception;
use Illuminate\Support\Facades\Redis;

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
            $runner = Redis::get('user:' . $runnerId);
            if ($runner) {
                return json_decode($runner);
            }
            $runner = $this->runnerRepository->find($runnerId);
            if (!$runner)
                throw new Exception(Constants::$ERROR_MESSAGE['id_not_exist'], Constants::$ERROR_CODE['not_found']);

            $response = new RunnerResource($runner);
            Redis::setex('user:' . $runnerId, 60 * 60 * 24, json_encode($response));
            return $response;
        } catch (Exception $exception) {
            throw $exception;
        }

    }
}
