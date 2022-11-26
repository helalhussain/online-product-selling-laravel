<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Division;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function product(){
        $products = DB::table('products')->join('categories','products.cat_id','=','categories.id')
        ->join('users','products.user_id','=','users.id')
        ->select('users.*','products.*','categories.category_title')
        ->paginate(9);
         $categories = Category::all();
         $divisions = Division::all();
         return view('product',compact('products','divisions','categories'));
     }
     public function view_category_product($id){
      $categories = DB::table('categories')->where('status',1)->get();
      $divisions = DB::table('divisions')->where('status',1)->get();
        $categoryProduct = DB::table('products')
        ->join('categories','products.cat_id','=','categories.id')
        ->join('users','products.user_id','=','users.id')
        ->select('users.*','products.*','categories.category_title')
        ->where('cat_id',$id)->get();

        return view('category',compact('categories','divisions','categoryProduct'));
     }
     public function view_division_product($id){
      $categories = DB::table('categories')->where('status',1)->get();
      $divisions = DB::table('divisions')->where('status',1)->get();
        $divisionProduct = DB::table('products')->join('categories','products.cat_id','=','categories.id')
        ->join('users','products.user_id','=','users.id')
        ->select('users.*','products.*','categories.category_title')
        ->where('products.division_id','=',$id)->get();
        
        return view('division',compact('categories','divisions','divisionProduct'));
     }
 
    public function report(Request $report){
      $user_id = Session::get('user_id');
      $report = new report();
      $report->user_id=$user_id;
      $report->product_id=$request->product_id;
      $report->reason = $report->reason;
      $report->message = $request->message;
      $report->save();
      return redirect('product');
    }

  
}
