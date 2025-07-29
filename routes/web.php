<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // In a real app, you would handle authentication here.
    // For now, we simulate the guest user from index.php.
    if (!session()->has('user')) {
        session(['user' => [
            'id' => 'guest_' . uniqid(),
            'name' => 'anonymous cat',
            'email' => 'guest@cat-ai.com',
            'role' => 'user',
            'isGuest' => true
        ]]);
    }
    return view('pages.chat');
})->name('chat');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/management', function () {
    return view('pages.management');
})->name('management');
