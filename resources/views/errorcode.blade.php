                            <!-- @foreach($product->image as $images)
                            <img src="{{asset('/image/'.$images)}}" class="card-img-top" alt="...">
                            @endforeach -->

                                        <!-- @php
                   
                            $product['image']=explode("|",$product->image);
                        @endphp -->


                        $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')->references('id')->on('categories');
            $table->string('phone_no');
            $table->string('division');
            $table->string('address');
            $table->string('condition');
            $table->string('title');
            $table->string('description',500);
            $table->string('price');
            $table->string('negotiable')->nullable();
            $table->string('image');
            $table->boolean('status')->default('1');


            protected $fillable = [
      
      'id',
      'user_id',
      'cat_id',
      'phone_no',
      'division',
      'address',
      'condition',
      'image'
  ];