<!-- <ul class="list-group">
 <a href="{{url('my-account/profile')}}" class="fw-bold active" style="text-decoration:none;">
 <li class="list-group-item d-flex justify-content-between align-items-cente activer">
    My profile
    <span class="badge bg-primary rounded-pill"><i class="fa fa-arrow-right"></i></span>
  </li>
 </a>
 <a href="{{url('my-account/product/create')}}" class="fw-bold" style="text-decoration:none;">
 <li class="list-group-item d-flex justify-content-between align-items-center">
   Add Product
    <span class="badge bg-primary rounded-pill"><i class="fa fa-arrow-right"></i></span>
  </li>
 </a>
 <a href="{{url('my-account/product')}}" class="fw-bold" style="text-decoration:none;">
 <li class="list-group-item d-flex justify-content-between align-items-center">
   My Product
    <span class="badge bg-primary rounded-pill"><i class="fa fa-arrow-right"></i></span>
  </li>
 </a>
 <a href="{{url('my-account/edit-password')}}" class="fw-bold" style="text-decoration:none;">
 <li class="list-group-item d-flex justify-content-between align-items-center">
   My Product
    <span class="badge bg-primary rounded-pill"><i class="fa fa-arrow-right"></i></span>
  </li>
 </a>

</ul> -->

<ul class="list-group">
  <a href="{{url('my-account/profile')}}" class="list-group-item {{Request::is('my-account/profile') ? 'active':''}}" aria-current="true">My Profile</a>
  <a href="{{url('my-account/product/create')}}" class="list-group-item {{Request::is('my-account/product/create') ? 'active':''}}">Add Product</a>
  <a href="{{url('my-account/product/')}}" class="list-group-item {{Request::is('my-account/product') ? 'active':''}}">My Product</a>
  <a href="{{url('my-account/edit-password')}}" class="list-group-item {{Request::is('my-account/edit-password') ? 'active':''}}">Change Password</a>
</ul>











