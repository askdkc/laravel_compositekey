<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;

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

Route::patch('/update', [MemoController::class, 'update']);
Route::get('/memos', [MemoController::class, 'index']);
Route::get('/create', [MemoController::class, 'create']);
Route::get('/memos/{memoid}/{memosubid}/edit/', [MemoController::class, 'edit']);
Route::post('/memos', [MemoController::class, 'store']);

