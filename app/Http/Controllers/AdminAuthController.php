<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function admin(){
        return view('admin.admin');
    }
    public function admin_login_page(){
        return view('admin.admin-login');
    }
}
