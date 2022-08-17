<?php

namespace App\Http\Controllers;
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

Route::get('/main', function () {
    return view('admin-dashboard.layouts.master');
});

Route::redirect('/','login');
Route::resource('skills','App\Http\Controllers\SkillController')->except(['create','show']);
Route::controller(UserController::class)->group(function(){
    Route::get('home','home')->name('home');
    Route::get('logout','logout')->name('logout');
    Route::get('login','login')->name('login.index');
    Route::post('login','login')->name('login.store');
    Route::get('register','register')->name('register.index');
    Route::post('register','register')->name('register.store');
    Route::get('users','index')->name('users.index');
});
