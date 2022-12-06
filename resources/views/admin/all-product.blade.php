@extends('admin.admin_master')
@section('admin_content')
<!--------------------sidebar------------------------>

@include('admin.admin-sidebar')
    <!---------------sidebar-end----------------->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fas fa-ad"> </i> All Product</h1>
          
        </div>

        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fas fa-ad fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">product</a></li>
        </ul>
      </div>

      @if(Session::has('success'))
              <span class="text-danger">{{Session::get('success')}} </span>
              @endif
              @if(Session::has('fail'))
              <span class="text-danger"> {{Session::get('fail')}} </span>
              @endif 
      <!-----------------list-header---------------------->
      <ul class="list-group">
                <a href="#" style="text-decoration: none;">
                  <li class="list-group "style="background:#009688;">
 
                      <div class="row pt-3 pl-4 pr-4">
                        <div class="col-lg-3">
                         <h3 class="text-white">Products</h3>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                          
                      <div>
                        <form action=""  class="input-group mb-3">
                     
                        <input type="search" class="form-control" name="search" vlaue=" " placeholder="Search">
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
                       
                            <th style="bg-light" scope="col">Category</th>
                            <th style="bg-light" scope="col">Title</th>
                            <th style="bg-light" scope="col">Description</th>
                            <th style="bg-light" scope="col">Block</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($product as $products)
                        <tr class="">
                            <td scope="row"> {{$products->id}} </td>
                            <td> {{$products->first_name}} {{$products->last_name}} </td>
                            <td> {{$products->category_title}} </td>
                            <td> {{$products->title}} </td>
                            <td> {{$products->description}} </td>
                            @if($products->status ==1)
                            <td><a href="{{url('/admin/all-product-status/'.$products->id)}}"class="btn btn-danger">Block</a> </td>
                            @else
                            <td><a href="{{url('/admin/all-product-status/'.$products->id)}}" class="btn btn-light">Unblock</a> </td>
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
      
