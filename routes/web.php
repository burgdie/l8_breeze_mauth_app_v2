<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessController;
// namespace defined in Providers\RouteServiceProvider controller namespace
use Admin\UserController;


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
    return view('construction');
});


// Verification access from construction page

Route::post('/main', [AccessController::class, 'access'])->name('access');

//Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('/users',UserController::class);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
