<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ServiceApi\Contracts\ApiBlogContract;
use App\ServiceApi\ApiBlogJsonFake;
use App\ServiceApi\ApiBlogLaravel;

class BlogApiServiceProvider extends ServiceProvider
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
        $this->app->singleton(ApiBlogContract::class,function(){
            return new ApiBlogLaravel();
        });
    }
}
