<?php

namespace App\Providers;

use App\Library\Services\AccountApiService;
use App\Library\Services\ActivityAreaApiService;
use Illuminate\Support\ServiceProvider;

class AccountApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Library\Services\Contracts\AccountApiServiceInterface',
            function ($app) {
                return new AccountApiService();
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
