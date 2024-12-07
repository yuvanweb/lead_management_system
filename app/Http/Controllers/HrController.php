<?php

namespace App\Http\Controllers;

use App\Models\Bank_detail;
use App\Models\Holidays;
use App\Models\LoanDue;
use App\Models\LoanMaster;
use App\Models\Personal_detail;
use App\Models\staffAttendance;
use App\Models\StaffMonthlyLeave;
use App\Models\StaffPayScale;
use App\Models\StaffPaySlip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use DateInterval;
use DatePeriod;
use DateTime;

class HrController extends Controller
{
  
    public function dashboard()
    {
        /*       echo"<pre>";
                 print_r(Auth::user());
                 print_r(Auth::user()->location_id);
                 exit; */

                 $location_id = Auth::user()->location_id;




                 $total =   User::select(DB::raw('SUM(users.status) As tot'))
                 ->join("roles", "users.role", "=", "roles.id")
                     ->where("users.id", "!=", 1)
                     ->where("users.location_id", $location_id)
                     ->where("users.status", 1)
                
                ->get();
                
                
                $user =   User::select(DB::raw('SUM(users.status) As tot'),'roles.role_name')
                 ->join("roles", "users.role", "=", "roles.id")
                // ->leftJoin("companies", "users.company_id", "=", "companies.id")
                // ->leftJoin("locations", "users.location_id", "=", "locations.id")
                 ->where("users.id", "!=", 1)
                     ->where("users.location_id", $location_id)
                     ->where("users.status", 1)
                ->groupBy('users.role')
                ->get();
/* echo "<pre>";
            print_r($user);
            exit; */




        return view("hr.dashboard")->with("user", $user)->with("total", $total);
    }

    public function index()
    {
        $location_id = Auth::user()->location_id;

        $user = DB::table("users")
            ->join("roles", "users.role", "=", "roles.id")
            ->leftJoin("companies", "users.company_id", "=", "companies.id")
            ->leftJoin("locations", "users.location_id", "=", "locations.id")

            ->select(
                "users.*",
                "roles.role_name",
                "companies.company_name",
                "locations.location_name"
            )
            ->where("users.id", "!=", 1)
            ->where("users.location_id", $location_id)
            ->where("users.status", 1)
            ->get();

        return view("hr.index")->with("user", $user);
    }
    public function viewemployee(Request $request)
    {
        $id = $request->id;

        $location_id = Auth::user()->location_id;
        $user = DB::table("users")
            ->join("roles", "users.role", "=", "roles.id")
            ->leftJoin("companies", "users.company_id", "=", "companies.id")
            ->leftJoin("locations", "users.location_id", "=", "locations.id")
            ->leftJoin("staff_monthly_leaves", "users.id", "=", "staff_monthly_leaves.user_id")
            ->leftJoin(
                "personal_details",
                "users.id",
                "=",
                "personal_details.user_id"
            )
            ->leftJoin("bank_details", "users.id", "=", "bank_details.user_id")
            ->select(
                "users.*",
                "users.id as u_id",
                "users.status as u_status",
                "personal_details.*",
                "bank_details.*",
                "roles.role_name",
                "companies.company_name",
                "staff_monthly_leaves.leave_per_month",
                "locations.location_name"
            )
            ->where("users.id", "!=", 1)
            ->where("users.location_id", $location_id)
            ->where("users.id", $id)
            //  ->where('users.status',1)
            ->get();
                $date=date('Y')."-1-1";
        $atttend = staffAttendance::where('user_id',$id)->where('attendance_status', '!=' , 1)->where('attendance_date', '>=' ,$date)->get();

        return view("hr.viewemployee")->with("user", $user)->with("atttend", $atttend);
    }

    public function updateUser(Request $request)
    {
        $id = $request->id;
        /*   if($request->status=="ON"){$status = 1;}else{
                     $status = 0;    
               }; */

        $user = [
            "joining_date" => $request->date_of_join,
            //   'status' =>  $status
        ];

        User::whereId($id)->update($user);
        return redirect()
            ->back()
            ->with("success", "User successfully updated");
    }

    public function updatePersonal(Request $request)
    {
        $id = $request->id;

        $wordlist = Personal_detail::where("user_id", $id)->get();
        $wordCount = $wordlist->count();

        if ($wordCount == 0) {
            $user = new Personal_detail();
            $user->personal_mail_id = $request->personal_mail_id;
            $user->personal_mobile_number = $request->personal_mobile_number;
            $user->emergency_mobile_number = $request->emergency_mobile_number;
            $user->date_of_birth = $request->date_of_birth;
            $user->shift_detailes = $request->shift_detailes;
            $user->gender = $request->gender;
            $user->blood_group = $request->blood_group;
            $user->father_name = $request->father_name;
            $user->spouse_name = $request->spouse_name;
            $user->address = $request->address;
            $user->user_id = $request->id;

            $user->save();
            return redirect()
                ->back()
                ->with("success", "Personal Detailes successfully updated");
        } else {
            $data = [
                "personal_mail_id" => $request->personal_mail_id,
                "personal_mobile_number" => $request->personal_mobile_number,
                "emergency_mobile_number" => $request->emergency_mobile_number,
                "date_of_birth" => $request->date_of_birth,
                "shift_detailes" => $request->shift_detailes,
                "gender" => $request->gender,
                "blood_group" => $request->blood_group,
                "father_name" => $request->father_name,
                "spouse_name" => $request->spouse_name,
                "address" => $request->address,
            ];
            Personal_detail::where("user_id", $id)->update($data);
            return redirect()
                ->back()
                ->with("success", "Personal Detailes successfully updated");
        }
    }

