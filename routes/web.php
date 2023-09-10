<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\User\CheckoutController;

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
    return view('welcome');
})->name('welcome');


Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout.create');
Route::post('checkout/{camp}', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('sign-in-google', [UserControler::class, 'google'])->name('sign-in-google');
Route::get('auth/google/callback', [UserControler::class, 'handleProviderCallback'])->name('user.google.callback');

Route::middleware(['auth'])->group(function (){
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
