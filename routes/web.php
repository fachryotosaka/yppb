<?php

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




Auth::routes();
Route::get('/', [App\Http\Controllers\LandingPage\LandingPageController::class, 'index'])->name('home.index');
Route::get('/gallery', [App\Http\Controllers\LandingPage\LandingPageController::class, 'gallery'])->name('home.gallery');
Route::get('/about', [App\Http\Controllers\LandingPage\LandingPageController::class, 'about'])->name('home.about');
Route::get('/contact', [App\Http\Controllers\LandingPage\LandingPageController::class, 'contact'])->name('home.contact');
Route::get('/program', [App\Http\Controllers\LandingPage\LandingPageController::class, 'program'])->name('home.program');
Route::get('/program/{slug}', [App\Http\Controllers\LandingPage\LandingPageController::class, 'single'])->name('home.single');

Route::get('/lembaga', [App\Http\Controllers\LandingPage\LandingPageController::class, 'lembaga'])->name('home.lembaga');
Route::get('/legalitas', [App\Http\Controllers\LandingPage\LandingPageController::class, 'legal'])->name('home.legal');
Route::get('/kepengurusan', [App\Http\Controllers\LandingPage\LandingPageController::class, 'management'])->name('home.management');

Route::post('/subscribe', [App\Http\Controllers\NewsLetterController::class, 'subscribe'])->name('subscribe');

