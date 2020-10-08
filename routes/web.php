<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Resources\PostResource;
use App\Http\Resources\CommentResource;

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
    // return redirect('ocean');
});

// Route::redirect('/', 'chill');

Route::get('/ocean', function () {
    return view('ocean');
});

Route::get('/ocean/{id}', function ($id) {
    echo $id;
    return view('ocean');
});

Route::view('/chill', 'chill', ['place' => 'Maldives']);

Route::get('/indexOcean', 'OceanController@index');

Route::get('/showOcean/{id}', 'OceanController@show');

Route::get('/db', 'DatabaseController@index');

Route::get('/posts', 'PostController@index');

Route::get('/jsonComments', 'CommentController@index');

Route::get('/jsonComm/{id}', 'CommentController@comms');

Route::get('/home', 'HomeController@index');

Route::get('/oceans', 'OceanController@ocean');

Route::post('/oceans', 'OceanController@store');

Route::get('/oceans/{id}', 'OceanController@destroy');

Route::get('/editOcean/{id}', 'OceanController@edit');

Route::post('/editOcean', 'OceanController@update');

Route::view('/register', 'nav.register');

Route::post('/register', 'HomeController@store');

Route::view('/login', 'nav.login');

Route::post('/login', 'HomeController@show');



