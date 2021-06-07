<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HatStoryController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect']
], function()
{
    Route::get('/', function () {
        return view('website.home');
    })->name('home');

    Route::get('/hats', [WebsiteController::class, 'hatoverview'])->name('hatoverview');

    Route::get('/hatstory/{id}', [WebsiteController::class, 'hatStory'])->name('hatStory');
    Route::post('/hatstory/{id}', [WebsiteController::class, 'hatStoryContact'])->name('hatStoryContact');

    Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');

    Route::get('/about', [WebsiteController::class, 'about'])->name('about');
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::group(['auth:sanctum', 'verified'], function () {
    Route::resource('hatstories', HatStoryController::class);

    Route::get('hatstories-hidden', [HatStoryController::class, 'hidden'])->name('hidden');

    Route::patch('hatstories/{id}/hide', [HatStoryController::class, 'hide'])->name('hatstories.hide');
    Route::patch('hatstories/{id}/show', [HatStoryController::class, 'showing'])->name('hatstories.showing');

    Route::post('/forgot-password', [Controller::class, 'resetUserPassword'])->name('password.email');

    Route::get('/reset-request-sent', [Controller::class, 'resetRequestSent'])->name('password.reset-request-sent');

    Route::get('/resend-resent-request', [Controller::class, 'resendRequest'])->name('password.resend-request');

    Route::get('/reset-password/{token}', [Controller::class, 'createNewPassword'])->name('password.reset');

    Route::post('/reset-password', [Controller::class, 'setNewPassword'])->name('password.update');
});
