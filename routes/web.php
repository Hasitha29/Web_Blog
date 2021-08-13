<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\postcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [welcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/posts/store',[postcontroller::class, 'store'])->name('post.store');
Route::get('/posts/{postId}show',[postcontroller::class, 'show'])->name('post.show');
Route::get('/post/all',[HomeController::class, 'allpost'])->name('post.all');
Route::get('/post/{postId}/edit', [postcontroller::class, 'edit'])->name('post.edit');
Route::post('/post/{postId}/update', [postcontroller::class, 'update'])->name('post.update');
Route::get('/post/{postId}/delete', [postcontroller::class, 'delete'])->name('post.delete');

//admin
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('admin')->name('post.admin');
