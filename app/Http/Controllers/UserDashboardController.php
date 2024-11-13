<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index(Request $request){
       $id= Auth::user()->role;
       $role = Role::where('id',$id)->get();
       $request->session()->put('role_access', $role);
            if($request->session()->has('role_access'))
            return redirect('/dashboard');
                  else
            return redirect('/logout');
    }
}
