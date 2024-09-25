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
          
          <li class="nav-item">
            <a href="/dashboard " class="{{ request()->is('dashboard') ? 'active' : '' }} nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="/roll" class="{{ request()->is('roll') ? 'active' : '' }} nav-link">
              <i class="far fa-user nav-icon"></i>
              <p>
                Role Management
         
              </p>
            </a>
          </li> <li class="nav-item">
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
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('lead-reports') ? 'active' : '' }}">
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
              <li class="nav-item">
                <a href="/lead-reports" class="{{ request()->is('lead-reports') ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lead Report</p>
                </a>
              </li>
            
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Sales Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/sales-dashboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/sales" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/sales-reports" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales Report</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Purchase Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/purchase-dashboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/purchase" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Purchase Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/purchase-reports" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Purchase Reports</p>
                </a>
              </li>
           
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Hr Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/hr-dashboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/hr" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employees</p>
                </a>
              </li> 
              
              <li class="nav-item">
                <a href="/hr-holiday" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Holidays</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="/hr-salarysetup" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salary Setup</p>
                </a>
              </li>  <li class="nav-item">
                <a href="/hr-salarypayslip" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salary Payslip</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Customer Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/customer" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/customer-details" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer Reports</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Masters
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/master-company" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/master-plant" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Plant</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/master-colors" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Colours</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/master-product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li><li class="nav-item">
                <a href="/master-brand" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Brand</p>
                </a>
              </li><li class="nav-item">
                <a href="/master-unit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit</p>
                </a>
              </li><li class="nav-item">
                <a href="/master-form" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/master-leadsource" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lead source </p>
                </a>
              </li>
            </ul>
          </li>
       

        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>