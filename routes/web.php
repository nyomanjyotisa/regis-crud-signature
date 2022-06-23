<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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

Route::get('/', [RegistrationController::class, 'index']);
Route::get('/new', [RegistrationController::class, 'create']);
Route::post('/new', [RegistrationController::class, 'store']);
Route::get('/{id}', [RegistrationController::class, 'show']);
Route::get('/{id}/edit', [RegistrationController::class, 'edit']);
Route::post('/{id}/edit', [RegistrationController::class, 'update']);
Route::get('/{id}/delete', [RegistrationController::class, 'destroy']);
