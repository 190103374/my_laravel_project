<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/lavish', function () {
    return view('main_page');
});

// Route::get('/lavish/{lang}', function($lang) {
//     App::setlocale($lang);
//     return view('main_page');
// });

Route::get('/get_started/{lang}', function($lang) {
    App::setlocale($lang);
    return view('second_page');
});

Route::get('/lavish/{lang}', 'LocalizationController@index');


Route::get('/get_started', function () {
    return view('second_page');
});

Route::view('form', 'main_page');
Route::post('submit', 'ServiceController@save');

Route::get('/get_started/{name}', 'UserController@page');

Route::get('/login', 'UserController@index');
Route::post('/login/check', 'UserController@check')->name('second_page.check');
Route::get('/login/test', 'TestController@index')->name('test.index');
Route::post('/login/user', 'UserController@logout')->name('user.logout');
Route::get('/login/user', 'UserController@index')->name('user.logout');

Route::get('/signup', 'SignupController@index')->name('signup_page.index');

Route::get('/rate', 'RateController@index')->name('rate.index');

Route::get('mail/send', 'MailController@send');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verify', 'Auth\RegisterController@verifyUser')->name('verify.user');

Route::get('/multiuploads', 'UploadController@uploadForm');
Route::post('/multiuploads', 'UploadController@uploadSubmit');