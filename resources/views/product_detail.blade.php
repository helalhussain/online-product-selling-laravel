@extends('master')
@section('user_content')
<style>
    body{background-color: #ecedee}.card{border: none;overflow: hidden}.thumbnail_images ul{list-style: none;justify-content: center;display: flex;align-items: center;margin-top:10px}.thumbnail_images ul li{margin: 5px;padding: 10px;border: 2px solid #eee;cursor: pointer;transition: all 0.5s}.thumbnail_images ul li:hover{border: 2px solid #000}.main_image{display: flex;justify-content: center;align-items: center;border-bottom: 1px solid #eee;height: 400px;width: 100%;overflow: hidden}.heart{height: 29px;width: 29px;background-color: #eaeaea;border-radius: 50%;display: flex;justify-content: center;align-items: center}.content p{font-size: 12px}.ratings span{font-size: 14px;margin-left: 12px}.colors{margin-top: 5px}.colors ul{list-style: none;display: flex;padding-left: 0px}.colors ul li{height: 20px;width: 20px;display: flex;border-radius: 50%;margin-right: 10px;cursor: pointer}.colors ul li:nth-child(1){background-color: #6c704d}.colors ul li:nth-child(2){background-color: #96918b}.colors ul li:nth-child(3){background-color: #68778e}.colors ul li:nth-child(4){background-color: #263f55}.colors ul li:nth-child(5){background-color: black}.right-side{position: relative}.search-option{position: absolute;background-color: #000;overflow: hidden;align-items: center;color: #fff;width: 200px;height: 200px;border-radius: 49% 51% 50% 50% / 68% 69% 31% 32%;left: 30%;bottom: -250px;transition: all 0.5s;cursor: pointer}.search-option .first-search{position: absolute;top: 20px;left: 90px;font-size: 20px;opacity: 1000}.search-option .inputs{opacity: 0;transition: all 0.5s ease;transition-delay: 0.5s;position: relative}.search-option .inputs input{position: absolute;top: 200px;left: 30px;padding-left: 20px;background-color: transparent;width: 300px;border: none;color: #fff;border-bottom: 1px solid #eee;transition: all 0.5s;z-index: 10}.search-option .inputs input:focus{box-shadow: none;outline: none;z-index: 10}.search-option:hover{border-radius: 0px;width: 100%;left: 0px}.search-option:hover .inputs{opacity: 1}.search-option:hover .first-search{left: 27px;top: 25px;font-size: 15px}.search-option:hover .inputs input{top: 20px}.search-option .share{position: absolute;right: 20px;top: 22px}.buttons .btn{height: 50px;width: 150px;border-radius: 0px !important}
</style>
<div class="container"><br/><br/>
    <section class="bg-white">
        <!---Main start--->
        <div class="main p-3  bg-white">
        @include('top_section')

        <div class="row">
            <div class="row">
                <div class="col-lg-3">
            <!---start-sidebar--->
            <ul class="list-group">
    <br/>
            <h6 class="list-group-item list-group-item-action bg-success active" aria-current="true">All Categories</h6>
           
                <a href="">
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                Mobile
                </li>
                </a>
               
                 <a href="electronics.php">
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
                </a> 
            </ul>
            <br>
            <!---------------------------area------------------->
            <ul class="list-group">
            <h6 class="list-group-item list-group-item-action bg-success active">All of Bangladesh</h6>
           
            <a href="">
        
                <li class="list-group-item d-flex font-weight-bold align-items-center">
                <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                Dhaka
                </li>
                </a>
           
                 <a href="chattogram.php">
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
                </a> 
            </ul>
            <!--end sidebar--->
                </div>

                <!----col-lg-9 start--->
                <div class="col-lg-9">
                    <div class="allProduct pt-4">
                    <h5 class="" style="font-size:14px;color:black"><a href="">Home</a> 
                    / <a href="">All ads in Bangladesh</a></h5>
                <h5 class="font-weight-bold text-success">All ads in Bangladesh</h5><hr><br>

                    <div class="row gy-2">
                    <div class="container mt-5 mb-5">
                        <div class="card">
                           <div class="row g-0">
                            <div class="col-md-6 border-end">
                              <div class="d-flex flex-column justify-content-center">	
                                <div class="main_image">	
                                    <img src="{{asset('/storage/'.$product_detail->image_1)}}" id="main_product_image" width="350">	
                                </div>
                                <div class="thumbnail_images">
                                <ul id="thumbnail">
                                 <li><img onclick="changeImage(this)" src="{{asset('/storage/'.$product_detail->image_1)}}" width="70"></li>	
                                 <li><img onclick="changeImage(this)" src="{{asset('/storage/'.$product_detail->image_2)}}" width="70"></li>	
                                 <li><img onclick="changeImage(this)" src="{{asset('/storage/'.$product_detail->image_3)}}" width="70"></li>	
                                 <li><img onclick="changeImage(this)" src="{{asset('/storage/'.$product_detail->image_4)}}" width="70"></li>	
                                </ul>	
                            </div>	
                        </div>	
                    </div>	
                    <div class="col-md-6">
                        <div class="p-3 right-side">	
                            <div class="d-flex justify-content-between align-items-center">	
                                <h3>{{$product_detail->title}}</h3>	<span class="heart"><i class='bx bx-heart'></i>
                            </span>	</div>	<div class="mt-2 pr-3 content">	<p>
                                <strong>Description : </strong>{{$product_detail->description}}</p>	
                        </div>	<h3>${{$product_detail->price}}</h3>	<div class="ratings d-flex flex-row align-items-center">	
                        <div class="d-flex flex-row">	<i class='bx bxs-star' ></i>	<i class='bx bxs-star' ></i>	
                        <i class='bx bxs-star' ></i>	<i class='bx bxs-star' ></i>
                        	<i class='bx bx-star' ></i>	</div>	<span>441 reviews</span>
                        	</div>	<div class="mt-5">	<span class="fw-bold">Color</span>	
                            <div class="colors">	<ul id="marker">	<li id="marker-1"></li>
                            	<li id="marker-2"></li>	<li id="marker-3"></li>	<li id="marker-4"></li>	
                                <li id="marker-5"></li>	</ul>	</div>	</div>	
                                <div class="buttons d-flex flex-row mt-5 gap-3">	
                                    <button class="btn btn-outline-dark">Buy Now</button>	
                                    <button class="btn btn-dark">Add to Basket</button>	
                                </div>	
                                <div class="search-option">	
                                    <i class='bx bx-search-alt-2 first-search'></i>	<div class="inputs">	
                                        <input type="text" name="">	</div>	<i class='bx bx-share-alt share'></i>
                                    	</div>
                                    	
                                    </div>	
                                </div>	
                            </div>	
                        </div> 
                    </div>

                    </div>
                    <!---End row-->
                    </div>
                    <h4 class="text-success">Similar product</h4><hr/><br/>
                </div>
                <!------col-lg-9 end-->
            </div>
        </div>

          
        </div>
        <!--Main End-->
    </section>
</div>
<script>
    function changeImage(element) {

var main_prodcut_image = document.getElementById('main_product_image');
main_prodcut_image.src = element.src;


}
</script>
@endsection