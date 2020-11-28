<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::get('uploads/{id}', '\Common\Files\Controllers\FileEntriesController@show');

    Route::get('entries', 'DriveEntriesController@index');
    Route::post('entries', '\Common\Files\Controllers\FileEntriesController@store');
    Route::post('entries/move', 'MoveFileEntriesController@move');
    Route::put('entries/{id}', '\Common\Files\Controllers\FileEntriesController@update');
    Route::delete('entries', '\Common\Files\Controllers\FileEntriesController@destroy');

    // FOLDERS
    Route::post('folders', 'FoldersController@store');

    // STARRING
    Route::post('entries/star', 'StarredEntriesController@add');
    Route::post('entries/unstar', 'StarredEntriesController@remove');
});


