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
// TESTING
Route::get('/tes', function () {
    return view('pdf.wp-def');
});
// Route::get('/bt2', function () {
//     return view('pages2.buku-tamu');
// });
// Route::get('/wp2', function () {
//     return view('pages2.working-permit');
// });
// Route::get('/rw2', function () {
//     return view('pages2.riwayat');
// });

// OLD ROUTE
// Route::get('/', 'MainController@index');
// Route::get('/home', 'HomeController@index')->name('home');
// Route::post('/buku-tamu', 'MainController@store_bt');
// Route::post('/pdf-bt', 'AdminController@cetak_bt');
// route::post('/pdf-wp', 'MainController@store_wp');
// route::post('/keluar', 'MainController@store_keluar');
// Route::get('/administrator', 'AdminController@index');

// NEW ONE
Auth::routes();
Route::get('/', 'MainController@index');
Route::get('/working-permit', 'MainController@get_wp');
Route::get('/riwayat', 'MainController@get_history');

// action
Route::post('/buku-tamu', 'MainController@store_bt');
route::post('/keluar', 'MainController@store_keluar');
route::post('/pdf-wp', 'MainController@store_wp');
Route::post('/pdf-bt', 'AdminController@cetak_bt');
Route::get('/administrator', 'AdminController@index');
