@extends('admin.admin_master')
@section('admin_content')
<!--------------------sidebar------------------------>
@php 
  $admin_name = Session::get('admin_name')

@endphp
@include('admin.admin-sidebar')
    <!---------------sidebar-end----------------->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-user"> </i> Admin</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-user fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#"> Admin</a></li>
        </ul>
      </div>

     
      <!-----------------list-header---------------------->
      <ul class="list-group">
                <a href="#" style="text-decoration: none;">
                  <li class="list-group "style="background:#009688;">
 
                      <div class="row pt-3 pl-4 pr-4">
                        <div class="col-lg-3">
                         <h3 class="text-white">Admin</h3>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                          
                      <div class="input-group mb-3">
                        <!-- <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                          <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
                        </div> -->
                      </div>
                        </div>
                      </div>
                </li>
                </a>
                <div class="inbox-lists" style="height:70vh; width:auto; overflow:scroll;">
                <!----Start-->
<br/><br>
<div class="col-lg-4 mx-auto">
<div class="card text-center pt-5">
<i class="fa fa-user" style="font-size:50px"> </i>
  <div class="card-body">
    <h4 class="card-title"> {{$admin_name}} </h4>
    <h6 class="card-text">admin@gmail.com</h6>
  </div>
</div>
</div>

                <!-----End--->
                
             </div>

                </div>
              </ul>
                </div>
              
              </div>

    
      		<div class="col-lg-1"></div>
      	</div>
    </main>
     
@endsection
      
