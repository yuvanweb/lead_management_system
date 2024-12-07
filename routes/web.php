<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RollController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\UserDashboardController;
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
Route::get('/', [AuthenticatedSessionController::class, 'create']);
/* Route::get('/', function () {
   // return view('welcome');
}); */

Route::get('/test', function () {
    return view('admin/dashboard');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/test-session', [UserDashboardController::class, 'index'])->name('test-session');
    Route::get('/sales-excel', [ExcelController::class, 'index'])->name('sales-excel');
   
   
    Route::post('/post-test-excel', [ExcelController::class, 'import'])->name('post-test-excel');
    Route::get('/purchase-excel', [ExcelController::class, 'purchase'])->name('purchase');
    Route::post('/post-purchase-excel', [ExcelController::class, 'postPurchase'])->name('post-purchase-excel');
 //   Route::get('/purchase-excel', [ExcelController::class, 'purchase'])->name('purchase-excel');

    Route::get('/roll', [RollController::class, 'index'])->name('roll');
    Route::post('/add-role', [RollController::class, 'addRole'])->name('add-role');
    Route::post('/get-role', [RollController::class, 'getRole'])->name('get-role');
    Route::post('/update-role', [RollController::class, 'updateRole'])->name('update-role');
    Route::get('/delete-role/{id}', [RollController::class, 'deleteRole'])->name('delete-role');
    Route::post('/update-module', [RollController::class, 'updateModule'])->name('update-module');


    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::post('/add-user', [UserController::class, 'createUser'])->name('add-user');
    Route::post('/get-user', [UserController::class, 'getUser'])->name('get-role');
    Route::post('/update-user', [UserController::class, 'updateUser'])->name('update-role');
    Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('delete-role');

    Route::get('/lead', [LeadController::class, 'index'])->name('lead');
    Route::post('/add-lead', [LeadController::class, 'addLead'])->name('add-lead');
    Route::post('/get-lead', [LeadController::class, 'getLead'])->name('get-lead');
    Route::post('/update-lead', [LeadController::class, 'updateLead'])->name('get-lead');
    Route::get('/delete-lead/{id}', [LeadController::class, 'deleteLead'])->name('delete-role');
    Route::get('/lead-dashboard', [LeadController::class, 'dashboard'])->name('lead-dashboard');
    Route::post('/lead-dashboard-data', [LeadController::class, 'leadDashboardData'])->name('lead-dashboard-data');
    Route::get('/lead-reports', [LeadController::class, 'reports'])->name('lead-reports'); 
    
    Route::get('/sales', [SalesController::class, 'index'])->name('sales');
    Route::get('/sales-add', [SalesController::class, 'add'])->name('sales-add');
    Route::post('/add-sales', [SalesController::class, 'addSales'])->name('add-sales');
    Route::post('/get-sales', [SalesController::class, 'getSales'])->name('get-sales');
    Route::get('/edit-sales/{id}', [SalesController::class, 'editSales'])->name('edit-sales');
    Route::post('/update-sales', [SalesController::class, 'updateSales'])->name('update-sales');
    Route::get('/sales-dashboard', [SalesController::class, 'dashboard'])->name('sales-dashboard');
    Route::post('/sales-month-dashboard', [SalesController::class, 'monthlyDashboard'])->name('sales-month-dashboard');

    Route::get('/sales-reports', [SalesController::class, 'reports'])->name('sales-reports');
    Route::post('/get-sales-customer', [SalesController::class, 'salesCustomerGst'])->name('sales-reports');
    

    
    
    Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase');
    Route::post('/add-purchase', [PurchaseController::class, 'addpurchase'])->name('add-purchase');
    Route::post('/get-purchase', [PurchaseController::class, 'getpurchase'])->name('add-purchase');
    Route::post('/update-purchase', [PurchaseController::class, 'updatepurchase'])->name('update-purchase');
    Route::get('/delete-purchase/{id}', [PurchaseController::class, 'deletepurchase'])->name('delete-purchase');
    Route::get('/purchase-dashboard', [PurchaseController::class, 'dashboard'])->name('purchase-dashboard');
    Route::post('/purchase-month-dashboard', [PurchaseController::class, 'monthlyDashboard'])->name('purchase-month-dashboard');
    Route::get('/purchase-reports', [PurchaseController::class, 'reports'])->name('purchase-reports');

   Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
   Route::post('/add-customer', [CustomerController::class, 'createcustomer'])->name('add-customer');
   Route::get('/get-gst', [CustomerController::class, 'getGstNum'])->name('get-gst');
   Route::post('/get-customer', [CustomerController::class, 'getcustomer'])->name('get-customer');
   Route::post('/update-customer', [CustomerController::class, 'updatecustomer'])->name('update-customer');
   Route::get('/delete-customer/{id}', [CustomerController::class, 'deletecustomer'])->name('delete-customer');

   Route::get('/customer-reports', [CustomerController::class, 'reports'])->name('customer-reports');

   Route::get('/hr', [HrController::class, 'index'])->name('hr');
   Route::get('/hr-dashboard', [HrController::class, 'dashboard'])->name('hr-dashboard');
   Route::get('/hr-viewemployee/{id}', [HrController::class, 'viewemployee'])->name('hr-viewemployee');
   Route::get('/hr-editemployee', [HrController::class, 'editemployee'])->name('hr-editemployee');
   Route::post('/update-userdetails', [HrController::class, 'updateUser'])->name('update-userdetails');
   Route::post('/update-personal', [HrController::class, 'updatePersonal'])->name('update-personal');
   Route::post('/update-bank', [HrController::class, 'updateBank'])->name('update-bank');
   Route::post('/update-leave-details', [HrController::class, 'updateLeaveDetails'])->name('update-leave-details');
   Route::post('/add-holidays', [HrController::class, 'addHolidays'])->name('add-holidays');
   Route::get('/hr-holiday', [HrController::class, 'holiday'])->name('hr-holiday');
   Route::get('/delete-holiday/{id}', [HrController::class, 'deleteHoliday'])->name('delete-holiday');
   Route::get('/hr-mark-attendence', [HrController::class, 'markAttendance'])->name('hr-mark-attendence');
   Route::post('/get-attendance', [HrController::class, 'getAttendance'])->name('get-attendance');
   Route::post('/update-attendance', [HrController::class, 'updateAttendance'])->name('update-attendance');
   Route::get('/hr-salarysetup', [HrController::class, 'salarysetup'])->name('hr-salarysetup');
   Route::post('/update-salary-setup', [HrController::class, 'addSalarySetup'])->name('update-salary-setup');
   Route::get('/calculate-salary-setup/{id}', [HrController::class, 'calculatePayslip'])->name('hr-generatepayslip');
   Route::get('/hr-generatepayslip', [HrController::class, 'generatePayslip'])->name('hr-generatepayslip');
   Route::post('/generate-payslip', [HrController::class, 'generateMonthlyPayslip'])->name('generate-payslip');
   Route::post('/generate-payslip-pdf', [HrController::class, 'generateMonthlyPayslipPdf'])->name('generate-payslip-pdf');
   Route::get('/hr-salarypayslip', [HrController::class, 'salarypayslip'])->name('hr-salarysetup');
   Route::get('/generate-final-payslip/{id}/{date}', [HrController::class, 'generateFinalPayslip'])->name('generate-final-payslip');
   Route::get('/hr-reports', [HrController::class, 'reports'])->name('hr-reports');
   Route::get('/hr-loansetup', [HrController::class, 'loanSetup'])->name('hr-loansetup');
   Route::post('/add-Loan-details', [HrController::class, 'addloanSetup'])->name('add-Loan-details');
   Route::get('/delete-loan/{id}', [HrController::class, 'deleteLoanSetup'])->name('delete-loan');
   Route::post('/view-loan', [HrController::class, 'viewLoanSetup'])->name('view-loan');
  // Route::get('/hr-reports', [HrController::class, 'reports'])->name('hr-reports');
 
  Route::get('/master-type', [MasterController::class, 'type'])->name('master-type');
  Route::post('/add-type', [MasterController::class, 'addtype'])->name('add-type');
  Route::post('/get-type', [MasterController::class, 'gettype'])->name('get-type');
  Route::post('/update-type', [MasterController::class, 'updatetype'])->name('update-type');
  Route::get('/delete-type/{id}', [MasterController::class, 'deletetype'])->name('delete-type');
  
 
   Route::get('/master-company', [MasterController::class, 'company'])->name('master-company');
   Route::post('/add-company', [MasterController::class, 'addCompany'])->name('add-company');
   Route::post('/get-company', [MasterController::class, 'getCompany'])->name('get-company');
   Route::post('/update-company', [MasterController::class, 'updateCompany'])->name('update-company');
   Route::get('/delete-company/{id}', [MasterController::class, 'deleteCompany'])->name('delete-company');
   Route::get('/array-company', [MasterController::class, 'companyArray'])->name('delete-company');
  

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



   Route::get('/master-category', [MasterController::class, 'category'])->name('master-category');
   Route::post('/add-category', [MasterController::class, 'addcategory'])->name('add-category');
   Route::post('/get-category', [MasterController::class, 'getcategory'])->name('get-category');
   Route::post('/update-category', [MasterController::class, 'updatecategory'])->name('update-category');
   Route::get('/delete-category/{id}', [MasterController::class, 'deletecategory'])->name('delete-category');



   Route::get('/master-location', [MasterController::class, 'location'])->name('master-location');
   Route::post('/add-location', [MasterController::class, 'addlocation'])->name('add-location');
   Route::post('/get-location', [MasterController::class, 'getlocation'])->name('get-location');
   Route::post('/update-location', [MasterController::class, 'updatelocation'])->name('update-location');
   Route::get('/delete-location/{id}', [MasterController::class, 'deletelocation'])->name('delete-location');


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
