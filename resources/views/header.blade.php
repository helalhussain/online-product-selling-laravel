
<nav class="navbar navbar-expand-sm navbar-white bg-white ">
      <div class="container py-2">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('/')}}" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/product')}}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Areas</a>

                </li>
   
               <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>  -->
            </ul>

            @php
                $user_id = Session::get('user_id');
            @endphp
            <div class="my-2  my-lg-0">
                @if($user_id == '')
                <!-- <input class="form-control me-sm-2" type="text" placeholder="Search"> -->
                <a href=" {{route('signin_page')}} " class="btn btn-outline-success my-2 my-sm-0">SIGNIN</a>
                <a href=" {{route('signup_page')}} " class="btn btn-outline-success my-2 my-sm-0">SIGNUP</a>
            @else
            <li class=" dropdown" style="list-style:none!important;">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Session::get('first_name')}} 
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="{{url('/my-account/profile')}}">Profile</a></li>
                     <li><a class="dropdown-item" href="{{url('logout')}}">LOG OUT</a></li>
                    <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                </ul>
            </li>
            @endif
            </div>
        </div>
  </div>
</nav>
