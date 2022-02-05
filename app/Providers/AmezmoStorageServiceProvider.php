<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AmezmoStorageServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (!App::environment('local') && env('STORAGE_DIRECTORY')) {
            // Amezmo Persistent storage directory
            // https://www.amezmo.com/blog/how-to-change-the-default-storage-path-in-laravel/
            $this->app->instance('path.storage', env('STORAGE_DIRECTORY'));
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
