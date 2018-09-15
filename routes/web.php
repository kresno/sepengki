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

Route::get('/', function () {
    return view('admin.dashboard.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function(){
  Route::resource('admin_dashboard', 'Admin\DashboardController');
  Route::resource('admin_evaluasi', 'Admin\EvaluasiController');
  Route::resource('admin_dokumen', 'Admin\DokumenController');


  Route::resource('admin_urusan', 'Admin\UrusanController');
  Route::resource('admin_bidang', 'Admin\BidangController');
  Route::resource('admin_program', 'Admin\ProgramController');
  Route::resource('admin_kegiatan', 'Admin\KegiatanController');

  Route::resource('admin_user', 'Admin\UserController');

});
