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
          <li class="breadcrumb-item active">Generate Payslip </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
   
      <!-- /.col -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
              
                    <form  method="POST" action="#">
                      @csrf
                      <div class="form-group row">
                      <label for="inputName" class="col-sm-4 col-form-label">Month</label>
                      <div class="col-sm-4">
                        <input type="month" class="form-control"  name="month_year" id="month_year"  required>
                      </div><div class="col-sm-4">
                        <button type="button" id="gen_pay_slip" class="btn btn-info">submit</button>
                       </div>
                    </div>
                   


                
                    
                  </form>
                </div>
                <!-- /.post -->
                <hr>
                <div class="table-responsive text-center">
                 
                <div id="att"></div>
            
                </div>
              
                <!-- /.post -->
              </div>
             
            
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection
<style>
  #ui-datepicker-div .ui-datepicker-calendar,
#ui-datepicker-div .ui-datepicker-current 
{
    display: none !important;
}
</style>