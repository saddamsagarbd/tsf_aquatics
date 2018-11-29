<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
use Illuminate\support\Facades\Redirect;
session_start();

class CheckoutController extends Controller
{
    public function index(){
        /*$all_published_category = DB::table('tbl_categories')
                                ->where('publication_status',1)
                                ->get();
        $manage_published_category = view('frontend.pages.checkout')
                                    ->with('all_published_category',$all_published_category);*/
        return view('frontend.pages.checkout');

    }

    // front user login

    public function LoginCheck(){
        return view('frontend.pages.front_user_login');
    }

    // customer registration

    public function customer_registration(Request $request){

    	$data = array();

    	$data['customer_name']=$request->customer_name;
    	$data['customer_email']=$request->customer_email;
    	$data['customer_phone']=$request->customer_phone;
    	$data['customer_pass']=md5($request->customer_pass);

    	$customer_id=DB::table('tbl_customer')
    				->insertGetId($data);
    	Session::put('customer_id',$customer_id);
    	Session::put('customer_name',$request->customer_name);
    	return Redirect::to('/checkout');
    }

    // customer login

    public function customer_login(Request $request){
        $email = $request->customer_email;
        $pass = md5($request->customer_pass);

        $result = DB::table('tbl_customer')
                ->where('customer_email',$email)
                ->where('customer_pass',$pass)
                ->first();
        Session::put('customer_id',$result->customer_id);
        Session::put('customer_name',$result->customer_name);
        return Redirect::to('/checkout');

    }

    // shipping save
    public function saveShipping(Request $request){
    	$data=array();
    	$data['shipping_email']			=$request->shipping_email;
    	$data['shipping_first_name']	=$request->shipping_first_name;
    	$data['shipping_last_name']		=$request->shipping_last_name;
    	$data['shipping_address']		=$request->shipping_address;
    	$data['shipping_phone']			=$request->shipping_phone;
    	$data['shipping_city']			=$request->shipping_city;

    	$shipping_id=DB::table('tbl_shipping')
    				->insertGetId($data);
    	Session::put('shipping_id',$shipping_id);
    	return Redirect::to('/payment');
    }
    // customer logout
    public function customerLogout(){
    	Session::flush();
    	Cart::destroy();
    	//Session::put('msg','Successfully Logout');
    	return Redirect::to('/');
    }
    // payment
    public function Payment(){
        return view('frontend.pages.payment');
    }
}
