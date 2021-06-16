<?php
use App\Http\Controllers\KnygomatasController;
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

Route::get('/', [KnygomatasController::class, 'index'])->name('index');
Route::resource('knygomatas', KnygomatasController::class);
Route::get('valdymas', [KnygomatasController::class, 'show'])->name('show');
Route::get('changeStatus', [KnygomatasController::class, 'ChangeUserStatus'])->name('ChangeUserStatus');

