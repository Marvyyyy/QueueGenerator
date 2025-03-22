<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
    return redirect('index');
});

Route::get('index', [MainController::class, 'mainINDEX']);
Route::get('mc', [MainController::class, 'mainMC']);
Route::post('queue-mc', [MainController::class, 'postMC']);
Route::post('queue-lv', [MainController::class, 'postLV']);
Route::get('lv', [MainController::class, 'mainLV']);

Route::get('barcode', [MainController::class, 'barcode']);
