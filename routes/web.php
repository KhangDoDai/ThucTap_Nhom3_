<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Client\AccountController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\ChangePasswordContronller;
use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\Client\CourseController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\Page\PayController;
use App\Http\Controllers\Client\Sidebar\AccountinfoController;
use App\Http\Controllers\Client\Sidebar\NotificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;


Route::get(
    '/',
    [HomeController::class, 'trangchu']
)->name('home');

Route::get(
    '/login',
    [AccountController::class, 'login']
)->name('login');

Route::get('/Pay', [PayController::class,'Pay']);
Route::get('/Info', [AccountinfoController::class,'Info']);
Route::get('/notify', [NotificationController::class,'notify']);

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::get('/course', [CourseController::class, 'course'])->name('course');

Route::get('/comment', [CommentController::class, 'comment'])->name('comment');

Route::get('/change-password', [ChangePasswordContronller::class, 'changepassword'])->name('changepassword');

Route::get(
    '/admin',
    [AdminHomeController::class, 'trangchu']
)->name('admin');

Route::get('/admin/book', [BookController::class, 'listBook'])->name("book.list");
Route::get('/api/admin/book/{id}', [BookController::class, 'getBook']);
Route::put('/api/admin/book/{id}', [BookController::class, 'update']);
Route::post('/admin/book', [BookController::class, 'create'])->name("book.create");
Route::delete('/admin/book/{id}', [BookController::class, 'delete'])->name("book.delete");
Route::get('/admin/dashboard',[DashboardController::class, 'dashboard']) ->name('dashboard');


