<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index(){
        return view('purchase.index');
       } 
       
       public function dashboard(){
        return view('purchase.dashboard');
       } 
       
       public function reports(){
        return view('purchase.reports');
       }
}
