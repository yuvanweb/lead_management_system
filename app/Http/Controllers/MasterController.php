<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Company;
use App\Models\Form;
use App\Models\LeadSource;
use App\Models\Plant;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;

class MasterController extends Controller
{

  /*     Compant CURD      */

      public function company(){

        $company = Company::where('status',1)->get();
        return view('master_m.company')->with('company',$company);

       } 

      public function addCompany(Request $request){

        $wordlist = Company::get();
        $wordCount = $wordlist->count();

       $comp = "SARA-COMP-".$wordCount+1;
        $request->validate([
          'company_name' => 'required|max:255',
        ]); 

        $crud = new Company;  
        $crud->company_name =  $request->get('company_name');  
        $crud->c_id =  $comp; 
        $crud->save();   
        return redirect()->back()->with('success', 'Company successfully added');
       
       }  

       public function updateCompany(Request $request){

        $id= $request->id;
        $data= array(
          'company_name'=>$request->get('company_name'),
        );

        Company::whereId($id)->update($data);
        return redirect()->back()->with('success', 'Company successfully updated');
       } 

       public function getCompany(Request $request){
        $company = Company::where('id',$request->id)->get();
        echo json_encode($company);
       }  

       public function deleteCompany($id){
       
        $data= array(
          'status'=>0,
        );
        Company::whereId($id)->update($data);
        return redirect()->back()->with('failed', 'Company successfully deleted');
       }

/*     PLAN     CURD  */

       public function plant(){

        $plant = Plant::where('status',1)->get();
        return view('master_m.plant')->with('plant',$plant);
       }
       
       
       public function addplant(Request $request){

        $wordlist = Plant::get();
        $wordCount = $wordlist->count();

       $comp = "SARA-PLANT-".$wordCount+1;
        $request->validate([
          'plant_name' => 'required|max:255',
        ]); 

        $crud = new Plant;  
        $crud->plant_name =  $request->get('plant_name');  
        $crud->c_id =  $comp; 
        $crud->save();   
        return redirect()->back()->with('success', 'Plant successfully added');
       
       }  
       public function getplant(Request $request){
        $plant = Plant::where('id',$request->id)->get();
        echo json_encode($plant);
       }  
       public function updateplant(Request $request){

        $id= $request->id;
        $data= array(
          'plant_name'=>$request->get('plant_name'),
        );

        Plant::whereId($id)->update($data);
        return redirect()->back()->with('success', 'Plant successfully updated');
       } 

      

       public function deleteplant($id){
       
        $data= array(
          'status'=>0,
        );
        Plant::whereId($id)->update($data);
        return redirect()->back()->with('failed', 'Plant successfully deleted');
       }


/*     Color      */

       
       public function colors(){
        $colors = Color::where('status',1)->get();
        return view('master_m.colors')->with('colors',$colors);
       }   
       
       public function addcolors(Request $request){

        $wordlist = Color::get();
        $wordCount = $wordlist->count();

       $comp = "SARA-PLANT-".$wordCount+1;
        $request->validate([
          'color_name' => 'required|max:255',
        ]); 

        $crud = new Color;  
        $crud->color_name =  $request->get('color_name');  
        $crud->c_id =  $comp; 
        $crud->save();   
        return redirect()->back()->with('success', 'Color successfully added');
       
       }  
       public function getcolors(Request $request){
        $plant = Color::where('id',$request->id)->get();
        echo json_encode($plant);
       }  
       public function updatecolors(Request $request){

        $id= $request->id;
        $data= array(
          'color_name'=>$request->get('color_name'),
        );

        Color::whereId($id)->update($data);
        return redirect()->back()->with('success', 'Color successfully updated');
       } 

     public function deletecolors($id){
       
        $data= array(
          'status'=>0,
        );
        Color::whereId($id)->update($data);
        return redirect()->back()->with('failed', 'Color successfully deleted');
       }  
       
       

       

       public function brand(){
        $brand = Brand::where('status',1)->get();
        return view('master_m.brand')->with('brand',$brand);
       }

       public function addbrand(Request $request){

        $wordlist = Brand::get();
        $wordCount = $wordlist->count();

       $comp = "SARA-PLANT-".$wordCount+1;
        $request->validate([
          'brand_name' => 'required|max:255',
        ]); 

        $crud = new Brand;  
        $crud->brand_name =  $request->get('brand_name');  
        $crud->c_id =  $comp; 
        $crud->save();   
        return redirect()->back()->with('success', 'Brand successfully added');
       
       }  
       public function getbrand(Request $request){
        $plant = Brand::where('id',$request->id)->get();
        echo json_encode($plant);
       }  
       public function updatebrand(Request $request){

        $id= $request->id;
        $data= array(
          'brand_name'=>$request->get('brand_name'),
        );

        Brand::whereId($id)->update($data);
        return redirect()->back()->with('success', 'Brand successfully updated');
       } 

