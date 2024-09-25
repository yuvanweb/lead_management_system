<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RollController extends Controller
{
   public function index(){
    return view('roll.index');
   }
}
