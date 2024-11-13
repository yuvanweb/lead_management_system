<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Company;
use App\Models\Form;
use App\Models\Plant;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Sales;
use App\Models\Type;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SalesController extends Controller
{
    public function index(){

        $company = Company::where('status',1)->get();
        $plant = Plant::where('status',1)->get();
        $colors = Color::where('status',1)->get();
        $brand = Brand::where('status',1)->get();
        $form = Form::where('status',1)->get();
        $product = Product::where('status',1)->get();
        $unit = Unit::where('status',1)->get();
        $user = User::where('status',1)->get();
        $type = Type::where('status',1)->get();
      
           
        $customer = DB::table('customers')
        
        ->leftJoin('lead_sources', 'customers.converted_lead', '=', 'lead_sources.id')
        ->leftJoin('categories', 'customers.customer_categoty', '=', 'categories.id')
        ->select('customers.*', 'lead_sources.l_source_name', 'categories.categorie_name')
        ->where('customers.status',1)
        ->get();


        $sales = DB::table('sales')
                
        ->leftJoin('companies', 'sales.company', '=', 'companies.id')
        ->leftJoin('products', 'sales.product', '=', 'products.id')
        ->leftJoin('units', 'sales.unit', '=', 'units.id')
        ->leftJoin('forms', 'sales.form', '=', 'forms.id')
        ->leftJoin('colors', 'sales.color', '=', 'colors.id')
        ->leftJoin('customers', 'sales.customer', '=', 'customers.id')
        ->leftJoin('types', 'sales.type', '=', 'types.id')
        ->select('sales.*', 
                'companies.company_name',
                'products.product_name',
                'units.unit_name',
                'forms.form_name',
                'colors.color_name',
                'types.type_name',
                'customers.customer_name')
                ->where('sales.status',1)
                ->get();
       return view('sales.index')->with('sales',$sales)->with('user',$user)->with('company',$company)->with('plant',$plant)->with('colors',$colors)->with('brand',$brand)->with('form',$form)->with('product',$product)->with('type',$type)->with('unit',$unit)->with('customer',$customer);
       
      } 
       
       public function addSales(Request $request){


      //  print_r( $request->all());exit;
        $customer = new Sales();  
        $customer->sales_date =  $request->date;  
        $customer->company =  $request->company;  
        $customer->product =  $request->product;  
        $customer->unit =  $request->unit;  
        $customer->type =  $request->type;  
        $customer->brand =  $request->brand;  
        $customer->color =  $request->color;  
        $customer->form =  $request->form;  
        $customer->customer =  $request->customer;  
        $customer->qnt = $request->qut; 
        $customer->sales_rep = $request->rep; 
       
        $customer->save();
        return redirect()->back()->with('success', 'Sales data Successfully created');
       }  
       public function getSales(Request $request){
    
        $plant =  Sales::where('id',$request->id)->get();
       echo json_encode($plant);
      }  


       public function dashboard(){

        $date = date("Y-m")."-01";
       

        $total_qty = Sales::select(DB::raw('SUM(sales.qnt) As qunty'))
                ->leftJoin('companies', 'sales.company', '=', 'companies.id')
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$date)
               // ->groupBy('sales.company')
                ->get(); 
                
        $comp_qty = Sales::select(DB::raw('SUM(sales.qnt) As qunty'),'companies.company_name')
                ->leftJoin('companies', 'sales.company', '=', 'companies.id')
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$date)
                ->groupBy('sales.company')->get();
                        
        $prod_qty = Sales::select(DB::raw('SUM(sales.qnt) As qunty'),'products.product_name')
                ->leftJoin('products', 'sales.product', '=', 'products.id')
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$date)
                ->groupBy('sales.product')->get();


        $qtys = Product::where('status',1)->get();
        $purchasevssales=[];
        foreach ($qtys as $key => $value) {

                $comp_qtys = Sales::select(DB::raw('SUM(sales.qnt) As s_qunty'))
                ->where('sales.product',$value->id)
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$date)
                ->get();
                        
                $prod_qtys = Purchase::select(DB::raw('SUM(purchases.qnt) As p_qunty'))
                        ->where('purchases.product',$value->id)
                        ->where('purchases.status',1)
                        ->where('purchases.created_at','>=',$date)
                        ->get();
        
                $purchasevssales['sales'][$key] = $comp_qtys[0]->s_qunty==NULL?0:$comp_qtys[0]->s_qunty;
                $purchasevssales['purchase'][$key] = $prod_qtys[0]->p_qunty==NULL?0:$prod_qtys[0]->p_qunty;
                $purchasevssales['name'][$key] = $value->product_name;

        }
 
