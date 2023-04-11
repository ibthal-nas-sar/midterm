<?php

use App\Http\Controllers\ExpController;
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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/expense',  [ExpController::class, 'index']);
Route::get('/', [ExpController::class, 'index']);
Route::post('/store', [ExpController::class, 'store']);
Route::post('/delete/{id}', [ExpCsontroller::class, 'delete']);
Route::post('update/{id}', [EXPCsontroller::class, 'update']);
