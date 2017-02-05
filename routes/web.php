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

/*View*/
Route::get('/','SeenController@index');
Route::get('/index','SeenController@index');
Route::get('about', function() {
    //
return view('About');
});

Route::get('Course', function() {
    //
return view('Course');
});

Route::get('Organization', function() {
    //
return view('Organization');
});
Auth::routes();


/*Route::get('news/create','admin\NewController@create');
Route::post('news/create','admin\NewController@store');*/

/*Admin*/
Route::resource('news','admin\NewController');
Route::get('Personal/{string?}','admin\PersonalController@index');
Route::post('Personal/{string?}','admin\PersonalController@update');
/*Route::post('search_personal','admin\PersonalController@search_personal');*/
Route::get('admin/setting','admin\AdminController@index');
Route::get('admin/highlight','admin\AdminController@getHighlight');
Route::post('admin/highlight','admin\AdminController@upHighlight');


/*User*/
Route::resource('Profile','user\UserController');
Route::post('addPublished','user\PortfolioController@addPublished');
Route::post('editPublished','user\PortfolioController@updatePublished');
Route::delete('Published/{num?}','user\PortfolioController@deletePublished');


Route::get('Department/{string?}','user\DepartmentController@index');

/*Test*/
Route::get('test', function() {
    //
return view('users.index');
});

Route::get('test2', function() {
    //
return view('test');
});


Route::get('sidebar', function() {
    //
return view('sidebar');
});


Route::get('SearchUser','ImageController@test');
Route::get('donwload-file', 'HomeController@downloadFile');