$product_type = Product::select(DB::raw('SUM(sales.qnt) As qunty'),'products.product_name')
->leftJoin('sales', 'sales.product', '=', 'products.id')
->where('sales.status',1)
->where('sales.created_at','>=',$date)
->groupBy('products.id')
->get();



$product_type = Product::select(DB::raw('SUM(sales.qnt) As qunty'),'products.product_name')
->leftJoin('sales', 'sales.product', '=', 'products.id')
->where('sales.status',1)
->where('sales.created_at','>=',$date)
->groupBy('products.id')
->get();
/* echo"<pre>";
print_r($product_type);exit; */



$gp_diff_type = 


Sales::select(DB::raw('SUM(sales.qnt) As s_qunty'),'types.type_name')
        ->leftJoin('products', 'sales.product', '=', 'products.id')
        ->leftJoin('types', 'sales.type', '=', 'types.id')
                ->where('sales.product',1)
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$date)
                ->groupBy('sales.type')
                ->get();
                
$gpgl_diff_type = Sales::select(DB::raw('SUM(sales.qnt) As s_qunty'),'types.type_name')
        ->leftJoin('products', 'sales.product', '=', 'products.id')
        ->leftJoin('types', 'sales.type', '=', 'types.id')
                ->where('sales.product',2)
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$date)
                ->groupBy('sales.type')
                ->get();
                
  

                $unit = Sales::select(DB::raw('SUM(sales.qnt) As s_qunty'),'units.unit_name')
                ->leftJoin('units', 'sales.unit', '=', 'units.id')
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$date)
                ->groupBy('sales.unit')
                ->get();

                $brand = Sales::select(DB::raw('SUM(sales.qnt) As s_qunty'),'brands.brand_name')
                ->leftJoin('brands', 'sales.brand', '=', 'brands.id')
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$date)
                ->groupBy('brands.id')
                ->get();


                $forms = Sales::select(DB::raw('SUM(sales.qnt) As s_qunty'),'forms.form_name')
                ->leftJoin('forms', 'sales.form', '=', 'forms.id')
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$date)
                ->groupBy('sales.form')
                ->get();


                $categories = Sales::select(DB::raw('SUM(sales.qnt) As s_qunty'),'categories.categorie_name')
                ->leftJoin('customers', 'sales.customer', '=', 'customers.id')
               
                ->leftJoin('categories', 'customers.customer_categoty', '=', 'categories.id')
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$date)
                ->groupBy('categories.id')
                ->get();

        return view('sales.dashboard')->with('total_qty',$total_qty)->with('brand',$brand)->with('categories',$categories)->with('forms',$forms)->with('unit',$unit)->with('gp_diff_type',$gp_diff_type)->with('gpgl_diff_type',$gpgl_diff_type)->with('comp_qty',$comp_qty)->with('prod_qty',$prod_qty)->with('purchasevssales',$purchasevssales)->with('product_type',$product_type);
       } 
 public function monthlyDashboard(Request $request){

        $date = $request->date;

        $month = date('m',strtotime($request->date));
       $year = date('Y',strtotime($request->date));
       $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);

       $from = $year."-".$month."-1";
       $to = $year."-".$month ."-".$days;
       
echo $from."/".$to;
        $total_qty = Sales::select(DB::raw('SUM(sales.qnt) As qunty'))
                ->leftJoin('companies', 'sales.company', '=', 'companies.id')
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$from)
                ->where('sales.created_at','<=',$to)
               // ->groupBy('sales.company')
                ->get(); 
                
        $comp_qty = Sales::select(DB::raw('SUM(sales.qnt) As qunty'),'companies.company_name')
                ->leftJoin('companies', 'sales.company', '=', 'companies.id')
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$from)
                ->where('sales.created_at','<=',$to)
                ->groupBy('sales.company')->get();
                        
        $prod_qty = Sales::select(DB::raw('SUM(sales.qnt) As qunty'),'products.product_name')
                ->leftJoin('products', 'sales.product', '=', 'products.id')
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$from)
                ->where('sales.created_at','<=',$to)
                ->groupBy('sales.product')->get();


        $qtys = Product::where('status',1)->get();
        $purchasevssales=[];
        foreach ($qtys as $key => $value) {

                $comp_qtys = Sales::select(DB::raw('SUM(sales.qnt) As s_qunty'))
                ->where('sales.product',$value->id)
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$from)
                ->where('sales.created_at','<=',$to)
                ->get();
                        
                $prod_qtys = Purchase::select(DB::raw('SUM(purchases.qnt) As p_qunty'))
                        ->where('purchases.product',$value->id)
                       
                        ->where('purchases.created_at','>=',$from)
                        ->where('purchases.created_at','<=',$to)
                        ->get();
        
                $purchasevssales['sales'][$key] = $comp_qtys[0]->s_qunty==NULL?0:$comp_qtys[0]->s_qunty;
                $purchasevssales['purchase'][$key] = $prod_qtys[0]->p_qunty==NULL?0:$prod_qtys[0]->p_qunty;
                $purchasevssales['name'][$key] = $value->product_name;

        }

     /*    echo"<pre>";
        print_r($purchasevssales);
        exit; */



 
