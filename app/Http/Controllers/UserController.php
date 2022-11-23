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

    public function edit_profile(){
        $user_id = Session::get('user_id');
        $edit_profile = User::where('id',$user_id)->first();
        return view('my-account.edit_profile',compact('edit_profile'));
    }
    
    public function edit_profile_info(Request $request){
      
        $data = User::find($request->id);
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->dob = $request->dob;
        $data->gender = $request->gender;
        $data->phone_no = $request->phone_no;
        $data->division = $request->division;
        $data->address = $request->address;
        $data->save();
        return redirect('my-account/profile');

    }
    public function edit_profile_image(){
        $user_id = Session::get('user_id');
        $profile_image=User::where('id',$user_id)->first();
       
        return view('my-account.edit_profile_image',compact('profile_image'));
    }
    public function edited_profile_image(Request $request){
      
        $data = User::find($request->id);
        $data->user_image=$request->image->store('profile');
        $data->save();
        return redirect('my-account/profile');

    }


}
