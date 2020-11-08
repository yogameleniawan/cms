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

Auth::routes();

Route::get('/logout', function () {
    $data = Auth::logout();
    return view('auth.login');
});

Route::get('/hello', function () {
    return view('hello', ['name' => 'Yoga']);
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all', 'HomeController@home')->name('all');
Route::get('/search', 'HomeController@search');

// Kategori

Route::get('category/adventure', 'HomeController@adventure')->name('adventure');
Route::get('/category/adventure/search', 'HomeController@searchAdventure');

Route::get('category/football', 'HomeController@football')->name('football');
Route::get('/category/football/search', 'HomeController@searchFootball');

Route::get('category/shooting', 'HomeController@shooting')->name('shooting');
Route::get('/category/shooting/search', 'HomeController@searchShooting');

Route::get('category/racing', 'HomeController@racing')->name('racing');
Route::get('/category/racing/search', 'HomeController@searchRacing');

// Kategori

Route::get('/article/{id}', 'ArticleController@article');

Route::get('/master', 'master@master')->name('master');
Route::post('/article/{id}', 'ArticleController@insertData')->name('insertData');

// Route::get('/manage','ArticleController@index')->name('manage');
// Route::get('manage/article/add','ArticleController@add')->name('add');
// Route::post('manage/article/create','ArticleController@create')->name('create');
// Route::get('/article/edit/{id}','ArticleController@edit');
// Route::post('/article/update/{id}','ArticleController@update');
// Route::get('/article/delete/{id}','ArticleController@delete');

Route::resource('articles','ManageController')->middleware('auth');
Route::get("create", "ManageController@create");
Route::post("store", "ManageController@store")->name("store");
Route::get('pdf', 'ManageController@viewPDF');
// Route::get('/tes', function () {
//     return view('manage.dist.index');
// })->name('tes');
