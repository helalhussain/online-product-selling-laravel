@extends('master')
@section('user_content')

<div class="container">
    <br/><br/>
    <section class="allCategory">
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
                <i href="#" class="fa fa-laptop f-2 text-success fw-bold pt-2" 
                style="font-size:55px;"></i>
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



