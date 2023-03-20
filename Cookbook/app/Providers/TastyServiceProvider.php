<?php

namespace App\Providers;

use App\Services\Tasty\Client;
use Illuminate\Support\ServiceProvider;

class TastyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Client::class, function ($app){
            return new Client(
                uri: config('services.tasty.uri'),
                token: config('services.tasty.token'),
                timeout: config('services.tasty.timeout'),
                retryTimes: config('services.tasty.retry_times'),
                retryMilliseconds: config('services.tasty.retry_milliseconds'),
            );
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
