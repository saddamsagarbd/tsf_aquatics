<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
/*use App/Http/Request;*/
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin_login');
    }

    public function adminDashboard(Request $request)
    {
    	$admin_email = $request->admin_email;
    	$admin_password = $request->admin_password;

    	$result = DB::table('tbl_admin')
    			->where('admin_email',$admin_email)
    			->where('admin_password',$admin_password)
    			->first();
    	if($result)
    	{
    		Session::put('admin_name',$result->admin_name);
    		Session::put('admin_id',$result->admin_id);
    		return redirect::to('/dashboard');
    	}else
    	{
    		Session::put('message','Email or Password Invalid');
    		return redirect::to('/backend');
    	}
    }
}
