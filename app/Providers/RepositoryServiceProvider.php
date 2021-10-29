<?php

namespace App\Providers;

use App\Repositories\Interfaces\RunnerRepositoryInterface;
use App\Repositories\RunnerRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RunnerRepositoryInterface::class, RunnerRepository::class);
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
