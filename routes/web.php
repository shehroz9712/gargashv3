<?php

use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     dd('Hello World');
// });


// Route for home page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route for about page
Route::get('/about', [HomeController::class, 'about'])->name('about');


Route::get('/general-repair', [HomeController::class, 'repair'])->name('repair');
Route::get('/body-shop', [HomeController::class, 'shop'])->name('shop');





// Route for contact page
Route::get('/contract', [HomeController::class, 'contract'])->name('contract');
Route::get('/promotions', [HomeController::class, 'promotions'])->name('promotions');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/service/request', [HomeController::class, 'contact'])->name('service-request');

// Route for services page
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services/{slug}', [HomeController::class, 'service_detail'])->name('servicesDetail');

// Route for blog page
Route::get('/blogs', [HomeController::class, 'blog'])->name('blogs');
Route::get('/search/blogs', [HomeController::class, 'search'])->name('blog.search');

// Route for blog single page
Route::get('/blog/{id}', [HomeController::class, 'blog_detail'])->name('blog.detail');

// Route for shop page


Route::get('/pickup', [HomeController::class, 'pickup'])->name('pickup');
Route::get('/inspection', [HomeController::class, 'inspection'])->name('inspection');
Route::get('/job', [HomeController::class, 'job'])->name('job');
Route::get('/delivery', [HomeController::class, 'delivery'])->name('delivery');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::post('/submit_enquiry', [HomeController::class, 'submit_enquiry'])->name('submit_enquiry');
Route::post('/submit_contact', [HomeController::class, 'submit_contact'])->name('submit_contact');
