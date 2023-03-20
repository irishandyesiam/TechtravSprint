<?php

namespace App\Providers;

use App\Services\DataFromTasty\Service;
use Illuminate\Support\ServiceProvider;

class DataFromTastyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(
            abstract: Service::class,
            concrete: function () {
                return new Service(
                    baseUri: config( key: 'services.data-from-tasty.uri'),
                    timeout: config( key: 'services.data-from-tasty.timeout')
                );
            },
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
