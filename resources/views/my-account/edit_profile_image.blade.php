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
                    <h4 class="text-right">Edit Profile Image</h4>
                </div>
                <form action="{{url('/my-account/edit-profile-image')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(Session::has('success'))
                        <span class="text-danger"> {{Session::get('success')}} </span>
                        @endif
                        @if(Session::has('fail'))
                        <span class="text-danger"> {{Session::get('fail')}} </span>
                    @endif 



                    <div class="row mt-2">
                    <div class="col-md-12">
                        <label class="labels">Profile image</label>
                        <input type="file" name="image"class="form-control" 
                        required>
                        <small class="form-text text-danger">  </small>                 
                    </div>
                    
         
                    </div>
              
                    <input type="hidden" value="{{$profile_image->id}}" name="id" class="form-control" >
                

                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div> -->
                <div class="mt-5">
                    <button class="btn btn-primary profile-button" type="submit">Edit Image</button>
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