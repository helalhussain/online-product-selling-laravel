<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Division;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    public function admin_product_page(){
        $product = DB::table('products')->join('categories','products.cat_id','=','categories.id')
        ->join('users','products.user_id','=','users.id')
        ->select('users.*','products.*','categories.category_title')
        ->paginate(9);
        return view('admin.all-product',compact('product'));
    }
}
