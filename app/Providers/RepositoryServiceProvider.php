<?php

namespace App\Providers;

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
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            'App\Repositories\Contracts\EventRepository',
            'App\Repositories\EventRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\TourPlanningRepository',
            'App\Repositories\TourPlanningRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\UserRepository',
            'App\Repositories\UserRepository'
        );
        //
    }
}
