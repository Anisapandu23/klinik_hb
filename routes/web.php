<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// route dashboard
Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
// route pasien
Route::get('/pasien', 'Admin\PasienController@index')->name('pasien.index');
Route::get('/create_pasien', 'Admin\PasienController@create')->name('pasien.create');
// route rekamMedik
Route::get('/rekamMedik', 'Admin\RekamMedikController@index')->name('rekamMedik.index');
// route obat
Route::get('/obat', 'Admin\ObatController@index')->name('obat.index');
Route::get('/create_obat', 'Admin\ObatController@create')->name('obat.create');