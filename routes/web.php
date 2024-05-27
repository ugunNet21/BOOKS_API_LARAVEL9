<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerCategoryController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\LayananCategoryController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\MySkillController;
use App\Http\Controllers\Admin\PortfolioCategoryController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Models\PortfolioCategory;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// dashboard
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('abouts', AboutController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('banner_categories', BannerCategoryController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('skills', MySkillController::class);
    Route::resource('footers', FooterController::class);
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('portfolios_categries', PortfolioCategoryController::class);
    Route::resource('layanans', LayananController::class);
    Route::resource('layanans_categories', LayananCategoryController::class);
    Route::resource('testimonials', TestimonialController::class);
    // admin contact
    Route::get('/contacts', [ContactUsController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/create', [ContactUsController::class, 'create'])->name('contacts.create');
    Route::post('/contacts', [ContactUsController::class, 'store'])->name('contacts.store');
    Route::get('/contacts/{contactUs}', [ContactUsController::class, 'show'])->name('contacts.show');
    Route::delete('/contacts/{contactUs}', [ContactUsController::class, 'destroy'])->name('contacts.destroy');
});

Route::get('/', [FrontendController::class, 'index'])->name('beranda');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact.us');
Route::post('/send-contact-us', [FrontendController::class, 'storeContactUs'])->name('send-contact.us');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/get-api', [FrontendController::class, 'getApi'])->name('get-api');
Route::get('/get-testimonial', [FrontendController::class, 'testimonial'])->name('get-testimonial');

// Route::get('/',[HomeController::class, 'index']);
