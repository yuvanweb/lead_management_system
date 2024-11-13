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
                     
            
              <td> <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#modal-{{$us->u_id}}"> Salary Setup</button></td> 
            
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
            <label class="col-sm-5" for="exampleInputEmail1">Basic Salary</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal " value="{{$us->basic==NUll?0:$us->basic}}"  id="basic"  name="basic" placeholder="Basic Salary" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Dearness Allowance</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal " value="{{$us->da==NUll?0:$us->da}}"  id="da" name="da" placeholder="Dearness Allowance" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 
  <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">House Rent Allowance</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal " value="{{$us->hra==NUll?0:$us->hra}}"  id="hra" name="hra" placeholder="House Rent Allowance" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Conveyance</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal " value="{{$us->conveyance==NUll?0:$us->conveyance}}"  id="conveyance" name="conveyance" placeholder="Conveyance" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">City Compensatory Allowance </label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal " value="{{$us->cca==NUll?0:$us->da}}"  id="cca" name="cca" placeholder="City Compensatory Allowance " readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Bonus</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal " value="{{$us->bonus==NUll?0:$us->bonus}}"  id="bonus" name="bonus" placeholder="Bonus" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 
   <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Incentive</label>
            <div class="controls col-sm-7" >
              <input type="hidden" class=" sub_tot" value="" >
              <input type="text" class="form-control decimal " value="{{$us->incentive==NUll?0:$us->incentive}}"  id="incentive" name="incentive" placeholder="Incentive" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 


          <h3>Total Deductions</h3>
   <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">EPF Deduction</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal " value="{{$us->epf_deduction==NUll?0:$us->epf_deduction}}"  id="epf_deduction" name="epf_deduction" placeholder="EPF Deduction" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 
   <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">ESI</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal " value="{{$us->esi==NUll?0:$us->esi}}"  id="esi" name="esi"  placeholder="ESI" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div>  
          
          
          
          <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Income Tax</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal " value="{{$us->income_tax==NUll?0:$us->income_tax}}"  id="income_tax" name="income_tax"  placeholder="Income Tax" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div>     
          <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Loan</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal " value="{{$us->loan==NUll?0:$us->loan}}"  id="loan" name="loan"  placeholder="Loanx" readonly>
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div>     
          <div class="row form-group">
            <label class="col-sm-5" for="exampleInputEmail1">Total</label>
            <div class="controls col-sm-7" >
              <input type="text" class="form-control decimal total" value="{{$us->total==NUll?0:$us->total}}"  id="total" name="total" readonly placeholder="Total" readonly>
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