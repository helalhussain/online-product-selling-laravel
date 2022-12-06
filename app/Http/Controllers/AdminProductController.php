<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Division;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    public function admin_product_page(){
        $product = DB::table('products')->join('categories','products.cat_id','=','categories.id')
        ->join('users','products.user_id','=','users.id')
        ->select('users.*','products.*','categories.category_title')
        ->get();
        return view('admin.all-product',compact('product'));
    }
    public function product_block($id){
        $product_status = Product::find($id);
        if($product_status->status==1){
            DB::table('products')->where('id',$product_status->id)->update(['status'=>0]);
            return redirect()->back()->with('success','Product Blocked');
        }else{
            DB::table('products')->where('id',$product_status->id)->update(['status'=>1]);
            return redirect()->back()->with('success','Product Unbocked');
        }
        
    }
}