     public function deletebrand($id){
       
        $data= array(
          'status'=>0,
        );
        Brand::whereId($id)->update($data);
        return redirect()->back()->with('failed', 'Brand successfully deleted');
       }  


       public function form(){

        $form = Form::where('status',1)->get();
        return view('master_m.form')->with('form',$form);
       }
       public function addform(Request $request){

        $wordlist = Form::get();
        $wordCount = $wordlist->count();

       $comp = "SARA-FORM-".$wordCount+1;
        $request->validate([
          'form_name' => 'required|max:255',
        ]); 

        $crud = new Form;  
        $crud->form_name =  $request->get('form_name');  
        $crud->c_id =  $comp; 
        $crud->save();   
        return redirect()->back()->with('success', 'Form successfully added');
       
       }  
       public function getform(Request $request){
        $plant = Form::where('id',$request->id)->get();
        echo json_encode($plant);
       }  
       public function updateform(Request $request){

        $id= $request->id;
        $data= array(
          'form_name'=>$request->get('form_name'),
        );

        Form::whereId($id)->update($data);
        return redirect()->back()->with('success', 'Form successfully updated');
       } 

     public function deleteform($id){
       
        $data= array(
          'status'=>0,
        );
        Form::whereId($id)->update($data);
        return redirect()->back()->with('failed', 'Form successfully deleted');
       }  

               
       public function product(){
        $product = Product::where('status',1)->get();
        return view('master_m.product')->with('product',$product);
       }

       public function addproduct(Request $request){

        $wordlist = Product::get();
        $wordCount = $wordlist->count();

       $comp = "SARA-PRODUCT-".$wordCount+1;
        $request->validate([
          'product_name' => 'required|max:255',
        ]); 

        $crud = new Product;  
        $crud->product_name =  $request->get('product_name');  
        $crud->c_id =  $comp; 
        $crud->save();   
        return redirect()->back()->with('success', 'Product successfully added');
       
       }  
       public function getproduct(Request $request){
        $plant = Product::where('id',$request->id)->get();
        echo json_encode($plant);
       }  
       public function updateproduct(Request $request){

        $id= $request->id;
        $data= array(
          'product_name'=>$request->get('product_name'),
        );

        Product::whereId($id)->update($data);
        return redirect()->back()->with('success', 'Product successfully updated');
       } 

     public function deleteproduct($id){
       
        $data= array(
          'status'=>0,
        );
        Product::whereId($id)->update($data);
        return redirect()->back()->with('failed', 'Product successfully deleted');
       } 

                     
       public function unit(){
        $unit = Unit::where('status',1)->get();
        return view('master_m.unit')->with('unit',$unit);
       }

       public function addunit(Request $request){

        $wordlist = Unit::get();
        $wordCount = $wordlist->count();

       $comp = "SARA-UNIT-".$wordCount+1;
        $request->validate([
          'unit_name' => 'required|max:255',
        ]); 

        $crud = new Unit;  
        $crud->unit_name =  $request->get('unit_name');  
        $crud->c_id =  $comp; 
        $crud->save();   
        return redirect()->back()->with('success', 'Unit successfully added');
       
       }  
       public function getunit(Request $request){
        $plant = Unit::where('id',$request->id)->get();
        echo json_encode($plant);
       }  
       public function updateunit(Request $request){

        $id= $request->id;
        $data= array(
          'unit_name'=>$request->get('unit_name'),
        );

        Unit::whereId($id)->update($data);
        return redirect()->back()->with('success', 'Unit successfully updated');
       } 

     public function deleteunit($id){
       
        $data= array(
          'status'=>0,
        );
        Unit::whereId($id)->update($data);
        return redirect()->back()->with('failed', 'Unit successfully deleted');
       } 



         public function leadsource(){
          $leadsource = LeadSource::where('status',1)->get();
        return view('master_m.leadsource')->with('leadsource',$leadsource);
       }

       public function addleadsource(Request $request){

        $wordlist = LeadSource::get();
        $wordCount = $wordlist->count();

       $comp = "SARA-UNIT-".$wordCount+1;
        $request->validate([
          'l_source_name' => 'required|max:255',
        ]); 

        $crud = new LeadSource;  
        $crud->l_source_name =  $request->get('l_source_name');  
        $crud->c_id =  $comp; 
        $crud->save();   
        return redirect()->back()->with('success', 'Lead Source successfully added');
       
       }  
       public function getleadsource(Request $request){
        $plant = LeadSource::where('id',$request->id)->get();
        echo json_encode($plant);
       }  
       public function updateleadsource(Request $request){

        $id= $request->id;
        $data= array(
          'l_source_name'=>$request->get('l_source_name'),
        );

        LeadSource::whereId($id)->update($data);
        return redirect()->back()->with('success', 'Lead Source successfully updated');
       } 

     public function deleteleadsource($id){
       
        $data= array(
          'status'=>0,
        );
        LeadSource::whereId($id)->update($data);
        return redirect()->back()->with('failed', 'Lead Source successfully deleted');
       } 

       
}
