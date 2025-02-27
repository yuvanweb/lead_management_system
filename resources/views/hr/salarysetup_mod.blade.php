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
              <th>Salary Status</th>
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
                  <td>{{$us->paypmonth==NUll || $us->paypmonth==0?"Not-Assigned":$us->paypmonth}}</td>
                     
            
              <td>
                 <button type="button" class="btn btn-success btn-sm"  data-toggle="modal" data-target="#modal-{{$us->u_id}}"> View Salary</button>
                
                 <a href="/calculate-salary-setup/{{$us->u_id}}" class="btn btn-info btn-sm" > Salary Setup</a> 
              
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
              <th>Salary Status</th>
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
          <h4 class="modal-title">View Salary </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST"  action="">
            @csrf
        <fieldset>
         
          @if ($us->paypmonth==NUll || $us->paypmonth==0)
          <div class="row form-group">
            <label for="exampleInputEmail1">Salary Not Assigned</label>
           
          </div> 
          @else
            
         
          <div class="row form-group">
            <label class="col-sm-6" for="exampleInputEmail1">Basic Salary</label>
            <div class="controls col-sm-6" >
              {{$us->basic==NUll?0:$us->basic}}
          </div>
          </div> 

         <div class="row form-group">
            <label class="col-sm-6" for="exampleInputEmail1">Dearness Allowance</label>
            <div class="controls col-sm-6" >
              {{$us->da==NUll?0:$us->da}}
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 
  <div class="row form-group">
            <label class="col-sm-6" for="exampleInputEmail1">House Rent Allowance</label>
            <div class="controls col-sm-6" >
            {{$us->hra==NUll?0:$us->hra}}
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="row form-group">
            <label class="col-sm-6" for="exampleInputEmail1">Conveyance</label>
            <div class="controls col-sm-6" >
             {{$us->conveyance==NUll?0:$us->conveyance}}
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="row form-group">
            <label class="col-sm-6" for="exampleInputEmail1">City Compensatory Allowance </label>
            <div class="controls col-sm-6" >
            {{$us->cca==NUll?0:$us->da}}
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

         <div class="row form-group">
            <label class="col-sm-6" for="exampleInputEmail1">Bonus</label>
            <div class="controls col-sm-6" >
              {{$us->bonus==NUll?0:$us->bonus}}
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 
   <div class="row form-group">
            <label class="col-sm-6" for="exampleInputEmail1">Incentive</label>
            <div class="controls col-sm-6" >
              <input type="hidden" class=" sub_tot" value="" >
          {{$us->incentive==NUll?0:$us->incentive}}
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 
          
          
          <div class="row form-group">
            <label class="col-sm-6" for="exampleInputEmail1">Gross Salary</label>
            <div class="controls col-sm-6" >
              <input type="hidden" class=" sub_tot" value="" >
              {{$us->gtotal==NUll?0:$us->gtotal}}
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 


          <h3>Total Deductions</h3>
   <div class="row form-group">
            <label class="col-sm-6" for="exampleInputEmail1">EPF Deduction</label>
            <div class="controls col-sm-6" >
             {{$us->epf_deduction==NUll?0:$us->epf_deduction}}
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 
   <div class="row form-group">
            <label class="col-sm-6" for="exampleInputEmail1">ESI</label>
            <div class="controls col-sm-6" >
              {{$us->esi==NUll?0:$us->esi}}
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div>  
          
          
          
          <div class="row form-group">
            <label class="col-sm-6" for="exampleInputEmail1">Income Tax</label>
            <div class="controls col-sm-6" >
              {{$us->income_tax==NUll?0:$us->income_tax}}
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div>     
          <div class="row form-group">
            <label class="col-sm-6" for="exampleInputEmail1">Loan</label>
            <div class="controls col-sm-6" >
              {{$us->loan==NUll?0:$us->loan}}
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div>     
          <div class="row form-group">
            <label class="col-sm-6" for="exampleInputEmail1">Total</label>
            <div class="controls col-sm-6" >
             {{$us->total==NUll?0:$us->total}}
            <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
            </div>
          </div> 

          
          @endif
          
          
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