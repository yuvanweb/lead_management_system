<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Lead;
use App\Models\LeadSource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeadController extends Controller
{
    public function index(){

       // $lead = Lead::where('status',1)->get();
        $lead = DB::table('leads')
        ->join('lead_sources','leads.lead_source', '=', 'lead_sources.id')
       
        ->select('leads.*','lead_sources.l_source_name')
        ->where('leads.status',1)
        ->get();
        $leadsource = LeadSource::where('status',1)->get();
         return view('lead.index')->with('lead',$lead)->with('leadsource',$leadsource);

       } 
       
       public function addLead(Request $request){

        
      $lead = new Lead;  
      $lead->lead_created_by_name =  $request->get('lead_created_by_name');  
      $lead->date_enquires =  $request->get('date_enquires');  
      $lead->customer_name =  $request->get('customer_name');  
      $lead->customer_email =  $request->get('customer_email');  
      $lead->customer_contact_no =  $request->get('customer_contact_no');  
      $lead->item_enquired =  $request->get('item_enquired');  
      $lead->price_quoted =  $request->get('price_quoted');  
      $lead->qty =  $request->get('qty');  
      $lead->lead_source =  $request->get('lead_source');  
   
      $lead->save();   
      return redirect()->back()->with('success', 'Lead successfully added');
       
    
    }


    public function getLead(Request $request){
          $lead = DB::table('leads')
        ->join('lead_sources','leads.lead_source', '=', 'lead_sources.id')
       
        ->select('leads.*','lead_sources.l_source_name')
       // ->where('leads.status',1)
        ->where('leads.id',$request->id)
        ->get();
     
        
      
        echo json_encode($lead);
       } 
       public function updateLead(Request $request){
        
        $id= $request->id;
        $data= array(
          'lead_created_by_name'=>$request->get('lead_created_by_name'),
          'date_enquires'=>$request->get('date_enquires'),
          'customer_name'=>$request->get('customer_name'),
          'customer_email'=>$request->get('customer_email'),
          'customer_contact_no'=>$request->get('customer_contact_no'),
          'item_enquired'=>$request->get('item_enquired'),
          'price_quoted'=>$request->get('price_quoted'),
          'qty'=>$request->get('qty'),
          'lead_source'=>$request->get('lead_source'),
          'lead_status'=>$request->get('elead_status'),
          'reason'=>$request->get('reason'),
        );
    
        Lead::whereId($id)->update($data);

        if($request->get('elead_status') == 2){
              $wordlist = Customer::get();
              $wordCount = $wordlist->count();

              $comp = "SARA-CUS-".$wordCount+1;
              $custmer = new Customer;
              $custmer->customer_name =  $request->get('customer_name');  
              $custmer->customer_email =  $request->get('customer_email');  
              $custmer->customer_contact_no =  $request->get('customer_contact_no');  
              $custmer->converted_lead =  $request->id;  
              $custmer->customer_unique_code =  $comp;  
              $custmer->save();   
              return redirect()->back()->with('success', 'Lead Converted to Customer Successfully');
        }

        return redirect()->back()->with('success', 'Lead updated Successfully');

       }



       public function deleteLead(Request $request){
        $id = $request->id;
        $data= array(
          'status'=>0,
        );
        Lead::whereId($id)->update($data);
        return redirect()->back()->with('failed', 'Lead deleted Successfully');
      }

      public function dashboard(){

         $current = date('Y-m')."-01 00:00:00";

        // echo $cd = date('Y-m-d h:i:s',strtotime($current));


        $total_cur_lead = Lead::where('date_enquires','>=',$current)->where('status',1)->get();
        $currentleadcount = $total_cur_lead->count(); 
        
        $total_lead = Lead::where('status',1)->get();
         $totalleadcount = $total_lead->count();


         $ex_cur_lead = Lead::where('date_enquires','>=',$current)->where('status',1)->where('lead_source',1)->get();
        $exleadcount = $ex_cur_lead->count(); 


        $nw_cur_lead = Lead::where('date_enquires','>=',$current)->where('status',1)->where('lead_source',2)->get();
        $nwleadcount = $nw_cur_lead->count();
        
        
        
        $n_lead = Lead::where('status',1)->where('lead_status',1)->get();
        $c_lead = Lead::where('status',1)->where('lead_status',2)->get();
        $nc_lead = Lead::where('status',1)->where('lead_status',3)->get();
        $status['cnt_n_lead'] = $n_lead->count(); 
        $status['cnt_c_lead'] = $c_lead->count(); 
        $status['cnt_nc_lead'] = $nc_lead->count(); 
        
       // exit;
        return view('lead.dashboard')->with('currentleadcount',$currentleadcount)->with('totalleadcount',$totalleadcount)->with('exleadcount',$exleadcount)->with('nwleadcount',$nwleadcount)->with('status',$status);

      } 
       
       public function leadDashboardData(Request $request){
        $date = $request->date;
        $month = date('m',strtotime($date));
       // $month = date('m',strtotime($date))+1;
        $year = date('Y',strtotime($date));
        $dayss = cal_days_in_month(CAL_GREGORIAN, $month, $year);


        $from = date('Y-m-d',strtotime($year."-".$month."-01"));
        $to = date('Y-m-d',strtotime($year."-".$month."-".$dayss));
        $text_m = date('F',strtotime($year."-".$month."-".$dayss));

        $lead['month_name'] =  $text_m;
        $lead['c_month'] =  Lead::whereBetween('date_enquires', [$from, $to])->where('status',1)->get()->count();
        $lead['exe'] =  Lead::whereBetween('date_enquires', [$from, $to])->where('status',1)->where('lead_source',1)->get()->count();
        $lead['new'] =  Lead::whereBetween('date_enquires', [$from, $to])->where('status',1)->where('lead_source',2)->get()->count();
 echo json_encode($lead);
       // echo $dayss = cal_days_in_month(CAL_GREGORIAN, $month, $year);

       }
       public function reports(){
        return view('lead.reports');
       }
}