// Dashboard
Route::group(['middleware' => ['auth', 'is_admin']], function(){

    // Dashboard
    Route::get('/dashboard', [App\Http\Controllers\Dashboard\Dashboard::class, 'index'])->name('dashboard.index');

    // Activity
    Route::get('/dashboard/activity/table', [App\Http\Controllers\Dashboard\ActivityController::class, 'index'])->name('table.activity');
    Route::get('/dashboard/activity/create', [App\Http\Controllers\Dashboard\ActivityController::class, 'create'])->name('create.activity');
    Route::get('/dashboard/activity/store-image', [App\Http\Controllers\Dashboard\ActivityController::class, 'storeImage'])->name('storeImages');
    Route::post('/dashboard/activity/store-data', [App\Http\Controllers\Dashboard\ActivityController::class, 'store'])->name('activity.store');
    Route::get('/dashboard/activity/edit/{slug}', [App\Http\Controllers\Dashboard\ActivityController::class, 'edit'])->name('activity.edit');
    Route::put('/dashboard/activity/update-data/{id}', [App\Http\Controllers\Dashboard\ActivityController::class, 'update'])->name('activity.update');
    Route::delete('/dashboard/activity/delete-data/{id}', [App\Http\Controllers\Dashboard\ActivityController::class, 'destroy'])->name('activity.delete');
    Route::get('/dashboard/activity/trash-data', [App\Http\Controllers\Dashboard\ActivityController::class, 'trash'])->name('activity.trash');
    Route::get('/dashboard/activity/restore-data/{id}', [App\Http\Controllers\Dashboard\ActivityController::class, 'restore'])->name('activity.restore');
    Route::delete('/dashboard/activity/force-data/{id}', [App\Http\Controllers\Dashboard\ActivityController::class, 'force'])->name('activity.force');

    //
    Route::get('/dashboard/category/table', [App\Http\Controllers\Dashboard\CategoryController::class, 'index'])->name('table.category');
    Route::get('/dashboard/category/create', [App\Http\Controllers\Dashboard\CategoryController::class, 'create'])->name('create.category');
    Route::get('/dashboard/category/store-image', [App\Http\Controllers\Dashboard\CategoryController::class, 'storeImage'])->name('storeImages');
    Route::post('/dashboard/category/store-data', [App\Http\Controllers\Dashboard\CategoryController::class, 'store'])->name('category.store');
    Route::get('/dashboard/category/edit/{slug}', [App\Http\Controllers\Dashboard\CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/dashboard/category/update-data/{id}', [App\Http\Controllers\Dashboard\CategoryController::class, 'update'])->name('category.update');
    Route::delete('/dashboard/category/delete-data/{id}', [App\Http\Controllers\Dashboard\CategoryController::class, 'destroy'])->name('category.delete');
    Route::get('/dashboard/category/trash-data', [App\Http\Controllers\Dashboard\CategoryController::class, 'trash'])->name('category.trash');
    Route::get('/dashboard/category/restore-data/{id}', [App\Http\Controllers\Dashboard\CategoryController::class, 'restore'])->name('category.restore');
    Route::get('/dashboard/category/force-data/{id}', [App\Http\Controllers\Dashboard\CategoryController::class, 'force'])->name('category.force');
    //
    Route::get('/dashboard/publisher/table', [App\Http\Controllers\Dashboard\PublisherController::class, 'index'])->name('table.publisher');
    Route::get('/dashboard/publisher/create', [App\Http\Controllers\Dashboard\PublisherController::class, 'create'])->name('create.publisher');
    Route::get('/dashboard/publisher/store-image', [App\Http\Controllers\Dashboard\PublisherController::class, 'storeImage'])->name('storeImages');
    Route::post('/dashboard/publisher/store-data', [App\Http\Controllers\Dashboard\PublisherController::class, 'store'])->name('publisher.store');
    Route::get('/dashboard/publisher/edit/{slug}', [App\Http\Controllers\Dashboard\PublisherController::class, 'edit'])->name('publisher.edit');
    Route::put('/dashboard/publisher/update-data/{id}', [App\Http\Controllers\Dashboard\PublisherController::class, 'update'])->name('publisher.update');
    Route::delete('/dashboard/publisher/delete-data/{id}', [App\Http\Controllers\Dashboard\PublisherController::class, 'destroy'])->name('publisher.delete');
    Route::get('/dashboard/publisher/trash-data', [App\Http\Controllers\Dashboard\PublisherController::class, 'trash'])->name('publisher.trash');
    Route::get('/dashboard/publisher/restore-data/{id}', [App\Http\Controllers\Dashboard\PublisherController::class, 'restore'])->name('publisher.restore');
    Route::get('/dashboard/publisher/force-data/{id}', [App\Http\Controllers\Dashboard\PublisherController::class, 'force'])->name('publisher.force');
    //
    Route::get('/dashboard/payment/table', [App\Http\Controllers\Dashboard\PaymentMController::class, 'index'])->name('table.payment');
    Route::get('/dashboard/payment/create', [App\Http\Controllers\Dashboard\PaymentMController::class, 'create'])->name('create.payment');
    Route::get('/dashboard/payment/store-image', [App\Http\Controllers\Dashboard\PaymentMController::class, 'storeImage'])->name('storeImages');
    Route::post('/dashboard/payment/store-data', [App\Http\Controllers\Dashboard\PaymentMController::class, 'store'])->name('payment.store');
    Route::get('/dashboard/payment/edit/{slug}', [App\Http\Controllers\Dashboard\PaymentMController::class, 'edit'])->name('payment.edit');
    Route::put('/dashboard/payment/update-data/{id}', [App\Http\Controllers\Dashboard\PaymentMController::class, 'update'])->name('payment.update');
    Route::delete('/dashboard/payment/delete-data/{id}', [App\Http\Controllers\Dashboard\PaymentMController::class, 'destroy'])->name('payment.delete');
    Route::get('/dashboard/payment/trash-data', [App\Http\Controllers\Dashboard\PaymentMController::class, 'trash'])->name('payment.trash');
    Route::get('/dashboard/payment/restore-data/{id}', [App\Http\Controllers\Dashboard\PaymentMController::class, 'restore'])->name('payment.restore');
    Route::get('/dashboard/payment/force-data/{id}', [App\Http\Controllers\Dashboard\PaymentMController::class, 'force'])->name('payment.force');
    //
    Route::get('/dashboard/tag/table', [App\Http\Controllers\Dashboard\TagController::class, 'index'])->name('table.tag');
    Route::get('/dashboard/tag/create', [App\Http\Controllers\Dashboard\TagController::class, 'create'])->name('create.tag');
    Route::get('/dashboard/tag/store-image', [App\Http\Controllers\Dashboard\TagController::class, 'storeImage'])->name('storeImages');
    Route::post('/dashboard/tag/store-data', [App\Http\Controllers\Dashboard\TagController::class, 'store'])->name('tag.store');
    Route::get('/dashboard/tag/edit/{slug}', [App\Http\Controllers\Dashboard\TagController::class, 'edit'])->name('tag.edit');
    Route::put('/dashboard/tag/update-data/{id}', [App\Http\Controllers\Dashboard\TagController::class, 'update'])->name('tag.update');
    Route::delete('/dashboard/tag/delete-data/{id}', [App\Http\Controllers\Dashboard\TagController::class, 'destroy'])->name('tag.delete');
    Route::get('/dashboard/tag/trash-data', [App\Http\Controllers\Dashboard\TagController::class, 'trash'])->name('tag.trash');
    Route::get('/dashboard/tag/restore-data/{id}', [App\Http\Controllers\Dashboard\TagController::class, 'restore'])->name('tag.restore');
    Route::get('/dashboard/tag/force-data/{id}', [App\Http\Controllers\Dashboard\TagController::class, 'force'])->name('tag.force');
    //
    Route::get('/dashboard/gallery/table', [App\Http\Controllers\Dashboard\GalleryController::class, 'index'])->name('table.gallery');
    Route::get('/dashboard/gallery/create', [App\Http\Controllers\Dashboard\GalleryController::class, 'create'])->name('create.gallery');
    Route::get('/dashboard/gallery/store-image', [App\Http\Controllers\Dashboard\GalleryController::class, 'storeImage'])->name('storeImages');
    Route::post('/dashboard/gallery/store-data', [App\Http\Controllers\Dashboard\GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/dashboard/gallery/edit/{id}', [App\Http\Controllers\Dashboard\GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/dashboard/gallery/update-data/{id}', [App\Http\Controllers\Dashboard\GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/dashboard/gallery/delete-data/{id}', [App\Http\Controllers\Dashboard\GalleryController::class, 'destroy'])->name('gallery.delete');
    Route::get('/dashboard/gallery/trash-data', [App\Http\Controllers\Dashboard\GalleryController::class, 'trash'])->name('gallery.trash');
    Route::get('/dashboard/gallery/restore-data/{id}', [App\Http\Controllers\Dashboard\GalleryController::class, 'restore'])->name('gallery.restore');
    Route::get('/dashboard/gallery/force-data/{id}', [App\Http\Controllers\Dashboard\GalleryController::class, 'force'])->name('gallery.force');
    //
    Route::get('/dashboard/message/table', [App\Http\Controllers\Dashboard\MessageController::class, 'index'])->name('message.index');
    Route::post('/dashboard/message/store-data', [App\Http\Controllers\Dashboard\MessageController::class, 'store'])->name('message.store');
});

