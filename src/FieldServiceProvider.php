<?php
declare(strict_types=1);

namespace Joonas1234\NovaSluggableField;

use Illuminate\Support\Facades\Route;
use Laravel\Nova\Http\Middleware\Authorize;
use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void 
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-sluggable-field', __DIR__.'/../dist/js/field.js');
            Nova::style('nova-sluggable-field', __DIR__.'/../dist/css/field.css');
        });
    }
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }
}
