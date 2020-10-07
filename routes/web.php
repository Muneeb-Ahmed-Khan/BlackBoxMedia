<?php

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

Route::get('/', 'PagesController@index');
Route::get('/index', 'PagesController@index');





Route::namespace('Auth')->group(function(){

    /* Reset Password Routes */
    //For checking out multi-Auth Password reset : https://ysk-override.com/Multi-Auth-in-laravel-54-Reset-Password-20170205/
    Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

    Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');




    /* Verification Routes */
    Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');
    Route::get('email/resend/{role}/{email}', 'VerificationController@resend')->name('verification.resend');

    /*LOGIN / Regsiter  Routes */
    Route::get('/login', 'LoginController@showLoginForm');
    Route::post('/login', 'LoginController@LoginLogic');

    Route::post('/register', 'RegisterController@RegisterLogic');
    Route::get('/register', 'RegisterController@showRegisterForm');

    
    Route::get('/login/admin', 'LoginController@showLoginFormAdmin');

    Route::post('/register/admin', 'RegisterController@RegisterLogicAdmin');
    Route::get('/register/admin', 'RegisterController@showRegisterFormAdmin');

    /*LOGOUT  Routes */
    Route::post('/logout','LoginController@logout');
});





/*Only User can use it. any authorized/unauthorized person that uses it will be redirected to Authenticate.php Middleware
and it will return it to the ReturnToUnauthorizedPage route and that will redirect it accoring to it's gurad */
Route::group(['middleware' => ['auth:user','verified']], function () {
    Route::get('/user', 'UserController@Dashboard');
});





































Route::get('/unauthorized', function($request, $guard = null)
{
    if (Auth::guard('company')->check()) {
        return redirect('/company');
    }
    elseif (Auth::guard('admin')->check()) {
        return redirect('/admin');
    }
    elseif (Auth::guard('user')->check()) {
        return redirect('/user');
    }
    else
    {
        return redirect('/');
    }
})->name('ReturnToUnauthorizedPage');




//used to delete the cache stored when redirect with data from some function.
header('Cache-Control: no-store, private, no-cache, must-revalidate'); header('Cache-Control: pre-check=0, post-check=0, max-age=0, max-stale = 0', false);
header('Pragma: public');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
header('Expires: 0', false);
header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
header ('Pragma: no-cache');
