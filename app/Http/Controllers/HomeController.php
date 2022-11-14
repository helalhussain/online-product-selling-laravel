<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function product(){
       $products = DB::table('products')->join('categories','products.cat_id','=','categories.id')
       ->join('users','products.user_id','=','users.id')
       ->select('users.*','products.*','categories.category_title')->get();
        $categories = Category::all();
        return view('product',compact('products','categories'));
    }
  
}
