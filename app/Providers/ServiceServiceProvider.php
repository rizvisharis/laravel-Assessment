<?php

namespace App\Providers;

use App\Services\Interfaces\RunnerServiceInterface;
use App\Services\RunnerService;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RunnerServiceInterface::class, RunnerService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
