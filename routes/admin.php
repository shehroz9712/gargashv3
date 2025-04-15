<?php


use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ServiceRequestController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', action: [BlogController::class, 'index'])->name('dashboard');

    Route::get('service_requests', [ServiceRequestController::class, 'index'])->name('service_requests.index');
    Route::get('service_requests/detail/{id}', [ServiceRequestController::class, 'show'])->name('service_requests.show');
    Route::resource('blogs', BlogController::class);
    Route::resource('users', AdminController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('brands', BrandController::class);
});
