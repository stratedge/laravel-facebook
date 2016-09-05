<?php

namespace Stratedge\LaravelFacebook;

use Facebook\Facebook;
use Illuminate\Support\ServiceProvider;

class FacebookServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Facebook::class, function () {
            return new Facebook([
                "app_id" => env("FB_APP_ID"),
                "app_secret" => env("FB_APP_SECRET"),
                "default_graph_version" => env("FB_GRAPH_VERSION", "v2.7"),
            ]);
        });
    }
}
