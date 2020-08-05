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
    // return view('welcome');

    try{
        DB::connection()->getPdo();
        echo 'yey konek jink';
    }catch(\Exception $e){
        die("gak konek ke database,cek konfigurasi. error: ". $e);
    }
});
