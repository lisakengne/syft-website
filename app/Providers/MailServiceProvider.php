<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class MailServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Library\Services\Contracts\MailServiceInterface',
            'App\Library\Services\MailService'
        );
    }

}
