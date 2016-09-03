<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');


	Route::get('/', function () {
	    return view('layouts.app');

	});

	Route::get('/admin', function () {
	    return view('layouts.admin');
	});

	//LEAGUES 
	Route::group(['prefix' => 'admin'], function () {
	    Route::resource('leagues','LeaguesController');
	});

	Route::get('/admin/leagues/{id}/destroy',[
		'uses' => 'LeaguesController@destroy',
		'as' => 'admin.leagues.destroy'
		]);

	//END LEAGUES

	//PLAYERS
	Route::group(['prefix' => 'admin'], function () {
	    Route::resource('players','PlayersController');
	});

	Route::get('/admin/players/store/{id}','PlayersController@store');

	Route::get('/admin/players/{id}/destroy',[
		'uses' => 'PlayersController@destroy',
		'as' => 'admin.players.destroy'
		]);

	//END PLAYERS

	//CLUBS
	Route::group(['prefix' => 'admin'], function () {
	    Route::resource('clubs','clubsController');
	});
	
	Route::get('/admin/clubs/{id}/destroy',[
		'uses' => 'clubsController@destroy',
		'as' => 'admin.clubs.destroy'
	]);
	//END CLUBS

	//CATEGORIES 
	Route::group(['prefix' => 'admin'], function () {
	    Route::resource('categories','CategoriesController');
	});

	Route::get('/admin/categories/{id}/destroy',[
		'uses' => 'CategoriesController@destroy',
		'as' => 'admin.categories.destroy'
		]);

	//END CATEGORIES 

	//INSCRIPTIONS
	Route::group(['prefix' => 'admin'], function () {
		
	    Route::resource('inscriptions','InscriptionsController');
	});
	
	Route::get('/admin/inscriptions/{id}/destroy',[
		'uses' => 'InscriptionsController@destroy',
		'as' => 'admin.inscriptions.destroy'
	]);

	Route::get('/admin/club/players/{id}', 'ClubsController@players');
	//END INSCRIPTIONS

	Route::get('/admin/enConstruccion', function () {
		 return View('enConstruccion');
	});

	//IADMINS
	Route::group(['prefix' => 'admin'], function () {
		
	    Route::resource('admins','adminsController');
	});
	
	Route::get('/admin/admins/{id}/destroy',[
		'uses' => 'adminsController@destroy',
		'as' => 'admin.admins.destroy'
	]);
	//END ADMINS

});
