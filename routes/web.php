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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');


Route::get('/customerList', [App\Http\Controllers\CustomerController::class, 'customerList'])->name('customerList');


Route::get('/stockList', [App\Http\Controllers\StockController::class, 'stockList'])->name('stockList');


Route::get('/employeeList', [App\Http\Controllers\EmployeeController::class, 'employeeList'])->name('employeeList');


Route::get('/userList', [App\Http\Controllers\UserController::class, 'userList'])->name('userList');


Route::get('/groupList', [App\Http\Controllers\groupController::class, 'groupList'])->name('groupList');


Route::get('/branchList', [App\Http\Controllers\branchController::class, 'branchList'])->name('branchList');
