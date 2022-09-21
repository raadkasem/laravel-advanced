<?php

use App\Postcard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('channel', 'App\Http\Controllers\ChannelController@index');
Route::get('posts/create', 'App\Http\Controllers\PostController@create');

Route::get('/postcards', function (){
    $postcardService = new \App\PostcardSendingService('us', '4', '6');
    $postcardService->hello('Hello from web.php', 'test@test.com');
});

Route::get('/facade',function (){
    return  Postcard::hello('Hello from Facade', 'test@test.com');
});
