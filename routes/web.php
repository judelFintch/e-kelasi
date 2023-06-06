<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Livewire\RolesUser\RolesUser;
use App\Http\Livewire\Dashboard\Dashboard;
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
Route::get('/', [MainController::class, 'index'])->name('main.login');


Auth::routes();

Route::get('/home',Dashboard::class)->name('home');
Route::get('/roles_user',RolesUser::class)->name('userroles.index');


