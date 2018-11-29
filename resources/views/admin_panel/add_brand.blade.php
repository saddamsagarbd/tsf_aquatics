@extends('dashboard_layout')

@section('page-title')
	TSF Aquatics | Add Brand
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
                    <form id="category_form" action="{{ url('/save-manufacture') }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    	{{ csrf_field() }}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Manufacturer Name <span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="category_name" name="brand_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description <span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea required="required" id="description" name="description" class="form-control col-md-7 col-xs-12"></textarea>
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
                          <button type="submit" class="btn btn-success">Add Brand</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
@endsection