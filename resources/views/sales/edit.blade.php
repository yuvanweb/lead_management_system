@extends('master.layout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Sales Management</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Edit Sales Details </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
    
    
@php
  //print_r($sales);
  //echo $sales[0]->customer;
@endphp


      <div class="" id="">
        <div class="">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Sales Edit</h4>
             
            </div>
            <div class="modal-body">
              <form method="POST"  action="{{url('update-sales')}}">
                @csrf
                <fieldset>
                  <div class="row">
                  <div class="col-md-6">
                    <input type="hidden" name="id" value="{{$sales[0]->id }}">
                   <div class="form-group">
                     <label for="exampleInputEmail1">Date</label>
                     <div class="controls">
                       <input type="date" class="form-control" name="date" value="{{$sales[0]->sales_date!=NULL ? $sales[0]->sales_date:"" }}" placeholder="Date" required>
                     <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                     </div>
                   </div> 
                   </div> 
                   <div class="col-md-6">
                   <div class="form-group">
                     <label for="exampleInputEmail1">Company</label>
                     <div class="controls">
                       <select class="custom-select form-control" name="company"  >
                         <option value="">Select Company</option>
                         @foreach ($company as $com)
                         <option {{$sales[0]->company!=NULL ? "selected":"" }} value="{{$com->id}}">{{$com->company_name}}</option>
                         @endforeach
                     
                       </select>
                     <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                     </div>
                   </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-md-6">
                   <div class="form-group">
                     <label for="exampleInputEmail1">Unit</label>
                     <div class="controls">
                       <select class="custom-select form-control"  name="unit">
                         <option value="">Select Unit</option>
                         @foreach ($unit as $unt)
                         <option  {{$sales[0]->unit==$unt->id ? "selected":"" }}  value="{{$unt->id}}">{{$unt->unit_name}}</option>
                         @endforeach
                     
                       </select>
                     <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                     </div>
                   </div>
                   </div>
                   <div class="col-md-6">  
                   <div class="form-group">
                     <label for="exampleInputEmail1">Product</label>
                     <div class="controls">
                       <select class="custom-select form-control"  name="product" >
                         <option value="">Select Product</option>
                         @foreach ($product as $prd)
                         <option  {{$sales[0]->product==$prd->id ? "selected":"" }}  value="{{$prd->id}}">{{$prd->product_name}}</option>
                         @endforeach
                      
                     
                       </select>
                     <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                     </div>
                   </div>  
                   </div>  
                   </div>  
                   
                   
                   <div class="row">
                     <div class="col-md-6"> 
                   <div class="form-group">
                     <label for="exampleInputEmail1">Type</label>
                     <div class="controls">
                      <!-- <input type="text" class="form-control" name="type" placeholder="Type" required>-->
                       <select class="custom-select form-control"   name="type" required>
                         <option value="">Select Type</option>
                         @foreach ($type as $typ)
                         <option  {{$sales[0]->type==$typ->id ? "selected":"" }}  value="{{$typ->id}}">{{$typ->type_name}}</option>
                         @endforeach
                      
                     
                       </select>
                     </div>
                   </div>
                   </div>
                 
                     <div class="col-md-6"> 
                   
                   <div class="form-group">
                     <label for="exampleInputEmail1">Color</label>
                     <div class="controls">
                       <select class="custom-select form-control" name="color" >
                         <option value="">Select Color</option>
                         @foreach ($colors as $col)
                         <option   {{$sales[0]->color==$col->id ? "selected":"" }} value="{{$col->id}}">{{$col->color_name}}</option>
                         @endforeach
                     </select>
                     </div>
                   </div>
                   </div>
                   </div>
     
                   <div class="row">
                     <div class="col-md-6">  
                   
                   <div class="form-group">
                     <label for="exampleInputEmail1">Brand</label>
                     <div class="controls">
                       <select class="custom-select form-control"  name="brand" >
                         <option value="">Select Form</option>
                         @foreach ($brand as $bnd)
                         <option   {{$sales[0]->brand==$bnd->id ? "selected":"" }} value="{{$bnd->id}}">{{$bnd->brand_name}}</option>
                         @endforeach
                     </select>
                     </div>
                   </div> 
                   </div> 
                 
                     <div class="col-md-6"> 
                   
                   <div class="form-group">
                     <label for="exampleInputEmail1">Form</label>
                     <div class="controls">
                       <select class="custom-select form-control"  name="form" >
                         <option value="">Select Form</option>
                         @foreach ($form as $fom)
                         <option  {{$sales[0]->form==$fom->id ? "selected":"" }}  value="{{$fom->id}}">{{$fom->form_name}}</option>
                         @endforeach
                     </select>
                     </div>
                   </div>
                   </div>
                   </div>
     
                      
                   <div class="row">
                     <div class="col-md-6">  
                   <div class="form-group">
                     <label for="exampleInputEmail1">Customer</label>
                     <div class="controls">
     
     {{-- <input type="text" class="form-control cust" style="width: 100%;"  > --}}
     
                       <select class="form-control sales_cus select2bs4" style="width: 100%;" name="customer" >
                         <option value="">Select Customer</option>
                         @foreach ($customer as $cus)
                         <option  {{$sales[0]->customer==$cus->id ? "selected":"" }}  value="{{$cus->id}}">{{$cus->customer_name}}</option>
                         @endforeach
                     </select>
                     </div>
                   </div>
                   </div>
     
                                    
                   
                 
              
                     <div class="col-md-6"> 
     
                   <div class="form-group">
                     <label for="exampleInputEmail1">GST Number</label>
                     <div class="controls">
                       <input type="text" class="form-control gst_num"  name="ccode"  value="{{$sales[0]->gst_number!=NULL ? $sales[0]->gst_number:"" }}"  placeholder="Customer code" readonly>
                     <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                     </div>
                   </div>
                   </div>
                   </div>
     
                   <div class="row">
                     <div class="col-md-6"> 
                   <div class="form-group">
                     <label for="exampleInputEmail1">Qnt </label>
                     <div class="controls">
                       <input type="text" class="form-control"  value="{{$sales[0]->qnt!=NULL ? $sales[0]->qnt:"" }}"   name="qut" placeholder="Qnt" required>
                     <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                     </div>
                   </div>
                   </div>
     
                     <div class="col-md-6"> 
                   <div class="form-group">
                     <label for="exampleInputEmail1">Sales Rep</label>
                     <div class="controls">
                       <select class="custom-select form-control"  name="rep" >
                         <option value="">Select Rep</option>
                         @foreach ($user as $usr)
                         <option  {{$sales[0]->sales_rep!=NULL ? "selected":"" }}  value="{{$usr->id}}">{{$usr->name}}</option>
                         @endforeach
                     </select>  </div>
                   </div>
                   </div>
                   </div>
     
     
                   <div class="row">
                     <div class="col-md-6"> 
                   <div class="form-group">
                     <!-- Button -->
                     <div class="controls">
                       <button type="submit" class="btn btn-primary">Update </button>
                     </div>
                   </div>
                   </div>
                   <div class="col-md-6"> 
                   </div>
                   </div>
                   
                   
                 </fieldset>
             </form>
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    </section>

@endsection