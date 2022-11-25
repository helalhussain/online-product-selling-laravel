<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\Division;
use Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Session::get('user_id');
        
        $products =  DB::table('products')->join('categories','products.cat_id','=','categories.id')
        ->select('products.*','categories.category_title')
        ->where('products.user_id','=',$user_id)->where('products.status','=',1)
        ->get();
        
        return view('my-account.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Session::get('user_id');
        $user_detail = User::where('id',$user_id)->first();
        $category = Category::all();
        $division = Division::all();
        return view('my-account.create',compact('category','user_detail','division'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'cat_id' =>'required',
           'division_id' => 'required',
           'address' => 'required',
           'phone_no' => 'required',
           'condition' => 'required',
           'title' => 'required|min:5|max:150',
           'description' =>'required|min:10|max:450',
           'price' =>'required', 
           
        ]);
        $user_id = Session::get('user_id');
        $product = new Product();
        $product->user_id=$user_id;
        $product->cat_id=$request->cat_id;
        $product->phone_no=$request->phone_no;
        $product->division_id=$request->division_id;
        $product->address=$request->address;
        $product->condition=$request->condition;
        $product->title =$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->negotiable=$request->negotiable;
        $product->image_1=$request->image_1->store('product');
        $product->image_2=$request->image_2->store('product');
        $product->image_3=$request->image_3->store('product');
        $product->image_4=$request->image_4->store('product');
        $product->save();
        return redirect('my-account/product');

        // $images=array();
        // if($files=$request->file('file')){
        //     $i=0;
        //     foreach($files as $file){
        //         $name=$file->getClientOriginalName();
        //         $fileNameExtract=explode('.',$name);
        //         $fileName=$fileNameExtract[0];
        //         $fileName.=time();
        //         $fileName.=$i;
        //         $fileName.='.';
        //         $fileName.=$fileNameExtract[1];
        //         $file->move('image',$fileName);
        //         $images[]=$fileName;
        //         $i++;
        //     }
        //     $product['image'] = implode("|",$images);

        //     $product->save();
        //     return redirect('my-account/product');
        // }
        // else{
        //     echo "error";
        // }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }
    public function product_detail($id){
        $product_detail=Product::find($id);
        return view('product_detail',compact('product_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $user_id = Session::get('user_id');
        $user_detail = User::where('id',$user_id)->first();
        $category = Category::all();
        $division = Division::all();
        return view('my-account.edit_product',compact('user_detail','product','category','division'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $delete =$product->delete();
        if($delete){
            return redirect('my-account/product');
        }else{
            return redirect('my-account/product');
        }
    }
}
