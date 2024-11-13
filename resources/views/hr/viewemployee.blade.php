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
          <li class="breadcrumb-item active">View Employee </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <h1>{{ucfirst(substr($user[0]->name, 0, 1));}}</h1>
                </div>

                <h3 class="profile-username text-center">{{$user[0]->name}}</h3>

                <p class="text-muted text-center">{{$user[0]->role_name}}</p>

                <!--<ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Total Leave</b> <a class="float-right">5</a>
                  </li>
                  <li class="list-group-item">
                    <b>Leave Taken</b> <a class="float-right">3</a>
                  </li>
                  <li class="list-group-item">
                    <b>Balance Leave</b> <a class="float-right">2</a>
                  </li>
                </ul>-->

               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <!--<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pay Scale</h3>
              </div>
            
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
             
            </div>-->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Personal Details </a></li>
                  <li class="nav-item"><a class="nav-link" href="#bank" data-toggle="tab">Bank Details </a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Leave Details </a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <form method="POST"  action="{{url('update-userdetails')}}">
                        @csrf
                        <input type="hidden" class="form-control" name="id"  value="{{$user[0]->u_id}}" placeholder="Employee Number" readonly>
                        
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-4 col-form-label">Employee Number</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control"   value="{{$user[0]->employee_id}}" placeholder="Employee Number" readonly>
                          </div>
                        </div> <div class="form-group row">
                          <label for="inputName" class="col-sm-4 col-form-label">Name</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control"   value="{{$user[0]->name}}" placeholder="Name" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                          <div class="col-sm-8">
                            <input type="email" class="form-control"   readonly value="{{$user[0]->email}}" placeholder="Email" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-4 col-form-label">Mobile</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control"  value="{{$user[0]->mobile}}"  placeholder="Mobile" readonly>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-4 col-form-label">Role</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control"   placeholder="Role"value="{{$user[0]->role_name}}" readonly>
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-4 col-form-label">Employee Location</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control"   placeholder="Location" value="{{$user[0]->location_name}}" readonly>
                          </div>
                        </div>


                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-4 col-form-label">Date of Join</label>
                          <div class="col-sm-8">
                            <input type="date" class="form-control" id="date_of_join"  name="date_of_join" placeholder="Date of Join" value="{{$user[0]->joining_date!=NULL ? $user[0]->joining_date:""}}">
                          </div>
                        </div>


                        <!--<div class="form-group row">
                          <label for="inputSkills" class="col-sm-4 col-form-label">Status</label>
                          <div class="col-sm-8">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                              <input type="checkbox"  class="custom-control-input" {{$user[0]->u_status == 1 ? "checked":""}}  name="status">
                              <label class="custom-control-label" for="customSwitch3">

                              </label>
                            </div>
                          </div>
                        </div>-->
						
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                           
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-info">Update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                  
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="">
                      <!-- timeline time label -->
                      <form method="POST"  action="{{url('update-personal')}}">
                        @csrf
                        <input type="hidden" class="form-control" name="id"  value="{{$user[0]->u_id}}" >
                       
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-4 col-form-label">Personal Mail Id</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="personal_mail_id"  name="personal_mail_id" placeholder="Personal Mail Id" value="{{$user[0]->personal_mail_id?$user[0]->personal_mail_id:$user[0]->email}}">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-4 col-form-label">Personal Mobile Number</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="personal_mobile_number"   name="personal_mobile_number" placeholder="Personal Mobile Number" value="{{$user[0]->personal_mobile_number?$user[0]->personal_mobile_number:$user[0]->mobile}}">
                          </div>
                        </div> 
                        
                        
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-4 col-form-label">Emergenct Mobile Number</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="emergency_mobile_number"   name="emergency_mobile_number" placeholder="Emergenct Mobile Number" value="{{$user[0]->emergency_mobile_number}}">
                          </div>
                        </div>


                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-4 col-form-label">Date of Birth</label>
                          <div class="col-sm-8">
                            <input type="date" class="form-control" id="date_of_birth"   name="date_of_birth"  placeholder="Date of Birth" value="{{$user[0]->date_of_birth?$user[0]->date_of_birth:""}}">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-4 col-form-label">Shift Details</label>
                          <div class="col-sm-8">
                             <!--<input type="text" class="form-control" id="shift_detailes"   name="shift_detailes" placeholder="Shift Details" value="{{$user[0]->shift_detailes}}">-->
                        
                             <div class="form-check form-check-inline">
                              <input class="form-check-input" {{$user[0]->shift_detailes=="Day"?"checked":""}}  type="radio" name="shift_detailes" id="inlineRadio1" value="Day">
                              <label class="form-check-label" for="inlineRadio1">Day</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input"   {{$user[0]->shift_detailes=="Night"?"checked":""}}   type="radio" name="shift_detailes" id="inlineRadio2" value="Night">
                              <label class="form-check-label" for="inlineRadio2">Night</label>
                            </div>
                            <!-- <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="radio"  {{$user[0]->shift_detailes=="Day"?"checked":""}} value="Male" id="shift1" name="shift_detailes">
                                <label for="radioPrimary1">Day
                                </label>
                              </div>
                              <div class="icheck-primary d-inline">
                                <input type="radio"  {{$user[0]->shift_detailes=="Night"?"checked":""}}  value="Night" id="shift2"  name="shift_detailes">
                                <label for="radioPrimary2">Night
                                </label>
                              </div>
                              </div>-->
                        </div>
                        </div>
                          <div class="form-group row">
                          <label for="inputSkills" class="col-sm-4 col-form-label">Gender</label>
                          <div class="col-sm-8">
                            <!--<input type="text" class="form-control" id="gender"   name="gender" placeholder="Gender" value="{{$user[0]->gender}}">
                            -->
                            <!--<div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="radio"  {{$user[0]->gender=="Male"?"checked":""}}  value="Male" id="gender1" name="gender">
                                <label for="radioPrimary1">Male
                                </label>
                              </div>
                              <div class="icheck-primary d-inline">
                                <input type="radio"  {{$user[0]->gender=="Female"?"checked":""}} value="Female" id="gender2"  name="gender">
                                <label for="radioPrimary2">Female
                                </label>
                              </div>
                              </div>-->

                              
                         
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" {{$user[0]->gender=="Male"?"checked":""}} type="radio" value="Male" id="customRadio1" name="gender">
                              <label for="customRadio1" class="custom-control-label">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" {{$user[0]->gender=="Female"?"checked":""}} type="radio" value="Female" id="customRadio2" name="gender" >
                              <label for="customRadio2" class="custom-control-label">Female</label>
                            </div>
                         
                         
                         
                          </div>
                        </div> 
                        
                        
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-4 col-form-label">Blood Group </label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="blood_group"   name="blood_group" placeholder="Blood Group" value="{{$user[0]->blood_group}}">
                          </div>
                        </div>
   
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-4 col-form-label">Father Name </label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="father_name"   name="father_name" placeholder="Father Name" value="{{$user[0]->father_name}}">
                          </div>
                        </div>
   
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-4 col-form-label">Spouse Name </label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="spouse_name"   name="spouse_name" placeholder="Spouse Name" value="{{$user[0]->spouse_name}}">
                          </div>
                        </div>




                        <div class="form-group row">
                          <label for="inputName" class="col-sm-4 col-form-label">Address</label>
                          <div class="col-sm-8">
                            <textarea class="form-control" id="address"   name="address" placeholder="Address">{{$user[0]->address}}</textarea>
                          </div>
                        </div>
                       
                      
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                           
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-info">Update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                   <!-- <hr>
                    <div class="container text-center">
                      <label for="inputExperience" class=" col-form-label">Document</label>
                   
                        <div class="row">
                          <div class="col"><label for="inputExperience" class=" col-form-label">Document Name</label></div>
                          <div class="col"><input type="text" name="document_name" class="form-control" ></div>
                          <div class="col"><input type="file" name="inputField" class="form-control"></div>
                          <div class="col"><button class="btn btn-info">upload</button></div>
                          
                          
                      </div>
                      <label for="inputSkills" class="text-center col-form-label">Uploaded Document</label>
                      <div class="row">
                        <div class="col"><p>Aadhar</p></div>
                     
                        <div class="col"><downloa class="btn btn-info">Download</downloa></div>
                        <div class="col"><downloa class="btn btn-danger">Delete</downloa></div>
                        
                        
                    </div>
                     
                    </div>-->
                   
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="bank">
                    <form method="POST"  action="{{url('update-bank')}}">
                      @csrf
                      <input type="hidden" class="form-control" name="id"  value="{{$user[0]->u_id}}" >
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-4 col-form-label">Aadhar Number</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control"   name="aadhar_number" value="{{$user[0]->aadhar_number}}"  placeholder="Aadhar Number">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-4 col-form-label">Pan Number</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control"    name="pan_number" value="{{$user[0]->pan_number}}" placeholder="Pan Number">
                        </div>
                      </div> 
                      
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-4 col-form-label">Bank Name</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control"   name="bank_number" value="{{$user[0]->bank_number}}"  placeholder="Bank Name">
                        </div>
                      </div> 
                       <div class="form-group row">
                        <label for="inputName2" class="col-sm-4 col-form-label">Account Number</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control"    name="account_number" value="{{$user[0]->account_number}}" placeholder="Account Number">
                        </div>
                      </div>  


                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-4 col-form-label">IFSC Number</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control"   name="ifsc_number" value="{{$user[0]->ifsc_number}}"  placeholder="IFSC Number">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-4 col-form-label">PF joining Date</label>
                        <div class="col-sm-8">
                          <input type="date" class="form-control"   name="pf_joining_date" value="{{$user[0]->pf_joining_date?$user[0]->pf_joining_date:""}}"  placeholder="PF joining Date">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-4 col-form-label">PF Number</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control"   name="pf_number" value="{{$user[0]->pf_number}}"  placeholder="PF Number">
                        </div>
                      </div><div class="form-group row">
                        <label for="inputName2" class="col-sm-4 col-form-label">ESI Number</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control"   name="est_number"  value="{{$user[0]->est_number}}" placeholder="ESI Number">
                        </div>
                      </div>




                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                      </div>
                    </form>

                    <hr>
              



                  </div>



                  <div class="tab-pane" id="settings">
                    <form method="POST"  action="{{url('update-leave-details')}}">
                      @csrf
                      <input type="hidden" class="form-control" name="id"  value="{{$user[0]->u_id}}" >
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-4 col-form-label">Leave per month </label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control"   name="leave_per_month" value="{{$user[0]->leave_per_month==NULL?0:$user[0]->leave_per_month}}"  placeholder="Leave per month">
                        </div>
                      </div>
                  
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                      </div>
                    </form>
                   
                    <hr>
                    <div class="container text-center">
                      <label for="inputSkills" class="text-center col-form-label">Leave Taken</label>
                     
                     @foreach ($atttend as $att)
                     <div class="row">
                      <div class="col"><p>{{$att->attendance_status==0?"FULL DAY":"HALF DAY"}}</p></div>
                      <div class="col"><p>{{date('d-M-Y',strtotime($att->attendance_date))}}</p></div>
                      </div>
                  
                     @endforeach
                    </div>
                     




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