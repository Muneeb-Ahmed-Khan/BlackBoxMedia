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
Route::get('/mobileIndex', 'PagesController@mobileIndex');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/copyright', 'PagesController@copyright');
Route::get('/dmca', 'PagesController@dmca');
Route::get('/faq', 'PagesController@faq');
Route::get('/register', 'PagesController@register');
Route::get('/terms', 'PagesController@terms');










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
