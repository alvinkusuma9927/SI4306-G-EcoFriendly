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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// Route::get('/scan','App\Http\Controllers\Scan@scanSR');
Route::get('/scan', function () {
    return view('scan');
});

Route::get('/atm-idcard', 'ATM@idcard');

Route::post('/idcardPost', 'ATM@idcardPost');

Route::get('/wallet', function () {
    return view('wallet');
});

Route::get('/atm-balance', function () {
    return view('ATM.balance');
});

Route::get('/atm-idsalah', function () {
    return view('ATM.IDSalah');
});

Route::get('/atm-idload', function () {
    return view('ATM.IDLoad');
});

// Route::get('/atm-idcard', function () {
//     return view('ATM.IDCard');
// });

Route::get('/atm-idcard', [ATMController::class, 'idcard']);

// Route::post('/idcardPost', [ATMController::class, 'idcardPost']);

Route::post('/idcardPost', [ATMController::class, 'idcardPost']);

Route::get('/atm-logout', function () {
    return view('ATM.logoutPage');
});