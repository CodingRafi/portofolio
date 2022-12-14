<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\SkilController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ShowWebController;
use App\Http\Controllers\ConfigurasiController;
use App\Http\Controllers\PenghargaanController;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', [ShowWebController::class, 'index']);
Route::get('/about-me', [ShowWebController::class, 'about']);
Route::get('/skills', [ShowWebController::class, 'skills']);
Route::get('/appreciation', [ShowWebController::class, 'appreciation']);
Route::get('/project', [ShowWebController::class, 'project']);
Route::get('/project/{id}', [ProjectController::class, 'show']);
Route::get('/contact', [ShowWebController::class, 'contact']);
Route::get('/download', [ConfigurasiController::class, 'downloadCv']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('skill', SkilController::class);
    Route::post('skill/{id}', [SkilController::class, 'update']);
    Route::resource('projects', ProjectController::class);
    Route::resource('penghargaan', PenghargaanController::class);
    Route::resource('message', MessageController::class);
    Route::resource('configurasi', ConfigurasiController::class);
});

require __DIR__.'/auth.php';
