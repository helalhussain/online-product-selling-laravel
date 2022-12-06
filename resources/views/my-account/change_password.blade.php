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
            <div class="rounded bg-white  mb-5">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Edit Password</h4>
                </div>
                @php
                $user_id = Session::get('user_id');
            @endphp
                <form action="{{url('/my-account/edit-password')}}" method="POST">
                    @csrf
                   
                    @if(Session::has('success'))
                        <span class="text-danger"> {{Session::get('success')}} </span>
                    @endif
                    @if(Session::has('fail'))
                        <span class="text-danger"> {{Session::get('fail')}} </span>
                    @endif 



                    <div class="row mt-2">
                    <div class="col-md-12">
                        <label class="labels">Old password</label>
                        <input type="password" name="old_password" 
                        class="form-control @error('old_password') is-invalid @enderror" 
                         placeholder="Old Password"
                        >
                        @error('old_password')
                        <small class="form-text text-danger"> {{$message}} </small>  
                        @enderror               
                    </div>
                    <div class="col-md-12">
                        <label class="labels">New password</label>
                        <input type="password" name="new_password"class="form-control 
                        @error('new_password') is-invalid @enderror"placeholder="New Password"
                        >
                        @error('new_password')
                        <small class="form-text text-danger"> {{$message}} </small>  
                        @enderror                 
                    </div>
                    <div class="col-md-12">
                        <label class="labels">confirm password</label>
                        <input type="password" name="confirm_password" class="form-control 
                        @error('confirm_password') is-invalid @enderror"
                         placeholder="Confirm Password" 
                        >
                        @error('confirm_password')
                        <small class="form-text text-danger"> {{$message}} </small>  
                        @enderror                 
                    </div>
                    
         
                    </div>
              
                  

                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div> -->
                <div class="mt-5">
                    <button class="btn btn-primary profile-button" type="submit">Edit Password</button>
                </div>
               </form>
            </div>
        </div>               

            </div>
        </div>
        <!---Row End-->
    </section>
</div>

@endsection