@extends('master')
@section('user_content')

<div class="container">
    <section class="signup py-5">
        <div class="col-lg-5 col-md-8 col-sm-8 col-12 mx-auto">
            <div class="card pt-5 p-4 ">
                <h2 class="text-success text-center fw-bold">SIGNIN</h2>

                <form acction="{{url('signin')}}" class="form pt-5" method="POST">
                    @csrf
               
                    @if(Session::has('success'))
                        <span class="text-danger"> {{Session::get('success')}} </span>
                        @endif
                        @if(Session::has('fail'))
                        <span class="text-danger"> {{Session::get('fail')}} </span>
                    @endif 
                    <br/>
                <label for="basic-url" class="form-label">Email</label>
                    <div class="input-group ">
                      <span class="input-group-text " id="basic-addon1">@</span>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}"
                         name="email" placeholder="Email"><br/>
                        
                    </div>
                    @error('email')
                    <small class="form-text text-danger"> {{$message}} </small>
                    @enderror
              <br/>
              <label for="basic-url" class="form-label">Password</label>
                            <div class="input-group">
                 
                              <input type="password"
                                class="form-control password @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                <span class="input-group-text" id="basic-addon1">
                                <a class="eyepass1" style=" " ><i class="fa fa-eye eye1"></i></a>
                                </span>
                              
                            </div>
                            @error('password')
                    <small class="form-text text-danger"> {{$message}} </small>
                    @enderror
                  
 <br/>

                    <button class="btn btn-success" type="submit">SIGNIN</button>
                </form>
            </div>
        </div>
    </section>
</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('.eyepass1').click(function(){
			$('.eye1').toggleClass('fa-eye-slash');
			var input = $('.password');
			if(input.attr('type') == 'password'){
				input.attr('type','text');
			}else{
				input.attr('type','password');
			}

		});
		
	});


</script>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection