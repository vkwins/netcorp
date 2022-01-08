<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\AgiLogController;
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


Route::get("/", function(){
    return View::make("welcome");
 });

Route::get('/active-vehicle-list', [VehiclesController::class, 'show']);

Route::get('/log-count/{id}', [AgiLogController::class, 'show']);
Route::get('/last-info/{id}', [AgiLogController::class, 'lastInfo']);