<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicFormController;

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


 Route::get('/add', [BasicFormController::class, 'add']);
Route::post('/store', [BasicFormController::class, 'store']);
Route::get('/list', [BasicFormController::class, 'list']);
