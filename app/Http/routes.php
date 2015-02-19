<?php

Route::get('/',        'HomeController@index');

/**
 * Instalacao
 */
Route::group(["prefix" => "install"], function ()
{
    Route::get("/{step?}",        'HomeController@install');
});

/**
 * Inquilino
 */
Route::group(["prefix" => "api/acesso/inquilinos"], function ()
{
    Route::get("/{id}",               'InquilinoController@view');
});

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);/**/
