<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Company;
use App\Models\Plant;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Sales;
use App\Models\Type;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function index(){
        $company = Company::where('status',1)->get();
        $plant = Plant::where('status',1)->get();
        $unit = Unit::where('status',1)->get();
        $product = Product::where('status',1)->get();
        $brand = Brand::where('status',1)->get();
        $type = Type::where('status',1)->get();
 
        $purchases = DB::table('purchases')
        ->leftJoin('companies', 'purchases.company', '=', 'companies.id')
        ->leftJoin('products', 'purchases.product', '=', 'products.id')
        ->leftJoin('units', 'purchases.unit', '=', 'units.id')
        ->leftJoin('plants', 'purchases.plant', '=', 'plants.id')
        ->leftJoin('brands', 'purchases.brand', '=', 'brands.id')
        ->leftJoin('types', 'purchases.type', '=', 'types.id')
        ->select('purchases.*', 
                'companies.company_name',
                'products.product_name',
                'units.unit_name',
                'plants.plant_name',
                'types.type_name',
                'brands.brand_name')
                ->where('purchases.status',1)
                ->get();
//print_r($purchases);exit;
        return view('purchase.index')->with('purchases',$purchases)->with('company',$company)->with('plant',$plant)->with('brand',$brand)->with('product',$product)->with('type',$type)->with('unit',$unit);
        return redirect()->back()->with('success', 'Purchase data Successfully created');  
    } 
       
       public function addpurchase(Request $request){
        $customer = new Purchase();  
        $customer->purchase_date =  $request->created_date;  
        $customer->company =  $request->company;  
        $customer->product =  $request->product;  
        $customer->unit =  $request->unit;  
        $customer->type =  $request->type;  
        $customer->brand =  $request->brand;  
        $customer->plant =  $request->plant;  
        $customer->qnt = $request->qut; 
             
        $customer->save();
        return redirect()->back()->with('success', 'Purchase data Successfully created');
       }
       public function getpurchase(Request $request){
       $plant =  Purchase::where('id',$request->id)->get();
       echo json_encode($plant);
      } 
       public function updatepurchase(Request $request){

        $id= $request->id;
        $data= array(
          'purchase_date'=> $request->created_date,
          'company'=>$request->company,
          'product'=>$request->product,
          'unit'=>$request->unit,
          'brand'=>$request->brand,
          'type'=>$request->type,
          'plant'=>$request->plant,
          'qnt'=>$request->qut,
        );
        Purchase::whereId($id)->update($data);
        return redirect()->back()->with('success', 'Purchase data Successfully Updated');
       }

       public function deletepurchase($id){
        $data= array(
          'status'=>0,
        );
        Purchase::whereId($id)->update($data);
        return redirect()->back()->with('failed', 'Purchase successfully deleted');
       } 
       public function dashboard(){


        $date = date("Y-m")."-01";
       

        $total_qty = Purchase::select(DB::raw('SUM(purchases.qnt) As qunty'))
                ->leftJoin('companies', 'purchases.company', '=', 'companies.id')
                ->where('purchases.status',1)
                ->where('purchases.created_at','>=',$date)
               // ->groupBy('purchases.company')
                ->get(); 
                
        $comp_qty = Purchase::select(DB::raw('SUM(purchases.qnt) As qunty'),'companies.company_name')
                ->leftJoin('companies', 'purchases.company', '=', 'companies.id')
                ->where('purchases.status',1)
                ->where('purchases.created_at','>=',$date)
                ->groupBy('purchases.company')->get();
                        
        $prod_qty = Purchase::select(DB::raw('SUM(purchases.qnt) As qunty'),'products.product_name')
                ->leftJoin('products', 'purchases.product', '=', 'products.id')
                ->where('purchases.status',1)
                ->where('purchases.created_at','>=',$date)
                ->groupBy('purchases.product')->get();


    
$product_type = Product::select(DB::raw('SUM(purchases.qnt) As qunty'),'products.product_name')
->leftJoin('purchases', 'purchases.product', '=', 'products.id')
->where('purchases.status',1)
->where('purchases.created_at','>=',$date)
->groupBy('products.id')
->get();



$product_type = Product::select(DB::raw('SUM(purchases.qnt) As qunty'),'products.product_name')
->leftJoin('purchases', 'purchases.product', '=', 'products.id')
->where('purchases.status',1)
->where('purchases.created_at','>=',$date)
->groupBy('products.id')
->get();
/* echo"<pre>";
print_r($product_type);exit; */



$gp_diff_type = 


Purchase::select(DB::raw('SUM(purchases.qnt) As s_qunty'),'types.type_name')
        ->leftJoin('products', 'purchases.product', '=', 'products.id')
        ->leftJoin('types', 'purchases.type', '=', 'types.id')
                ->where('purchases.product',1)
                ->where('purchases.status',1)
                ->where('purchases.created_at','>=',$date)
                ->groupBy('purchases.type')
                ->get();
                
$gpgl_diff_type = Purchase::select(DB::raw('SUM(purchases.qnt) As s_qunty'),'types.type_name')
        ->leftJoin('products', 'purchases.product', '=', 'products.id')
        ->leftJoin('types', 'purchases.type', '=', 'types.id')
                ->where('purchases.product',2)
                ->where('purchases.status',1)
                ->where('purchases.created_at','>=',$date)
                ->groupBy('purchases.type')
                ->get();
                
  

                $unit = Purchase::select(DB::raw('SUM(purchases.qnt) As s_qunty'),'units.unit_name')
                ->leftJoin('units', 'purchases.unit', '=', 'units.id')
                ->where('purchases.status',1)
                ->where('purchases.created_at','>=',$date)
                ->groupBy('purchases.unit')
                ->get();

                $brand = Purchase::select(DB::raw('SUM(purchases.qnt) As s_qunty'),'brands.brand_name')
                ->leftJoin('brands', 'purchases.brand', '=', 'brands.id')
                ->where('purchases.status',1)
                ->where('purchases.created_at','>=',$date)
                ->groupBy('brands.id')
                ->get();




              
        return view('purchase.dashboard')->with('total_qty',$total_qty)->with('brand',$brand)->with('unit',$unit)->with('gp_diff_type',$gp_diff_type)->with('gpgl_diff_type',$gpgl_diff_type)->with('comp_qty',$comp_qty)->with('prod_qty',$prod_qty)->with('product_type',$product_type);
       } 
       
       public function reports(){
        return view('purchase.reports');
       }
}
