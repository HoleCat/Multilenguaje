<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();


Route::get('languages', 'LanguageTranslationController@index')->name('languages');
Route::post('translations/update', 'LanguageTranslationController@transUpdate')->name('translation.update.json');
Route::post('translations/updateKey', 'LanguageTranslationController@transUpdateKey')->name('translation.update.json.key');
Route::delete('translations/destroy/{key}', 'LanguageTranslationController@destroy')->name('translations.destroy');
Route::post('translations/create', 'LanguageTranslationController@store')->name('translations.create');
Route::get('check-translation', function(){
	App::setLocale('es');
	
	dd(__('website'));
});

Route::get('/home', [
    'as'=>'client.home',
    'uses' => 'ClientController@home'
]);

Route::get('/home', [
    'as'=>'client.home',
    'uses' => 'ClientController@home'
]);

Route::get('/aboutUs', [
    'as'=>'client.aboutUs',
    'uses' => 'ClientController@aboutUs'
]);

Route::get('/services', [
    'as'=>'client.services',
    'uses' => 'ClientController@services'
]);

Route::get('/products', [
    'as'=>'client.products',
    'uses' => 'ClientController@products'
]);

Route::get('/projects', [
    'as'=>'client.projects',
    'uses' => 'ClientController@projects'
]);

Route::get('/clients', [
    'as'=>'client.clients',
    'uses' => 'ClientController@clients'
]);

Route::get('/contactUs', [
    'as'=>'client.contactUs',
    'uses' => 'ClientController@contactUs'
]);

// admin
Route::get('/admin', 'HomeController@admin');

// Dashboard
Route::get('/users', 'UserController@index');

Route::get('lang/{lang}', [
'as'=>'lang.switch',
'uses' => 'LanguageController@switchLang'
]);