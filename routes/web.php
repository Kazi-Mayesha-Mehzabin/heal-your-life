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
    return view('index'); // Replace 'index' with your landing page view file name
})->name('index');
Route::get('/home', [HomepageController:: class, 'goToHomePage']);
Route::get('/loginUser', [HomepageController:: class, 'goToLoginPage'])->name("loginUser");
Route::get('/myDashboard', [HomepageController:: class, 'goToDashboardPage'])->name("myDashboard");
Route::get('/contactUs', [HomepageController:: class, 'goToContactPage'])->name("contactUs");
Route::get('/index', [HomepageController:: class, 'goToIndexPage']);
Route::get('/aboutUs', [HomepageController:: class, 'goToAboutUsPage'])->name("aboutUs");
Route::get('/register', [HomepageController:: class, 'goToRegisterPage'])->name("register");
Route::get('/login', [HomepageController:: class, 'goToLoginPage'])->name("login");
Route::get('/upload', [HomepageController:: class, 'goToUploadPage'])->name("upload");
