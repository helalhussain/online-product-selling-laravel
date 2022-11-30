@extends('admin.admin_master')
@section('admin_content')
<!--------------------sidebar------------------------>

@include('admin.admin-sidebar')
    <!---------------sidebar-end----------------->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-user"></i> All Report</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-user fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">report</a></li>
        </ul>
      </div>

     
      <!-----------------list-header---------------------->
      <ul class="list-group">
                <a href="#" style="text-decoration: none;">
                  <li class="list-group "style="background:#009688;">
 
                      <div class="row pt-3 pl-4 pr-4">
                        <div class="col-lg-3">
                         <h3 class="text-white"> Report</h3>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                          
                      <div>
                        <form action=""  class="input-group mb-3">
                     
                        <input type="search" class="form-control" name="search" vlaue="  " placeholder="Search">
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
                            <th style="bg-light" scope="col">User name</th>
                            <th style="bg-light" scope="col">Product image</th>
                            <th style="bg-light" scope="col">Title</th>
                            <th style="bg-light" scope="col">Reson</th>
                            <th style="bg-light" scope="col">Message</th>
                            
                         
                        </tr>
                    </thead>
                    <tbody>
                        
                    @foreach($report as $key=>$reports)
                    <tr class="">
                        <td scope="row">{{ $key+1 }}</td>
                        <td scope="row">{{$reports->first_name }} {{ $reports->last_name}}</td>
                        <td scope="row">
                            <img src="{asset('/storage/'.$reports->image_1)}}" style="width:100px;"/>
                        </td>
                        <td scope="row">{{$reports->title}}</td>
                        <td scope="row">{{$reports->reason}}</td>
                        <td scope="row">{{$reports->message}}</td>
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
      