    public function updateBank(Request $request)
    {
        $id = $request->id;

        $wordlist = Bank_detail::where("user_id", $id)->get();
        $wordCount = $wordlist->count();

        if ($wordCount == 0) {
            $user = new Bank_detail();
            $user->aadhar_number = $request->aadhar_number;
            $user->pan_number = $request->pan_number;
            $user->bank_number = $request->bank_number;
            $user->account_number = $request->account_number;
            $user->ifsc_number = $request->ifsc_number;
            $user->pf_joining_date = $request->pf_joining_date;
            $user->pf_number = $request->pf_number;
            $user->est_number = $request->est_number;

            $user->user_id = $request->id;

            $user->save();
            return redirect()
                ->back()
                ->with("success", "Bank Detailes successfully updated");
        } else {
            $data = [
                "aadhar_number" => $request->aadhar_number,
                "pan_number" => $request->pan_number,
                "bank_number" => $request->bank_number,
                "account_number" => $request->account_number,
                "ifsc_number" => $request->ifsc_number,
                "pf_joining_date" => $request->pf_joining_date,
                "pf_number" => $request->pf_number,
                "est_number" => $request->est_number,
            ];
            Bank_detail::where("user_id", $id)->update($data);
            return redirect()
                ->back()
                ->with("success", "Bank Detailes successfully updated");
        }
    } public function updateLeaveDetails(Request $request)
    {
        $id = $request->id;

        $wordlist = StaffMonthlyLeave::where("user_id", $id)->get();
        $wordCount = $wordlist->count();

        if ($wordCount == 0) {
            $user = new StaffMonthlyLeave;
            $user->leave_per_month = $request->leave_per_month;
            $user->user_id = $request->id;

            $user->save();
            return redirect()
                ->back()
                ->with("success", "Leave Detailes successfully updated");
        } else {
            $data = [
                "leave_per_month" => $request->leave_per_month,
                ];
            StaffMonthlyLeave::where("user_id", $id)->update($data);
            return redirect()
                ->back()
                ->with("success", "Leave Detailes successfully updated");
        }
    }
    public function editemployee()
    {
        return view("hr.editemployee");
    }

    public function holiday()
    {
        $s_date = date("Y") . "-1-1";
        $holidays = Holidays::where("status", 1)
            ->where("date_of_holiday", ">=", $s_date)
            ->get();
        return view("hr.holiday")->with("holidays", $holidays);
    }

    public function addHolidays(Request $request)
    {
        $user = new Holidays();
        $user->date_of_holiday = $request->date_of_holiday;
        $user->holiday = $request->holiday;
        $user->save();
        return redirect()
            ->back()
            ->with("success", "Holiday successfully added");
    }
    public function deleteHoliday($id)
    {
        $data = [
            "status" => 0,
        ];
        Holidays::whereId($id)->update($data);
        return redirect()
            ->back()
            ->with("failed", "Holiday successfully deleted");
    }
   
   

