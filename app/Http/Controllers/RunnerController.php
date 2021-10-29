<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\RunnerServiceInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RunnerController extends Controller
{
    private $runnerService;

    public function __construct(RunnerServiceInterface $runnerService)
    {
        $this->runnerService = $runnerService;
    }

    public function index(Request $request, $runnerId)
    {
        try {
            $request->validate([
                //if u want validate
            ]);
            $request = $request->only([
                //if u want
            ]);
            $runner = $this->runnerService->index($request, $runnerId);
            return $this->successResponse($runner, "runner form data got successfully");
        } catch (ValidationException $validationException) {
            return $this->validationErrorResponse($validationException);
        } catch (Exception $exception) {
            return $this->exceptionErrorResponse($exception);
        }
    }
}
