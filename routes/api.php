<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    $api->get('/question', 'App\Api\V1\Controllers\SectionController@index');
    $api->post('/question', 'App\Api\V1\Controllers\QuestionController@store');
    $api->post('/section', 'App\Api\V1\Controllers\SectionController@store');
    $api->post('/response', 'App\Api\V1\Controllers\UserResponseController@store');
    $api->get('/user', 'App\Api\V1\Controllers\UserResponseController@index');

});
