
@foreach ($user as $usr)
  

<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payslip</title>
    <link rel="stylesheet" href="/pdf/pdf.css" type="text/css">

  <style>
    

    table.in-table tr td {
    border: 1px solid grey!important;
    padding:6px;
    width:70%;
    font-size: 13px;
  }

  </style>

  </head>
<body style="width: 100%;
    height: 100%;
    margin: 0; /* Space from this element (entire page) and others*/
    padding: 0; /space from content and border/
   ">
    <table style="width: 100%;text-align: center;">
      <tr>
        <td class="w-half">
          <h3> Sri Padam Steel Needs</h3>
          <h6> D-349,Sathangadu Iron & Steel Market,</h6>
        </td>
      </tr>
    </table>
    <table style="width: 100%;text-align: center;border: 1px solid black;">
      <tr>
        <td class="w-half"> @php $monthNum = $usr->month; $monthName = date('F', mktime(0, 0, 0, $monthNum, 10)); @endphp <h3> Payslip for the month of - {{$monthName}} - {{$usr->year}}</h3>
        </td>
      </tr>
    </table>
    <div style="margin-top: 1.25rem;">
      <table style="width: 100%;border: 1px solid black; padding:10px;">
        <tr>
          <td style="width: 50%">
                      <table class="in-table" style="width: 100%">
                    <tr>
                        <td>Name :</td>
                        <td>{{ $usr->name}}</td>
                    </tr>
                    <tr>
                        <td>Joining Date:</td>
                        <td>{{ $usr->joining_date==NULL?"":date("d-M-Y",strtotime($usr->joining_date))}}</td>
                    </tr>
                    <tr>
                        <td>Designation:</td>
                        <td>{{ $usr->role_name}}</td>
                    </tr>
                    <tr>
                        <td>Location: </td>
                        <td>{{ $usr->location_name}}</td>
                    </tr>
                    <tr>
                        <td>Company:</td>
                        <td>{{ $usr->company_name}}</td>
                    </tr>

                    <tr>
                        <td>Effective Work Days:</td>
                        <td>{{$days}}</td>
                    </tr>

                    <tr>
                        <td>LOP:</td>
                        <td>{{ $usr->lop}}</td>
                    </tr>
            </table>



          </td>
          <td style="width: 50%">
      
            <table class="in-table" style="width: 100%">
                    <tr>
                        <td>Employee No:</td>
                        <td>{{ $usr->employee_id}}</td>
                    </tr>
                    <tr>
                        <td>Bank Name:</td>
                        <td>{{ $usr->bank_number}}</td>
                    </tr>
                    <tr>
                        <td>Bank Account No:</td>
                        <td>{{ $usr->account_number}}</td>
                    </tr>
                    <tr>
                        <td>PAN Number: </td>
                        <td>{{ $usr->pan_number}}</td>
                    </tr>
                    <tr>
                        <td>PF No:</td>
                        <td>{{ $usr->pf_number}}</td>
                    </tr>

                    <tr>
                        <td>PF UAN:</td>
                        <td>{{ $usr->pan_number}}</td>
                    </tr>
                    <tr>
                        <td>Month CTC</td>
                        <td>{{ $usr->gtotal}}</td>
                    </tr>
              
            </table>



          </td>
        </tr>
      </table>
    </div>
    <div style="margin-top: 1.25rem;">
      <table class="in-table" style="width: 100%;border: 1px solid black;">
        <tr>
          <th>Earnings</th>
          <th>Amount in Rs.</th>
          <th>Deductions</th>
          <th>Amount in Rs.</th>
        </tr>
        <tr class="items">
          <td> BASIC </td>
          <td>{{ $usr->basic}}</td>
          <td> PF </td>
          <td>{{ $usr->epf_deduction}}</td>
        </tr>
        <tr class="items">
          <td> DA </td>
          <td>{{ $usr->da}}</td>
          <td> ESI </td>
          <td>{{ $usr->esi}}</td>
        </tr>
        <tr class="items">
          <td> HRA </td>
          <td>{{ $usr->hra}}</td>
          <td>Income Tax </td>
          <td>{{ $usr->income_tax}}</td>
        </tr>
        <tr class="items">
          <td> CONVEYANCE </td>
          <td>{{ $usr->conveyance}}</td>
          <td> GROSS DEDUCTION </td>
          <td>{{ $usr->gross_deduction}}</td>
        </tr>
        <tr class="items">
          <td> CAA </td>
          <td>{{ $usr->cca}}</td>
          <td>LOP Deduction </td>
          <td>{{ $usr->lop_deduction}}</td>
        </tr> <tr class="items">
          <td> Bonus </td>
          <td>{{ $usr->bonus}}</td>
          <td> Loan</td>
          <td>{{ $usr->loan}}</td>
        </tr> <tr class="items">
          <td> Incentive </td>
          <td>{{ $usr->incentive}}</td>
          <td> Total Deductions</td>
          <td>{{ $usr->lop_deduction + $usr->gross_deduction + $usr->loan}}</td>
        </tr><tr class="items">
          <td> Total Earnings </td>
          <td>{{  $usr->gtotal}}</td>
          <td>  </td>
          <td></td>
        </tr>
       
        <tr class="items">
          <td>  Net Pay for the month </td>
          <td>{{ $usr->monthlt_total - $usr->loan}}</td>
          <td> </td>
          <td></td>
         
        </tr>
      </table>
      <table class="products" style="width: 100%;border: 1px solid black;">
        <tr class="items">
          <th colspan="2"> Net Pay for the month ( Total Earnings - Total Deductions): </th>
          <th></th>
          <th></th>
        </tr>
      </table>
    </div>
    <div style="margin-top: 1.25rem;">
      <table style="width: 100%;">
        <tr>
          <th colspan="4"> This is a system generated payslip and does not require signature. </th>
        </tr>
      </table>
    </div>
  </body>
</html>


@endforeach