<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MessageController;

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

///////////////////////////////////////////////////////////////////////////
Route::get('/', function () {
    return view('welcome');
});

///////////////////////////////////////////////////////////////////////////
/*Route::get('/hello', function () {
    //return response('Hello world!');
    // It works! :-)
    return response('', 301)
        -> header('Location','http://laramin.test');
});
*/
///////////////////////////////////////////////////////////////////////////
/*Route::get('/post/{id}', function($p_id) {
    return $p_id;
});*/

///////////////////////////////////////////////////////////////////////////
/*Route::get('/post/{id}', function($p_id) {
    return $p_id;
})->where('id','\d+');
*/

///////////////////////////////////////////////////////////////////////////
/*Route::get('/post/{id}', function($p_id) {
    ddd($p_id);
    return $p_id;
})->where('id','\d+');
*/

///////////////////////////////////////////////////////////////////////////
/*Route::get('/search', function(Request $p_request) {
    //dd($p_request);
    dd($p_request->q);
})->where('id','\d+');*/

Route::get('/create', function () {
    return view('create');
});

/*Route::post('/store', function () {
    ddd();
});*/

Route::post('/store',[MessageController::class, 'store']);