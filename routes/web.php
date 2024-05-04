<?php

use App\Http\Controllers\HomepageController;
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
})->name("welcome");
Route::get('/home', [HomepageController:: class, 'goToHomePage']);
Route::get('/index', [HomepageController:: class, 'goToIndexPage']);
Route::get('/aboutUs', [HomepageController:: class, 'goToAboutUsPage'])->name("aboutUs");
Route::get('/register', [HomepageController:: class, 'goToRegisterPage'])->name("register");
