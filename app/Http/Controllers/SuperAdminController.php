<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\support\Facades\Redirect;

class SuperAdminController extends Controller
{
    public function index(){
    	$this->CheckAuth();
    	return view('admin_panel.dashboard');
    }

    public function CheckAuth(){
    	$adminId = Session::get('admin_id');
    	if($adminId){
    		return;
    	}else{
    		return Redirect::to('/backend')->send();
    	}
    }

    public function logout(){
    	Session::flush();
    	Session::put('msg','Successfully Logout');
    	return Redirect::to('/backend');
    }

    
}
