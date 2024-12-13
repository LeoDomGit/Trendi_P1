<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::middleware(['checkLogin'])->group(function () {
    Route::get('/dashboard',[ReportController::class, 'index']);
    Route::get('/register',[UserController::class,'register']);
    Route::post('/register',[UserController::class,'submit_register']);
    Route::get('/logout',[UserController::class,'logout'])->name('logout');
    Route::post('/upload',[ReportController::class, 'import']);
});
Route::get('/',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'checkLogin']);


