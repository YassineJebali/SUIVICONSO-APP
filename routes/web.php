<?php

use App\Http\Controllers\LoginUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;

//use App\Http\Controllers\ApiAuthController;

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

Route::resource('regions', RegionController::class);

Route::resource('users', UserController::class);

Route::get('/register', [RegisterUserController::class, 'register'])->name('register');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');
Route::get('/login', [LoginUserController::class, 'login'])->name('login');
Route::post('/login', [LoginUserController::class, 'store'])->name('login.store');

Route::post('/login', [App\Http\Controllers\ApiAuthController::class, 'generateToken']);

Route::resource('invoices', InvoiceController::class);

Route::get('/administration', [AdminController::class, 'index'])->name('administration');

Route::resource('locals', LocalController::class);

Route::resource('counters', CounterController::class);

Route::resource('roles', RoleController::class);

Route::resource('permissions', PermissionController::class);