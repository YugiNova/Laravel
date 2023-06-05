<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('test', function() {
    return '<h1>Test</h1>';
});

Route::get('test/index', [TestController::class, 'index']);
Route::get('test/detail', [TestController::class, 'detail']);
Route::get('user/detail/{id}/{test}', [TestController::class, 'show']);
Route::get('list_user',function () {
    return view('user.list_user');
});