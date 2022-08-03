<?php

use App\Http\Controllers\Search\SearchController;
use App\Http\Controllers\Task\CreateController;
use App\Http\Controllers\Task\DestroyController;
use App\Http\Controllers\Task\EditController;
use App\Http\Controllers\Task\IndexController;
use App\Http\Controllers\Task\ShowController;
use App\Http\Controllers\Task\StoreController;
use App\Http\Controllers\Task\UpdateController;
use Faker\Calculator\TCNo;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', IndexController::class)->name('tasks.index');
Route::get('/tasks/create', CreateController::class)->name('tasks.create');
Route::post('/tasks', StoreController::class)->name('tasks.store');
Route::get('/tasks/{task}', ShowController::class)->name('tasks.show');
Route::get('/tasks/{task}/edit', EditController::class)->name('tasks.edit');
Route::patch('/tasks/{task}', UpdateController::class)->name('tasks.update');
Route::delete('/tasks/{task}', DestroyController::class)->name('tasks.destroy');

Route::get('/search', SearchController::class)->name('tasks.search');