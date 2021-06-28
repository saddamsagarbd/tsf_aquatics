<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class CartController extends Controller
{
    public function add_to_cart(Request $request){
    	$qty = $request->qty;
    	$product_id = $request->product_id;

    	$productInfo = DB::table('tbl_product')
    		           ->where('product_id',$product_id)
    		           ->first();

        $data = array();
        $data['qty'] = $request->qty;
        $data['id'] = $request->product_id;
        $data['name'] = $productInfo->product_name;
        $data['price'] = $productInfo->product_price;
        $data['options']['img']=$productInfo->product_image;

        Cart::add($data);

        if(isset($request->action) && $request->action == "cartIcon"){
            return \redirect('/');
        }

    	return \redirect('/show-cart');
    }

    public function showCart(){

        $allPublishedCategory = DB::table('tbl_categories')->where('publication_status',1)->get();

        return view('frontend.pages.cart')->with('all_publish_category',$allPublishedCategory);

    }
    // delete product from cart
    public function deleteCart($rowId){
        Cart::remove($rowId);
        return json_encode(["status" => "success"], 200);
        
        // return Redirect::to('/show-cart');
    }
    // update cart

    public function updateCart(Request $request){
        $qty = $request->quantity;
        $rowId = $request->rowId;
        // return Redirect::to('/show-cart');
        if(Cart::update($rowId,$qty)){
            return json_encode(["status" => "success"], 200);
        }
        return json_encode(["status" => "error"], 503);

    }
}
