@extends('admin.admin_master')
@section('admin_content')
<!--------------------sidebar------------------------>

@include('admin.admin-sidebar')
    <!---------------sidebar-end----------------->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-envelope"></i> Inbox</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-envelope fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Inbox</a></li>
        </ul>
      </div>

     
      <!-----------------list-header---------------------->
      <ul class="list-group">
                <a href="#" style="text-decoration: none;">
                  <li class="list-group "style="background:#009688;">
 
                      <div class="row pt-3 pl-4 pr-4">
                        <div class="col-lg-3">
                         <h3 class="text-white">Inbox</h3>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                          
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                          <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
                        </div>
                      </div>
                        </div>
                      </div>
                </li>
                </a>
                <div class="inbox-lists" style="height:70vh; width:auto; overflow:scroll;">
                <a href="inbox-show.php" style="text-decoration: none;">
                  <li class="list-group-item d-flex justify-content-between align-items-center"style="">
                      <div class="icon">
                      <input type="checkbox" class="btn btn-primary btn-lg" name="">
                      <i class="fa fa-star fa-lg" style="padding-left:10px;"></i>
                      </div>
                        <div class="name"><h5 class="font-weight-bold mt-2">Joe Biden</h5></div>
                     <div class="delete">
                       </div>
                        <div class="message"><h6 class="font-weight-bold text-secondary mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                        tempor incididunt ut </h6></div>
                       <div class="dete">
                       <span class="badge badge-primary badge-pill">01/04/2021</span>
                     </div>
                     <div class="delete">
                       <i class="fa fa-trash fa-lg" title="Delete"></i>
                     </div>
                </li>
                </a>
                <a href="#" style="text-decoration: none;">
                  <li class="list-group-item d-flex justify-content-between align-items-center"style="">
                      <div class="icon">
                      <input type="checkbox" class="btn btn-primary btn-lg" name="">
                      <i class="fa fa-star fa-lg" style="padding-left:10px;"></i>
                      </div>
                        <div class="name"><h5 class="font-weight-bold mt-2">Cras justo </h5></div>
                     <div class="delete">
                       </div>
                        <div class="message"><h6 class="font-weight-bold text-secondary mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                        tempor incididunt ut </h6></div>
                       <div class="dete">
                       <span class="badge badge-primary badge-pill">01/04/2021</span>
                     </div>
                     <div class="delete">
                       <i class="fa fa-trash fa-lg" title="Delete"></i>
                     </div>
                </li>
                </a>
               <a href="#" style="text-decoration: none;">
                  <li class="list-group-item d-flex justify-content-between align-items-center"style="">
                      <div class="icon">
                      <input type="checkbox" class="btn btn-primary btn-lg" name="">
                      <i class="fa fa-star fa-lg" style="padding-left:10px;"></i>
                      </div>
                        <div class="name"><h5 class="font-weight-bold mt-2">Cras justo</h5></div>
                     <div class="delete">
                       </div>
                        <div class="message"><h6 class="font-weight-bold text-secondary mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                        tempor incididunt ut </h6></div>
                       <div class="dete">
                       <span class="badge badge-primary badge-pill">01/04/2021</span>
                     </div>
                     <div class="delete">
                       <i class="fa fa-trash fa-lg" title="Delete"></i>
                     </div>
                </li>
                </a>
               <a href="#" style="text-decoration: none;">
                  <li class="list-group-item d-flex justify-content-between align-items-center"style="">
                      <div class="icon">
                      <input type="checkbox" class="btn btn-primary btn-lg" name="">
                      <i class="fa fa-star fa-lg" style="padding-left:10px;"></i>
                      </div>
                        <div class="name"><h5 class="font-weight-bold mt-2">justo odio</h5></div>
                     <div class="delete">
                       </div>
                        <div class="message"><h6 class="font-weight-bold text-secondary mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                        tempor incididunt ut </h6></div>
                       <div class="dete">
                       <span class="badge badge-primary badge-pill">01/04/2021</span>
                     </div>
                     <div class="delete">
                       <i class="fa fa-trash fa-lg" title="Delete"></i>
                     </div>
                </li>
                </a>

                <a href="#" style="text-decoration: none;">
                  <li class="list-group-item d-flex justify-content-between align-items-center"style="">
                      <div class="icon">
                      <input type="checkbox" class="btn btn-primary btn-lg" name="">
                      <i class="fa fa-star fa-lg" style="padding-left:10px;"></i>
                      </div>
                        <div class="name"><h5 class="font-weight-bold mt-2">justo odio</h5></div>
                     <div class="delete">
                       </div>
                        <div class="message"><h6 class="font-weight-bold text-secondary mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                        tempor incididunt ut </h6></div>
                       <div class="dete">
                       <span class="badge badge-primary badge-pill">01/04/2021</span>
                     </div>
                     <div class="delete">
                       <i class="fa fa-trash fa-lg" title="Delete"></i>
                     </div>
                </li>
                </a>
                <a href="#" style="text-decoration: none;">
                  <li class="list-group-item d-flex justify-content-between align-items-center"style="">
                      <div class="icon">
                      <input type="checkbox" class="btn btn-primary btn-lg" name="">
                      <i class="fa fa-star fa-lg" style="padding-left:10px;"></i>
                      </div>
                        <div class="name"><h5 class="font-weight-bold mt-2">justo odio</h5></div>
                     <div class="delete">
                       </div>
                        <div class="message"><h6 class="font-weight-bold text-secondary mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                        tempor incididunt ut </h6></div>
                       <div class="dete">
                       <span class="badge badge-primary badge-pill">01/04/2021</span>
                     </div>
                     <div class="delete">
                       <i class="fa fa-trash fa-lg" title="Delete"></i>
                     </div>
                </li>
                </a>
                <a href="#" style="text-decoration: none;">
                  <li class="list-group-item d-flex justify-content-between align-items-center"style="">
                      <div class="icon">
                      <input type="checkbox" class="btn btn-primary btn-lg" name="">
                      <i class="fa fa-star fa-lg" style="padding-left:10px;"></i>
                      </div>
                        <div class="name"><h5 class="font-weight-bold mt-2">justo odio</h5></div>
                     <div class="delete">
                       </div>
                        <div class="message"><h6 class="font-weight-bold text-secondary mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                        tempor incididunt ut </h6></div>
                       <div class="dete">
                       <span class="badge badge-primary badge-pill">01/04/2021</span>
                     </div>
                     <div class="delete">
                       <i class="fa fa-trash fa-lg" title="Delete"></i>
                     </div>
                </li>
                </a>
                <a href="#" style="text-decoration: none;">
                  <li class="list-group-item d-flex justify-content-between align-items-center"style="">
                      <div class="icon">
                      <input type="checkbox" class="btn btn-primary btn-lg" name="">
                      <i class="fa fa-star fa-lg" style="padding-left:10px;"></i>
                      </div>
                        <div class="name"><h5 class="font-weight-bold mt-2">justo odio</h5></div>
                     <div class="delete">
                       </div>
                        <div class="message"><h6 class="font-weight-bold text-secondary mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                        tempor incididunt ut </h6></div>
                       <div class="dete">
                       <span class="badge badge-primary badge-pill">01/04/2021</span>
                     </div>
                     <div class="delete">
                       <i class="fa fa-trash fa-lg" title="Delete"></i>
                     </div>
                </li>
                </a>

                <a href="#" style="text-decoration: none;">
                  <li class="list-group-item d-flex justify-content-between align-items-center"style="">
                      <div class="icon">
                      <input type="checkbox" class="btn btn-primary btn-lg" name="">
                      <i class="fa fa-star fa-lg" style="padding-left:10px;"></i>
                      </div>
                        <div class="name"><h5 class="font-weight-bold mt-2">justo odio</h5></div>
                     <div class="delete">
                       </div>
                        <div class="message"><h6 class="font-weight-bold text-secondary mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                        tempor incididunt ut </h6></div>
                       <div class="dete">
                       <span class="badge badge-primary badge-pill">01/04/2021</span>
                     </div>
                     <div class="delete">
                       <i class="fa fa-trash fa-lg" title="Delete"></i>
                     </div>
                </li>
                </a> </div>
              </ul>
                </div>
              
              </div>

    
      		<div class="col-lg-1"></div>
      	</div>
    </main>
     
@endsection
      
