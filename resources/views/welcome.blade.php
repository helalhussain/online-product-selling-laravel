@extends('master')
@section('user_content')

<div class="container">
    <br/>
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{asset('static-images/slide1.jpg')}}" class="w-100
                 d-block" style="height:550px;border:3px solid black" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="{{asset('static-images/slide2.jpg')}}" class="w-100
                 d-block" style="height:550px;border:3px solid black" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="{{asset('static-images/slide1.jpg')}}" class="w-100
                 d-block" style="height:550px;border:3px solid black" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="allCategory pt-4">
        <h2 class="text-center bg-success py-3 text-light fw-bold">CATEGORIES</h2>
    </section>
    <!---category_row_start--->
    <div class="row gy-4">
        <!---Col-lg-_start---->
     
        @foreach($all_category as $categories)
        <!---Col-lg-_End---->
                <!---Col-lg-_start---->
                <div class="col-lg-3 col-md-2 col-sm-1 col-12">
            <div class="card bg-light text-center " style="">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <!-- <i href="#" class="fa fa-laptop f-2 text-success fw-bold pt-2" 
                style="font-size:55px;"></i> -->
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{$categories->category_title}}</h5>
                    <p class="card-text"> {{$categories->description}}</p>
                    <a href="{{url('/category/'.$categories->id)}}" class="btn btn-success text-white">Learn more</a>
                </div>
                </div>
            </div>
            @endforeach
        <!---Col-lg-_End---->

               
    </div>
    <!--Category_row_end---->
</div>

@endsection



