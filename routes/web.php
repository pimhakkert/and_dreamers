<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HatStoryController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;

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

Route::get('/', function () {
    return view('website.home');
});

Route::get('/hatstory/{id}', [WebsiteController::class, 'hatstory'])->name('hatstory');

Route::get('/hats', [WebsiteController::class, 'hatoverview'])->name('hatstories');

Route::get('/hat/{id}', [WebsiteController::class, 'hatStory'])->name('hatStory');
Route::post('/hat/{id}', [WebsiteController::class, 'hatStoryContact'])->name('hatStoryContact');

Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::group(['auth:sanctum', 'verified'], function () {
    Route::resource('hatstories', HatStoryController::class);
    Route::get('hatstories-hidden', [HatStoryController::class, 'hidden'])
        ->name('hidden');

    Route::post('/forgot-password', [Controller::class, 'resetUserPassword'])
        ->name('password.email');

    Route::get('/reset-request-sent', [Controller::class, 'resetRequestSent'])
        ->name('password.reset-request-sent');

    Route::get('/resend-resent-request', [Controller::class, 'resendRequest'])
         ->name('password.resend-request');

    Route::get('/reset-password/{token}', [Controller::class, 'createNewPassword'])
        ->name('password.reset');

    Route::post('/reset-password', [Controller::class, 'setNewPassword'])
        ->name('password.update');
});

