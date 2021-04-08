<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

Route::get('/', function () {
    $blogs = Blog::where('status', '=', true)->orderBy('likes', 'desc')->take(5)->get();
    return view('index', ['blogs' => $blogs]);
})->name('index');
Auth::routes();
Route::get('/profile', [HomeController::class, 'index'])->middleware('restrict')->name('profile');
Route::resource('/blog', BlogController::class);

Route::resource('/admin', AdminController::class)->middleware('adminAuth')->only(['index', 'update']);
