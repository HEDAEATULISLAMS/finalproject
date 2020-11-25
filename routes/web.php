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
    return view('pages.index');
});

Route::get('/about','PagesController@aboutus');
Route::get('/contact','PagesController@contactus');
Auth::routes();

Route::get('/home','HomeController@index')->name('home');
Route::get('admin/home', 'AdminController@index');
Route::get('admin','Admin\LoginController@ShowLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');


Route::get('seeker/login','SeekerController@seekerlogin');
Route::post('seeker/login_suh','SeekerController@login_se')->name('seeker.login');

Route::get('seeker/signup','SeekerController@seekerregister');
Route::post('seeker/register','SeekerController@store')->name('store.seeker');

Route::get('seeker/dashboard','SeekerController@seeker');



// Route::get('/', function () {
//     return view('website.pages.index');});

// Route::get('about', function () {
//     return view('website.pages.about');});

// Route::get('services', function () {
//     return view('website.pages.services');});

// Route::get('contact', function () {
//     return view('website.pages.contact');});
//admin

Route::get('admin/dashboard', function () {
    return view('admin.pages.dashboard');});

Route::get('admin/tables', function () {
    return view('admin.pages.tables');
});

Route::get('admin/login', function () {
    return view('admin.pages.login');
});

Route::get('admin/registration', function () {
    return view('admin.pages.registration');
});


/// Employer
Route::get('employer/dashboard', function () {
    return view('employer.pages.dashboard');});

Route::get('employer/tables', function () {
    return view('employer.pages.tables');
});

Route::get('employer/login', function () {
    return view('employer.pages.login');
});

Route::get('employer/registration', function () {
    return view('employer.pages.registration');
});

