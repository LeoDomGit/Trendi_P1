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
    Route::get('/links',[ReportController::class, 'index']);
    Route::get('/reports',[ReportController::class, 'reports']);
    Route::post('/upload',[ReportController::class, 'import']);
    Route::get('/search_camp',[ReportController::class, 'searchCamp']);
    Route::post('/search_camp_import',[ReportController::class, 'importSearchCampData']);
    Route::get('/adsense_search',[ReportController::class, 'AdsenseSearch']);
    Route::post('/adsense_search_import',[ReportController::class, 'AdsenseSearchImport']);
    Route::get('/page_1_camp',[ReportController::class, 'page_1_camp']);
    Route::post('/upload_page_1_camp',[ReportController::class, 'import_page_1_camp']);
    Route::post('/upload_report',[ReportController::class, 'upload_report']);
    Route::get('/logout',[UserController::class,'logout'])->name('logout');
});
Route::get('/',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'checkLogin']);
Route::get('/register',[UserController::class,'register']);
Route::post('/register',[UserController::class,'submit_register']);
