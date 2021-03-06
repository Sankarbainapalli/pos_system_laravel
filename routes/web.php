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

// Route::get('/', function () {
//     return view('admin.dashboard');
// });



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('home', App\Http\Controllers\HomeController::class);

Route::resource('customer', App\Http\Controllers\CustomerController::class);

Route::resource('role', App\Http\Controllers\RoleController::class);

Route::resource('employee', App\Http\Controllers\EmployeeController::class);

Route::resource('branch', App\Http\Controllers\BranchController::class);

Route::resource('product', App\Http\Controllers\ProductController::class);

Route::resource('category', App\Http\Controllers\CategoryController::class);

Route::resource('stock', App\Http\Controllers\StockController::class);

Route::resource('purchaseorder', App\Http\Controllers\PurchaseOrderController::class);

Route::resource('pos', App\Http\Controllers\PosController::class);

Route::get('/pos/invoice_print/{id}', [App\Http\Controllers\PosController::class, 'invoice'])->name('pos/invoice_print');

Route::post('/getRate', [App\Http\Controllers\StockController::class, 'getRate'])->name('stock.rate');

Route::get('/delete_all_cart', [App\Http\Controllers\PosController::class, 'delete_all_cart'])->name('delete_all_cart');

Route::get('/getApiData', [App\Http\Controllers\PosController::class, 'getApiData'])->name('getApiData');

Route::get('/getCart', [App\Http\Controllers\PosController::class, 'getCart'])->name('getCart');

Route::get('/getProduct', [App\Http\Controllers\PosController::class, 'getProduct'])->name('getProduct');

Route::post('/removeProduct', [App\Http\Controllers\PosController::class, 'removeProduct'])->name('removeProduct');

Route::post('/addProduct', [App\Http\Controllers\PosController::class, 'addProduct'])->name('addProduct');

Route::post('/getFranchisee', [App\Http\Controllers\PurchaseOrderController::class, 'getFranchisee'])->name('getFranchisee');

Route::post('/getBranch', [App\Http\Controllers\PurchaseOrderController::class, 'getBranch'])->name('getBranch');

Route::get('/dressed_stock', [App\Http\Controllers\StockController::class, 'dressed_stock'])->name('stock.dressed_stock');

Route::get('/lived_stock', [App\Http\Controllers\StockController::class, 'lived_stock'])->name('stock.lived_stock');

// Route::post('/store_dressed_stock', [App\Http\Controllers\StockController::class, 'store_dressed_stock'])->name('stock.store_dressed_stock');

Route::resource('franchisee', App\Http\Controllers\FranchiseeController::class);

Route::resource('liveamount', App\Http\Controllers\LiveAmountController::class);

Route::resource('exformrate', App\Http\Controllers\ExFormRateController::class);

Route::resource('order', App\Http\Controllers\OrderController::class);


Route::post('/getProduct', [App\Http\Controllers\LiveAmountController::class, 'getProduct'])->name('getProduct');

Route::get('/live_stock_report', [App\Http\Controllers\ReportController::class, 'live_stock_report'])->name('live_stock_report');

//*************dashboard***************/

// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');


// Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');


// Route::post('/customer/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');

// // Route::get('/customer/{customer}', [App\Http\Controllers\CustomerController::class, 'show'])->name('customer.show');

// Route::get('/customer/{customer}/edit', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');

// Route::patch('/customer/{customer}/update', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');

// Route::get('/customer/{customer}/destroy', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.destroy');

//*************Roles***************/

// Route::get('/roleList', [App\Http\Controllers\RoleController::class, 'roleList'])->name('roleList');

// Route::get('/edit_role', [App\Http\Controllers\RoleController::class, 'edit_role'])->name('edit_role');



//*************Employees***************/


// Route::get('/stockList', [App\Http\Controllers\StockController::class, 'stockList'])->name('stockList');

// Route::get('/edit_stock', [App\Http\Controllers\StockController::class, 'edit_stock'])->name('edit_stock');

// Route::get('/employeeList', [App\Http\Controllers\EmployeeController::class, 'employeeList'])->name('employeeList');

