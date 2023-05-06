<?php

namespace Homepagemv\HomepagemvHtml;

use Illuminate\Support\ServiceProvider;

class HomepagemvHtmlProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->make('Homepagemv\HomepagemvHtml\HompagemvHtmlController');
       $this->loadViewsFrom(__DIR__.'/views','HomepagemvHtml');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
