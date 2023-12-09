<?php
use App\Http\Controllers\Api\CategoriesController;
use Illuminate\Support\Facades\Route;
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


Route::group(['middleware' => ['api','chackpassword']   ,'namespace' => 'Api'], function() {


    Route::post('/get-main-child' ,'CategoriesController@index');
});

