<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){


     $category = Category::where('status',1)->get();
     
      $customer = DB::table('customers')
    
      ->leftJoin('lead_sources', 'customers.converted_lead', '=', 'lead_sources.id')
      ->leftJoin('categories', 'customers.customer_categoty', '=', 'categories.id')
      ->select('customers.*', 'lead_sources.l_source_name', 'categories.categorie_name')
      ->where('customers.status',1)
      ->get();

        return view('customer.index')->with('customer',$customer)->with('category',$category);
       } 
       
       public function createcustomer(Request $request){

        $company = Category::where('id',$request->category)->get();

        $cat = substr($company[0]->categorie_name, 0, 3);
     
        $company_count = $company->count();


        $gst = Customer::where('gst_number',$request->gst_number)->get();

        // $cat = substr($company[0]->categorie_name, 0, 3);
      
         $gst_count = $gst->count();
     
         if($gst_count ==0){

        $EmployeeId = "SARO-".strtoupper($cat)."-".$company_count+1; 
        $customer = new Customer();  
        $customer->customer_name =  $request->name;  
        $customer->customer_email =  $request->primary_mail_id;  
        $customer->gst_number =  $request->gst_number;  
        $customer->customer_contact_no =  $request->primary_contact_num;  
        $customer->customer_contact_no_2 =  $request->c_person_number_2;  
        $customer->customer_name_2 =  $request->c_person_name_2;  
        $customer->customer_contact_no_3 =  $request->c_person_number_3;  
        $customer->customer_name_3 =  $request->c_person_name_3;  
        $customer->customer_categoty =  $request->category;  
      //  $customer->customer_unique_code =  $EmployeeId;  
       
        $customer->save();
        return redirect()->back()->with('success', 'Customer Successfully created');
         }else{
          return redirect()->back()->with('failed', 'Failed! GST number already exists');

         }
       }
       
   public function getGstNum(Request $request){


    $gst = Customer::where('gst_number', 'LIKE','%'.$request->id.'%')->get();
    $company_count = $gst->count();

echo $company_count;


   }
   public function getcustomer(Request $request){
    
     $plant =  Customer::where('id',$request->id)->get();
    echo json_encode($plant);
   }  
   public function updatecustomer(Request $request){


    $gst = Customer::where('gst_number',$request->gst_number)->get();

   // $cat = substr($company[0]->categorie_name, 0, 3);
 
    $gst_count = $gst->count();

    if($gst_count ==0){

    $id= $request->id;
    $data= array(
      'customer_name'=> $request->customer_name,
      'gst_number'=> strtoupper($request->gst_number),
      'customer_email'=>$request->primary_mail_id,
      'customer_contact_no'=>$request->primary_contact_num,
      'customer_contact_no_2'=>$request->c_person_number_2,
      'customer_name_2'=>$request->c_person_name_2,
      'customer_contact_no_3'=>$request->c_person_number_3,
      'customer_name_3'=>$request->c_person_name_3,
      'customer_categoty'=>$request->category,
    //  'customer_unique_code'=>$request->customer_unique_code,
      

    );
    //print_r($data);exit;
    Customer::whereId($id)->update($data);
    return redirect()->back()->with('success', 'Customer successfully updated');
  }else{
    return redirect()->back()->with('failed', 'Failed! GST number already exists');

  }
   } 

 public function deletecustomer($id){
   
    $data= array(
      'status'=>0,
    );
    Customer::whereId($id)->update($data);
    return redirect()->back()->with('failed', 'Customer successfully deleted');
   } 
       public function reports(){
        return view('customer.reports');
       }
}
