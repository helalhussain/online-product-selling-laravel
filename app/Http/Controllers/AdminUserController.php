<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
    public function user_status_change($id){
        $user_status = User::find($id);
        if($user_status->status==1){
            DB::table('users')->where('id',$user_status->id)->update(['status'=>0]);
        }else{
            DB::table('users')->where('id',$user_status->id)->update(['status'=>1]);
        }
        return redirect('admin/all-user');
    }
}