    public function markAttendance()
    {
        $s_date = date("Y") . "-1-1";
        $holidays = Holidays::where("status", 1)
            ->where("date_of_holiday", ">=", $s_date)
            ->get();
        $location_id = Auth::user()->location_id;
        $user = DB::table("users")
            ->join("roles", "users.role", "=", "roles.id")
            ->leftJoin("companies", "users.company_id", "=", "companies.id")
            ->leftJoin("locations", "users.location_id", "=", "locations.id")

            ->select(
                "users.*",
                "roles.role_name",
                "companies.company_name",
                "locations.location_name"
            )
            ->where("users.id", "!=", 1)
            ->where("users.location_id", $location_id)
            ->where("users.status", 1)
            ->get();

        return view("hr.mark_attendance")
            ->with("user", $user)
            ->with("holidays", $holidays);
    }
    public function getAttendance(Request $request)
    {
        $location_id = Auth::user()->location_id;
        $date = $request->date;

        $data = staffAttendance::where("attendance_date", $date)
            ->where("location_id", $location_id)
            ->get();
        $wordCount = $data->count();

        if ($wordCount == 0) {
            $user = DB::table("users")

             
                ->select("users.*")
                ->where("users.id", "!=", 1)
                ->where("users.location_id", $location_id)
                ->where("users.status", 1)
                //->where('staff_attendances.attendance_date',$date)
                ->get();

            //$attendance = staffAttendance::where('attendance_date',$date)->get();
            $html =
                "<input type='hidden' name='att_date' value='" .
                $request->date .
                "'><table class='table table-hover text-nowrap'>
  <tr>
    <th>Employee ID</th>
    <th>Name</th>
    <th>Present</th>
    <th>Leave</th>
    <th>Half Day</th>
  </tr>";
            foreach ($user as $key => $value) {
                $html .=
                    "<tr>
                     <td>" .
                    $value->employee_id .
                    "</td>
                     <td >" .
                    $value->name .
                    "<input type='hidden' name='user_id[]' value='" .
                    $value->id .
                    "'></td>
                     <td style='text-align: center; vertical-align: middle;'>
                     <input class='form-check-input' type='radio' name='attendence[" .
                    $value->id .
                    "]'  value='1' required>
                     </td>
                     <td style='text-align: center; vertical-align: middle;'> <input class='form-check-input' type='radio' name='attendence[" .
                    $value->id .
                    "]' value='0'>
                     </td>
                     <td style='text-align: center; vertical-align: middle;'> <input class='form-check-input' type='radio' name='attendence[" .
                    $value->id .
                    "]'  value='2'>
                     </td>
                     </tr>";
            }

            $html .=
                "<tr><td></td><td></td><td></td><td></td><td><button type='submit' class='btn btn-info mark_submit float-left '>Submit</button></td></tr></table>";
            echo $html;
        } else {
            $user = DB::table("users")

                ->leftJoin(
                    "staff_attendances",
                    "users.id",
                    "=",
                    "staff_attendances.user_id"
                )
                ->select("users.*", "staff_attendances.attendance_status")
                ->where("users.id", "!=", 1)
                ->where("users.location_id", $location_id)
                ->where("users.status", 1)
                ->where("staff_attendances.attendance_date", $date)
                ->get();
            /*  echo"<pre>";
              print_r($user);
              exit;  */

            $html =
                "<input type='hidden' name='att_date' value='" .
                $request->date .
                "'><table class='table table-hover text-nowrap'>
  <tr>
    <th>Employee ID</th>
    <th>Name</th>
    <th>Present</th>
    <th>Leave</th>
    <th>Half Day</th>
  </tr>";
            foreach ($user as $key => $value) {
                $att = $value->attendance_status;

                if ($att == 1) {
                    $per = "checked";
                } else {
                    $per = "";
                }
                if ($att == 0) {
                    $lev = "checked";
                } else {
                    $lev = "";
                }
                if ($att == 2) {
                    $hal = "checked";
                } else {
                    $hal = "";
                }
                $html .=
                    "<tr>
                     <td>" .
                    $value->employee_id .
                    "</td>
                     <td>" .
                    $value->name .
                    "<input type='hidden' name='user_id[]' value='" .
                    $value->id .
                    "'></td>
                     <td style='text-align: center; vertical-align: middle;'>
                     <input class='form-check-input' type='radio' name='attendence[" .
                    $value->id .
                    "]' " .
                    $per .
                    "   value='1'>
                     </td>
                     <td style='text-align: center; vertical-align: middle;'> <input class='form-check-input' " .
                    $lev .
                    " type='radio' name='attendence[" .
                    $value->id .
                    "]' value='0'>
                     </td>
                     <td style='text-align: center; vertical-align: middle;'> <input class='form-check-input' " .
                    $hal .
                    " type='radio' name='attendence[" .
                    $value->id .
                    "]'  value='2'>
                     </td>
                     </tr>";
            }

            $html .=
                "<tr><td></td><td></td><td></td><td></td><td><button type='submit' class='btn btn-info mark_submit float-left '>Submit</button></td></tr></table>";
            echo $html;
        }
    }
    public function updateAttendance(Request $request)
    {
        $location_id = Auth::user()->location_id;

        $att_date = $request->att_date;

        $data = staffAttendance::where("attendance_date", $att_date)
            ->where("location_id", $location_id)
            ->get();
        $wordCount = $data->count();

        $user_id = $request->user_id;

        if ($wordCount == 0) {
            if (sizeof($user_id) > 0) {
                foreach ($user_id as $key => $value) {
                    $user = new staffAttendance();
                    $user->user_id = $value;
                    $user->attendance_status = $request->attendence[$value];
                    $user->attendance_date = $request->att_date;
                    $user->location_id = $location_id;
                    $user->save();
                }
            }
        } else {
            foreach ($user_id as $key => $value) {
                $data = [
                    "attendance_status" => $request->attendence[$value],
                ];
                staffAttendance::where("attendance_date", $request->att_date)
                    ->where("user_id", $value)
                    ->update($data);
            }
        }

        return redirect()
            ->back()
            ->with("success", "Attendance marked successfully");
    }
    public function salarySetup()
    {
        $location_id = Auth::user()->location_id;

        $user = DB::table("users")
            ->join("roles", "users.role", "=", "roles.id")
            ->leftJoin("companies", "users.company_id", "=", "companies.id")
            ->leftJoin("locations", "users.location_id", "=", "locations.id")
            ->leftJoin("staff_pay_scales", "users.id", "=", "staff_pay_scales.user_id")

            ->select(
                "users.*",
                "users.id AS u_id",
                "staff_pay_scales.*",
                "roles.role_name",
                "companies.company_name",
                "locations.location_name"
            )
            ->where("users.id", "!=", 1)
            ->where("users.location_id", $location_id)
            ->where("users.status", 1)
            ->get();
        return view("hr.salarysetup_mod")->with("user", $user);
    }  
    
