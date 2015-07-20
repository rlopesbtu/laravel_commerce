<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['prefix'=>'admin'],function(){

    Route::group(['prefix'=>'categories'],function(){
       Route::get('/','CategoriesController@index');
    });

    Route::group(['prefix'=>'products'],function(){
        Route::get('/','ProductsController@index');
    });

});
//echo route('produtos');die;






/*
Route::get('/categories','CategoriesController@index');
Route::get('categories/create','CategoriesController@create');
Route::get('/','WelcomeController@index');
Route::get('exemplo','WelcomeController@exemplo');
*/

/*Route::get('admin/categories','CategoriesController@index');
Route::get('admin/products','ProductsController@index');
Route::get('home','HomeController@index');*/


/*Route::controllers([
   'auth' => 'Auth\AuthController',
   'password' => 'AuthPasswordController',
]);*/

Route::get('/', function () {
    return view('welcome');
});
