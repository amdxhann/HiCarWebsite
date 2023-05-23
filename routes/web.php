<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\TransactionController;

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

//GENERAL
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


//LOGIN n SIGNUP
Route::get('/loginAdmin', function () {
    return view('web.login.loginAdmin');
});

Route::get('/web.login.signUpAdmin', function () {
    return view('web.login.signUpAdmin');
});

Route::post('/web.login.loginAdmin',[LoginController::class,'checkLogin']);
Route::post('/web.login.signUpAdmin',[RegisterController::class,'registerAdmin']);

Route::get('/loginCustomer', function () {
    return view('web.login.loginCustomer');
});

Route::get('/web.login.signUpCustomer', function () {
    return view('web.login.signUpCustomer');
});




// ADMIN
Route::get('/dashboardAdmin', function () {
    return view('web.dashboard.admin.dashboard');
});

Route::get('/web.dashboard.admin.customer.customers', function () {
    return view('web.dashboard.admin.customer.customers');
});

Route::get('/web.dashboard.admin.transaksi.transaksi', function () {
    return view('web.dashboard.admin.transaksi.transaksi');
});

Route::get('/web.dashboard.admin.driver.driver', function () {
    return view('web.dashboard.admin.driver.driver');
});

Route::get('/web.dashboard.admin.cars.cars', function () {
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

Route::get('/web.dashboard.admin.transaksi.tambahtransaksi', [TransactionController::class,'ttransaction']);
Route::post('/web.dashboard.admin.transaksi.tambahtransaksi', [TransactionController::class,'stransaction']);
Route::get('/web.dashboard.admin.transaksi.transaksi', [TransactionController::class,'back']);
Route::get('/web.dashboard.admin.transaksi.transaksi/{id}/delete', [TransactionController::class,'dtransaction']);
Route::get('/web.dashboard.admin.transaksi.transaksi/{id}/edit', [TransactionController::class,'utransaction']);
Route::post('/web.dashboard.admin.transaksi.edittransaksi', [TransactionController::class,'etransaction']);

Route::get('/web.dashboard.admin.driver.tambahdriver', [DriverController::class,'tdriver']);
Route::post('/web.dashboard.admin.driver.tambahdriver', [DriverController::class,'sdriver']);
Route::get('/web.dashboard.admin.driver.driver', [DriverController::class,'back']);
Route::get('/web.dashboard.admin.driver.driver/{id}/delete', [DriverController::class,'ddriver']);
Route::get('/web.dashboard.admin.driver.driver/{id}/edit', [DriverController::class,'udriver']);
Route::post('/web.dashboard.admin.driver.editdriver', [DriverController::class,'edriver']);

Route::get('/web.dashboard.admin.cars.tambahcars', [CarsController::class,'tcars']);
Route::post('/web.dashboard.admin.cars.tambahcars', [CarsController::class,'scars']);
Route::get('/web.dashboard.admin.cars.cars', [CarsController::class,'back']);
Route::get('/web.dashboard.admin.cars.cars/{id}/delete', [CarsController::class,'dcars']);
Route::get('/web.dashboard.admin.cars.cars/{id}/edit', [CarsController::class,'ucars']);
Route::post('/web.dashboard.admin.cars.editcars', [CarsController::class,'ecars']);


// Route::get('/web.login.signUpCustomer', [CustomerController::class,'createcustomer']);
// Route::post('/web.login.signUpCustomer', [CustomerController::class,'createcustomer']);
// Route::get('/web.dashboard.admin.customer.customers', [CustomerController::class,'back']);
// Route::post('/web.dashboard.admin.customer.editcust', [CustomerController::class,'ecustomer']);


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

Route::get('/web.dashboard.admin.biodata.tambahbio', [BiodataController::class,'tbiodata']);
Route::post('/web.dashboard.admin.biodata.tambahbio', [BiodataController::class,'sbiodata']);
Route::get('/web.dashboard.admin.biodata.biodata', [BiodataController::class,'back']);
Route::get('/web.dashboard.admin.biodata.biodata/{id}/delete', [BiodataController::class,'dbiodata']);
Route::get('/web.dashboard.admin.biodata.biodata/{id}/edit', [BiodataController::class,'ubiodata']);
Route::post('/web.dashboard.admin.biodata.editbio', [BiodataController::class,'ebiodata']);

