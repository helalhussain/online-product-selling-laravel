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
                    <h4 class="text-right">Edit Profile</h4>
                </div>
                <form action="{{url('/my-account/edit-profile')}}" method="POST">
                    @csrf
                    @if(Session::has('success'))
                        <span class="text-danger"> {{Session::get('success')}} </span>
                        @endif
                        @if(Session::has('fail'))
                        <span class="text-danger"> {{Session::get('fail')}} </span>
                    @endif 



                    <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">First Name</label>
                        <input type="text" value="{{$edit_profile->first_name}}" name="first_name"class="form-control" required>
                        <small class="form-text text-danger">  </small>                 
                    </div>
                    
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <label class="labels">Last Name</label>
                            <input type="text" value="{{$edit_profile->last_name}}" name="last_name"class="form-control" required>
                            <small class="form-text text-danger">  </small>                 
                        </div>
                    </div>
                    </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Date of birth</label>
                        <input type="date" value="{{$edit_profile->dob}}" name="dob" class="form-control" required>
                        <small class="form-text text-danger">  </small>                 
                    </div>
                    
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <label class="labels">Gender</label>
                            <select type="text" name="gender"class="form-control" required>
                                <option value="{{$edit_profile->gender}}">{{$edit_profile->gender}}</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <small class="form-text text-danger">  </small>                 
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Phone no</label>
                        <input type="numebr" value="{{$edit_profile->phone_no}}" name="phone_no"class="form-control" required>
                        <small class="form-text text-danger">  </small>                 
                    </div>
                    
                    <div class="col-md-6">
                        <div class="col-md-6">
                        <label class="labels">Division</label>
                        <select name="division"  class="form-control @error('division')
                                is-invalid @enderror" required>
                         <option value="{{$edit_profile->division}}">{{$edit_profile->division}}</option>
                         <option value="Dhaka">Dhaka</option>
                          <option value="Chattogram">Chattogram</option>
                          <option value="Sylhet">Sylhet</option>
                          <option value="Khulna">Khulna</option>
                          <option value="Borishal">Borishal</option>
                          <option value="Rangpur">Rangpur</option>
                          <option value="Rajshahi">Rajshahi</option>
                          <option value="Mymenshingh">Mymenshingh</option>
                          <option value="Comilla">Comilla</option>
                        </select>
                   
                        <small class="form-text text-danger">  </small>                
                        </div>
                    </div>
                    </div>
                    <div class="row mt-2">
                    <div class="col-md-12">
                        <label class="labels">Address</label>
                        <input type="text" value="{{$edit_profile->address}}" name="address" class="form-control" required>
                        <small class="form-text text-danger">  </small>                 
                    </div>
                    </div>

                    <input type="hidden" value="{{$edit_profile->id}}" name="id" class="form-control" >
                

                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div> -->
                <div class="mt-5">
                    <button class="btn btn-primary profile-button" type="submit">Edit Profile</button>
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