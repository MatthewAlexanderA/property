<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Logout;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\AboutController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\EmailController;

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

Route::resource('/', HomeController::class);

Route::get('/email', [EmailController::class, 'index']);

Route::resource('dashboard', DashboardController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication'])->name('authentication');
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('about', AboutController::class)->middleware('auth');

Route::resource('blog', BlogController::class)->middleware('auth');
Route::resource('category', CategoryController::class)->middleware('auth');
Route::resource('config', ConfigController::class)->middleware('auth');
Route::resource('property', PropertyController::class)->middleware('auth');
Route::resource('slider', SliderController::class)->middleware('auth');
Route::resource('testimonial', TestimonialController::class)->middleware('auth');

Route::delete('/selected-slider', [SliderController::class, 'deleteCheckedSlider'])->name('slider.deleteSelected');
Route::delete('/selected-property', [PropertyController::class, 'deleteCheckedProperty'])->name('property.deleteSelected');
Route::delete('/selected-testimonial', [TestimonialController::class, 'deleteCheckedTestimonial'])->name('testimonial.deleteSelected');
Route::delete('/selected-blog', [BlogController::class, 'deleteCheckedBlog'])->name('blog.deleteSelected');
Route::delete('/selected-category', [CategoryController::class, 'deleteCheckedCategory'])->name('category.deleteSelected');