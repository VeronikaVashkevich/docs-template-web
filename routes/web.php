<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DocsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/', [IndexController::class, 'index'])->name('index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/templates/{template}', [IndexController::class, 'templates'])->name('templates');
    Route::get('/create/form-1', [DocsController::class, 'createForm1'])->name('createForm1');
    Route::post('/save-form-1', [DocsController::class, 'addForm1'])->name('addForm1');
    Route::get('/create/marriage-contract', [DocsController::class, 'createMarriageContract'])->name('createMarriageContract');
    Route::post('/save-marriage-contract', [DocsController::class, 'addMarriageContract'])->name('addMarriageContract');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
