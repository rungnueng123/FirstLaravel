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
    return view('welcome');
});

Route::get('/hello', function(){
   return "Hello Laravel 5.4";
});

Route::get('/register','MyuserController@registerpage');
Route::get('/login','MyuserController@loginpage');

Route::post('/saveregister','MyuserController@saveregisterpage');








Route::get('/form', 'Auth\LoginController@form');
Route::get('/movie', 'MovieController@index');
Route::get('/movieview', 'MovieController@view');
Route::get('/song', 'Music\SongController@index');
Route::get('/radio', 'RadioController@index');
Route::get('/songplay','Music\SongController@play');
Route::get('/band','Music\SongController@band');


//Require Parameters
Route::get('/blog/{id}', function ($id){
   return "Welcome to Blog ID : " . $id;
});

// Optional Parameters
Route::get('/profile/{id?}', function ($id=null){
    return "Welcome to Profile ID : " . $id;
});

// Regular Expression
Route::get('/book/{id}', function ($id){
    return "Welcome to Book ID : " . $id;
})->where('id', '[0-9]+');

// Regular Expression
Route::get('/book/{name}', function ($name){
    return "Welcome to Book Name : " . $name;
})->where('name', '[A-Za-z]+');

Route::match(['get','post'], 'bill', function (){
   if(Request::isMethod('get')){
       return 'This is get method';
   }
    if(Request::isMethod('post')){
        return 'This is post method';
    }
});

Route::any('poll', 'Auth\LoginController@poll');