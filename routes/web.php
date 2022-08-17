<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
Route::get('/main', function () {
    return view('admin-dashboard.layouts.master');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
// Route::get('skills', function () {
//     return view('admin-dashboard.skill-manage.index');
// });
// Route::get('skills/create', function () {
//     return view('admin-dashboard.skill-manage.create');
// });
Route::get('users', function () {
    return view('admin-dashboard.users-manage.index');
});
Route::resource('skills','App\Http\Controllers\SkillController');
Route::resource('users','App\Http\Controllers\UserController');