    public function calculatePayslip(Request $request,$id)
    {
        $location_id = Auth::user()->location_id;

        $user = DB::table("users")
            ->join("roles", "users.role", "=", "roles.id")
            ->leftJoin("companies", "users.company_id", "=", "companies.id")
            ->leftJoin("locations", "users.location_id", "=", "locations.id")
            ->leftJoin("staff_pay_scales", "users.id", "=", "staff_pay_scales.user_id")

            ->select(
                "users.*",
                "users.id AS u_id",
                "staff_pay_scales.*",
                "roles.role_name",
                "companies.company_name",
                "locations.location_name"
            )
            ->where("users.id", "!=", 1)
            ->where("users.location_id", $location_id)
            ->where("users.status", 1)
            ->where("users.id",$id)
            ->get();
        return view("hr.salarysetup_calculate")->with("user", $user);
    }
    public function addSalarySetup(Request $requests)
    {
            $id = $requests->user_id;

          /*   print_r( $requests->all()); */

            $location_id = Auth::user()->location_id;
            $data = StaffPayScale::where("id", $id)
          
            ->get();
        $wordCount = $data->count();

if($wordCount==0){

    $user = new StaffPayScale();
    $user->user_id = $requests->user_id;
    $user->basic = $requests->basic;
    $user->paypmonth = $requests->paypmonth;
    $user->da = $requests->da;
    $user->hra = $requests->hra;
    $user->conveyance = $requests->conveyance;
    $user->cca = $requests->cca;
    $user->bonus = $requests->bonus;
    $user->incentive = $requests->incentive;
    $user->gtotal = $requests->gtotal;
    $user->epf_deduction = $requests->epf_deduction;
    $user->esi = $requests->esi;
    $user->income_tax = $requests->income_tax;
    $user->loan = $requests->loan;
    $user->total = $requests->total;
    $user->save();
    }else{
    $data = array(
        'user_id' => $requests->user_id,
        'paypmonth' => $requests->paypmonth,
        'basic' => $requests->basic,
        'da' => $requests->da,
        'hra' => $requests->hra,
        'conveyance' => $requests->conveyance,
        'cca' => $requests->cca,
        'bonus' => $requests->bonus,
        'incentive' => $requests->incentive,
        'gtotal' => $requests->gtotal,
        'epf_deduction' => $requests->epf_deduction,
        'esi' => $requests->esi,
        'income_tax' => $requests->income_tax,
        'loan' => $requests->loan,
        'total' => $requests->total
    );

    StaffPayScale::where("user_id", $id)
    ->update($data);


    }


    return redirect()
    ->back()
    ->with("success", "Pay Scale Updated successfully");
}
    public function generatePayslip()
    {
       // return view("hr.reports");
       return view("hr.generate_pay_slip");
        
    } 
    
    
    public function generateMonthlyPayslip(Request $requests)
    {

        $location_id = Auth::user()->location_id;

        $user = DB::table("users")
            ->join("roles", "users.role", "=", "roles.id")
            ->leftJoin("companies", "users.company_id", "=", "companies.id")
            ->leftJoin("locations", "users.location_id", "=", "locations.id")
            ->rightJoin("staff_pay_scales", "users.id", "=", "staff_pay_scales.user_id")
            ->rightJoin("staff_monthly_leaves", "users.id", "=", "staff_monthly_leaves.user_id")

            ->select(
                "users.*",
                "users.id AS u_id",
                "staff_pay_scales.*",
                "roles.role_name",
                "companies.company_name",
                "staff_monthly_leaves.leave_per_month",
                "locations.location_name"
            )
            ->where("users.id", "!=", 1)
            ->where("users.location_id", $location_id)
            ->where("users.status", 1)
            ->get();


           /*      echo"<pre>";
            print_r($user);
            exit; */
 
       $month = date('m',strtotime($requests->date));
       $year = date('Y',strtotime($requests->date));
       $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        
       $table='
       <h4 class="text-danger text center"><b>  Note: If employee not listed please check the bellow condition</b><br> 1) Generate pay scale for the employee<br>
       2) Assign monthly leave in employee profile  </h4>
       
       <table class="table table-striped table-bordered" id="table_content"><thead><tr><th>Sl/No</th><th>Emp.ID</th><th>Name</th><th>Role</th>';

        $sunday = $this->countsunday($requests->date);
        $date = new Datetime($year.'-'.$month.'-01');

            for($i=1;$i<=(int)$days;$i++){

                $table.='<th>'.$i.'</th>';

            }
    $table.='<th>Present</th><th>Monthly Leave</th><th>Sunday</th><th>Leave Taken</th><th>LOP</th></tr>
    </thead><tbody>';
    $m=1;
    foreach ($user as $key => $value) {
        $table.='<tr>
        <td>'.$m.'</td>
        <td>'.$value->employee_id.'</td>
        <td>'.$value->name.'</td>
        <td>'.$value->role_name.'</td>';
        
      $present=$sunday;
      $leave =0;
      $lop = 0;
        for($i=1;$i<=(int)$days;$i++){
            $date=$year."-".$month."-".$i;
            $dayOfWeek = date('l', strtotime($date));
        $valuess = staffAttendance::where("attendance_date", $date)
                    ->where("user_id", $value->u_id)->get();
        $wordCount = $valuess->count();

                    if($wordCount==0){
                        if($dayOfWeek == 'Sunday'){
                            $daval = "OFF";
                        }else{
                            $daval = "NA";  
                        }
                       
                    }else{
                       

                        if($valuess[0]->attendance_status==0){
                            $daval ="A";
                            $present+=0;
                            $leave+=1;
                        }elseif($valuess[0]->attendance_status==1){
                            $daval ="P";  
                            $present+=1;
                        }elseif($valuess[0]->attendance_status==2){
                            $daval ="H"; 
                            $present+=.5;
                            $leave+=.5;
                        }

                    }

                $lop =    $value->leave_per_month - $leave;

                if($lop < 0){

                  
                        $mylop = $lop * -1;
                   
                }else{
                    $mylop = 0;

                }

              // $lop <= 0?$lop=$lop:0;

            $table.='<td>'. $daval.'</td>';
    
        }
        $table.='<td>'.$present.'</td>';
        $table.='<td>'.$value->leave_per_month.'</td>';
        $table.='<td>'.$sunday.'</td>';
        $table.='<td>'.$leave.'</td>';
        $table.='<td>'.$mylop.'</td>';
          $table.='</tr>';
        $m++;
    }
    
    
     $table.='</tbody></table>
     <div class="form-group row">
   <div class="col">
   <a href="generate-final-payslip/'.$location_id.'/'.$requests->date.'" id="btn-signup" type="button" class="btn btn-info text-right">Generate PaySlip</a>
    </div></div>';
   echo $table;
    
    }
    
    
    
    
    
    
    public function generateFinalPayslip(Request $request){
        $location_id =$request->id;

        $user = DB::table("users")
        ->join("roles", "users.role", "=", "roles.id")
        ->leftJoin("companies", "users.company_id", "=", "companies.id")
        ->leftJoin("locations", "users.location_id", "=", "locations.id")
        ->rightJoin("staff_pay_scales", "users.id", "=", "staff_pay_scales.user_id")
        ->rightJoin("staff_monthly_leaves", "users.id", "=", "staff_monthly_leaves.user_id")
        ->leftJoin("personal_details", "users.id", "=", "personal_details.user_id")
        ->leftJoin("bank_details", "users.id", "=", "bank_details.user_id")

        ->select(
            "users.*",
            "personal_details.*",
            "bank_details.*",
            "users.id AS u_id",
            "staff_pay_scales.*",
            "roles.role_name",
            "companies.company_name",
            "staff_monthly_leaves.leave_per_month",
            "locations.location_name"
        )
        ->where("users.id", "!=", 1)
        ->where("users.location_id", $location_id)
        ->where("users.status", 1)
        ->get();

   $month = date('m',strtotime($request->date));
   $year = date('Y',strtotime($request->date));
   $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);


   foreach($user as $value){
    $present=0;
    $leave=0;
    $sunday=0;
    for($i=1;$i<=(int)$days;$i++){
        $date=$year."-".$month."-".$i;
        $dayOfWeek = date('l', strtotime($date));
    $valuess = staffAttendance::where("attendance_date", $date)
                ->where("user_id", $value->u_id)->get();
    $wordCount = $valuess->count();

    if($wordCount==0){
        if($dayOfWeek == 'Sunday'){
            $sunday += 1;
        }
       
    }else{
       

        if($valuess[0]->attendance_status==0){
            $daval ="A";
            $present+=0;
            $leave+=1;
        }elseif($valuess[0]->attendance_status==1){
            $daval ="P";  
            $present+=1;
        }elseif($valuess[0]->attendance_status==2){
            $daval ="H"; 
            $present+=.5;
            $leave+=.5;
        }

    }
    $lop =    $value->leave_per_month - $leave;

    if($lop < 0){

      
            $mylop = $lop * -1;
       
    }else{
        $mylop = 0;

    }
    }

    $loan =  LoanDue::where("month", $month)
    ->where("year",$year)->where("user_id", $value->u_id)->get();

    $loanCount = $loan->count();

    if($loanCount==0){
        $amt=0;
    }else{
        $amt=$loan[0]->amount;
    }

   /* print_r($amt);
   exit; */
   
    $ps = StaffPaySlip::where("month", $month)
    ->where("year",$year)->where("user_id", $value->u_id)->get();

 

    $psCount = $ps->count();


    $gtot = $value->total;


   

    $pdsalary = $gtot / $days;

    if($mylop > 0){

$lopmycur = $pdsalary * $mylop;
    }else{

        $lopmycur = 0;  
    }

    $final_salary = $value->total - $lopmycur;

    if($psCount==0){


$payslp =array(
    "user_id"=>$value->u_id,
    "month"=>$month,
    "year"=>$year,
    "employee_id"=>$value->employee_id,
    "join_date"=>$value->joining_date==""?NULL:$value->joining_date,
    "emp_name"=>$value->name,
    "roll"=>$value->role_name,
    "company"=>$value->company_name,
    "location"=>$value->location_name,
    "aadhar_number"=>$value->aadhar_number==""?"Not-Updated":$value->aadhar_number,
    "pan_number"=>$value->pan_number==""?"Not-Updated":$value->pan_number,
    "bank_number"=>$value->bank_number==""?"Not-Updated":$value->bank_number,
    "account_number"=>$value->account_number==""?"Not-Updated":$value->account_number,
    "ifsc_number"=>$value->ifsc_number==""?"Not-Updated":$value->ifsc_number,
    "pf_joining_date"=>$value->pf_joining_date==""?"Not-Updated":$value->pf_joining_date,
    "pf_number"=>$value->pf_number==""?"Not-Updated":$value->pf_number,
    "est_number"=>$value->est_number==""?"Not-Updated":$value->est_number,
    "leave_taken"=>$leave,
    "leave_per_month"=>$value->leave_per_month,
    "total_day_present"=>$present,
    "basic"=>$value->basic==""?0:$value->basic,
    "da"=>$value->da==""?0:$value->da,
    "hra"=>$value->hra==""?0:$value->hra,
    "conveyance"=>$value->conveyance==""?0:$value->conveyance,
    "cca"=>$value->cca==""?0:$value->cca,
    "bonus"=>$value->bonus==""?0:$value->bonus,
    "incentive"=>$value->incentive==""?0:$value->incentive,
    "gtotal"=>$value->gtotal==""?0:$value->gtotal,
    "epf_deduction"=>$value->epf_deduction==""?0:$value->epf_deduction,
    "esi"=>$value->esi==""?0:$value->esi,
    "income_tax"=>$value->income_tax==""?0:$value->income_tax,
    "loan"=>$amt,
    "gross_earning"=>$value->total,
    "gross_deduction"=>$value->gtotal-$value->total,
    "lop"=>$mylop,
    "lop_deduction"=>number_format((float)$lopmycur, 2, '.', ''),
    "monthlt_total"=>number_format((float)$final_salary, 2, '.', ''),
    "pay_slip_genrated_gate"=>date('d-M-Y'),
);
$id = DB::table('staff_pay_slips')->insertGetId($payslp);


if($loanCount > 0){
    $due_is = array(
        'payslip_id'=>$id,
    );
    LoanDue::whereId($loan[0]->id)->update($due_is);
}

    }else{
/* $idp = $ps[0]->id;
        $payslp =array(
            "user_id"=>$value->u_id,
            "month"=>$month,
            "year"=>$year,
            "employee_id"=>$value->employee_id,
            "join_date"=>$value->joining_date==""?NULL:$value->joining_date,
            "emp_name"=>$value->name,
            "roll"=>$value->role_name,
            "company"=>$value->company_name,
            "location"=>$value->location_name,
            "aadhar_number"=>$value->aadhar_number==""?"Not-Updated":$value->aadhar_number,
            "pan_number"=>$value->pan_number==""?"Not-Updated":$value->pan_number,
            "bank_number"=>$value->bank_number==""?"Not-Updated":$value->bank_number,
            "account_number"=>$value->account_number==""?"Not-Updated":$value->account_number,
            "ifsc_number"=>$value->ifsc_number==""?"Not-Updated":$value->ifsc_number,
            "pf_joining_date"=>$value->pf_joining_date==""?"Not-Updated":$value->pf_joining_date,
            "pf_number"=>$value->pf_number==""?"Not-Updated":$value->pf_number,
            "est_number"=>$value->est_number==""?"Not-Updated":$value->est_number,
            "leave_taken"=>$leave,
            "leave_per_month"=>$value->leave_per_month,
            "total_day_present"=>$present,
            "basic"=>$value->basic==""?0:$value->basic,
            "da"=>$value->da==""?0:$value->da,
            "hra"=>$value->hra==""?0:$value->hra,
            "conveyance"=>$value->conveyance==""?0:$value->conveyance,
            "cca"=>$value->cca==""?0:$value->cca,
            "bonus"=>$value->bonus==""?0:$value->bonus,
            "incentive"=>$value->incentive==""?0:$value->incentive,
            "epf_deduction"=>$value->epf_deduction==""?0:$value->epf_deduction,
            "esi"=>$value->esi==""?0:$value->esi,
            "income_tax"=>$value->income_tax==""?0:$value->income_tax,
            "loan"=>$value->loan==""?0:$value->loan,
            "gross_earning"=>$value->total,
            "gross_deduction"=>$value->u_id,
            "lop"=>$mylop,
            "pay_slip_genrated_gate"=>date('d-M-Y'),
        );
      //  StaffPaySlip::whereId($idp)->update($payslp);   */
    }
/*     echo "<pre>";
print_r($payslp); */
}



