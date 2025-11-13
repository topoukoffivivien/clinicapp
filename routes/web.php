<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Welcome', [
        'username' => 'Vivien'
    ]);
});

Route::get('/auth', function () {
    return inertia('Welcome', [
        'username' => 'Vivien'
    ]);
})->name('auth.login');

Route::get('/setup', function () {
    return inertia('Welcome', [
        'username' => 'Vivien'
    ]);
})->name('setup.index');
