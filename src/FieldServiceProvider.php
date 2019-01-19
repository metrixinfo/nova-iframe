<?php

namespace Metrixinfo\Nova\Fields\Iframe;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

/**
 * Class FieldServiceProvider
 * @package Metrixinfo\Nova\Fields\Iframe
 */
class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('iframe', __DIR__.'/../dist/js/field.js');
            Nova::style('iframe', __DIR__.'/../dist/css/field.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
