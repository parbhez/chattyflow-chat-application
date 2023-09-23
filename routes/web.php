<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\RequestedNumberController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/roles', [PermissionController::class,'Permission']);





Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/add', [ContactController::class, 'create'])->name('contacts.create');


    Route::get('/numbers', [NumberController::class, 'index'])->name('numbers.index');
    Route::get('/buy-number', [NumberController::class, 'search'])->name('numbers.search');
    Route::get('/api/search-phone-numbers', [NumberController::class, 'searchPhoneNumbers'])->name('numbers.searchPhoneNumbers');
    Route::get('/api/initial-phone-numbers', [NumberController::class, 'getInitialPhoneNumbers'])->name('numbers.getInitialPhoneNumbers');


    Route::get('/search-number', [NumberController::class, 'searchNumber'])->name('numbers.searchNumber');

    

    Route::get('/get-number', [RequestedNumberController::class, 'showNumber']);


    

    Route::get('/multi-step-form', [RequestedNumberController::class, 'showMultiStepForm']);
    Route::get('/fetch-number', [RequestedNumberController::class, 'fetchNumber']);

    Route::post('/multi-step-submit-form', [RequestedNumberController::class, 'submitMultiStepForm']);






    // Route::get('/Multistep', [RequestedNumberController::class, 'create'])->name('RequestedNumbers.create');
    // Route::post('/Multistep', [RequestedNumberController::class, 'store'])->name('RequestedNumbers.store');



    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');




});

require __DIR__.'/auth.php';
