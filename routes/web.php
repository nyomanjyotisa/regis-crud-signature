<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [RegistrationController::class, 'index'])->name('home')->middleware('auth');
Route::redirect('/', '/login');
Route::get('/new', [RegistrationController::class, 'create'])->middleware('auth');
Route::post('/new', [RegistrationController::class, 'store'])->middleware('auth');
Route::get('/{id}/show', [RegistrationController::class, 'show'])->middleware('auth');
Route::get('/{id}/edit', [RegistrationController::class, 'edit'])->middleware('auth');
Route::post('/{id}/edit', [RegistrationController::class, 'update'])->middleware('auth');
Route::get('/{id}/delete', [RegistrationController::class, 'destroy'])->middleware('auth');

Route::resource('admin', AdminController::class)->middleware('auth')->middleware('is_super_admin');
Route::post('/admin/store', [AdminController::class, 'store'])->middleware('auth')->middleware('is_super_admin');
Route::post('/admin/{id}/edit', [AdminController::class, 'update'])->middleware('auth')->middleware('is_super_admin');
Route::get('/admin/{id}/delete', [AdminController::class, 'destroy'])->middleware('auth')->middleware('is_super_admin');
Route::view('/sign', 'sign');

Auth::routes(['register' => false]);
