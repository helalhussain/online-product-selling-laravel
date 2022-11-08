@extends('master')
@section('user_content')

<div class="container">
    <section class="signup py-5">
        <div class="col-lg-6 col-12 mx-auto">
            <div class="card pt-5 p-5 ">
                <h2 class="text-success text-center fw-bold">SIGNUP</h2>

                <form class="form pt-5" method="POST">
                  @csrf
                    <!--row Start--->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="" class="form-label">First name</label>
                              <input type="text"
                                class="form-control @error('first_name')
                                is-invalid @enderror" value="{{old('first_name')}}" name="first_name" 
                                placeholder="First name">
                             @error('first_name')
                             <small class="form-text text-danger"> {{$message}} </small>
                             @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="" class="form-label">Last name</label>
                              <input type="text"
                                class="form-control @error('last_name')
                                is-invalid @enderror" value="{{old('last_name')}}" name="last_name" placeholder="Last name">
                                @error('last_name')
                             <small class="form-text text-danger"> {{$message}} </small>
                             @enderror
                            </div>
                        </div>
                    </div>
                    <!---row End---->
                    <div class="mb-3">
                      <label for="" class="form-label">Email</label>
                      <input type="email" class="form-control @error('email')
                                is-invalid @enderror" value=" {{old('email')}}" name="email" placeholder="abc@mail.com">
                      @error('email')
                        <small class="form-text text-danger"> {{$message}} </small>
                      @enderror
                    </div>
                                        <!--row Start--->
                      <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="" class="form-label">Date of birth</label>
                              <input type="date"
                                class="form-control @error('dob')
                                is-invalid @enderror" name="dob" value="{{old('dob')}}" placeholder="Date of birth">
                                @error('dob')
                             <small class="form-text text-danger"> {{$message}} </small>
                             @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="" class="form-label">Gender</label>
                              <select name="gender" class="form-control @error('gender')
                                is-invalid @enderror" value=" {{old('gender')}}">
                                <option value="">Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                              </select>
                              @error('gender')
                             <small class="form-text text-danger"> {{$message}} </small>
                             @enderror
                            </div>
                        </div>
                    </div>
                    <!---row End---->

                    <!--row Start--->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="" class="form-label">Password</label>
                              <input type="password"
                                class="form-control @error('password')
                                is-invalid @enderror" name="password" placeholder="Password">
                                @error('password')
                             <small class="form-text text-danger"> {{$message}} </small>
                             @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="" class="form-label">Confirm password</label>
                              <input type="password"
                                class="form-control @error('confirm_password')
                                is-invalid @enderror" name="confirm_password" placeholder="Confirm password">
                                @error('confirm_password')
                             <small class="form-text text-danger"> {{$message}} </small>
                             @enderror
                            </div>
                        </div>
                    </div>
                    <!---row End---->

                    <button class="btn btn-success" type="submit">SIGNUP</button>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection