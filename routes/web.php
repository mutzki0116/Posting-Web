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

Route::get('news', 'JobPostsController@list');
Route::get('users','AccountsController@showList');
Route::post('newpost', 'JobPostsController@store');
Route::get('userside','JobPostsController@list');
Route::get('newpost', function(){
    return view('newpost');
});
Route::get('editjobpost/{jobpost}','JobPostsController@show');
Route::patch('editjobpost/{jobpost}','JobPostsController@update');
Route::get('deletejobpost/{jobpost}','JobPostsController@show2');
Route::delete('deletejobpost/{jobpost}','JobPostsController@destroy');