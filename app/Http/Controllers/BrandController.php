<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class BrandController extends Controller
{
    public function index(){
    	return view('admin_panel.add_brand');
    }

    // show all brand
    public function allManufacture(){
    	$allManufacture = DB::table('tbl_manufactur')->get();
    	return view('admin_panel.all_brand')->with('all_manufacture',$allManufacture);
    }
    // insert brand
    public function saveManufacture(Request $request){
    	/*dd($request->all());*/

    	$manuSave = array();
    	$manuSave['manufacture_name']=$request->brand_name;
    	$manuSave['description']=$request->description;
    	$manuSave['publication_status']=$request->publication_status;

    	DB::table('tbl_manufactur')->insert($manuSave);
    	Session::put('message','Brand added successfully!!');
    	return Redirect::to('/add-manufacture');

    }
    // Unactive brand
    public function unActiveBrand($id){
    	/*echo $id;*/
    	DB::table('tbl_manufactur')
    		->where('id',$id)
    		->update(['publication_status'=>0]);
    		Session::put('message','Brand Unactivated successfully!!');
    	return Redirect::to('/all-manufacture');
    }

    // Active brand
    public function activeBrand($id){
    	/*echo $id;*/
    	DB::table('tbl_manufactur')
    		->where('id',$id)
    		->update(['publication_status'=>1]);
    		Session::put('message','Brand Activated successfully!!');
    	return Redirect::to('/all-manufacture');
    }
    // edit Brand

    public function editBrand($id){
    	$editBrand = DB::table('tbl_manufactur')->where('id',$id)->first();
    	
    	return view('admin_panel.edit_brand')->with('edit_categories',$editBrand);

    }

    // update Brand
    public function updateBrand(Request $request){
    	/*dd($request->all());*/
    	$brndEdit = array();
    	$brndId=$request->brand_id;
    	$brndEdit['category_name']=$request->category_name;
    	$brndEdit['description']=$request->description;
    	$brndEdit['publication_status']=$request->publication_status;

    	DB::table('tbl_manufactur')->where('id',$brndId)->update($brndEdit);
    	Session::put('message','Brand successfully Update!!');
    	return Redirect::to('/all-manufacture');

    }

    // Delete Brand
    public function deleteBrand($id){
    	DB::table('tbl_manufactur')->where('id',$id)->delete();
    	Session::put('delmsg','Brand delete successfully!!');
    	return Redirect::to('/all-manufacture');

    }

}
