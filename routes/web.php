<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);

	Route::get('business', function () { return view('business'); })->name('business');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
    //Mis pantallas user_permissions
    //Route::get('dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('business', [MenuController::class, 'get_modules_bussines'])->name('dashboard');
    //Route::get('access-user-groups', [MenuController::class, 'get_modules_bussines'])->name('access-user-groups');
    Route::get('access-create-users', [MenuController::class, 'getAccess'])->name('access-create-users');
    Route::get('access-user-groups', [MenuController::class, 'user_groups'])->name('access-user-groups');
    Route::get('access-permissions', [MenuController::class, 'user_permissions'])->name('access-permissions');
    Route::get('access-users', [MenuController::class, 'user_get'])->name('access-users');
    Route::get('user-profile', [MenuController::class, 'get_modules_bussines'])->name('dashboard');
    Route::get('demo', [MenuController::class, 'getDemo'])->name('demo');
    Route::post('/save_data_business',   [RegisterController::class, 'save_data_business']);
    Route::post('/save_data_roll', [RegisterController::class, 'save_data_roll']);
    Route::post('/edit_data_roll', [RegisterController::class, 'edit_data_roll']);

});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');

Route::get('/get/submodueles/{id}', [HomeController::class, 'getSubmodules']);
Route::get('/get/submodueles/roll/{id_roll}', [HomeController::class, 'getSubmodulesOfRoll']);

Route::post('/get/demo', [HomeController::class, 'demodemo']);

Route::post('/save_data_roll_demo', [RegisterController::class, 'save_data_roll']);
Route::post('delete_roll', [HomeController::class, 'deleteRoll']);
Route::get('get_roll/{id}', [HomeController::class, 'getRoll']);
