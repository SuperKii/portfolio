<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProjectController;
use App\Models\ProjectsComponent;
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

Route::get('/', [LandingPageController::class, 'index'])->name('landingPage');

// dashboard 

Route::get('/cookie/dashboard/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/cookie/dashboard/auth', [AuthController::class, 'login'])->name('auth');
Route::get('/cookie/dashboard/logout', [AuthController::class, 'logut'])->name('logout')->middleware('auth');

Route::prefix('CookieDashboard')->middleware('auth')->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/homeIndex', [ComponentController::class, 'homeIndex'])->name('homeIndex');
    Route::get('/aboutIndex', [ComponentController::class, 'aboutIndex'])->name('aboutIndex');
    Route::post('/updateHome/{id}', [ComponentController::class, 'updateHome'])->name('updateHome');
    Route::post('/updateAbout/{id}', [ComponentController::class, 'updateAbout'])->name('updateAbout');

    Route::get('/projectsIndex',[ProjectController::class,'index'])->name('projectsIndex');
    Route::get('/projectsCreate',[ProjectController::class,'create'])->name('projectsCreate');
    Route::post('/projectsStore',[ProjectController::class,'store'])->name('projectsStore');
    Route::get('/projectsShow/{id}',[ProjectController::class,'show'])->name('projectsShow');
    Route::get('/projectsEdit/{id}',[ProjectController::class,'edit'])->name('projectsEdit');
    Route::post('/projectsUpdate/{id}',[ProjectController::class,'update'])->name('projectsUpdate');
    Route::get('/projectsDelete/{id}',[ProjectController::class,'destroy'])->name('projectsDelete');

    Route::get('/message', [ContactController::class, 'index'])->name('indexMessage');
    Route::get('/messageShow/{id}', [ContactController::class, 'show'])->name('showMessage');
});
Route::post('/messageSend', [ContactController::class, 'store'])->name('storeMessage');
