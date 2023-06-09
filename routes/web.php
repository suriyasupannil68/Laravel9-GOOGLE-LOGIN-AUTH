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

//**   **/

Route::get('/', function () {   // ตั่งค่าให้หน้าแรกคือหน้า home.blade.php
    return view('home');
})->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home'); //

//**  * */
Route::get('/navbar', function () {
    return view('navbar');
})->name('navbar');
//**  * */

Route::get('/detail', function () {
    return view('detail');
})->name('detail');   
//**  * */

Route::get('/login', function () {
    return view('login');
})->name('login');   
//**  * */


Route::get('/register', function () {
    return view('register');
})->name('register');   
//**  * */
