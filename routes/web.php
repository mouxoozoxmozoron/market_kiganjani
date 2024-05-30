<?php

use App\Http\Controllers\auth\auth_controller;
use App\Http\Controllers\chat\chats_controller;
use App\Http\Controllers\items\item_controller;
use App\Http\Controllers\management\management_controller;
use App\Http\Controllers\user\user_controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [item_controller::class, 'home'])->name('home');
Route::get('/item_details/{id}', [item_controller::class, 'item_details'])->name('item_details');


Route::get('register', [auth_controller::class, 'register_screen_request']);
Route::get('login', [auth_controller::class, 'login_screen_request']);

Route::get('exit', function () {
    if (session()->has('user_id')) {
        session()->pull('user_id');
        session()->pull('user_object');
        return redirect('/');
    }
});

//logic routes
Route::POST('new_item_check', [item_controller::class, 'create'])->name('new_item_check');
Route::POST('register_check', [user_controller::class, 'registration'])->name('register_check');
Route::POST('login_check', [user_controller::class, 'login'])->name('login_check');
Route::POST('chat_check', [chats_controller::class, 'create'])->name('chat_check');

//chat_check
Route::get('dashboard', [management_controller::class, 'user_dashboardscreen_request'])->name('dashboard.home');
Route::get('dashboard/create_item', [management_controller::class, 'create_new_item'])->name('dashboard.create_item');
