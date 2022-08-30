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
use App\Http\Controllers\TitleController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutsController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactController;

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
Route::resource('/abouts', AboutsController::class);
Route::resource('/properties', PropertiesController::class);
Route::resource('/blogs', BlogsController::class);
Route::resource('/contact', ContactController::class);

Route::get('/email', [EmailController::class, 'index']);

Route::resource('dashboard', DashboardController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication'])->name('authentication');
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('about', AboutController::class)->middleware('admin');
Route::resource('category', CategoryController::class)->middleware('admin');
Route::resource('slider', SliderController::class)->middleware('admin');
Route::resource('testimonial', TestimonialController::class)->middleware('admin');
Route::resource('title', TitleController::class)->middleware('admin');

Route::resource('blog', BlogController::class)->middleware('auth');
Route::resource('property', PropertyController::class)->middleware('auth');

Route::resource('config', ConfigController::class)->middleware('superadmin');
Route::resource('user', UserController::class)->middleware('superadmin');

Route::delete('/selected-slider', [SliderController::class, 'deleteCheckedSlider'])->name('slider.deleteSelected');
Route::delete('/selected-property', [PropertyController::class, 'deleteCheckedProperty'])->name('property.deleteSelected');
Route::delete('/selected-testimonial', [TestimonialController::class, 'deleteCheckedTestimonial'])->name('testimonial.deleteSelected');
Route::delete('/selected-blog', [BlogController::class, 'deleteCheckedBlog'])->name('blog.deleteSelected');
Route::delete('/selected-category', [CategoryController::class, 'deleteCheckedCategory'])->name('category.deleteSelected');
Route::delete('/selected-user', [UserController::class, 'deleteCheckedUser'])->name('user.deleteSelected');