$product_type = Product::select(DB::raw('SUM(sales.qnt) As qunty'),'products.product_name')
->leftJoin('sales', 'sales.product', '=', 'products.id')
->where('sales.status',1)
->where('sales.created_at','>=',$from)
->where('sales.created_at','<=',$to)
->groupBy('products.id')
->get();



$product_type = Product::select(DB::raw('SUM(sales.qnt) As qunty'),'products.product_name')
->leftJoin('sales', 'sales.product', '=', 'products.id')
->where('sales.status',1)
->where('sales.created_at','>=',$from)
->where('sales.created_at','<=',$to)
->groupBy('products.id')
->get();
/* echo"<pre>";
print_r($product_type);exit; */



$gp_diff_type = 


Sales::select(DB::raw('SUM(sales.qnt) As s_qunty'),'types.type_name')
        ->leftJoin('products', 'sales.product', '=', 'products.id')
        ->leftJoin('types', 'sales.type', '=', 'types.id')
                ->where('sales.product',1)
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$from)
                ->where('sales.created_at','<=',$to)
                ->groupBy('sales.type')
                ->get();
                
$gpgl_diff_type = Sales::select(DB::raw('SUM(sales.qnt) As s_qunty'),'types.type_name')
        ->leftJoin('products', 'sales.product', '=', 'products.id')
        ->leftJoin('types', 'sales.type', '=', 'types.id')
                ->where('sales.product',2)
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$from)
                ->where('sales.created_at','<=',$to)
                ->groupBy('sales.type')
                ->get();
                
  

                $unit = Sales::select(DB::raw('SUM(sales.qnt) As s_qunty'),'units.unit_name')
                ->leftJoin('units', 'sales.unit', '=', 'units.id')
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$from)
                ->where('sales.created_at','<=',$to)
                ->groupBy('sales.unit')
                ->get();

                $brand = Sales::select(DB::raw('SUM(sales.qnt) As s_qunty'),'brands.brand_name')
                ->leftJoin('brands', 'sales.brand', '=', 'brands.id')
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$from)
                ->where('sales.created_at','<=',$to)
                ->groupBy('brands.id')
                ->get();


                $forms = Sales::select(DB::raw('SUM(sales.qnt) As s_qunty'),'forms.form_name')
                ->leftJoin('forms', 'sales.form', '=', 'forms.id')
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$from)
                ->where('sales.created_at','<=',$to)
                ->groupBy('sales.form')
                ->get();


                $categories = Sales::select(DB::raw('SUM(sales.qnt) As s_qunty'),'categories.categorie_name')
                ->leftJoin('customers', 'sales.customer', '=', 'customers.id')
               
                ->leftJoin('categories', 'customers.customer_categoty', '=', 'categories.id')
                ->where('sales.status',1)
                ->where('sales.created_at','>=',$from)
                ->where('sales.created_at','<=',$to)
                ->groupBy('categories.id')
                ->get();

        return view('sales.dashboard')->with('total_qty',$total_qty)->with('brand',$brand)->with('categories',$categories)->with('forms',$forms)->with('unit',$unit)->with('gp_diff_type',$gp_diff_type)->with('gpgl_diff_type',$gpgl_diff_type)->with('comp_qty',$comp_qty)->with('prod_qty',$prod_qty)->with('purchasevssales',$purchasevssales)->with('product_type',$product_type);
       } 
       
       public function reports(){
        return view('sales.reports');
       }
}
