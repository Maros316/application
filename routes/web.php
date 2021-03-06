<?php

Route::get('/', function () {
    return redirect()->route('login');
    //return view('pages.dashboard');
    //testing autodeploy
});

/*
 * Auth routes
 * */

Route::group(['middleware' => 'guest', 'namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showLoginForm');
    Route::post('login', 'LoginController@login')->name('login');

    Route::get('register', 'RegisterController@showRegistrationForm');
    Route::post('register', 'RegisterController@register')->name('register');

    Route::get('verify/{token}', 'RegisterController@verifyUser')->name('account.verify');
    Route::get('resend/{email}', 'RegisterController@resendVerificationEmail')->name('account.resend.verification.email');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/', 'DashboardController@index')->name('dashboard');
});
