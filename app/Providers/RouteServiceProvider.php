<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));


        $api = app('Dingo\Api\Routing\Router');

        $api->version('v1', function ($api) {

            $api->get('/question', 'App\Api\V1\Controllers\SectionController@index')->middleware('cors');
            $api->post('/question', 'App\Api\V1\Controllers\QuestionController@store')->middleware('cors');
            $api->post('/section', 'App\Api\V1\Controllers\SectionController@store')->middleware('cors');
            $api->post('/response', 'App\Api\V1\Controllers\UserResponseController@store')->middleware('cors');
            $api->get('/users', 'App\Api\V1\Controllers\UserResponseController@index')->middleware('cors');

        });
    }
}
