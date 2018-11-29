<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class CategoryController extends Controller
{
    public function index(){
    	return view('admin_panel.add_category');
    }
    // show all categories
    public function allCategory(){
    	$allCategory = DB::table('tbl_categories')->get();
    	return view('admin_panel.all_category')->with('all_categories',$allCategory);
    }
    // insert category
    public function saveCategory(Request $request){
    	/*dd($request->all());*/

    	$catSave = array();
    	$catSave['category_name']=$request->category_name;
    	$catSave['description']=$request->description;
    	$catSave['publication_status']=$request->publication_status;

    	DB::table('tbl_categories')->insert($catSave);
    	Session::put('message','Category added successfully!!');
    	return Redirect::to('/add-category');

    }

    // Unactive category
    public function unActiveCategory($id){
    	/*echo $id;*/
    	DB::table('tbl_categories')
    		->where('id',$id)
    		->update(['publication_status'=>0]);
    		Session::put('message','Category Unactivated successfully!!');
    	return Redirect::to('/all-category');
    }

    // Active category
    public function activeCategory($id){
    	/*echo $id;*/
    	DB::table('tbl_categories')
    		->where('id',$id)
    		->update(['publication_status'=>1]);
    		Session::put('message','Category Activated successfully!!');
    	return Redirect::to('/all-category');
    }

    // edit category

    public function editCategory($id){
    	$editCategory = DB::table('tbl_categories')->where('id',$id)->first();
    	
    	return view('admin_panel.edit_category')->with('edit_categories',$editCategory);

    }

    // update category
    public function updateCategory(Request $request){
    	/*dd($request->all());*/
    	$catEdit = array();
    	$catId=$request->category_id;
    	$catEdit['category_name']=$request->category_name;
    	$catEdit['description']=$request->description;
    	$catEdit['publication_status']=$request->publication_status;

    	DB::table('tbl_categories')->where('id',$catId)->update($catEdit);
    	Session::put('message','Category successfully Update!!');
    	return Redirect::to('/all-category');

    }

    // Delete category
    public function deleteCategory($id){
    	DB::table('tbl_categories')->where('id',$id)->delete();
    	Session::put('delmsg','Category delete successfully!!');
    	return Redirect::to('/all-category');

    }

}
