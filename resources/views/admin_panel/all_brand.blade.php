@extends('dashboard_layout')
@section('page-title')
	TSF Aquatics | All Brands
@endsection

@section('main-content')
	<h3 class="alert alert-info">All Categories</h3>
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
		      <th scope="col" class="text-center">Brands Name</th>
		      <th scope="col" class="text-center">Description</th>
		      <th scope="col" class="text-center">Status</th>
		      <th scope="col" class="text-center">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  		$i=0;
		  
		  	?>
		  	@foreach($all_manufacture as $showBrands)
		  	<tr>
		      <th scope="row" class="text-center"><?=++$i;?></th>
		      <td class="text-center">{{ $showBrands->manufacture_name}}</td>
		      <td class="text-center">{{ $showBrands->description}}</td>
		      
		      <td class="text-center">
		      	@if($showBrands->publication_status ==1)
		      	<span class="badge badge-success">Published</span>
		      	@else
		      	<span class="badge badge-danger">Unpublished</span>
		      	@endif
		      </td>
		      <td class="text-center">
		      	@if($showBrands->publication_status ==1)
		      	<a href="{{URL::to('/unactive/'.$showBrands->id)}}" class="btn btn-sm btn-danger">
		      		<i class="fa fa-thumbs-down"></i>
		      	</a>
		      	@else
		      	<a href="{{URL::to('/active/'.$showBrands->id)}}" class="btn btn-sm btn-success">
		      		<i class="fa fa-thumbs-up"></i>
		      	</a>
		      	@endif		      	
		      	<a href="{{URL::to('/edit/'.$showBrands->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
		      	<a href="{{URL::to('/delete/'.$showBrands->id)}}" class="btn btn-sm btn-danger"  id="delete"><i class="fa fa-trash"></i></a>
		      </td>
		    </tr>

		  	@endforeach
		    
		  </tbody>
		</table>
	</div>
@endsection