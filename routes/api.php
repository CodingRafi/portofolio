<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkilController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ConfigurasiController;
use App\Http\Controllers\PenghargaanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/message', [MessageController::class, 'store']);
Route::get('/get-skills', [SkilController::class, 'get_api']);
Route::get('/get-achivement', [PenghargaanController::class, 'get_achivement']);
Route::get('/get-all-achivement', [PenghargaanController::class, 'get_all_achivement']);
Route::get('/get-sertifikat', [PenghargaanController::class, 'get_sertifikat']);
Route::get('/get-all-sertifikat', [PenghargaanController::class, 'get_all_sertifikat']);
Route::get('/get-projects', [ProjectController::class, 'get_project']);
Route::get('/get-all-projects', [ProjectController::class, 'get_all_projects']);
Route::get('/skill/{id}', [SkilController::class, 'show']);
Route::get('/get_configurasi', [ConfigurasiController::class, 'get_configurasi']);
