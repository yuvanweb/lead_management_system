<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrController extends Controller
{
    
       
       public function dashboard(){
        return view('hr.dashboard');
       } 
       
       public function index(){
        return view('hr.index');
       } 
       public function viewemployee(){
        return view('hr.viewemployee');
       } 
       
       public function editemployee(){
        return view('hr.editemployee');
       } 

       public function holiday(){
        return view('hr.holiday');
       }
       
       public function salarypayslip(){
        return view('hr.salarypayslip');
       }

       public function salarySetup(){
        return view('hr.salarysetup');
       }

       public function reports(){
        return view('hr.reports');
       }
}
