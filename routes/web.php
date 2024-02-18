<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminController;

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

Route::get('/ab-test', [TestController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/tests', [AdminController::class, 'index'])->name('admin.tests.index');
    Route::get('/tests/start/{test}', [AdminController::class, 'startTest'])->name('admin.tests.start');
    Route::get('/tests/stop/{test}', [AdminController::class, 'stopTest'])->name('admin.tests.stop');
});

