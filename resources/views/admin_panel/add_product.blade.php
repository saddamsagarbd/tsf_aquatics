@extends('dashboard_layout')

@section('page-title')
	TSF Aquatics | Add Product
@endsection

@section('main-content')
	<div class="alert alert-info">
                <h3>Form Elements</h3>
              </div>
              	<?php 
	              $message = Session::get('message');
	              //$msg = Session::get('msg');
	              if($message)
	              {
	                echo '<p class="alert alert-success">'.$message."</p>";
	                Session::put('message',null);
	              }              
	            ?>
            
            <div class="clearfix"></div>
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">                
                  <div class="x_content">
                    <br />
                    <form id="product_form" enctype="multipart/form-data" action="{{ url('/save-product') }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    	{{ csrf_field() }}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name <span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="product_name" name="product_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product category<span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        	<select name="product_cat" id="product_cat" class="form-control col-md-7 col-sm-7 col-xs-12">
                        		<?php

                        		$productCat = DB::table('tbl_categories')
                        					->where('publication_status',1)
                        					->get();                        		

                        		?>

                        		<option>Select Product Category</option>

                        		
                        		@foreach( $productCat as $p_category )
                        			<option value="{{ $p_category->id }}">{{ $p_category->category_name }}</option>
                        		@endforeach
                        		
                        	</select>                          
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Brand<span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        	<select name="product_brand" id="product_brand" class="form-control col-md-7 col-sm-7 col-xs-12">
                        		<?php

                        		$productBrand = DB::table('tbl_manufactur')
                        					->where('publication_status',1)
                        					->get();                        		

                        		?>

                        		<option>Select Product Brand</option>

                        		@foreach( $productBrand as $p_brand )
                        			<option value="{{ $p_brand->id }}">{{ $p_brand->manufacture_name }}</option>
                        		@endforeach
                        	</select>                          
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Short Description <span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea required="required" id="short_description" name="short_description" class="form-control col-md-7 col-xs-12" maxlength="80"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Long Description <span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea required="required" id="long_description" name="long_description" class="form-control col-md-7 col-xs-12" maxlength="250"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Price <span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="product_price" name="product_price" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Qty <span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="product_qty" name="product_qty" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Image <span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="product_img" name="product_img" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Color <span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="product_color" name="product_color" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Size <span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="product_size" name="product_size" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Publication Status <span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        	<select name="publication_status" id="publication_status" class="form-control col-md-7 col-sm-7 col-xs-12">
                        		<option>Select Publication Status</option>
                        		<option value="1">Published</option>
                        		<option value="0">Unpublished</option>
                        	</select>                          
                        </div>
                      </div>                   
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="reset">Cancel</button>
                          <button type="submit" class="btn btn-success">Add Product</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
@endsection