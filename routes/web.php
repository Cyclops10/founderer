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

//Start Front Route

Route::get('/', function () { return view('index'); });
Route::get('/home', function () { return view('index'); })->name('home');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/services', function () { return view('services'); })->name('services');
Route::get('/work', function () { return view('work'); })->name('work');
Route::get('/work-details', function () { return view('work-details'); })->name('work-details');
Route::get('/contact', function () { return view('contact'); })->name('contact');

//End Fornt Route

Auth::routes();

Route::get('founderer/register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('founderer/register', 'Auth\RegisterController@register');

Route::get('investor/register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('investor/register', 'Auth\RegisterController@register');


Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('dashboard',
    [   'uses'=>'HomeController@index',
        'as'=>'dashboard',
        'middleware'=>'roles',
        'roles'=>['admin','investor','founderer']
    ])->name('dashboard');

Route::get('admin/dashboard',
    [   'uses'=>'HomeController@fake',
        'as'=>'admin-dashboard',
        'middleware'=>'roles',
        'roles'=>'admin'
    ])->name('dashboard');

Route::get('investor/dashboard',
    [   'uses'=>'HomeController@fake',
        'as'=>'investor-dashboard',
        'middleware'=>'roles',
        'roles'=>'investor'
    ])->name('dashboard');

Route::get('founder/dashboard',
    [   'uses'=>'HomeController@fake',
        'as'=>'founder-dashboard',
        'middleware'=>'roles',
        'roles'=>'founderer'
    ])->name('dashboard');
