<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', function () {
    return view('web.index');
});

// Route::get('/web.dashboard.admin.customer.customers', [CustomerController::class,'index']);

//general
Route::get('/index', function () {
    return view('web.index');
});

Route::get('/start', function () {
    return view('web.start');
});

Route::get('/about', function () {
    return view('web.about');
});

Route::get('/explore', function () {
    return view('web.explore');
});

Route::get('/viewmore', function () {
    return view('web.viewmore');
});

Route::get('/blog', function () {
    return view('web.blog');
});

Route::get('/form', function () {
    return view('web.form');
});

Route::get('/loginAdmin', function () {
    return view('web.login.loginAdmin');
});

Route::get('/loginCustomer', function () {
    return view('web.login.loginCustomer');
});

Route::get('/signUpAdmin', function () {
    return view('web.login.signUpAdmin');
});

Route::get('/signUpCustomer', function () {
    return view('web.login.signUpCustomer');
});

//admin
Route::get('/dashboardAdmin', function () {
    return view('web.dashboard.admin.dashboard');
});

Route::get('/web.dashboard.admin.customer.customers', function () {
    return view('web.dashboard.admin.customer.customers');
});

Route::get('/transaksi', function () {
    return view('web.dashboard.admin.transaksi.transaksi');
});

Route::get('/driver', function () {
    return view('web.dashboard.admin.driver.driver');
});

Route::get('/cars', function () {
    return view('web.dashboard.admin.cars.cars');
});

Route::get('/feedback', function () {
    return view('web.dashboard.admin.feedback');
});

Route::get('/account', function () {
    return view('web.dashboard.admin.account');
});

Route::get('/privacy', function () {
    return view('web.dashboard.admin.privacy');
});

Route::get('/help', function () {
    return view('web.dashboard.admin.help');
});

Route::get('/settings', function () {
    return view('web.dashboard.admin.settings');
});

// Route::get('/web.dashboard.admin.transaksi.transaksi', [CustomerController::class,'transaksi']);

//route page customers dashboard in admin
Route::get('/web.dashboard.admin.customer.tambahcustomer', [CustomerController::class,'tcustomer']);
Route::post('/web.dashboard.admin.customer.tambahcustomer', [CustomerController::class,'scustomer']);
Route::get('/web.dashboard.admin.customer.customers', [CustomerController::class,'back']);
Route::get('/web.dashboard.admin.customer.customers/{id}/delete', [CustomerController::class,'dcustomer']);
Route::get('/web.dashboard.admin.customer.customers/{id}/edit', [CustomerController::class,'ucustomer']);
Route::post('/web.dashboard.admin.customer.editcust', [CustomerController::class,'ecustomer']);



//dashboard Customer
Route::get('/dashboardCust', function () {
    return view('web.dashboard.customer.dashboard');
});

Route::get('/biodata', function () {
    return view('web.dashboard.customer.biodata.biodata');
});

Route::get('/riwayat', function () {
    return view('web.dashboard.customer.riwayat');
});

Route::get('/settingsCust', function () {
    return view('web.dashboard.customer.settings');
});

Route::get('/transaksiCust', function () {
    return view('web.dashboard.customer.transaksi');
});

Route::get('/chat', function () {
    return view('web.dashboard.customer.chat');
});

