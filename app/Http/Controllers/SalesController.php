<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(){
        return view('sales.index');
       } 
       
       public function dashboard(){
        return view('sales.dashboard');
       } 
       
       public function reports(){
        return view('sales.reports');
       }
}
