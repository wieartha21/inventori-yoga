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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('operator')
Route::middleware('auth')->prefix('/operator')->group(function(){
    route::get('/',"Operator\OperatorController@index");
    route::get('/suplier',"Operator\OperatorController@suplier");
    route::get('/suplier',"Operator\OperatorController@suplier");
    route::get('/fsuplier',"Operator\OperatorController@fsuplier");
    route::post('/simpanSuplier',"Operator\OperatorController@simpanSuplier");
    route::get('/hapusSuplier',"Operator\OperatorController@hapusSuplier");

    route::get('/supir',"Operator\OperatorController@supir");
    route::get('/fsupir',"Operator\OperatorController@fsupir");
    route::post('/simpanSupir',"Operator\OperatorController@simpanSupir");
    route::get('/hapusSupir',"Operator\OperatorController@hapusSupir");

    route::get('/merk',"Operator\OperatorController@merk");
    route::get('/fmerk',"Operator\OperatorController@fmerk");
    route::post('/simpanMerk',"Operator\OperatorController@simpanMerk");
    route::get('/hapusMerk',"Operator\OperatorController@hapusMerk");

    route::get('/barangMasuk',"Operator\OperatorController@barangMasuk");
    route::get('/fbarangMasuk',"Operator\OperatorController@fbarangMasuk");
    route::get('/hapusBarangMasuk',"Operator\OperatorController@hapusBarangMasuk");
    route::post('/simpanBarangMasuk',"Operator\OperatorController@simpanBarangMasuk");

    route::get('/seriBarang',"Operator\OperatorController@seriBarang");
    route::get('/fNoSeri',"Operator\OperatorController@fNoSeri");
    route::post('/simpanNomorSeri',"Operator\OperatorController@simpanNomorSeri");
    route::get('/hapusSeri',"Operator\OperatorController@hapusSeriBarang");

    route::post('/simpanKirim',"Operator\OperatorController@simpanKirim");
    route::get('/detailBarangKeluar',"Operator\OperatorController@detailBarangKeluar");

    route::get('/barangkeluar',"Operator\OperatorController@barangKeluar");


});
