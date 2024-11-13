<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Role;
use Illuminate\Http\Request;

class RollController extends Controller
{
   public function index(){
      $module = Module::where('status',1)->get();
      $role = Role::where('status',1)->get();
      return view('roll.index')->with('module',$module)->with('role',$role);

   }

   public function addRole(Request $request){

      $role = new Role;  
      $role->role_name =  $request->get('role_name');  
      $role->save();   
      return redirect()->back()->with('success', 'Role successfully added');

   }

   public function getRole(Request $request){
      $plant = Role::where('id',$request->id)->get();
      echo json_encode($plant);
     }  
     public function updateRole(Request $request){

      $id= $request->id;
      $data= array(
        'role_name'=>$request->get('role_name'),
      );

      Role::whereId($id)->update($data);
      return redirect()->back()->with('success', 'Role successfully updated');
     } 

   public function deleteRole($id){
     
      $data= array(
        'status'=>0,
      );
      Role::whereId($id)->update($data);
      return redirect()->back()->with('failed', 'Role successfully deleted');
     } 

     public function updateModule(Request $request){

      print_r($request->all());


      $id =$request->role_id;
      $role_management = isset($request->role_management) ? 1 : 0;
      $user_management = isset($request->user_management) ? 1 : 0;
      $lead_management = isset($request->lead_management) ? 1 : 0;
      $sales_management = isset($request->sales_management) ? 1 : 0;
      $purchase_management = isset($request->purchase_management) ? 1 : 0;
      $hr_management = isset($request->hr_management) ? 1 : 0;
      $customer_management = isset($request->customer_management) ? 1 : 0;
      $master_management = isset($request->master_management) ? 1 : 0;

      $data= array(
      'role_management' =>  $role_management,  
      'user_management' =>  $user_management,
      'lead_management' =>  $lead_management, 
      'sales_management' =>  $sales_management,  
      'purchase_management' =>  $purchase_management, 
      'hr_management' =>  $hr_management,
      'customer_management' =>  $customer_management, 
      'master_management' =>  $master_management, 
      );
      Role::whereId($id)->update($data);
      return redirect()->back()->with('success', 'successfully updated');

     }
}