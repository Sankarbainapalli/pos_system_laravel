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
    return view('admin.dashboard');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::resource('customer', App\Http\Controllers\CustomerController::class);

//*************dashboard***************/

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');


Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');

Route::post('/customer/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');

// Route::get('/customer/{customer}', [App\Http\Controllers\CustomerController::class, 'show'])->name('customer.show');

Route::get('/customer/{customer}/edit', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');

Route::patch('/customer/{customer}/update', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');

Route::get('/customer/{customer}/destroy', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.destroy');


//*************Stocks***************/

Route::get('/stockList', [App\Http\Controllers\StockController::class, 'stockList'])->name('stockList');

Route::get('/edit_stock', [App\Http\Controllers\StockController::class, 'edit_stock'])->name('edit_stock');



//*************Employees***************/

Route::get('/employeeList', [App\Http\Controllers\EmployeeController::class, 'employeeList'])->name('employeeList');

Route::get('/edit_employee', [App\Http\Controllers\EmployeeController::class, 'edit_employee'])->name('edit_employee');

Route::get('/user/{user}/destroy', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('user.destroy');



//*************Roles***************/

Route::get('/roleList', [App\Http\Controllers\RoleController::class, 'roleList'])->name('roleList');

Route::post('/role/store', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store');

Route::get('/role/{role}/edit', [App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit');

Route::patch('/role/{role}/update', [App\Http\Controllers\RoleController::class, 'update'])->name('role.update');

Route::get('/role/{role}/destroy', [App\Http\Controllers\RoleController::class, 'destroy'])->name('role.destroy');


// Route::get('/edit_role', [App\Http\Controllers\RoleController::class, 'edit_role'])->name('edit_role');


//*************Branches***************/

Route::get('/branchList', [App\Http\Controllers\BranchController::class, 'branchList'])->name('branchList');

Route::post('/branch/store', [App\Http\Controllers\BranchController::class, 'store'])->name('branch.store');

Route::get('/branch/{branch}/edit', [App\Http\Controllers\BranchController::class, 'edit'])->name('branch.edit');

Route::patch('/branch/{branch}/update', [App\Http\Controllers\BranchController::class, 'update'])->name('branch.update');

Route::get('/branch/{branch}/destroy', [App\Http\Controllers\BranchController::class, 'destroy'])->name('branch.destroy');


// Route::get('/edit_branch', [App\Http\Controllers\branchController::class, 'edit_branch'])->name('edit_branch');


//*************Products***************/

Route::get('/productList', [App\Http\Controllers\ProductController::class, 'productList'])->name('productList');

Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');

Route::get('/product/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');

Route::patch('/product/{product}/update', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');

Route::get('/product/{product}/destroy', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');




// Route::get('/edit_product', [App\Http\Controllers\ProductController::class, 'edit_product'])->name('edit_product');


//*************Franchisees***************/

Route::get('/franchiseeList', [App\Http\Controllers\FranchiseeController::class, 'franchiseeList'])->name('franchiseeList');

Route::get('/edit_franchisee', [App\Http\Controllers\FranchiseeController::class, 'edit_franchisee'])->name('edit_franchisee');


//*************Categories***************/

Route::get('/categoryList', [App\Http\Controllers\CategoryController::class, 'categoryList'])->name('categoryList');


Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');


Route::get('/category/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');

Route::patch('/category/{category}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');

Route::get('/category/{category}/destroy', [App\Http\Controllers\CategoryController::class, 'destory'])->name('category.destroy');