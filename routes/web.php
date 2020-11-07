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

<<<<<<< HEAD

// Route::resource('customer', App\Http\Controllers\CustomerController::class);
=======
//*************dashboard***************/
>>>>>>> vishal

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');


<<<<<<< HEAD
Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');

Route::post('/customer/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');

// Route::get('/customer/{customer}', [App\Http\Controllers\CustomerController::class, 'show'])->name('customer.show');

Route::get('/customer/{customer}/edit', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');

Route::patch('/customer/{customer}/update', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');

Route::get('/customer/{customer}/destroy', [App\Http\Controllers\CustomerController::class, 'destory'])->name('customer.destroy');

=======
//*************Customers***************/

Route::get('/customerList', [App\Http\Controllers\CustomerController::class, 'customerList'])->name('customerList');
>>>>>>> vishal

Route::get('/edit_customer', [App\Http\Controllers\CustomerController::class, 'edit_customer'])->name('edit_customer');


//*************Stocks***************/

Route::get('/stockList', [App\Http\Controllers\StockController::class, 'stockList'])->name('stockList');

Route::get('/edit_stock', [App\Http\Controllers\StockController::class, 'edit_stock'])->name('edit_stock');



//*************Employees***************/

Route::get('/employeeList', [App\Http\Controllers\EmployeeController::class, 'employeeList'])->name('employeeList');

Route::get('/edit_employee', [App\Http\Controllers\EmployeeController::class, 'edit_employee'])->name('edit_employee');



//*************Roles***************/

Route::get('/roleList', [App\Http\Controllers\RoleController::class, 'roleList'])->name('roleList');

Route::get('/edit_role', [App\Http\Controllers\RoleController::class, 'edit_role'])->name('edit_role');


//*************Branches***************/

Route::get('/branchList', [App\Http\Controllers\branchController::class, 'branchList'])->name('branchList');

Route::get('/edit_branch', [App\Http\Controllers\branchController::class, 'edit_branch'])->name('edit_branch');


//*************Products***************/

Route::get('/productList', [App\Http\Controllers\productController::class, 'productList'])->name('productList');

Route::get('/edit_product', [App\Http\Controllers\productController::class, 'edit_product'])->name('edit_product');


//*************Franchisees***************/

Route::get('/franchiseeList', [App\Http\Controllers\FranchiseeController::class, 'franchiseeList'])->name('franchiseeList');

Route::get('/edit_franchisee', [App\Http\Controllers\FranchiseeController::class, 'edit_franchisee'])->name('edit_franchisee');


//*************Categories***************/

Route::get('/categoryList', [App\Http\Controllers\CategoryController::class, 'categoryList'])->name('categoryList');

<<<<<<< HEAD
Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');

Route::get('/category/{category}/destroy', [App\Http\Controllers\CategoryController::class, 'destory'])->name('category.destroy');
=======
Route::get('/edit_category', [App\Http\Controllers\CategoryController::class, 'edit_category'])->name('edit_category');
>>>>>>> vishal
