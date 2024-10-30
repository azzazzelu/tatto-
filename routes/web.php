<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
    return view('home.home');
})->name('home');

Route::get('/promoCodes' , function(){
    return view('promoCodes.index');
})->name('promoCodes');

Route::get('/contacts' , function(){
    return view('contacts.index');
})->name('contacts');

Route::middleware('guest')->group(function () {
    Route::get('/register', [UserController::class, 'create'])->name('register');
    Route::post('/register', [UserController::class, 'store'])->name('user.store');
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'loginAuth'])->name('login.auth');

    // Route::get('/forgot-password', function () {
    //     return view('user.forgot-password');
    // })->name('password.request');

    // Route::post('/forgot-password', [UserController::class, 'forgotPasswordStore'])->middleware('throttle:3,1')->name('password.email');

    // Route::get('/reset-password/{token}', function (string $token) {
    //     return view('user.reset-password', ['token' => $token]);
    // })->name('password.reset');

    // Route::post('/reset-password', [UserController::class, 'resetPasswordUpdate'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/verify', function () {
        return view('user.verify-email');
    })->name('verification.notice');

    // Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    //     $request->fulfill();

    //     return redirect('dashboard');
    // })->middleware('signed')->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Ссылка для подтверждения отправлена!');
    })->middleware('throttle:3,1')->name('verification.send');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});