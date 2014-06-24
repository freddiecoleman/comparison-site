<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/admin/settings', array('as' => 'siteConfig', 'uses' => 'Site\Admin\Controllers\SettingsController@index'));

Route::get('/admin/subjects', array('as' => 'subjects', 'uses' => 'Site\Admin\Controllers\SubjectController@index'));
Route::post('/admin/subjects', array('as' => 'addSubject', 'uses' => 'Site\Admin\Controllers\SubjectController@create'));

Route::get('/admin/subject/{id}', array('as' => 'editSubject', 'uses' => 'Site\Admin\Controllers\SubjectController@edit'));
Route::post('/admin/subject/{id}', array('as' => 'updateSubject', 'uses' => 'Site\Admin\Controllers\SubjectController@update'));

Route::get('/admin/types', array('as' => 'types', 'uses' => 'Site\Admin\Controllers\TypeController@index'));
Route::post('/admin/types', array('as' => 'createType', 'uses' => 'Site\Admin\Controllers\TypeController@create'));

Route::get('/admin/type/{id}', array('as' => 'editType', 'uses' => 'Site\Admin\Controllers\TypeController@edit'));
Route::post('/admin/type/{id}', array('as' => 'updateType', 'uses' => 'Site\Admin\Controllers\TypeController@update'));
Route::get('/admin/type/{id}/delete', array('as' => 'deleteType', 'uses' => 'Site\Admin\Controllers\TypeController@destroy'));

Route::post('/admin/type/{id}/attribute/add', array('as' => 'addAttribute', 'uses' => 'Site\Admin\Controllers\TypeController@addAttribute'));
Route::get('/admin/type/{id}/attribute/{attribute}/remove', array('as' => 'removeAttribute', 'uses' => 'Site\Admin\Controllers\TypeController@removeAttribute'));

Route::get('/admin/attributes', array('as' => 'attributes', 'uses' => 'Site\Admin\Controllers\AttributeController@index'));
Route::post('/admin/attributes', array('as' => 'createAttribute', 'uses' => 'Site\Admin\Controllers\AttributeController@create'));

Route::get('/admin/attribute/{id}', array('as' => 'editAttribute', 'uses' => 'Site\Admin\Controllers\AttributeController@edit'));
Route::post('/admin/attribute/{id}', array('as' => 'updateAttribute', 'uses' => 'Site\Admin\Controllers\AttributeController@update'));
Route::get('/admin/attribute/{id}/delete', array('as' => 'deleteAttribute', 'uses' => 'Site\Admin\Controllers\AttributeController@destroy'));

Route::get('/admin/subject/{id}/data', array('as' => 'data', 'uses' => 'Site\Admin\Controllers\DataController@index'));