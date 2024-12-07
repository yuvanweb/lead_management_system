@extends('master.layout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Excel</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Purchase Excel</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="row">
          <div class="col-md-12">
           
            <div class="card">
              <div class="card-head">
                Sample Excel File format  <div class="text-right"><a class="btn btn-success px-1" href="/sample/Purchase_sheet.xlsx">Download Template</a></div>
              </div>
              <div class="card-body text-danger">
          
                1) The String in the excel want to match with masters data in software
                <br>
                2) Excel should be in xlsx format
                <br>
                3) Empty Values not accepted 
                <br>
                4) First two row data will not insert in database
         
          </div>
            </div>
          </div>
          </div>


        <div class="row">
        <div class="col-md-12">
         
          <div class="card">
            <div class="card-head text-center">
              Sales Upload Excel 
            </div>
            <div class="card-body">
          <form method="POST" action="{{ url('post-purchase-excel') }}" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf

            <div class="input-group">
              <input type="file" name="excel_file" class="form-control" accept=".xlsx"  required>
              <button class="btn btn-primary" type="submit">submit</button>
            </div>

          </form> 

       
        </div>
          </div>
        </div>
        </div>

       
        <!-- /.row -->
        <!-- Main row -->
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->











    </section>

@endsection