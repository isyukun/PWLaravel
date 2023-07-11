<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;

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

Route::get('/laravel', function () {
    return view('welcome');
});

/*Route::get('/', function () {
    return view('books.index');
});*/

Route::resource('books', bookController::class);

//Route::get('/create', [bookController::class])->name('create');

//Route::resource('users', UserController::class);

Route::resource('members', MemberController::class);
