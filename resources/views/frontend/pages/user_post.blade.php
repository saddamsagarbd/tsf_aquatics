@extends('master')
@section('page-title')
Post Products | TSF Aquatics
@endsection

@section('main-content')
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h2>Upload your product</h2>
			<hr>
			<form action="{{url('/sign-in')}}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label class="label-control">Product Title</label>
					<input type="text" name="user_email" class="
					form-control" placeholder="user email">
				</div>
				
				
				<div class="form-group">
					<label class="label-control">Product Category</label>
					<select name="product_category" class="form-control">
						<?php
					$category = DB::table('tbl_categories')->where('publication_status',1)->get();

					foreach ($category as $u_category) {?>
						<option value="{{$u_category->id}}">{{$u_category->category_name}}</option>
						<?php
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label class="label-control">Description</label>
					<textarea name="description" class="
					form-control"></textarea>
				</div>
				<div class="form-group">
					<label class="label-control">Product Price</label>
					<input type="text" name="user_email" class="
					form-control" placeholder="user email">
				</div>
				<div class="form-group">
					<label class="label-control">Product Image</label>
					<input type="file" name="product_image" class="
					form-control">
				</div>

				<input type="submit" class="btn btn-success" name="upload" value="upload Post">
			</form>
		</div>
	</div>
</div>

@endsection