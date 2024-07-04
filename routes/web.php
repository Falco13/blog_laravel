<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('contact/submit', [ContactController::class, 'submit'])->name('contact-form');

Route::get('contact/all', [ContactController::class, 'all_contacts'])->name('all_contacts');
Route::get('contact/{id}', [ContactController::class, 'detail_message'])->name('detail_message');
Route::get('contact/{id}/update', [ContactController::class, 'update_message'])->name('update_message');
Route::post('contact/{id}/update', [ContactController::class, 'update_message_submit'])->name('update_message_submit');
