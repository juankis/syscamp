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
});
