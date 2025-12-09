<?php

use App\Http\Controllers\Site\indexController;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/Home', [indexController::class,'home_action'])-> name('Home');
Route::get('/contant', [indexController::class,'contant_action'])-> name('contant');

Route::get('/about', [indexController::class,'about_action'])->name('about');
Route::get('/contact_us', [indexController::class,'contact_us_action'])->name('contact_as');
Route::get('/newaccount', [indexController::class,'newaccount_action'])->name('newaccount');
Route::get('/login', [indexController::class,'login_action'])->name('login');
Route::get('/password_reset', [indexController::class,'password_reset_action'])->name('password_reset');
Route::post('/create-account', [AccountController::class, 'create_account'])->name('create_account');
Route::post('/login',[AccountController::class, 'login'])->name('login');
Route::post('/password_reset', [AccountController::class,'password_reset'])->name('password_reset');
// Route::post('/password_reset', [AccountController::class, 'password_reset'])->name('password_reset');
