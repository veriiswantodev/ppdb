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

Route::get('/', 'SiteController@index');
Route::get('/register', 'SiteController@register');
Route::get('/login', 'SiteController@login');
Route::get('/about', 'SiteController@about');
Route::post('/postregister', 'SiteController@postregister');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {

    Route::get('/siswa', 'SiswaController@index');
    Route::get('/siswa/data', 'SiswaController@data');
    Route::get('/siswa/tambah','SiswaController@tambah');
    Route::post('/siswaregister', 'SiswaController@siswaregister');
    Route::get('/siswa/cetak', 'SiswaController@cetak');
    Route::get('/siswa/{id}/edit', 'SiswaController@editData');

    Route::get('/jurusan', 'JurusanController@index');
    Route::post('/postjurusan', 'JurusanController@create');
    Route::get('/jurusan/{id}/delete', 'JurusanController@delete');

});

Route::group(['middleware' => ['auth', 'checkRole:admin,siswa']], function () {
    Route::get('/dashboard', 'DashboardController@index');

});


Route::group(['middleware' => ['auth', 'checkRole:siswa']], function () {
    Route::get('/siswa/profile/', 'SiswaController@profile');
    Route::get('/siswa/edit', 'SiswaController@edit');
    Route::post('/siswa/update', 'SiswaController@update');
    Route::get('siswa/exportpdf', 'SiswaController@exportpdf');
});
