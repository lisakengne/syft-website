<?php

namespace App\Providers;

use App\Library\Services\ActivityAreaApiService;
use Illuminate\Support\ServiceProvider;

class ActivityAreaApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Library\Services\Contracts\ActivityAreaApiServiceInterface',
            function ($app) {
                return new ActivityAreaApiService();
            });
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
