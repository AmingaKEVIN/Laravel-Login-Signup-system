<?php

use App\Http\Controllers\NimbleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\CustomerLoginController;
use App\Http\Controllers\PasswordResetController;

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
    return view('login');
})->name('login');


// Route::get('/signup', function () {
//     return view('signup');
// });

Route::resource('signup', SignupController::class);

// Route::post('/retreivedata', [NimbleController::class, 'postSignUp']);


Route::get('/login/admin', [AdminController::class, 'login'])->name('login.admin');
Route::post('/signup/custom-method', [SignupController::class, 'postSignUp']);
Route::get('customer/login', [CustomerLoginController::class, 'showLoginForm'])->name('customer.login');
Route::post('customer/login', [CustomerLoginController::class, 'login'])->name('customer.login.submit');
Route::get('customer/logout', [CustomerLoginController::class, 'logout'])->name('customer.logout');
Route::get('/failed', function(){
    return "Loginfaild";
})->name('failed.login');


Route::get('/resetpassword',[PasswordResetController::class, 'index'])->name('passwordreset');
Route::post('/resetpassword',[PasswordResetController::class, 'fgt'])->name('passwordresetpass');
Route::get('/resetpassword/{token}',[PasswordResetController::class, 'reset'])->name('password.email');
Route::post('/rstpassword',[PasswordResetController::class, 'postemail'])->name('passwordresetemail');
Route::middleware('admin.access')->group(function () {
    Route::get('/login/admin', [AdminController::class, 'login'])->name('login.admin');
});



