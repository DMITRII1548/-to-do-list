<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Search\SearchController;
use Faker\Calculator\TCNo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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
Route::get('/', [HomeController::class, 'index'])->name('auth');

Route::group(['namespace' => 'App\Http\Controllers\Task', 'middleware' => 'user'], function() {
    Route::get('/tasks', 'IndexController')->name('tasks.index');
    Route::get('/tasks/create', 'CreateController')->name('tasks.create');
    Route::post('/tasks', 'StoreController')->name('tasks.store');
    Route::get('/tasks/{task}', 'ShowController')->name('tasks.show');
    Route::get('/tasks/{task}/edit', 'EditController')->name('tasks.edit');
    Route::patch('/tasks/{task}', 'UpdateController')->name('tasks.update');
    Route::delete('/tasks/{task}', 'DestroyController')->name('tasks.destroy');
});

Route::get('/search', SearchController::class)->name('tasks.search');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
