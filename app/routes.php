<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/admin/settings', array('as' => 'siteConfig', 'uses' => 'Site\Admin\Controllers\SettingsController@index'));
Route::get('/admin/subjects', array('as' => 'subjects', 'uses' => 'Site\Admin\Controllers\SubjectController@index'));
Route::get('/admin/subject/types', array('as' => 'types', 'uses' => 'Site\Admin\Controllers\TypeController@index'));