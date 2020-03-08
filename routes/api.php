<?php
use Illuminate\Http\Request;
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api){
    $api->post('/login' , 'App\Http\Controllers\AuthController@login');
    $api->post('/register' , 'App\Http\Controllers\AuthController@register');
    $api->delete('/logout' , 'App\Http\Controllers\AuthController@logout');
    $api->get('/user', function(){
        return Auth::user();
    });
    $api->put('/user/{id}', 'App\Http\Controllers\AuthController@update');

    $api->post('/createquiz', 'App\Http\Controllers\quizController@createquiz');
    $api->get('/quiz/{category}', 'App\Http\Controllers\quizController@showquiz1');

    $api->post('/createquiz2', 'App\Http\Controllers\Quiz2Controller@createquiz2');
    $api->get('/quiz2/{category}', 'App\Http\Controllers\Quiz2Controller@quiz2');
});