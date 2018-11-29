@extends('dashboard_layout')

@section('page-title')
	TSF Aquatics | Edit Category
@endsection

@section('main-content')
              <div class="alert alert-info">
                <h3>Form Elements</h3>
              </div>             	
            
            <div class="clearfix"></div>
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">                
                  <div class="x_content">
                    <br />
                    <form id="category_form" action="{{ url('/update-category') }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    	{{ csrf_field() }}
                    	<input type="hidden" name="category_id" value="{{$edit_categories->id}}">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name <span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="category_name" name="category_name" value="{{$edit_categories->category_name}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description <span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea required="required" id="description" name="description" class="form-control col-md-7 col-xs-12">{{$edit_categories->description}}
                          </textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Publication Status <span class="required text-danger">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        	<select name="publication_status" id="publication_status" class="form-control col-md-7 col-sm-7 col-xs-12">
                        		
                        		<option value="{{$edit_categories->publication_status}}">
                        			@if($edit_categories->publication_status == 1)
                        			Published
                        			@else
                        			Unpublished
                        			@endif
                        		</option>
                        		<option value="1">Published</option>
                        		<option value="0">Unpublished</option>
                        	</select>                          
                        </div>
                      </div>                   
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a class="btn btn-primary" href="{{URL::to('/all-category')}}">Cancel</a>
                          <button type="submit" class="btn btn-success">Update Category</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
@endsection