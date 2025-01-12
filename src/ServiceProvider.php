<?php

namespace Boatrace\Venture\Project\LaravelPrefecture;

use Boatrace\Venture\Project\MainPrefecture;
use Boatrace\Venture\Project\Prefecture;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * @author shimomo
 */
class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Prefecture::class, fn($app) => new MainPrefecture);

        $this->app->alias(Prefecture::class, 'prefecture');
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
