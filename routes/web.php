<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

// Divide the  page between employee and admin
Route::get('/dashboard', function () {
    if(Auth::id()){
        $role = Auth()->user()->role;
        if($role == 'employee'){
            return view('dashboard');
        }
        else if($role == 'admin'){
            return view('home');
        }
    }
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});

require __DIR__.'/auth.php';
