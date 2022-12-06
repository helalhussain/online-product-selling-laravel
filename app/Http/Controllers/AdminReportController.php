<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Report;
use App\Models\Category;
use App\Models\Division;
use Illuminate\Support\Facades\DB;

class AdminReportController extends Controller
{
    public function admin_report_page(){
        $report = DB::table('reports')->join('products','reports.product_id','=','products.id')
        ->join('users','reports.user_id','=','users.id')->get();
        return view('admin.all-report',compact('report'));
    }

    
    
}
