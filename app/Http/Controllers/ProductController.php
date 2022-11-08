<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Session;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =  Product::all();
        return view('my-account.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('my-account.create',compact('category'));
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
           'division' => 'required',
           'address' => 'required',
           'phone_no' => 'required',
           'condition' => 'required',
           'title' => 'required|min:5|max:150',
           'description' =>'required|min:10:max:400',
           'price' =>'required', 
           
        ]);
        $user_id = Session::get('user_id');
        $product = new Product();
        $product->user_id=$user_id;
        $product->cat_id=$request->cat_id;
        $product->phone_no=$request->phone_no;
        $product->division=$request->division;
        $product->address=$request->address;
        $product->condition=$request->condition;
        $product->title =$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->negotiable=$request->negotiable;
        $images=array();
        if($files=$request->file('file')){
            $i=0;
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $fileNameExtract=explode('.',$name);
                $fileName=$fileNameExtract[0];
                $fileName.=time();
                $fileName.=$i;
                $fileName.='.';
                $fileName.=$fileNameExtract[1];

                $file->move('image',$fileName);
                $images[]=$fileName;
                $i++;
            }
            $product['image'] = implode("|",$images);

            $product->save();
            return redirect('')->back()->with('success', 'New Products added Succesfully!');
        }
        else{
            echo "error";
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
