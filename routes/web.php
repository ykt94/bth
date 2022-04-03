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
    return view('splash');
});


Route::resource('products', App\Http\Controllers\ProductController::class,)->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('email-test', function(){
//
//    $details['email'] = 'alpt@mail.ru';
//
//    dispatch(new App\Jobs\SendEmailJob($details));
//
//    dd('done');
//});
