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
@php 
$user_id = Session::get('user_id');
@endphp

@if($user_id != '')
    <!--Model---> 
   
    @if(Session::has('success'))
        <span class="text-danger"> {{ Session::get('success')}} </span>
        @endif
        @if(Session::has('fail'))
     <span class="text-danger"> {{ Session::get('fail')}} </span>
 @endif 
 
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" 
data-bs-whatever="@getbootstrap">Report this product</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Report</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{url('/product')}}" method="POST">
    @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Reason:</label>
			<select class="form-control" name="reason" required>
                <option value="">Reason</option>
                <option value="Duplicate">Duplicate</option>
                <option value="Wrong category">Wrong category</option>
                <option value="Fake">Fake</option>
                <option value="Others">Others</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" name="message" id="message-text" required></textarea>
          </div>
          <input type="hidden" value="{{$product_detail->id}}" name="product_id"/>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send Report</button>
      </div>
      </form>
      </div>

    </div>
  </div>
</div>
@else
@endif

<!--End model-->

<br/>
    
</ul>

            <!---------------------------area------------------->

            <!--end sidebar--->
                </div>

                <!----col-lg-9 start--->
                <div class="col-lg-9">
                    <div class="allProduct pt-4">
                    <h5 class="" style="font-size:14px;color:black"><a href="{{url('/')}}">Home</a> 
                    / <a href="{{url('product')}}">All products in Bangladesh</a></h5>
                <h5 class="font-weight-bold text-success">All ads in Bangladesh</h5><hr><br>

                    <div class="row gy-2">
                    <div class="container mt-2 mb-3">
                        <div class="card bg-light">
                           <div class="row g-0 ">
                            <div class="col-md-6 pt-5 border-end">
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
                                <h3>{{$product_detail->title}}</h3>		</div>	<div class="mt-2 pr-3 content">	<p>
                                <strong>Description : </strong>{{$product_detail->description}}</p>	
                        </div>	<h3>${{$product_detail->price}}</h3>	<div class="ratings d-flex flex-row align-items-center">	
                        <div class="d-flex flex-row">	<i class='bx bxs-star' ></i>	<i class='bx bxs-star' ></i>	
                        <i class='bx bxs-star' ></i>	<i class='bx bxs-star' ></i>
                        	<i class='bx bx-star' ></i>	</div>	<span></span>
                        	</div>	<div class="mt-5">	

                              <div class="table-responsive">
                                    <table class="table table">
                                        <thead>
                                           <th></th>
                                           <th></th>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                <td class="fw-bold" scope="row">Category</td>
                                                <td scope="row">{{$category_detail->category_title}}</td>
                                          
                                         </tr>
                                            <tr class="">
                                               <td class="fw-bold">Division</td>
                                                <td>{{$division_detail->division_title}}</td>
                            
                                            </tr>
                                            <tr class="">
                                                <td class="fw-bold">Conditiion</td>
                                                <td>{{$product_detail->condition}}</td>
                                            </tr>
                                            <tr class="">
                                                <td class="fw-bold">Contact</td>
                                                <td>{{$product_detail->phone_no}}</td>
                                            </tr>
                                            <tr class="">
                                                <td class="fw-bold">Address</td>
                                                <td>{{$product_detail->address}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                	
                            <div class="colors">	
                                
                            </div>	
                        </div>	
                                <div class="buttons d-flex flex-row mt-5 gap-3">	
                                    <!-- <button class="btn btn-outline-dark">Buy Now</button>	
                                    <button class="btn btn-dark">Add to Basket</button>	 -->
                                </div>	
                                    <!-- <div class="search-option">	
                                        <i class='bx bx-search-alt-2 first-search'></i>	<div class="inputs">	
                                        <input type="text" name="">	</div>	<i class='bx bx-share-alt share'></i>
                                    	</div>
                                    </div>	 -->
                                </div>	
                            </div>	
                        </div> 
                    </div>

                    </div>
                    <!---End row-->
                    </div>
                    <!--start similar_product--->
                    <hr/>
                    <div class="similar_product">
                    <h4 class="text-success fw-bold">Similar product</h4><br/>
                    <div class="row gy-2">
                        @foreach($similar_product as $similar)
                        <div class="col-lg-4">
                            <!--card start-->
                        <div class="card border-1 p-2 " style="border:1px solid black!important;">
                        <!---Top start-->
                        <div class="row Top ">
                            <div class="col-lg-3">
                       
                            @if($similar->user_image==NULL)
                            <img src="https://previews.123rf.com/images/imagevectors/imagevectors1605/imagevectors160500502/56499050-blanco-etiqueta-de-icono-de-perfil-en-el-papel-arrugado.jpg" alt="Profile" style="height:40px; border:1px solid black; width:40px;heigh:40px;border-radius:50%;">
                            @else
                            <img src="{{asset('/storage/'.$similar->user_image)}}" alt="Profile"
                            style="height:40px; border:1px solid black; width:40px;heigh:40px;border-radius:50%;">
                            @endif
                            </div>
                            <div class="col-lg-8" style="line-height: 0.5;">
                                <h6 class="text-success f-5"><strong>{{ $similar->first_name}}</strong> 
                                <strong>{{ $similar->last_name}}</strong></h6>
                                <p class="card-text text-left" style="font-size:13px;"> {{$similar->created_at}} </p>
                            </div>
                        </div>
                        <!--Top end-->

                            <img src="{{asset('/storage/'.$similar->image_1)}}"
                            class="pt-2" style="height:200px;" alt="">
                            <div class="card-body">
                                <h6 class="card-title f-5"> {{$similar->title}} </h6>
                        <div class="cat pt-3" style="line-height: 0.4;">
                        <p class="card-text text-primary font-weight-bold"
                         style="text-transform: capitalize; font-size:16px;">
                         {{ $similar->cat_id}} <span class="text-success"> {{ $similar->division_id}}</span></p>
                                <p class="card-text font-weight-bold" style="text-transform: capitalize; font-size:16px;">
                                 {{$similar->address}} </p>
                        </div>
                                 	
                                <div class="row pt-3">
									<div class="col-lg-8"><h6 class="card-text text-success
                                     pt-1 pb-1">Tk {{$similar->price}} </h6>
                                    </div>
									<div class="col-lg-4">
										<div class="text-right">
							
									<a class='btn btn-success' href="{{url('/product-detail/'.$similar->id)}}">View</a>										</div>
									</div>
								</div>
                            </div>
                            </div>
                            <!--card end-->
                        </div>
                        @endforeach
                    </div><br/>
                    </div>
                    <!--End Similar_product--->
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