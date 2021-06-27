<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
    public function index(){
    	return view('admin_panel.add_product');
    }

    // show all products
    public function allProduct(){
        $allProducts = DB::table('tbl_product')
                        ->join('tbl_categories','tbl_product.category_id','=','tbl_categories.id')
                        ->join('tbl_manufactur','tbl_product.manufacture_id','=','tbl_manufactur.id')
                        ->select('tbl_product.*','tbl_categories.category_name','tbl_manufactur.manufacture_name')                        
                        ->get();           
        return view('admin_panel.all_product')->with('all_products',$allProducts);
    }

    // insert product

    public function saveProduct(Request $request){

    	$productSave = array();

    	$productSave['product_name'] 		= $request->product_name;
    	$productSave['category_id'] 		= $request->product_cat;
    	$productSave['manufacture_id'] 		= $request->product_brand;
    	$productSave['short_description'] 	= $request->short_description;
    	$productSave['long_description'] 	= $request->long_description;
    	$productSave['product_price'] 		= $request->product_price;
    	$productSave['product_qty'] 		= $request->product_qty;
    	$productSave['product_color'] 		= $request->product_color;
    	$productSave['product_size'] 		= $request->product_size;
    	$productSave['publication_status'] 	= $request->publication_status;
    	$image= $request->file('product_img');
    	if ($image) {
    		$prefix = str_random(5);
	    	$imageName = $prefix.$image->getClientOriginalName();
	    	$folder = "images/product";    	

	    	$imageURL = $folder."/".$imageName;
	    	$success = $image->move($folder,$imageName);
	    	if ($success) {
	    		$productSave['product_image'] = $imageURL;
	    		DB::table('tbl_product')->insert($productSave);
	    		Session::put('message','Product saved successfully!!');
	    		return Redirect::to('/add-product');
	    	} 
	    	$productSave['product_image'] ="";

	    	DB::table('tbl_product')->insert($productSave);
	    	Session::put('message','Product saved successfully without image!!');
	    	return Redirect::to('/add-product');   	
	    	
    	}
    }

    // Unactive product
    public function unActiveProduct($product_id){
        DB::table('tbl_product')
            ->where('product_id',$product_id)
            ->update(['publication_status'=>0]);
            Session::put('message','Product Unactivated successfully!!');
        return Redirect::to('/all-product');
    }

    // Active product
    public function activeProduct($product_id){
        DB::table('tbl_product')
            ->where('product_id',$product_id)
            ->update(['publication_status'=>1]);
            Session::put('message','Product Activated successfully!!');
        return Redirect::to('/all-product');
    }

    // edit product

    public function editProduct($product_id){
        $editProduct = DB::table('tbl_product')
                        ->join('tbl_categories','tbl_product.category_id','=','tbl_categories.id')
                        ->join('tbl_manufactur','tbl_product.manufacture_id','=','tbl_manufactur.id')
                        ->select('tbl_product.*','tbl_categories.category_name','tbl_manufactur.manufacture_name')
                        ->where('product_id',$product_id)
                        ->first();
        
        return view('admin_panel.edit_product')->with('edit_product',$editProduct);

    }

    // Delete Product
    public function deleteProduct($product_id){
        DB::table('tbl_product')
            ->where('product_id',$product_id)
            ->delete();
        Session::put('delmsg','Product delete successfully!!');
        return Redirect::to('/all-product');

    }
}