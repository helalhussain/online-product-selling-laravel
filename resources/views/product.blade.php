@extends('master')
@section('user_content')

<div class="container"><br/><br/>
    <section class="bg-white">
        <!---Main start--->
        <div class="main p-3  bg-white">
        @include('top_section')

        <div class="row">
            <div class="row">
                <div class="col-lg-3">
                    @include('sidebar_product')
                </div>
                <!----col-lg-9 start--->
                <div class="col-lg-9">
                    <div class="allProduct pt-4">
                    <h5 class="" style="font-size:14px;color:black"><a href="">Home</a> 
                    / <a href="">All ads in Bangladesh</a></h5>
                <h5 class="font-weight-bold text-success">All ads in Bangladesh</h5><hr><br>

                    <div class="row">
                        @foreach($products as $product)
            
                        <div class="col-lg-4">
                            <!--card start-->
                        <div class="card p-2" style="">
                        <!---Top start-->
                        <div class="row Top ">
                            <div class="col-lg-3">
                            <img class="card-img-top" src="" style="height:40px; border:1px solid black; width:40px;heigh:40px;border-radius:50%;" alt="">
                            </div>
                            <div class="col-lg-8" style="line-height: 0.5;">
                                <h6 class="text-success f-5"><strong>{{ $product->first_name}}</strong> 
                                <strong>{{ $product->last_name}}</strong></h6>
                                <p class="card-text text-left" style="font-size:13px;">12:08:pm 17-08-2021</p>
                            </div>
                        </div>
                        <!--Top end-->
       
                        
                            <img src="" alt="">
                            <div class="card-body">
                                <h6 class="card-title f-5"> {{$product->title}} </h6>
                        <div class="cat pt-3" style="line-height: 0.4;">
                        <p class="card-text text-primary font-weight-bold"
                         style="text-transform: capitalize; font-size:16px;">
                         {{ $product->category_title}} <span class="text-success"> {{ $product->division}}</span></p>
                                <p class="card-text font-weight-bold" style="text-transform: capitalize; font-size:16px;">
                                 {{$product->address}} </p>
                        </div>
                                 	
                                <div class="row pt-3">
									<div class="col-lg-8"><h6 class="card-text text-success
                                     pt-1 pb-1">Tk {{$product->price}} </h6>
                                    </div>
									<div class="col-lg-4">
										<div class="text-right">
							
									<a class='btn btn-success' href="{{route('product_detail_page',$product->id)}}">View</a>										</div>
									</div>
								</div>
                            </div>
                            </div>
                            <!--card end-->
                        </div>
                        @endforeach
                    </div>


                    </div>
                </div>
                <!------col-lg-9 end-->
            </div>
        </div>

          
        </div>
        <!--Main End-->
    </section>
</div>

@endsection