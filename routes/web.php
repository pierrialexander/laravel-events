<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->name('create');
Route::post('/events', [EventController::class, 'store'])->name('store');


Route::get('/contact', function () {
    return view('contact');
});