// Route::get('/edit_employee', [App\Http\Controllers\EmployeeController::class, 'edit_employee'])->name('edit_employee');

//*************Accounts***************/

Route::get('/accountList', [App\Http\Controllers\AccountController::class, 'accountList'])->name('accountList');


// Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');

// Route::post('/employee/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');

// Route::get('/employee/ee{employ}/edit', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');

// Route::patch('/employee/{employee}/update', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');

// Route::get('/user/{user}/destroy', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employee.destroy');
// =======
Route::get('/edit', [App\Http\Controllers\AccountController::class, 'edit'])->name('edit');




//*************Customers***************/

// Route::get('/customerList', [App\Http\Controllers\CustomerController::class, 'customerList'])->name('customerList');


// Route::get('/role', [App\Http\Controllers\RoleController::class, 'index'])->name('role.index');

// Route::post('/role/store', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store');

// Route::get('/role/{role}/edit', [App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit');

// Route::patch('/role/{role}/update', [App\Http\Controllers\RoleController::class, 'update'])->name('role.update');

// Route::get('/role/{role}/destroy', [App\Http\Controllers\RoleController::class, 'destroy'])->name('role.destroy');


// Route::get('/edit_role', [App\Http\Controllers\RoleController::class, 'edit_role'])->name('edit_role');

// Route::get('/edit_customer', [App\Http\Controllers\CustomerController::class, 'edit_customer'])->name('edit_customer');


//*************Stocks***************/

Route::get('/stockList', [App\Http\Controllers\StockController::class, 'stockList'])->name('stockList');

Route::get('/edit_stock', [App\Http\Controllers\StockController::class, 'edit_stock'])->name('edit_stock');
// >>>>>>> vishal


//*************Branches***************/

// Route::get('/branch', [App\Http\Controllers\BranchController::class, 'index'])->name('branch.index');

// Route::post('/branch/store', [App\Http\Controllers\BranchController::class, 'store'])->name('branch.store');

// Route::get('/branch/{branch}/edit', [App\Http\Controllers\BranchController::class, 'edit'])->name('branch.edit');

// Route::patch('/branch/{branch}/update', [App\Http\Controllers\BranchController::class, 'update'])->name('branch.update');

// Route::get('/branch/{branch}/destroy', [App\Http\Controllers\BranchController::class, 'destroy'])->name('branch.destroy');


// Route::get('/edit_branch', [App\Http\Controllers\branchController::class, 'edit_branch'])->name('edit_branch');


//*************Products***************/

// Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');

// Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');

// Route::get('/product/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');

// Route::patch('/product/{product}/update', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');

// Route::get('/product/{product}/destroy', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');




// Route::get('/edit_product', [App\Http\Controllers\ProductController::class, 'edit_product'])->name('edit_product');


//*************Franchisees***************/

// Route::get('/franchiseeList', [App\Http\Controllers\FranchiseeController::class, 'franchiseeList'])->name('franchiseeList');



// Route::get('/edit_franchisee', [App\Http\Controllers\FranchiseeController::class, 'edit_franchisee'])->name('edit_franchisee');


//*************Categories***************/

// Route::get('/categoryList', [App\Http\Controllers\CategoryController::class, 'categoryList'])->name('categoryList');


// Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');


// Route::get('/category/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');

// Route::patch('/category/{category}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');


// Route::get('/category/{category}/destroy', [App\Http\Controllers\CategoryController::class, 'destory'])->name('category.destroy');

// Route::get('/edit_category', [App\Http\Controllers\CategoryController::class, 'edit_category'])->name('edit_category');


//*************Profit & Loss***************/

Route::get('/profitloss', [App\Http\Controllers\ProfitlossController::class, 'profitloss'])->name('profitloss');

// Route::get('/edit_category', [App\Http\Controllers\ProfitlossController::class, 'edit_category'])->name('edit_category');


//*************Live Amount***************/



// Route::get('/edit_category', [App\Http\Controllers\ProfitlossController::class, 'edit_category'])->name('edit_category');

