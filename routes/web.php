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


// Route::resource('customer', App\Http\Controllers\CustomerController::class);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');


Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');

Route::post('/customer/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');

// Route::get('/customer/{customer}', [App\Http\Controllers\CustomerController::class, 'show'])->name('customer.show');

Route::get('/customer/{customer}/edit', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');

Route::patch('/customer/{customer}/update', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');

Route::get('/customer/{customer}/destroy', [App\Http\Controllers\CustomerController::class, 'destory'])->name('customer.destroy');



Route::get('/stockList', [App\Http\Controllers\StockController::class, 'stockList'])->name('stockList');


Route::get('/employeeList', [App\Http\Controllers\EmployeeController::class, 'employeeList'])->name('employeeList');


Route::get('/userList', [App\Http\Controllers\UserController::class, 'userList'])->name('userList');


Route::get('/groupList', [App\Http\Controllers\groupController::class, 'groupList'])->name('groupList');


Route::get('/branchList', [App\Http\Controllers\branchController::class, 'branchList'])->name('branchList');


Route::get('/productList', [App\Http\Controllers\productController::class, 'productList'])->name('productList');


Route::get('/add_franchisee', [App\Http\Controllers\FranchiseeController::class, 'add_franchisee'])->name('add_franchisee');


Route::get('/franchiseeList', [App\Http\Controllers\FranchiseeController::class, 'franchiseeList'])->name('franchiseeList');


Route::get('/edit_franchisee', [App\Http\Controllers\FranchiseeController::class, 'edit_franchisee'])->name('edit_franchisee');


Route::get('/categoryList', [App\Http\Controllers\CategoryController::class, 'categoryList'])->name('categoryList');

Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');

Route::get('/category/{category}/destroy', [App\Http\Controllers\CategoryController::class, 'destory'])->name('category.destroy');
