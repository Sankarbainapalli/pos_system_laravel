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

//*************dashboard***************/

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');


//*************Roles***************/

Route::get('/roleList', [App\Http\Controllers\RoleController::class, 'roleList'])->name('roleList');

Route::get('/edit_role', [App\Http\Controllers\RoleController::class, 'edit_role'])->name('edit_role');


//*************Employees***************/

Route::get('/employeeList', [App\Http\Controllers\EmployeeController::class, 'employeeList'])->name('employeeList');

Route::get('/edit_employee', [App\Http\Controllers\EmployeeController::class, 'edit_employee'])->name('edit_employee');


//*************Accounts***************/

Route::get('/accountList', [App\Http\Controllers\AccountController::class, 'accountList'])->name('accountList');

Route::get('/edit', [App\Http\Controllers\AccountController::class, 'edit'])->name('edit');



//*************Customers***************/

Route::get('/customerList', [App\Http\Controllers\CustomerController::class, 'customerList'])->name('customerList');

Route::get('/edit_customer', [App\Http\Controllers\CustomerController::class, 'edit_customer'])->name('edit_customer');


//*************Stocks***************/

Route::get('/stockList', [App\Http\Controllers\StockController::class, 'stockList'])->name('stockList');

Route::get('/edit_stock', [App\Http\Controllers\StockController::class, 'edit_stock'])->name('edit_stock');


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

Route::get('/edit_category', [App\Http\Controllers\CategoryController::class, 'edit_category'])->name('edit_category');


//*************Profit & Loss***************/

Route::get('/profitloss', [App\Http\Controllers\ProfitlossController::class, 'profitloss'])->name('profitloss');

// Route::get('/edit_category', [App\Http\Controllers\ProfitlossController::class, 'edit_category'])->name('edit_category');


//*************Live Amount***************/

Route::resource('liveamount', App\Http\Controllers\LiveAmountController::class);

// Route::get('/edit_category', [App\Http\Controllers\ProfitlossController::class, 'edit_category'])->name('edit_category');


//************* POS ***************/

Route::resource('pos', App\Http\Controllers\PosController::class);

// Route::get('/edit_category', [App\Http\Controllers\ProfitlossController::class, 'edit_category'])->name('edit_category');
