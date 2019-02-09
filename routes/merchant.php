<?php
Route::group(['namespace' => 'Merchant'], function() {
    Route::get('/', 'HomeController@index')->name('merchant.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('merchant.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('merchant.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('merchant.register');
    Route::post('register', 'Auth\RegisterController@register');
    Route::post('merchant/register','Auth\RegisterController@store')->name('merchant.registers');
    Route::get('merchant/editprofile/{id}','Auth\RegisterController@editprofile')->name('merchant.editprofile');

    // Route::post('merchant/register','Auth\RegisterController@edit')->name('merchant.editprofile');


    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('merchant.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('merchant.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('merchant.password.reset');
   
    //For ADDING POSTS(ADVERTISEMENT)
    Route::resource('/post','PostController');
    Route::get('merchant/changepassword/{id}','PasswordController@index')->name('merchant.passwordchange.request');
    Route::post('merchant/changepassword/{id}','PasswordController@store')->name('merchant.passwordchange.reset');
});