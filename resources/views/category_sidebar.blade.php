<style>

a{
    text-decoration:none;

}
</style>    
   <ul class="list-group">
    <br/>
            <h6 class="list-group-item list-group-item-action bg-success active" aria-current="true">All Categories</h6>
            @foreach($categories as $show_categories)
                <a href="{{url('/category/'.$show_categories->id)}}">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                {{$show_categories->category_title}}
                </li>
                </a>
                @endforeach
                <!-- <a href="electronics.php">
                <li class="list-group-item text d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                    Electronics
                </li>
                </a>
                <a href="vehicles.php">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                vehicles
                </li>
                </a>
                <a href="property.php">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                    Property
                </li>
                </a>
                <a href="animals.php">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                Pets & Animals
                </li>
                </a>
                <a href="sports.php">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                Hobbies & Sports
                </li>
                </a>
                <a href="fashion.php">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                Fashion & Beauty
                </li>
                </a>
                <a href="living.php">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                Home & Living
                </li>
                </a> -->
            </ul>
            <br>
            <!---------------------------area------------------->
            <ul class="list-group">
            <h6 class="list-group-item list-group-item-action bg-success active">All of Bangladesh</h6>
            @foreach($divisions as $show_divisions)
            <a href="{{url('/division/'.$show_divisions->id)}}">
        
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                {{$show_divisions->division_title}}
                </li>
                </a>
            @endforeach
                <!-- <a href="chattogram.php">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                Chattogram
                </li>
                </a>
                <a href="sylhet.php">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                Sylhet
                </li>
                </a>
                <a href="khulna.php">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right"></i> </span>
                Khulna
                </li>
                </a>
                <a href="#">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                Borishal
                </li>
                </a>
                <a href="#">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                Rangpur
                </li>
                </a>
                <a href="rajshahi.php">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                Rajshahi
                </li>
                </a>
                <a href="mymenshingh.php">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                Mymenshingh
                </li>
                </a>
                </a>
                <a href="comilla.php">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                Comilla
                </li>
                </a> -->
            </ul>