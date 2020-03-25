<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Authentication routes...
Route::prefix('auth')->group(function () {
    Route::get('/', function(){ return redirect()->route('login'); });
    Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
    Route::get('resetpass', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::get('resetpass/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
    Route::post('login', 'Auth\LoginController@login')->name('login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm')->name('password.confirm');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::post('resetpass', 'Auth\ResetPasswordController@reset')->name('password.update');
    // Registration routes.
    Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('signup', 'Auth\RegisterController@register')->name('register');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
