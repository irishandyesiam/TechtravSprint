<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Http\Client\HttpClientFactory;
use App\Services\HttpClientService;

class HttpClientProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(HttpClientFactory::class, function ($app) {
        return new HttpClientService();
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
