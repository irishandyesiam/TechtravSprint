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
