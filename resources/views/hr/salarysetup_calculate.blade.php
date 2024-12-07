@extends('master.layout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Hr Management</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Salary Setup </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="card full-wd">
        <div class="card-header">
          <h3 class="card-title">Role List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-striped">
            <thead>
                

            <tr>
              <th>#</th>
              <th>User</th>
              <th>EmployeeId</th>
              <th>Role</th>
              <th>Company</th>
              <th>Action</th> 
            </tr>
          </thead>
        <tbody>
          @foreach ($user as $us)
            <tr>

              

              <td>{{ $loop->index+1 }}</td>
             
              <td>{{$us->name}}</td>
                  <td>{{$us->employee_id}}</td>
                  <td>{{$us->role_name}}</td>
                  <td>{{$us->company_name}}</td>
                     
            
              <td> 
                
                <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#modal-{{$us->u_id}}"> Salary Setup</button> 
               
              </td> 
            
            </tr> 
           
         @endforeach
          
            </tbody>
            <tfoot>
            <tr>
              <th>#</th>
              <th>User</th>
              <th>EmployeeId</th>
              <th>Role</th>
              <th>Company</th>
              <th>Action</th> 
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
  
      <!-- /.Left col -->
      <!-- right col (We are only ing the ID to make the widgets sortable)-->
 
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
  @foreach ($user as $us)
  <div class="modal fade" id="modal-{{$us->u_id}}">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Salary Setup</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST"  action="{{url('update-salary-setup')}}">
            @csrf
        <fieldset>
          <input type="hidden" class="user_id"  name="user_id" value="{{$us->u_id}}" >
          <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Enter Pay Per Month</label>
            <div class="controls col-sm-4" >
              <input type="text" class="form-control decimal paypmonth" value="{{$us->paypmonth==NUll?0:$us->paypmonth}}"     name="paypmonth" placeholder="Basic Salary" >
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            
          </div><div class="controls col-sm-3" >
              <button type="button" class="btn btn-success calc"    name="calc" >Calculate</button>
           
            
          </div>
          </div> 
          
          <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Basic Salary</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal basic cadd" value="{{$us->basic==NUll?0:$us->basic}}"    name="basic" placeholder="Basic Salary" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Dearness Allowance</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal da cadd" value="{{$us->da==NUll?0:$us->da}}"   name="da" placeholder="Dearness Allowance" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 
  <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">House Rent Allowance</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal hra cadd" value="{{$us->hra==NUll?0:$us->hra}}"  name="hra" placeholder="House Rent Allowance" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Conveyance</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal conveyance cadd" value="{{$us->conveyance==NUll?0:$us->conveyance}}"  name="conveyance" placeholder="Conveyance" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">City Compensatory Allowance </label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal cca cadd" value="{{$us->cca==NUll?0:$us->da}}"   name="cca" placeholder="City Compensatory Allowance " readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Bonus</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal bonus cadd" value="{{$us->bonus==NUll?0:$us->bonus}}"   name="bonus" placeholder="Bonus" >
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 
   <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Incentive</label>
            <div class="controls col-sm-7" >
              <input type="hidden" class=" sub_tot" value="" >
              <input type="text" class="form-control decimal incentive cadd" value="{{$us->incentive==NUll?0:$us->incentive}}"   name="incentive" placeholder="Incentive" >
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 
          
          
          <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Gross Salary</label>
            <div class="controls col-sm-7" >
              <input type="hidden" class=" sub_tot" value="" >
              <input type="text" class="form-control decimal  stotal" value="{{$us->gtotal==NUll?0:$us->gtotal}}"   name="gtotal" placeholder="Sub Total" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 


          <h3>Total Deductions</h3>
   <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">EPF Deduction</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal epf_deduction tdedt" value="{{$us->epf_deduction==NUll?0:$us->epf_deduction}}"   name="epf_deduction" placeholder="EPF Deduction" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 
   <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">ESI</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal esi tdedt" value="{{$us->esi==NUll?0:$us->esi}}"   name="esi"  placeholder="ESI" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div>  
          
          
          
          <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Income Tax</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal income_tax tdedt" value="{{$us->income_tax==NUll?0:$us->income_tax}}"  name="income_tax"  placeholder="Income Tax" >
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div>     
          <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Loan</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal loan tdedt" value="{{$us->loan==NUll?0:$us->loan}}"   name="loan"  placeholder="Loanx" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div>     
          <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Total</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal ftotal" value="{{$us->total==NUll?0:$us->total}}"  name="total" readonly placeholder="Total" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

          <input type="hidden" class=" sub_tot" value="0" >
          <input type="hidden" class=" sub_min" value="0" >

           <div class="row form-group">
            <!-- Button -->
            <div class="controls col-sm-7" >
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
          </div>
          
          
        </fieldset>
         </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  @endforeach
</section>

@endsection