<?php

use Illuminate\Support\Facades\Auth;
?>
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="text-center">  <a href="index3.html" class="brand-link">
      <img src="/template/dist/img/AdminLTELogo.webp" alt="AdminLTE Logo" class=" elevation-3" style="opacity: .8;height: 30px;">
      <span class="brand-text font-weight-light"></span>
    </a></div>
  
  <!-- Navbar -->
 
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
     <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @php
         /*  echo Session()->get('role_access')[0]['role_name'];
          echo"<pre>";
            print_r(Session()->get('role_access')); */
          @endphp


          <li class="nav-item">
            <a href="/dashboard " class="{{ request()->is('dashboard') ? 'active' : '' }} nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard </p>
            </a>
          </li> 

@if (!isset(Session()->get('role_access')[0]['role_management']))
@php
  return redirect('/test-session');
@endphp
@endif
@if (Session()->get('role_access')[0]['role_management']=="" || Session()->get('role_access')[0]['user_management']=="" || Session()->get('role_access')[0]['lead_management']==""|| Session()->get('role_access')[0]['lead_management']=="")
@php
  return redirect('/test-session');
@endphp
@endif


@if (Session()->get('role_access')[0]['role_management']==1)
<li class="nav-item">
  <a href="/roll" class="{{ request()->is('roll') ? 'active' : '' }} nav-link">
    <i class="far fa-user nav-icon"></i>
    <p>
      Role Management

    </p>
  </a>
</li> 
@endif

