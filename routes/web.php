<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('home.index');
});*/
Route::get('/', [HomeController::class, 'login'])->name('auth.login');
Route::get('/register', [HomeController::class, 'register'])->name('auth.register');
Route::post('/show_login', [HomeController::class, 'show_login'])->name('show_login');

Route::post('/show_register', [HomeController::class, 'show_register']);
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware('auth')->controller(HomeController::class)->group(function(){
Route::get('/admin', 'admin')->name('home.admin');
Route::get('/add',  'add')->name('home.add');
Route::post('/store',  'store');
Route::get('/delete/{id}', 'delete');
Route::get('delete_all', 'delete_all');
Route::get('/agree/{id}',  'agree');
Route::get('/disagree/{id}', 'disagree');
Route::get('/edit/{id}',  'edit');
Route::post('/update/{id}', 'update');
//Route::get('/print/{id}', [HomeController::class, 'print']);
Route::get('/meet', 'meet')->name('home.meet');
Route::post('/store_meet',  'store_meet');
Route::get('/show_meet',  'show_meet')->name('home.show_meet');
Route::get('/qarar',  'qarar')->name('home.qarar');
Route::post('/store_qarar', 'store_qarar');
Route::get('/show_qarar',  'show_qarar')->name('home.show_qarar');
Route::get('/approve/{id}',  'approve');
Route::get('/picture', 'picture')->name('home.picture');
Route::post('/store_image',  'store_image');
Route::get('/show_pic', 'show_pic')->name('home.show_pic');
Route::get('/show', 'show')->name('home.show');

});

