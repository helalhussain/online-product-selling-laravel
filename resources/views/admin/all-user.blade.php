@extends('admin.admin_master')
@section('admin_content')
<!--------------------sidebar------------------------>

@include('admin.admin-sidebar')
    <!---------------sidebar-end----------------->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-user"></i> All User</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-user fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">user</a></li>
        </ul>
      </div>

     
      <!-----------------list-header---------------------->
      <ul class="list-group">
                <a href="#" style="text-decoration: none;">
                  <li class="list-group "style="background:#009688;">
 
                      <div class="row pt-3 pl-4 pr-4">
                        <div class="col-lg-3">
                         <h3 class="text-white"> Users</h3>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                          
                      <div>
                        <form action=""  class="input-group mb-3">
                     
                        <input type="search" class="form-control" name="search" vlaue=" {{$search}} " placeholder="Search">
                        <div class="input-group-append">
                          <button class="btn btn-dark" >Search</i></button>
                        </div>
                        </form>
                      </div>
                        </div>
                      </div>
                </li>
                </a>
                <div class="inbox-lists" style="height:70vh; width:auto; overflow:scroll;">
              
              <div class="table-responsive">


                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th style="bg-light" scope="col">No</th>
                            <th style="bg-light" scope="col">User Name</th>
                            <th style="bg-light" scope="col">Email</th>
                            <th style="bg-light" scope="col">Division</th>
                            <th style="bg-light" scope="col">Block</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $users)
                        <tr class="">
                            <td scope="row">{{$users->id}}</td>
                            <td> {{$users->first_name}} {{$users->last_name}} </td>
                            <td> {{$users->email}} </td>
                            <td> {{$users->division}} </td>
                            @if($users->status ==1)
                            <td><a href="{{url('/admin/all-user-status/'.$users->id)}}"class="btn btn-danger">Block</a> </td>
                            @else
                            <td><a href="{{url('/admin/all-user-status/'.$users->id)}}" class="btn btn-light">Unblock</a> </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>


              </div>          
              
               </div>
              </ul>
                </div>
              
              </div>

    
      		<div class="col-lg-1"></div>
      	</div>
    </main>
     
@endsection
      
