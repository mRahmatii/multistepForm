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
})->name('home');

Auth::routes(['register' => false]);

    Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::post('admin/users/cities','UserController@cities');

Route::post('admin/users/store','UserController@store')->name('users.store');

Route::group(['prefix' => 'admin','middleware'=>'auth'], function() {


    Route::get('users', 'UserController@index')->name('users.index');
//    Route::resource('users', 'UserController');

});
