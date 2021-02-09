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

Route::group(['middleware' => 'firewall.xss'], function () {
    Route::get('/analisis', 'formulircontroller@analisis');
});

Route::get('/visits', 'formulircontroller@visits');

Route::get('/analisis/{post}', [
  'uses' => 'formulircontroller@show',
  'as' => 'detail2'
]);

Route::group(['middleware' => 'firewall.xss'], function () {
    Route::get('/infografis', 'formulircontroller@infografis');
});

Route::group(['middleware' => 'firewall.xss'], function () {
    Route::get('/infografis/{post}', [
      'uses' => 'formulircontroller@tampilkan',
      'as' => 'detail'
    ]);
});

Route::get('/toolkit', function(){
  return view('toolkit.satudata');
});

Route::get('/toolkit/satudata', function(){
  return view('toolkit.satudata');
});

Route::get('/toolkit/kebijakan', function(){
  return view('toolkit.kebijakan');
});

Route::get('/toolkit/prinsip', function(){
  return view('toolkit.prinsip');
});

Route::get('/toolkit/implementasi', function(){
  return view('toolkit.implementasi');
});

Route::get('/toolkit/unduh', function(){
  return view('toolkit.unduh');
});

Route::get('/about', function(){
  return view('about');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/selesai', function(){
  return view('selesai');
});

Route::get('/sekolah', function(){
  return view('sekolah');
});

Route::get('/json', function(){
  return view('json');
});

Route::get('/tableSekolah', function(){
  return view('tableSekolah');
});

Route::resource('/formulir','formulircontroller');
Route::group(['middleware' => 'firewall.xss'], function () {
    Route::resource('/','formulircontroller');
});
Route::resource('/home','formulircontroller');

Auth::routes();

/*
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
*/
Route::post('update', 'formulircontroller@update');
Route::post('store', 'formulircontroller@store');
