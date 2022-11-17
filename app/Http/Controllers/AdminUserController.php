<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function admin_user_page(Request $request){
        $search = $request['search'] ?? "";
        if($search !=""){
            $user = User::where('first_Name','LIKE',"%$search%")->get();
        }else{
            $user = User::all();
        }
        $data =compact('user','search');
        return view('admin.all-user',compact('user','search'));
    }
}