@if (Session()->get('role_access')[0]['user_management']==1)
@endif
        <li class="nav-item">
            <a href="/user" class="{{ request()->is('user') ? 'active' : '' }} nav-link">
              <i class="far fa-user nav-icon"></i>
              <p>
                User Management
         
              </p>
            </a>
          </li>
          
         <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>-->
          @if (Session()->get('role_access')[0]['lead_management']==1)
          <li class="nav-item {{ request()->is('lead-dashboard') || request()->is('lead')  ? 'menu-open' : '' }} ">
            <a href="#" class="nav-link {{ request()->is('lead-dashboard') || request()->is('lead') ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Lead Management
                <i class="fas fa-angle-left right"></i>
                <!--<span class="badge badge-info right">6</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/lead-dashboard" class="{{ request()->is('lead-dashboard') ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="/lead" class="{{ request()->is('lead') ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lead details </p>
                </a>
              </li>
           
            
            </ul>
          </li>
          @endif
    
          
          @if (Session()->get('role_access')[0]['sales_management']==1)
          <li class="nav-item {{ request()->is('sales-dashboard') || request()->is('sales') || request()->is('sales-excel') || request()->is('sales-add')  ? 'menu-open' : '' }} {{ request()->segment(0) == 'edit-sales' ?  'menu-open' : '' }}">
            <a href="#" class="nav-link  {{ request()->is('sales-dashboard') || request()->is('sales')   || request()->is('sales-excel')   || request()->is('sales-add')  || request()->is('edit-sales')  ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Sales Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/sales-dashboard" class="{{ request()->is('sales-dashboard') ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/sales" class="{{ request()->is('sales') || request()->is('sales-excel')  || request()->is('sales-add')|| request()->is('edit-sales') ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales Details</p>
                </a>
              </li>
             {{--  <li class="nav-item">
                <a href="/sales-reports" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales Report</p>
                </a>
              </li> --}}
             
            </ul>
          </li>
          @endif

        

          @if (Session()->get('role_access')[0]['purchase_management']==1)

          <li class="nav-item {{ request()->is('purchase-dashboard') || request()->is('purchase')  || request()->is('purchase-excel') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  {{ request()->is('purchase-dashboard') || request()->is('purchase')  || request()->is('purchase-excel')  ? 'active' : '' }}">
            
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Purchase Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/purchase-dashboard" class="nav-link {{ request()->is('purchase-dashboard')   ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/purchase" class="nav-link {{  request()->is('purchase') || request()->is('purchase-excel')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Purchase Details</p>
                </a>
              </li>
             {{--  <li class="nav-item">
                <a href="/purchase-reports" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Purchase Reports</p>
                </a>
              </li> --}}
           
            </ul>
          </li>
          @endif
          @if (Session()->get('role_access')[0]['role_management']==1)
          <li class="nav-item {{ request()->is('hr-dashboard') || request()->is('hr')  || request()->is('hr-holiday') || request()->is('hr-mark-attendence') || request()->is('hr-salarysetup') || request()->is('hr-loansetup') || request()->is('hr-salarysetup') || request()->is('hr-salarypayslip') || request()->is('hr-generatepayslip') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->is('hr-dashboard') || request()->is('hr')  || request()->is('hr-holiday') || request()->is('hr-mark-attendence') || request()->is('hr-salarysetup') || request()->is('hr-loansetup') || request()->is('hr-salarypayslip') || request()->is('hr-generatepayslip') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Hr Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/hr-dashboard" class="nav-link {{  request()->is('hr-dashboard')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/hr" class="nav-link {{  request()->is('hr')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employees</p>
                </a>
              </li> 
              
              <li class="nav-item">
                <a href="/hr-holiday" class="nav-link {{  request()->is('hr-holiday')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Holidays</p>
                </a>
              </li> <li class="nav-item">
                <a href="/hr-mark-attendence" class="nav-link {{  request()->is('hr-mark-attendence')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mark Attendance</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="/hr-salarysetup" class="nav-link {{  request()->is('hr-salarysetup')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salary Setup</p>
                </a>
              </li>   
              
              <li class="nav-item">
                <a href="/hr-loansetup" class="nav-link {{  request()->is('hr-loansetup')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loan Setup</p>
                </a>
              </li>  
              
              
              
              
              <li class="nav-item">
                <a href="/hr-generatepayslip" class="nav-link {{  request()->is('hr-generatepayslip')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Payslip</p>
                </a>
              </li> 
              
              
              
              
              <li class="nav-item">
                <a href="/hr-salarypayslip" class="nav-link {{  request()->is('hr-salarypayslip')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Print Payslip</p>
                </a>
              </li>
             
            </ul>
          </li>
@endif
          

          @if (Session()->get('role_access')[0]['customer_management']==1)
          <li class="nav-item {{  request()->is('customer')  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{  request()->is('customer')  ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Customer Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/customer" class="nav-link {{  request()->is('customer')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer Details</p>
                </a>
              </li>
             {{--  <li class="nav-item">
                <a href="/customer-details" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer Reports</p>
                </a>
              </li> --}}
             
            </ul>
          </li>
@endif
         

          @if (Session()->get('role_access')[0]['master_management']==1)
          <li class="nav-item {{ request()->is('master-brand') || request()->is('master-category')  || request()->is('master-colors') || request()->is('master-company') || request()->is('master-form') || request()->is('master-leadsource') || request()->is('master-location')  || request()->is('master-plant')  || request()->is('master-product')  || request()->is('master-type')  || request()->is('master-unit') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->is('master-brand') || request()->is('master-category')  || request()->is('master-colors') || request()->is('master-company') || request()->is('master-form') || request()->is('master-leadsource') || request()->is('master-location')  || request()->is('master-plant')  || request()->is('master-product')  || request()->is('master-type')  || request()->is('master-unit') ? 'active' : '' }}">
             <i class="nav-icon fas fa-edit"></i>
              <p>
                Masters
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/master-brand" class="nav-link  {{  request()->is('master-brand')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Brand</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/master-category" class="nav-link {{  request()->is('master-category')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/master-colors" class="nav-link" {{  request()->is('master-colors')  ? 'active' : '' }}>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Colours</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/master-company" class="nav-link {{  request()->is('master-company')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="/master-form" class="nav-link {{  request()->is('master-form')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/master-leadsource" class="nav-link {{  request()->is('master-leadsource')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lead source </p>
                </a>
              </li> <li class="nav-item">
                <a href="/master-location" class="nav-link {{  request()->is('master-location')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Location </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/master-plant" class="nav-link {{  request()->is('master-plant')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Plant</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="/master-product" class="nav-link {{  request()->is('master-product')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li> <li class="nav-item">
                <a href="/master-type" class="nav-link {{  request()->is('master-type')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Type</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="/master-unit" class="nav-link {{  request()->is('master-unit')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit</p>
                </a>
              </li>
            </ul>
          </li>
@endif
          
       

        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>