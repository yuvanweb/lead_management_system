@extends('master.layout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Loan setup</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Loan setup </li>
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
              <h3 class="card-title">Active Loan list</h3><button class="btn btn-primary fl_right" data-toggle="modal" data-target="#modal-lg">Add</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Loan Name</th>
                  <th>Name</th>
                  <th>Amount</th>
                  <th>Due Month </th>
                  <th>EMI </th>
                  <th>Start </th>
                  <th>End  </th>
                  <th>Action</th> 
                 
                 
                </tr>
              </thead>
            <tbody>
              @foreach ($loan as $ln)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{$ln->loan_name}}</td>
                <td>{{$ln->name}}</td>
                <td>{{$ln->amount}}</td>
                <td>{{$ln->due_month}}</td>
                <td>{{$ln->emi_per_monthly}}</td>
                <td>{{$ln->loan_start_date}}</td>
                <td>{{$ln->loan_end_date}}</td>
           
              
                <td>  <button type="button" class="btn btn-info btn-sm loan-info"  value="{{$ln->id}}" data-toggle="modal" data-target="#modal-ced"> View loan</button>
                  <a href="delete-loan/{{$ln->id}}" class="btn btn-danger btn-sm"  > Delete loan</a></td>
               
              </tr> 
              @endforeach
              
               
              
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Loan Name</th> 
                  <th>Name</th>
                  <th>Amount</th>
                  <th>Due Month </th>
                  <th>EMI </th>
                  <th>Start </th>
                  <th>End  </th>
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
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
     
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->






      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Loan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" id="company" action="{{url('add-Loan-details')}}">
                @csrf
            <fieldset>
              <div class="form-group">
                <label for="exampleInputEmail1">Loan Name</label>
                <div class="controls">
                  <input type="text" class="form-control " id="l_name" name="l_name" placeholder="Loan Name" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Select user</label>
                <div class="controls">
<select class="form-control" name="userss" required>
<option value="">Select User</option>
  @foreach ($user as $us)
  <option value="{{$us->u_id}}">{{$us->name}}</option>                   
  @endforeach

</select>
                 
              <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> 
              
              
              <div class="form-group">
                <label for="exampleInputEmail1">Enter Amount</label>
                <div class="controls">
                  <input type="text" class="form-control decimal" id="amount" name="amount" placeholder="Enter Amount" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              
             
               <div class="form-group">
                <label for="exampleInputEmail1">Month Due</label>
                <div class="controls">
                  <input type="text" class="form-control decimal" id="month_due" name="month_due" placeholder="Month Due" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">EMI Per Month</label>
                <div class="controls">
                  <input type="text" class="form-control" id="emi_per_month" name="emi_per_month" placeholder="EMI Per Month" readonly>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              
              
              <div class="form-group">
                <!-- Button -->
                <div class="controls">
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


      <div class="modal fade" id="modal-ced">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">view Loan Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="append"></div>
             
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    </section>

@endsection