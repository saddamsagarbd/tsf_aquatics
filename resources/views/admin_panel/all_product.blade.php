@extends('dashboard_layout')
@section('page-title')
	TSF Aquatics | All Products
@endsection

@section('main-content')
	<h3 class="alert alert-info">All Products</h3>
	<?php 
	    $message = Session::get('message');
	    $delMsg = Session::get('delmsg');
	              //$msg = Session::get('msg');
	    if($message)
	    {
	    	echo '<p class="alert alert-success">'.$message."</p>";
	        Session::put('message',null);
	   	} elseif ($delMsg) {
	        echo '<p class="alert alert-danger">'.$delMsg."</p>";
	        Session::put('delmsg',null);
	   	}             
	?>
	<div class="table-responsive">
	  <table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col" class="text-center">#SL</th>
		      <th scope="col" class="text-center">Image</th>
		      <th scope="col" class="text-center">Product Name</th>		      
		      <th scope="col" class="text-center">Product proegory</th>    		      
		      <th scope="col" class="text-center">Price</th>
		      <th scope="col" class="text-center">Product Qty</th>
		      <th scope="col" class="text-center">Product color</th>
		      <th scope="col" class="text-center">Status</th>
		      <th scope="col" class="text-center">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  		$i=0;
		  
		  	?>
		  	@foreach($all_products as $showProduct)
		  	<tr>
		      <th scope="row" class="text-center"><?=++$i;?></th>
		      <th scope="row" class="text-center"><img src="{{$showProduct->product_image}}" width="80" height="80" alt="pro_img"></th>
		      <td class="text-center">{{ $showProduct->product_name}}</td>
		      <td class="text-center">{{ $showProduct->category_name}}</td>
		      
		      <td class="text-center">{{ $showProduct->product_price}}</td>
		      <td class="text-center">{{ $showProduct->product_qty}}</td>
		      <td class="text-center">{{ $showProduct->product_color}}</td>
		      
		      
		      <td class="text-center">
		      	@if($showProduct->publication_status ==1)
		      	<span class="badge badge-success">Published</span>
		      	@else
		      	<span class="badge badge-danger">Unpublished</span>
		      	@endif
		      </td>
		      <td class="text-center">
		      	@if($showProduct->publication_status ==1)
		      	<a href="{{URL::to('/unactive-pro/'.$showProduct->product_id)}}" class="btn btn-sm btn-danger">
		      		<i class="fa fa-thumbs-down"></i>
		      	</a>
		      	@else
		      	<a href="{{URL::to('/active-pro/'.$showProduct->product_id)}}" class="btn btn-sm btn-success">
		      		<i class="fa fa-thumbs-up"></i>
		      	</a>
		      	@endif		      	
		      	<a href="{{URL::to('/edit-product/'.$showProduct->product_id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
		      	<a href="{{URL::to('/delete-product/'.$showProduct->product_id)}}" class="btn btn-sm btn-danger"  id="delete"><i class="fa fa-trash"></i></a>
		      </td>
		    </tr>

		  	@endforeach
		    
		  </tbody>
		</table>
	</div>
@endsection