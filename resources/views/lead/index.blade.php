@extends('master.layout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Lead Management</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Lead Management </li>
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
              <h3 class="card-title">Lead List</h3><button class="btn btn-primary fl_right" data-toggle="modal" data-target="#modal-lg">Create Lead</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Created By</th>
                  <th>Customer Name</th>
                  <th>Customer Mobile</th>
                  <th>Date</th>
                  <th>Item Enquired  </th>
                  <th>Lead Source </th>
                  <th>Status </th>
                  <th>Action</th> 
                </tr>
              </thead>
            <tbody>

              @foreach ($lead as $lead)
                
            

                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{$lead->lead_created_by_name}}</td>
                  <td>{{$lead->customer_name}}</td>
                  <td>{{$lead->customer_contact_no}}</td>
                  <td>{{$lead->date_enquires? date('d-M-y',strtotime($lead->date_enquires)):""}}</td>
                  <td>{{$lead->item_enquired}}</td>
                  <td>{{$lead->l_source_name}}</td>
                  <td> @if ($lead->lead_status ==1)

                    <p class="badge badge-warning">Pending</p>
                      
                    @elseif ($lead->lead_status ==2)
                     <p class="badge badge-success">Converted</p>
                    @else
                    <p class="badge badge-danger">Not Converted</p>     
                    @endif</td>
                 
                
                
                  <td> 
                     <button type="button" value="{{$lead->id}}"  data-toggle="modal" data-target="#modal-ed" class="btn btn-primary btn-xs edit_lead">View | Edit </button>
                     <a href="/delete-lead/{{$lead->id}}"  class="btn btn-danger btn-xs delete_lead">delete </a>
                    </td>
                </tr> 
                
                
                @endforeach 
                
              
               
             
              
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Created By</th>
                  <th>Customer Name</th>
                  <th>Customer Mobile</th>
                  <th>Date</th>
                  <th>Item Enquired  </th>
                  <th>Lead Source </th>
                  <th>Status </th>
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
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Lead Creation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" id="company" action="{{url('add-lead')}}">
                @csrf
            <fieldset>
              <div class="form-group">
                <label for="exampleInputEmail1">Lead created by</label>
                <div class="controls">
                  <input type="text" class="form-control" id="lead_created_by_name" name="lead_created_by_name" placeholder="Lead created by" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> 
               <div class="form-group">
                <label for="exampleInputEmail1">Enquired Date</label>
                <div class="controls">
                  <input type="date" class="form-control" id="date_enquires" name="date_enquires"  required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> 
              
              <div class="form-group">
                <label for="exampleInputEmail1">Customer name</label>
                <div class="controls">
                  <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Customer name" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Customer email</label>
                <div class="controls">
                  <input type="text" class="form-control" id="customer_email" name="customer_email" placeholder="Customer email" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Customer contact no</label>
                <div class="controls">
                  <input type="text" class="form-control" pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number" id="customer_contact_no" name="customer_contact_no" placeholder="Customer contact no" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Item enquired </label>
                <div class="controls">
                  <input type="text" class="form-control" id="item_enquired" name="item_enquired" placeholder="Item enquired" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Price quoted </label>
                <div class="controls">
                  <input type="text" class="form-control" id="price_quoted" name="price_quoted" placeholder="Price quoted" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>



              <div class="form-group">
                <label for="exampleInputEmail1">Qty </label>
                <div class="controls">
                  <input type="text" class="form-control decimal"   id="qty" name="qty" placeholder="Qty" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>



              <div class="form-group">
                <label for="exampleInputEmail1">Lead source</label>
                <div class="controls">
                  <select class="custom-select form-control" name="lead_source" id="leadsource" >
                    <option value="">Lead source</option>
                    @foreach ($leadsource as $led)
                    <option value="{{$led->id}}">{{$led->l_source_name}}</option>  
                    @endforeach
                    
                   
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>


              
     
              <div class="form-group">
                <!-- Button -->
                <div class="controls">
                  <button type="submit" class="btn btn-primary">Add Lead </button>
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


  
      <div class="modal fade" id="modal-ed">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Lead Edit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" id="company" action="{{url('update-lead')}}">
                @csrf
            <fieldset>
              <div class="form-group">
                <label for="exampleInputEmail1">Lead created by</label>
                <div class="controls">
                  <input type="hidden" class="form-control" id="c_id" name="id" value="" >
                  <input type="text" class="form-control" id="elead_created_by_name" name="lead_created_by_name" placeholder="Lead created by" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> 
               <div class="form-group">
                <label for="exampleInputEmail1">Enquired Date</label>
                <div class="controls">
                  <input type="date" class="form-control" id="edate_enquires" name="date_enquires"  required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div> 
              
              <div class="form-group">
                <label for="exampleInputEmail1">Customer name</label>
                <div class="controls">
                  <input type="text" class="form-control" id="ecustomer_name" name="customer_name" placeholder="Customer name" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Customer email</label>
                <div class="controls">
                  <input type="text" class="form-control" id="ecustomer_email" name="customer_email" placeholder="Customer email" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Customer contact no</label>
                <div class="controls">
                  <input type="text" class="form-control" pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number" id="ecustomer_contact_no" name="customer_contact_no" placeholder="Customer contact no" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Item enquired </label>
                <div class="controls">
                  <input type="text" class="form-control" id="eitem_enquired" name="item_enquired" placeholder="Item enquired" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Price quoted </label>
                <div class="controls">
                  <input type="text" class="form-control" id="eprice_quoted" name="price_quoted" placeholder="Price quoted" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>



              <div class="form-group">
                <label for="exampleInputEmail1">Qty </label>
                <div class="controls">
                  <input type="text" class="form-control decimal"   id="eqty" name="qty" placeholder="Qty" required>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>



              <div class="form-group">
                <label for="exampleInputEmail1">Lead source</label>
                <div class="controls">
                  <select class="custom-select form-control" name="lead_source" id="elead_source" >
                    <option value="">Lead source</option>
                    @foreach ($leadsource as $led)
                    <option value="{{$led->id}}">{{$led->l_source_name}}</option>  
                    @endforeach
                    
                   
                  </select>
                <!--  <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Lead Status</label>
                <div class="controls">
                  <select class="custom-select form-control" name="elead_status" id="elead_status" >
                    <option value="">Lead status</option>
                  
                    <option value="1">Pending</option>  
                    <option value="2">Converted</option>  
                    <option value="3">Not Converted</option>  
                   
                    
                   
                  </select>
                </div>
              </div>


              <div id="edit_res"  class="form-group">
                <label for="exampleInputEmail1">Reason</label>
                <div class="controls">
                 <textarea class="form-control"  id="ereason" name="reason"></textarea>
                </div>
              </div>

              <div class="form-group">
                <!-- Button -->
                <div class="controls">
                  <button type="submit" class="btn btn-primary">Update Lead </button>
                </div>
              </div>
              
              
            </fieldset>
             </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
            
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


    </section>

@endsection