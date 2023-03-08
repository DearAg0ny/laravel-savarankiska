<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MasterController;

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

// service routes
Route::get('/', [ServiceController::class,'index']);
Route::get('/add-service', [ServiceController::class,'addService']);
Route::post('/storeService', [ServiceController::class,'store']);
Route::get('/service/{service}',[ServiceController::class,'showService']);
Route::get('/service/edit/{service}',[ServiceController::class,'editService']);
Route::post('/update/{service}',[ServiceController::class,'storeUpdate']);
Route::get('/service/delete/{service}',[ServiceController::class,'deleteService']);
// master router
Route::get('/add-master', [MasterController::class,'addMechanics']);
Route::post('/storeMaster', [MasterController::class,'store']);
Route::get('/master/{mechanic}',[MasterController::class,'showMechanics']);
Route::get('/all-masters',[MasterController::class,'index']);
Route::get('/master/edit/{mechanic}',[MasterController::class,'editMechanic']);
Route::post('/master/update/{mechanic}',[MasterController::class,'update']);
Route::get('/master/delete/{mechanic}',[MasterController::class,'deleteMechanic']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
