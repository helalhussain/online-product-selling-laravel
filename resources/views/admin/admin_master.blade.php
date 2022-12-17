

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Title -->
      <title>Online Product</title>

      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <!-- Font Google -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
      <!-- Bootstrap Css -->
      <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Font Awesome Css -->
      <link href="{{asset('admin/assets/css/font-awesome.min.css')}}" rel="stylesheet">
      <!-- Magnific Popup Css -->
      <link href="{{asset('admin/assets/css/magnific-popup.css')}}" rel="stylesheet">
      <!-- Owl Carousel Css -->
      <link href="{{asset('admin/assets/css/owl.carousel.css')}}" rel="stylesheet">
      <!-- Main Css -->
      <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">
      <!-- Responsive Css -->
      <link href="{{asset('admin/assets/css/responsive.css')}}" rel="stylesheet">
      <link href="{{asset('admin/assets/css/ok-admin.css')}}" rel="stylesheet">
      <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <style type="text/css">
      </style>

   </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="#"></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <!-- <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button> -->
        </li>
        <!--Notification Menu-->
        <li class="dropdown" style="display:none;"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title"></li>
            <div class="app-notification__content">
              <!-- <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li> -->
              <!-- <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li> -->
                <!-- <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li> -->
              </div>
            </div>
            <li class="app-notification__footer"><a href="#"></a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="admin-setting.php"><i class="fa fa-cog fa-lg"></i> Settings</a></li>

            <li><a class="dropdown-item" href="{{url('/admin/logout')}}"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          
          </ul>
        </li>
      </ul>
    </header>



@yield('admin_content')








<!-- Main JS -->
<script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('admin/assets/js/owl.carousel.min.js')}}"></script>
<!-- Manific Popup JS -->
<script src="{{asset('admin/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Isotope JS -->
<script src="{{asset('admin/assets/js/isotope.min.js')}}"></script>
<!-- Imageload JS -->
<script src="{{asset('admin/assets/js/imageloaded.min.js')}}"></script>
<!-- Counter JS -->
<script src="{{asset('admin/assets/js/jquery.counterup.min.js')}}"></script>
<!-- Waypoint JS -->
<script src="{{asset('admin/assets/js/waypoint.min.js')}}"></script>

</body>
</html>


