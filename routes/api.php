<?php

use App\Http\Controllers\RunnerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('runner')
    ->group(function () {
        Route::get('/{runnerId}/form-data', [RunnerController::class, 'index']);
    });
