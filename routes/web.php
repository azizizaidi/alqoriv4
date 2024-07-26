<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Form;
use App\Http\Controllers\PaymentController;

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



   //toyyibpay

   Route::middleware(['web'])->group(function () {
    Route::get('fee-student/toyyibpay/createbill/{pay}', 'App\Http\Controllers\PaymentController@createBill')->name('toyyibpay.createBill');
    Route::get('fee-student/toyyibpay/paymentstatus/{record}', 'App\Http\Controllers\PaymentController@paymentStatus')->name('toyyibpay.paymentstatus');
    Route::post('fee-student/toyyibpay/callback', 'App\Http\Controllers\PaymentController@callback')->name('toyyibpay.callback');
});
