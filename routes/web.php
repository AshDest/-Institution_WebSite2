<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin_home');
Route::get('/posts', [App\Http\Controllers\AdminController::class, 'posts'])->name('posts');
Route::get('/posts/add', [App\Http\Controllers\AdminController::class, 'addpost'])->name('addpost');
Route::get('/posts/edit/{ids}', [App\Http\Controllers\AdminController::class, 'editpost'])->name('editpost');

Route::get('/option', [App\Http\Controllers\AdminController::class, 'option'])->name('option');
Route::get('/option/add', [App\Http\Controllers\AdminController::class, 'addoption'])->name('addoption');
Route::get('/option/edit/{ids}', [App\Http\Controllers\AdminController::class, 'editoption'])->name('editoption');

Route::get('/images-slides', [App\Http\Controllers\AdminController::class, 'slides'])->name('slide');

Route::get('/news', [App\Http\Controllers\AdminController::class, 'news'])->name('news');
Route::get('/new/add', [App\Http\Controllers\AdminController::class, 'addnew'])->name('addnew');
Route::get('/news/edit/{ids}', [App\Http\Controllers\AdminController::class, 'editnew'])->name('editnew');

Route::get('/fillieres', [App\Http\Controllers\AdminController::class, 'fillieres'])->name('fillieres');
Route::get('/filliere/add', [App\Http\Controllers\AdminController::class, 'addfilliere'])->name('addfilliere');
Route::get('/filliere/edit/{ids}', [App\Http\Controllers\AdminController::class, 'editfilliere'])->name('editfilliere');

Route::get('/events', [App\Http\Controllers\AdminController::class, 'events'])->name('events');
Route::get('/event/add', [App\Http\Controllers\AdminController::class, 'addevent'])->name('addevent');
Route::get('/event/edit/{ids}', [App\Http\Controllers\AdminController::class, 'editevent'])->name('editevent');

Route::get('/citations', [App\Http\Controllers\AdminController::class, 'citation'])->name('citation');