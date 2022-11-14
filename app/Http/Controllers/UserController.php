<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;
Session_start();

class UserController extends Controller
{
    public function signin_page(){
        return view('signin');
    }
    public function signup_page(){
        return view('signup');
    }

    public function registration(Request $request){
        $request->validate([
            'first_name' => 'required|max:12|min:2',
            'last_name' => 'required|max:12|min:2',
            'email' => 'required|email|unique:users',
            'dob' =>'required',
            'gender' => 'required',
            'password' =>'required|max:22|min:5',
            'confirm_password' => 'required'
        ]);

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('signin');
    }
    public function profile(){
        $user_id = Session::get('user_id');
        $user_profile = User::where('id','=',$user_id)->first();
        return view('my-account.profile',compact('user_profile'));
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' =>'required'

        ]);

        $result = User::where('email','=',$request->email)->first();
        if($result){
            if(Hash::check($request->password,$result->password)){
                Session::put('user_id',$result->id);
                Session::put('first_name',$result->first_name);
                Session::put('last_name',$result->last_name);
                return redirect('my-account/profile');
            }else{
                return redirect()->back()->with('fail','Wrong password!');
            }

        }
        else{
            return redirect()->back()->with('fail','Email or Password are invalid!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('signin');
    }
}
