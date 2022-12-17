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
use App\Http\Controllers\CompanyController;
 use App\Http\Controllers\videocontroller;

Route::resource('companies', CompanyController::class);
Route::get('video-upload', [ videoController::class, 'getVideoUploadForm' ])->name('get.video.upload');
Route::post('video-upload1', [ videoController::class, 'uploadVideo' ])->name('store.video');




Route::get('/', function () {
    return view('welcome');
});
