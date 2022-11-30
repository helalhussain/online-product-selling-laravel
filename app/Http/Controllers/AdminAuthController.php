<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Session;
use Illuminate\Support\Facades\Hash;
Session_start();

class AdminAuthController extends Controller
{
    public function admin(){
        return view('admin.admin');
    }
    public function admin_login_page(){
        return view('admin.admin-login');
    }
    public function admin_login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $admin_result = Admin::where('email','=',$request->email)->first();
        
        if($admin_result){
            if(Hash::check($request->password,$admin_result->password)){
                Session::put('admin_id',$admin_result->id);
                Session::put('admin_email',$admin_result->email);
                Session::put('admin_name',$admin_result->admin_name);
                return redirect('admin/admin');
            }else{
                return redirect()->back()->with('success','Wrong password!');
            }
        }
        
        else{
            return redirect()->back()->with('success','Email or password wrong!');
        }
       
    }

    public function admin_logout(){
        
        Session::flush();
        return redirect('admin/login');
       
    
    }
}
