<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index(){
        return view('lead.index');
       } 
       
       public function dashboard(){
        return view('lead.dashboard');
       } 
       
       public function reports(){
        return view('lead.reports');
       }
}
