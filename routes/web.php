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

Route::get('/check-mail-host', function () {
    return config('mail.mailers.smtp.host'); // Should return 'mail.gargashauto.ae'
});
Route::get('/quick-mail', function () {
    Mail::raw('This is a quick test email', function ($message) {
        $message->to('your_email@example.com')
                ->subject('Quick Test Email');
    });

    return 'Quick mail sent!';
});

// Route for home page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route for about page
Route::get('/about', [HomeController::class, 'about'])->name('about-us');


Route::get('/body-shop', [HomeController::class, 'shop'])->name('shop');





// Route for contact page
Route::get('/contract', [HomeController::class, 'contract'])->name('contract');
Route::get('/promotions', [HomeController::class, 'promotions'])->name('promotions');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/submit_enquiry', [HomeController::class, 'submit_enquiry'])->name('submit_enquiry');
Route::post('/submit_contact', [HomeController::class, 'submit_contact'])->name('submit_contact');

// Route for services page
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services/{slug}', [HomeController::class, 'service_detail'])->name('servicesDetail');
// Route for brands page
Route::get('/brands', [HomeController::class, 'brands'])->name('brands');

Route::get('/brand/{slug}', [HomeController::class, 'brand_detail'])->name('brandDetail');


// Route for blog page
Route::get('/blogs', [HomeController::class, 'blog'])->name('blogs');
Route::get('/search/blogs', [HomeController::class, 'search'])->name('blog.search');

// Route for blog single page
Route::get('/blog/{slug}', [HomeController::class, 'blog_detail'])->name('blog.detail');

// Route for shop page


Route::get('/pickup', [HomeController::class, 'pickup'])->name('pickup');
Route::get('/inspection', [HomeController::class, 'inspection'])->name('inspection');
Route::get('/job', [HomeController::class, 'job'])->name('job');
Route::get('/delivery', [HomeController::class, 'delivery'])->name('delivery');
Route::get('/services', [HomeController::class, 'services'])->name('services');
