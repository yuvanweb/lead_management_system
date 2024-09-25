<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RollController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/test', function () {
    return view('admin/dashboard');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/roll', [RollController::class, 'index'])->name('roll');
    Route::get('/user', [UserController::class, 'index'])->name('user');


    Route::get('/lead', [LeadController::class, 'index'])->name('lead');
    Route::get('/lead-dashboard', [LeadController::class, 'dashboard'])->name('lead-dashboard');
    Route::get('/lead-reports', [LeadController::class, 'reports'])->name('lead-reports'); 
    
    Route::get('/sales', [SalesController::class, 'index'])->name('sales');
    Route::get('/sales-dashboard', [SalesController::class, 'dashboard'])->name('sales-dashboard');
    Route::get('/sales-reports', [SalesController::class, 'reports'])->name('sales-reports');
    
    
    
    Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase');
    Route::get('/purchase-dashboard', [PurchaseController::class, 'dashboard'])->name('purchase-dashboard');
    Route::get('/purchase-reports', [PurchaseController::class, 'reports'])->name('purchase-reports');

   Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
   Route::get('/customer-reports', [CustomerController::class, 'reports'])->name('customer-reports');

   Route::get('/hr', [HrController::class, 'index'])->name('hr');
   Route::get('/hr-dashboard', [HrController::class, 'dashboard'])->name('hr-dashboard');
   Route::get('/hr-viewemployee', [HrController::class, 'viewemployee'])->name('hr-viewemployee');
   Route::get('/hr-editemployee', [HrController::class, 'editemployee'])->name('hr-editemployee');
   Route::get('/hr-holiday', [HrController::class, 'holiday'])->name('hr-holiday');
   Route::get('/hr-salarysetup', [HrController::class, 'salarysetup'])->name('hr-salarysetup');
   Route::get('/hr-salarypayslip', [HrController::class, 'salarypayslip'])->name('hr-salarysetup');
   Route::get('/hr-reports', [HrController::class, 'reports'])->name('hr-reports');
 
 
 
   Route::get('/master-company', [MasterController::class, 'company'])->name('master-company');
   Route::post('/add-company', [MasterController::class, 'addCompany'])->name('add-company');
   Route::post('/get-company', [MasterController::class, 'getCompany'])->name('get-company');
   Route::post('/update-company', [MasterController::class, 'updateCompany'])->name('update-company');
   Route::get('/delete-company/{id}', [MasterController::class, 'deleteCompany'])->name('delete-company');

   Route::get('/master-plant', [MasterController::class, 'plant'])->name('master-plant');
   Route::post('/add-plant', [MasterController::class, 'addplant'])->name('add-plant');
   Route::post('/get-plant', [MasterController::class, 'getplant'])->name('get-plant');
   Route::post('/update-plant', [MasterController::class, 'updateplant'])->name('update-plant');
   Route::get('/delete-plant/{id}', [MasterController::class, 'deleteplant'])->name('delete-plant');

   Route::get('/master-colors', [MasterController::class, 'colors'])->name('master-colors');
   Route::post('/add-colors', [MasterController::class, 'addcolors'])->name('add-colors');
   Route::post('/get-colors', [MasterController::class, 'getcolors'])->name('get-colors');
   Route::post('/update-colors', [MasterController::class, 'updatecolors'])->name('update-colors');
   Route::get('/delete-colors/{id}', [MasterController::class, 'deletecolors'])->name('delete-colors');

   Route::get('/master-form', [MasterController::class, 'form'])->name('master-form');
   Route::post('/add-form', [MasterController::class, 'addform'])->name('add-form');
   Route::post('/get-form', [MasterController::class, 'getform'])->name('get-form');
   Route::post('/update-form', [MasterController::class, 'updateform'])->name('update-form');
   Route::get('/delete-form/{id}', [MasterController::class, 'deleteform'])->name('delete-form');


   Route::get('/master-product', [MasterController::class, 'product'])->name('master-product');
   Route::post('/add-product', [MasterController::class, 'addproduct'])->name('add-product');
   Route::post('/get-product', [MasterController::class, 'getproduct'])->name('get-product');
   Route::post('/update-product', [MasterController::class, 'updateproduct'])->name('update-product');
   Route::get('/delete-product/{id}', [MasterController::class, 'deleteproduct'])->name('delete-product');



  /*  Route::get('/master-product', [MasterController::class, 'product'])->name('master-product');
   Route::post('/add-product', [MasterController::class, 'addproduct'])->name('add-product');
   Route::post('/get-product', [MasterController::class, 'getproduct'])->name('get-product');
   Route::post('/update-product', [MasterController::class, 'updateproduct'])->name('update-product');
   Route::get('/delete-product/{id}', [MasterController::class, 'deleteproduct'])->name('delete-product'); */



   Route::get('/master-brand', [MasterController::class, 'brand'])->name('master-brand');
   Route::post('/add-brand', [MasterController::class, 'addbrand'])->name('add-brand');
   Route::post('/get-brand', [MasterController::class, 'getbrand'])->name('get-brand');
   Route::post('/update-brand', [MasterController::class, 'updatebrand'])->name('update-brand');
   Route::get('/delete-brand/{id}', [MasterController::class, 'deletebrand'])->name('delete-brand');


   Route::get('/master-unit', [MasterController::class, 'unit'])->name('master-unit');
   Route::post('/add-unit', [MasterController::class, 'addunit'])->name('add-unit');
   Route::post('/get-unit', [MasterController::class, 'getunit'])->name('get-unit');
   Route::post('/update-unit', [MasterController::class, 'updateunit'])->name('update-unit');
   Route::get('/delete-unit/{id}', [MasterController::class, 'deleteunit'])->name('delete-unit');



   Route::get('/master-leadsource', [MasterController::class, 'leadsource'])->name('master-leadsource');
   Route::post('/add-leadsource', [MasterController::class, 'addleadsource'])->name('add-leadsource');
   Route::post('/get-leadsource', [MasterController::class, 'getleadsource'])->name('get-leadsource');
   Route::post('/update-leadsource', [MasterController::class, 'updateleadsource'])->name('update-leadsource');
   Route::get('/delete-leadsource/{id}', [MasterController::class, 'deleteleadsource'])->name('delete-leadsource');






   //Route::get('/master-colors', [MasterController::class, 'colors'])->name('master-colors');
   //Route::get('/master-brand', [MasterController::class, 'brand'])->name('master-brand');
   //Route::get('/master-form', [MasterController::class, 'form'])->name('master-form');
   //Route::get('/master-product', [MasterController::class, 'product'])->name('master-product');
   //Route::get('/master-unit', [MasterController::class, 'unit'])->name('master-unit');
   //Route::get('/master-leadsource', [MasterController::class, 'leadsource'])->name('master-leadsource');
  
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
require __DIR__.'/auth.php';
