<?php
use Illuminate\Http\Request;
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api){
    $api->post('/login' , 'App\Http\Controllers\AuthController@login');
    $api->post('/register' , 'App\Http\Controllers\AuthController@register');
    $api->delete('/logout' , 'App\Http\Controllers\AuthController@logout');
    $api->get('/user/{id}', 'App\Http\Controllers\AuthController@show');
    $api->put('/user/{id}', 'App\Http\Controllers\AuthController@update');

    $api->post('/createquiz', 'App\Http\Controllers\quizController@createquiz');
    $api->get('/quiz1', 'App\Http\Controllers\quizController@showquiz1');
    $api->get('/quiz2', 'App\Http\Controllers\quizController@showquiz2');
    $api->get('/quiz3', 'App\Http\Controllers\quizController@showquiz3');
    $api->get('/quiz4', 'App\Http\Controllers\quizController@showquiz4');
    $api->get('/exam', 'App\Http\Controllers\quizController@exam');
    $api->get('/exam2', 'App\Http\Controllers\quizController@exam2');
    $api->get('/exam3', 'App\Http\Controllers\quizController@exam3');
});