<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Location;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index(){
       $role = Role::where('status',1)->get();
       $company = Company::where('status',1)->get();
       $location = Location::where('status',1)->get();
     //  $user = User::where('status',1)->where('id','!=',1)->get();

       $user = DB::table('users')
       ->join('roles', 'users.role', '=', 'roles.id')
       ->leftJoin('companies', 'users.company_id', '=', 'companies.id')
       ->leftJoin('locations', 'users.location_id', '=', 'locations.id')
     
       ->select('users.*', 'roles.role_name', 'companies.company_name', 'locations.location_name')
       ->where('users.id','!=',1)
       ->where('users.status',1)
       ->get();
        return view('user.index')->with('role',$role)->with('company',$company)->with('location',$location)->with('user',$user);



       }


       public function createUser(Request $request){

        $company = Company::where('id',$request->company)->get();
        $user_co = User::where('location_id',$request->location)->get();
        $user_count = $user_co->count();

        $EmployeeId = "EMP-".$company[0]->company_code."-".$user_count+1;
        $user = new User;  
        $user->name =  $request->name;  
        $user->email =  $request->email;  
        $user->mobile =  $request->mobile;  
        $user->company_id =  $request->company;  
        $user->location_id =  $request->location;  
        $user->role =  $request->role;  
        $user->employee_id =  $EmployeeId;  
        $user->password =  Hash::make(123456);  
        $user->save();
        return redirect()->back()->with('success', 'User successfully updated');

       }
       
   public function getUser(Request $request){
    
     $plant =  User::where('id',$request->id)->get();
    echo json_encode($plant);
   }  
   public function updateUser(Request $request){

    $id= $request->id;
    $data= array(
      'name'=>$request->get('name'),
      'email'=>$request->get('email'),
      'mobile'=>$request->get('mobile'),
      'role'=>$request->get('role'),
      'company_id'=>$request->get('company'),
      'location_id'=>$request->get('location'),
      'employee_id'=>$request->get('employee'),

    );

    User::whereId($id)->update($data);
    return redirect()->back()->with('success', 'User successfully updated');
   } 

 public function deleteUser($id){
   
    $data= array(
      'status'=>0,
    );
    User::whereId($id)->update($data);
    return redirect()->back()->with('failed', 'User successfully deleted');
   } 
  }    
