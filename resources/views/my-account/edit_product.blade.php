@extends('master')
@section('user_content')

<div class="container">
    <section class="myProfile">
        <!---Row start-->
        <div class="row pt-5">
            <div class="col-lg-3">
                    @include('my-account.sidebar')
            </div>
            <div class="col-lg-9">
            <div class="rounded bg-white  mb-5">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Edit Product</h4>
                </div>
                <form action="{{url('/my-account/product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(Session::has('success'))
                        <span class="text-danger"> {{Session::get('success')}} </span>
                        @endif
                        @if(Session::has('fail'))
                        <span class="text-danger"> {{Session::get('fail')}} </span>
                    @endif 
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Category</label>
                        <select name="cat_id" class="form-control @error('cat_id')
                        is-invalid @enderror" required>
                            <option value="{{$product->cat_id}}"> {{$product->cat_id}} </option>
                            @foreach($category as $categories)
                            <option value="{{$categories->id}}"> {{$categories->category_title}} </option>
                            @endforeach
                        </select>
                        @error('cat_id')
                            <small class="form-text text-danger"> {{$message}} </small>
                        @enderror
                        
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Division</label>
                        <select name="division_id" class="form-control @error('division_id')
                                is-invalid @enderror" required>
                            <option value="{{$product->division_id}}">{{$product->division_id}}</option>
                            @foreach($division as $divisions)
                            <option value="{{$divisions->id}}">{{$divisions->division_title}}</option>
                            @endforeach
               
                        </select>
                        @error('division_id')
                        <small class="form-text text-danger"> {{$message}} </small>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Adress</label>
                        <input type="text" name="address" class="form-control @error('address')
                                is-invalid @enderror" value="{{$product->address}} " placeholder="Address" required>
                        @error('address')
                        <small class="form-text text-danger"> {{$message}} </small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Phone no</label>
                        <input type="text" name="phone_no" class="form-control @error('phone_no')
                        is-invalid @enderror" value="{{$product->phone_no}}" placeholder="phone no" required>
                        @error('phone_no')
                        <small class="form-text text-danger"> {{$message}} </small>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="labels">Condition</label>
                        <select name="condition" class="form-control @error('condition')
                        is-invalid @enderror" required>
                          <option value="{{$product->condition}}">{{$product->condition}}</option>
                          <option value="Used">Used</option>
                          <option value="New">New</option>
                        </select>
                        @error('condition')
                        <small class="form-text text-danger"> {{$message}} </small>
                        @enderror
                    </div>
                    <div class="col-md-6"></div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Product title</label>
                        <input type="text" name="title" class="form-control @error('title')
                        is-invalid @enderror" value="{{$product->title}}" placeholder="Product title" required>
                        @error('title')
                        <small class="form-text text-danger"> {{$message}} </small>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Description</label>
                        <textarea name="description" rows="" class="form-control @error('description')
                        is-invalid @enderror" cols="" required>{{$product->description}}</textarea> 
                        @error('description')
                        <small class="form-text text-danger"> {{$message}} </small>
                        @enderror
                    </div>
       
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="labels">Price</label>
                    <input type="text" class="form-control @error('price')
                        is-invalid @enderror" name="price" placeholder="Price" value="{{$product->price}}" required>
                        @error('price')
                        <small class="form-text text-danger"> {{$message}} </small>
                        @enderror
                </div>

                </div>

                <!-- <div class mt-3>
                <div class="col-md-6">  
                  <div class="form-check form-check-inline"><br/>
                    <input class="form-check-input" type="checkbox" name="negotiable"  value="negotiable">
                    <label class="form-check-label " for="inlineRadio1">Negotiable</label>
                  </div>
                 </div>
                </div> -->

                <hr/>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <label class="labels">Upload image </label>
                        <input type="file" name="image_1" class="form-control" required>
                        @error('image_1')
                        <small class="form-text text-danger"> {{$message}} </small>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label class="labels">Upload image</label>
                        <input type="file" name="image_2" class="form-control" required>
                        @error('image_2')
                        <small class="form-text text-danger"> {{$message}} </small>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label class="labels">Upload image</label>
                        <input type="file" name="image_3" class="form-control" required>
                        @error('image_3')
                        <small class="form-text text-danger"> {{$message}} </small>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label class="labels">Upload image</label>
                        <input type="file" name="image_4" class="form-control" required>
                        @error('image_4')
                        <small class="form-text text-danger"> {{$message}} </small>
                        @enderror
                    </div>
                    <div class="col-md-6"></div>
                </div> 
                <hr/>
                <br/><br/>
                <div class="row m-2">
                    <div class="col-lg-6">
                    <h5 class="font-weight-bold ">My details</h5><hr>

                                <br>
                                <label class="font-weight-bold text-primary">Name </label><br>
                                <span>{{$user_detail->first_name}} &nbsp;{{$user_detail->last_name}}</span><br><br>
                                <label class="font-weight-bold text-primary">Email </label><br>
                                <span>{{$user_detail->email}}</span><br><br>
                    </div>
                    <div class="col-lg-6"></div>
                </div>

                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div> -->
                <div class="mt-5">
                    <button class="btn btn-primary profile-button" type="submit">Upload Product</button>
                </div>
               </form>
            </div>
        </div>               

            </div>
        </div>
        <!---Row End-->
    </section>
</div>

@endsection