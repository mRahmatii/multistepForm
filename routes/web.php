<?php

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
    $states=\App\City::where('parent_id',0)->pluck('name','id');

    return view('frontend.welcome',compact('states'));
});

Auth::routes(['register' => false]);



Route::group(['prefix' => 'admin'], function() {

    Route::post('users/cities','UserController@cities');
    Route::resource('users', 'UserController');

});
