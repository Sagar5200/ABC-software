<?php

use App\Http\Controllers\CarinfoController;
use App\Http\Controllers\ConfirmationDetailController;
use App\Http\Controllers\SearchCarController;
use App\Http\Controllers\CustomerInfoController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TermAgreementController;
use App\Http\Controllers\DataConnectionController;
use App\Http\Controllers\PurchaseTermsAgreementController;
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
    return view('welcome');
});


Route::get('/search', [SearchCarController::class, 'search']);   

Route::get('/master', function(){
    return view('master');
});

Route::get('/customerinfo', [CustomerInfoController::class, 'customerinfo']);

Route::get('/carinfo', [CarinfoController::class, 'carinfo']);

Route::get('/paymentinfo', [PaymentController::class, 'paymentinfo']);

Route::get('/termsagreement', [TermAgreementController::class, 'termsagreement']);

// Route::get('/review', [ReviewController::class, 'review']);

// Route::get('/confirm', [ConfirmationDetailController::class, 'confirmdetail']);
Route::get('/purchaseterms', [PurchaseTermsAgreementController::class, 'purchasetermsagreement']);

// data retrive field
Route::get('/reviewdata', [DataConnectionController::class, 'show']);


//end here 
Route::get('/cusindex',[DataConnectionController::class, 'index']);

Route::post('/store',[DataConnectionController::class, 'store'])->name('store');
Route::post('/carstore',[DataConnectionController::class, 'carstore'])->name('carstore');
Route::post('/cartradestore',[DataConnectionController::class, 'cartradestore'])->name('cartradestore');

Route::post('/payment',[DataConnectionController::class, 'paymentstore'])->name('payment');

Route::post('/review',[DataConnectionController::class, 'termsstore'])->name('termsagree');

