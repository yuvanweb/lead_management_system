<?php

namespace App\Http\Controllers;

use App\Imports\SalesImport;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\StoreFileRequest;
use App\Imports\PurchaseImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    //
    
    public function index(){


        return view("excel.form");

    }  
    
    public function import(Request $request){

    try {
        //   print_r($request->file('excel_file')); 

    Excel::import(new SalesImport,  $request->file('excel_file'), null, \Maatwebsite\Excel\Excel::XLSX);
    //exit;
    return redirect()
    ->back()
    ->with("success", "Excel uploade successfully");

        //  Excel::import( new SalesImport, $request->file('excel_file'));
        } catch (\Exception $e) {
        // print_r($e->getMessage()); 

            return redirect()
    ->back()
    ->with("failed", $e->getMessage());
        }
    } 
    public function purchase(){


        return view("excel.purchaseform");

    } 
    
    
    public function postPurchase(Request $request){

        try {
            //   print_r($request->file('excel_file')); 
    
        Excel::import(new PurchaseImport,  $request->file('excel_file'), null, \Maatwebsite\Excel\Excel::XLSX);
       // exit;
         return redirect()
        ->back()
        ->with("success", "Excel uploade successfully"); 
    
            //  Excel::import( new SalesImport, $request->file('excel_file'));
            } catch (\Exception $e) {
            // print_r($e->getMessage()); 
    
                return redirect()
        ->back()
        ->with("failed", $e->getMessage());
            } 
        } 
}