return redirect()
->back()
->with("success", "PaySlip successfully created");
}




 public function reports()
    {
       // return view("hr.reports");
        $pdf = PDF::loadView('hr.invoice');
        return $pdf->download('invoice.pdf');
    }

    public function countWorkingdays($date, $user_id){


        $month = date('m',strtotime($date));
        $year = date('Y',strtotime($date));
 
            $dayss = cal_days_in_month(CAL_GREGORIAN, $month, $year);

    } 
    
    public function countsunday($date){

        $month = date('m',strtotime($date));
        $year = date('Y',strtotime($date));

        $dayss = cal_days_in_month(CAL_GREGORIAN, $month, $year);


        $day = 'Sunday';
        $count = 0;
        $date = new Datetime($year.'-'.$month.'-01');

        for($i=1; $i<$dayss; $i++){
            if($date->format('l') == $day){
                $count++;
            }
            $date->modify('+1 day');
        }

        return $count;

    }


    public function salarypayslip()
    {
       $location_id = Auth::user()->location_id;
       $user = DB::table("users")
       ->join("roles", "users.role", "=", "roles.id")
       ->leftJoin("companies", "users.company_id", "=", "companies.id")
       ->leftJoin("locations", "users.location_id", "=", "locations.id")
       ->leftJoin("staff_monthly_leaves", "users.id", "=", "staff_monthly_leaves.user_id")
       ->leftJoin(
           "personal_details",
           "users.id",
           "=",
           "personal_details.user_id"
       )
       ->leftJoin("bank_details", "users.id", "=", "bank_details.user_id")
       ->select(
           "users.*",
           "users.id as u_id",
           "users.status as u_status",
           "personal_details.*",
           "bank_details.*",
           "roles.role_name",
           "companies.company_name",
           "staff_monthly_leaves.leave_per_month",
           "locations.location_name"
       )
       ->where("users.id", "!=", 1)
       ->where("users.location_id", $location_id)
      
       //  ->where('users.status',1)
       ->get();
        return view("hr.salarypayslip")->with('user',$user);
    }
    public function generateMonthlyPayslipPdf(Request $requests)
    {

        $location_id = Auth::user()->location_id;
        $month = date('m',strtotime($requests->date));
        $year = date('Y',strtotime($requests->date));
        $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $user = DB::table("users")
            ->join("roles", "users.role", "=", "roles.id")
            ->leftJoin("companies", "users.company_id", "=", "companies.id")
            ->leftJoin("locations", "users.location_id", "=", "locations.id")
            ->leftJoin("staff_pay_scales", "users.id", "=", "staff_pay_scales.user_id")
            ->leftJoin("staff_monthly_leaves", "users.id", "=", "staff_monthly_leaves.user_id")
            ->rightJoin("staff_pay_slips", "users.id", "=", "staff_pay_slips.user_id")

            ->select(
                "users.*",
                "users.id AS u_id",
                "staff_pay_scales.*",
                "roles.role_name",
                "staff_pay_slips.*",
                "companies.company_name",
                "staff_monthly_leaves.leave_per_month",
                "locations.location_name"
            )
            ->where("staff_pay_slips.month", $month)
            ->where("staff_pay_slips.year", $year)
            ->where("users.id", "!=", 1)
            ->where("users.location_id", $location_id)
            ->where("users.status", 1)
            ->get();
 
      


   
      $pdf = PDF::loadView('hr.pdf_invoice',['user'=>$user,'days'=>$days])->setPaper([0, 1, 710.98, 500.85], 'landscape');
      //$pdf->setPaper([0, 0, 685.98, 396.85], 'landscape');

      return $pdf->download('invoice.pdf');
 
    
    }

    public function loanSetup(){

        $location_id = Auth::user()->location_id;
       
        $loan = LoanMaster::select('loan_masters.*','users.name')
       ->leftJoin('users', 'loan_masters.user_id', '=', 'users.id')
       ->where('loan_masters.status',1)
       ->where('loan_masters.payment_completed',0)->get();
      /*  $user = LoanMaster::select('loan_masters.*','users.name')
       ->leftJoin('users', 'loan_masters.user_id', '=', 'users.id')
       ->where('loan_masters.status',1)
       ->where('loan_masters.payment_completed',1)->get(); */

       $user = DB::table("users")
       ->join("roles", "users.role", "=", "roles.id")
       ->leftJoin("companies", "users.company_id", "=", "companies.id")
       ->leftJoin("locations", "users.location_id", "=", "locations.id")
       ->leftJoin("staff_pay_scales", "users.id", "=", "staff_pay_scales.user_id")
       ->leftJoin("staff_monthly_leaves", "users.id", "=", "staff_monthly_leaves.user_id")
  
       ->select(
           "users.*",
           "users.id AS u_id",
           "staff_pay_scales.*",
           "roles.role_name",
       
           "companies.company_name",
           "staff_monthly_leaves.leave_per_month",
           "locations.location_name"
       )
    
       ->where("users.id", "!=", 1)
       ->where("users.location_id", $location_id)
       ->where("users.status", 1)
       ->get();

        return view("hr.loansetup")->with('loan',$loan)->with('user',$user);
    }
    public function deleteLoanSetup(Request $request){


        DB::table('loan_masters')->where('id', $request->id)->delete();
        DB::table('loan_dues')->where('loan_id', $request->id)->delete();

        return redirect()
        ->back()
        ->with("failed", "Successfully deleted");

    } public function viewLoanSetup(Request $request){


      $master =  LoanMaster::select('loan_masters.*','users.*')
      ->leftJoin('users', 'loan_masters.user_id', '=', 'users.id')
      ->where('loan_masters.status',1)
      ->where('loan_masters.id', $request->id)
      ->where('loan_masters.payment_completed',0)->get();
      $due =   LoanDue::where('loan_id', $request->id)->orderBy('id','ASC')->get();
//echo"<pre>";


      $html ='<div class="">
        <div>
      <div class="row">
             <p class="col-md-12 text-center"><b>'.$master[0]->loan_name.'</b></p>
             <p class="col-md-12">'.$master[0]->name.'-'.$master[0]->employee_id.'</p>
             <p class="col-md-12">Amount : '.$master[0]->amount.' Due: '.$master[0]->due_month.'</p>
             <p class="col-md-12">Start Date : '.$master[0]->loan_start_date.' End Date : '.$master[0]->loan_end_date.'</p>
      </div>
    <div class="row"><table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Month</th>
      <th scope="col">Year</th>
      <th scope="col">EMI</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>';
    $i=1;
    foreach ($due as $key => $value) {
        if($value['payslip_id']==NULL){$td="NOT-DETECTED";}else{$td="DETECTED";}

        //print_r($value);
       $html .=' <tr>
      <td scope="">'.$i.'</td>
      <td>'.date('M',strtotime($value['year']."-".$value['month']."-01")).'</td>
      <td>'.$value['year'].'</td>
      <td>'.$value['amount'].'</td>
      <td>'. $td .'</td>
      
      </tr>';
    $i++;
    }
    
    $html .=' </tbody>
</table></div>
   </div>
  </div>';

 // exit;
echo $html;


    }
    public function addloanSetup(Request $request){


     /*    print_r($request->all());
        exit;
 */
        try {
            $dt = date('Y-m-d');

$mon = "+".$request->month_due + 1 ." months";



         $startDate = date('Y-m-d', strtotime("+ 1 months", strtotime($dt))); 
         $endDate = date('Y-m-d', strtotime($mon, strtotime($dt))); 





      
      $crud = new LoanMaster;  
      $crud->loan_name =  $request->l_name;  
      $crud->user_id =  $request->userss;  
      $crud->amount =  $request->amount;  
      $crud->due_month =  $request->month_due;
      $crud->emi_per_monthly = $request->emi_per_month;
      $crud->loan_start_date = $startDate; 
      $crud->loan_end_date =  $endDate; 
      $crud->save();   
     $mid =  $crud->id;   

      $begin = new DateTime($startDate);
      $end = new DateTime($endDate);


      $interval = DateInterval::createFromDateString('1 months');
      $period = new DatePeriod($begin, $interval, $end);

      foreach ($period as $dt) {
        $mont = $dt->format("m");
        $year = $dt->format("Y");



        $lod = new LoanDue;  
        $lod->loan_id =  $mid;  
        $lod->user_id =  $request->userss;  
        $lod->amount =  $request->emi_per_month;  
        $lod->month =  $mont;
        $lod->year = $year;

        $lod->save();  


     
    }
    return redirect()
    ->back()
    ->with("success", "Loan Deduction Start from ". $startDate = date('M-Y', strtotime("+ 1 months", strtotime(date('Y-m-d'))))." Loan Data added successfully"); 

        } catch (\Exception $th) {
           
            return redirect()
            ->back()
            ->with("failed", $th->getMessage());
        }


    }
}
