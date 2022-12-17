<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Report;
use App\Models\Category;
use App\Models\Division;
use Illuminate\Support\Facades\DB;
use Session;
Session_start();
class HomeController extends Controller
{
    public function product(Request $request){
        // $products = DB::table('products')->join('categories','products.cat_id','=','categories.id')
        // ->join('users','products.user_id','=','users.id')
        // ->join('divisions','products.division_id','=','divisions.id')
        // ->select('users.*','products.*','categories.category_title','divisions.division_title')
        // ->paginate(9);
        $search = $request['search'] ?? "";
        if($search !=""){
            $products = Product::where('title','LIKE',"%$search%")->paginate(9);
        }else{
         $products = DB::table('products')->join('categories','products.cat_id','=','categories.id')
         ->join('users','products.user_id','=','users.id')
         ->join('divisions','products.division_id','=','divisions.id')
         ->select('users.*','products.*','categories.category_title','divisions.division_title')->where('products.status','=',1)
         ->paginate(9);
        }
        $data =compact('products','search');

         $categories = Category::all();
         $divisions = Division::all();
         return view('product',compact('products','search','divisions','categories'));
     }
     public function view_category_product($id){
      $categories = DB::table('categories')->where('status',1)->get();
      $divisions = DB::table('divisions')->where('status',1)->get();
      $category = Category::find($id);
      $search = $request['search'] ?? "";
      if($search !=""){
        $categoryProduct = Product::where('title','LIKE',"%$search%")->paginate(9);
      }else{
        $categoryProduct = DB::table('products')
        ->join('categories','products.cat_id','=','categories.id')
        ->join('users','products.user_id','=','users.id')
        ->select('users.*','products.*','categories.category_title')
        ->where('cat_id',$id)->get();
      }
      $data =compact('categoryProduct','search');

 

        return view('category',compact('categories','category','divisions','search','categoryProduct'));
     }
     public function view_division_product($id){
      $categories = DB::table('categories')->where('status',1)->get();
      $divisions = DB::table('divisions')->where('status',1)->get();
     $division = Division::find($id);
        $search = $request['search'] ?? "";
        if($search !=""){
          $divisionProduct = Product::where('title','LIKE',"%$search%")->paginate(9);
        }else{
          $divisionProduct = DB::table('products')->join('categories','products.cat_id','=','categories.id')
          ->join('users','products.user_id','=','users.id')
          ->select('users.*','products.*','categories.category_title')
          ->where('products.division_id','=',$id)->get();
        }
        $data =compact('divisionProduct','search');
  
        return view('division',compact('categories','division','divisions','search','divisionProduct'));
     }
 
    public function report(Request $request){
      $user_id = Session::get('user_id');
      $report = new Report;
      $report->user_id=$user_id;
      $report->product_id=$request->product_id;
      $report->reason = $request->reason;
      $report->message = $request->message;
      $report->save();
      return redirect()->back()->with('success','Reported this product');
    }

  
}
