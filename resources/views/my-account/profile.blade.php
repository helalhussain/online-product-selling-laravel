@extends('master')
@section('user_content')

<div class="container">
    <section class="myProfile">
        <!---Row start-->
        <div class="row pt-5">
            <div class="col-lg-3">
                @include('my-account.sidebar')
            </div>
            <div class="col-lg-9">
            <div class="main-body">
    
    <!-- Breadcrumb -->
    <!-- <nav aria-label="breadcrumb" class="main-breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
      </ol>
    </nav> -->
    <!-- /Breadcrumb -->

    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
                <h4>  {{$user_profile->first_name}} {{$user_profile->last_name}}</h4>
                <!-- <p class="text-secondary mb-1">Full Stack Developer</p> -->
                <p class="text-muted font-size-sm"> {{$user_profile->email}} </p>
                <button class="btn btn-primary">Edit Profile photo</button>
                <!-- <button class="btn btn-outline-primary">Message</button> -->
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-8">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Full Name</h6>
              </div>
              <div class="col-sm-9 text-secondary">
               {{$user_profile->first_name}} {{$user_profile->last_name}}
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Date of birth</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{$user_profile->dob}}
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Gender</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{$user_profile->gender}}
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
              </div>
              <div class="col-sm-9 text-secondary">
               
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Division</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Address</h6>
              </div>
              <div class="col-sm-9 text-secondary">
               
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <a class="btn btn-success " target="__blank" href="">Add or Edit info</a>
              </div>
            </div>
          </div>
        </div>





      </div>
    </div>

  </div>
            </div>
        </div>
        <!---Row End-->
    </section>
</div>

@endsection