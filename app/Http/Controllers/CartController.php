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

    		           /*echo "<pre>";
    		           print_r($productInfo);
    		           echo "</pre>";
                       exit();*/

        $data = array();
        $data['qty'] = $qty;
        $data['id'] = $productInfo->product_id;
        $data['name'] = $productInfo->product_name;
        //$data['qty'] = $productInfo->product_qty;
        $data['price'] = $productInfo->product_price;
        $data['options']['img']=$productInfo->product_image;
        Cart::add($data);

    	return Redirect::to('/show-cart');
    }

    public function showCart(){
        $allPublishedCategory = DB::table('tbl_categories')->where('publication_status',1)->get();

        return view('frontend.pages.add_to_cart')
        ->with('all_publish_category',$allPublishedCategory);

    }
        // delete product from cart
    public function deleteCart($rowId){
        Cart::update($rowId,0);
        return Redirect::to('/show-cart');
    }
    // update cart

    public function updateCart(Request $request){

        $qty = $request->quantity;
        $rowId = $request->rowId;
        Cart::update($rowId,$qty);
        return Redirect::to('/show-cart');

    }
}
