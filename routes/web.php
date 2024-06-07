<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReparationController;
use App\Http\Controllers\PiecesRechangeController;
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
Route::resource('mechanics', 'App\Http\Controllers\MecanicienController');


<<<<<<< HEAD
Route::controller(UserController::class)->group(function(){
    Route::get('users', 'index');
    Route::get('users-export', 'export')->name('users.export');
    Route::post('users-import', 'import')->name('users.import');
});


Route::resource('reparations', ReparationController::class);

Route::resource('clients', ClientController::class);


Route::get('/vehicules', [VehiculeController::class, 'index'])->name('vehicule.index');
Route::get('/vehicules/create', [VehiculeController::class, 'create'])->name('vehicule.create');
Route::post('/vehicules', [VehiculeController::class, 'store'])->name('vehicule.store');
Route::get('/vehicules/{vehicule}/edit', [VehiculeController::class, 'edit'])->name('vehicule.edit');
Route::put('/vehicules/{vehicule}', [VehiculeController::class, 'update'])->name('vehicule.update');
Route::delete('/vehicules/{vehicule}', [VehiculeController::class, 'destroy'])->name('vehicule.destroy');

Route::get('/dashboard', function () {
    return view('aside.dashboard');
})->name('dashboard');




//rechnage 
Route::get('/rechange', [PiecesRechangeController::class, 'index'])->name('rechange.index');
Route::resource('pieces-rechange', PiecesRechangeController::class);
Route::put('/pieces-rechange/{piecesRechange}', [PiecesRechangeController::class, 'update'])->name('rechange.update');


//login 
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('aside.dashboard');
    })->name('dashboard');

    Route::middleware('admin')->group(function () {
        Route::get('/users/create', [UserController::class, 'create']);
        Route::post('/users', [UserController::class, 'store']);
=======


Route::get('/', function () {
    return view('login');
});



Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::resource('clients', ClientController::class);
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
>>>>>>> eeedc205a40a5ebed69ce52162a1d28c0885d139
    });
});