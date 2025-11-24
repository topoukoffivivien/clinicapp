<?php

use App\Http\Controllers\SetupController;
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

Route::prefix('setup')->name('setup.')->controller(SetupController::class)->group(base_path('routes/customs/setup.php'));
