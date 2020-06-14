<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(){

    	$products = DB::table('tbl_product')    				
    				->get();
    	// return view('frontend.pages.homecontent')->with('showPorduct',$allProduct);
        return view('website.layout.master')->with('products', $products);
    }

    // show product by category
    public function productByCategory($id){
    	$productByCategory = DB::table('tbl_product')
    						->where('category_id',$id)
    						->get();
    	return view('frontend.pages.product_by_category')->with('showPorductByCategory',$productByCategory);

    }

    public function productById($product_id){
        $productById = DB::table('tbl_product')
                        ->join('tbl_categories','tbl_product.category_id','=','tbl_categories.id')
                        ->join('tbl_manufactur','tbl_product.manufacture_id','=','tbl_manufactur.id')
                        ->select('tbl_product.*','tbl_categories.category_name','tbl_manufactur.manufacture_name') 
                        ->where('product_id',$product_id)  
                        ->where('tbl_product.publication_status',1)                      
                        ->first();

        return view('frontend.pages.product_by_id')->with('product_manage',$productById);

    }

    

    // front user registration

    public function userRegistration(Request $request){
        $userRegistration = array();

        $userRegistration['username'] = $request->user_name;        
        $userRegistration['user_email'] = $request->user_email;
        $userRegistration['password'] = $request->password;
        $userRegistration['phone'] = $request->mobile_no;
        $userRegistration['country'] = $request->country;
        $userRegistration['city'] = $request->city;
        $userRegistration['post_code'] = $request->post_code;
        $userRegistration['status'] = 1;

        $userLogin = array();
        $userLogin['user_name'] = $request->user_name;
        $userLogin['user_email'] = $request->user_email;
        $userLogin['password'] = $request->password;
        $userLogin['status'] = 1;

        DB::table('tbl_user_registration')->insert($userRegistration);
        DB::table('tbl_user_login')->insert($userLogin);
        Session::put('message','User Registration Complete. Now Sign in.');

        return Redirect::to('/user-login');
    }

    // frontend user sign in
    public function userSignIn(Request $request){
        $user_email = $request->user_email;
        $user_password = $request->password;

        $result = DB::table('tbl_user_login')
                ->where('user_email',$user_email)
                ->where('password',$user_password)
                ->first();
        if($result)
        {
            Session::put('user_name',$result->user_name);
            Session::put('user_id',$result->user_id);
            return redirect::to('/user-post');
        }else
        {
            Session::put('message','Email or Password Invalid');
            return redirect::to('/user-login');
        }

    }

    // user post

    public function userPost(){
        return view('frontend.pages.user_post');
    }

    // checkout

    


}
