<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Api\AuthController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;

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
$router->group(['namespace' => 'Frontend\Api'], function () use ($router) {

$router->post('/login','AuthController@login')->name('login.post');


$router->post('register','AuthController@register')->name('register.post');



});

Route::group(['namespace' => 'User', 'as' => 'user.','middleware' => 'auth:api'], function () {
    
        Route::post('profile/update', [ProfileController::class, 'update'])->name('profile.update/');
    });
 
