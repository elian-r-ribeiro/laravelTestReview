<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ContactsList', [ContactController::class, 'index']);
Route::post('/ContactsList/newContact', [ContactController::class, 'newContact']) -> name('contact.store');
Route::put('/ContactsList/updateContact', [ContactController::class, 'updateContact']) -> name('contact.update');