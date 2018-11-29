@extends('master')
@section('page-title')
Product | TSF Aquatics
@endsection
@section('slider')
<section id="advertisement">
		<div class="container">
			<img src="{{asset('frontend/images/shop/advertisement.jpg')}}" alt="" />
		</div>
	</section>
@endsection
@section('main-content')

	<div class="features_items">
		<!--features_items-->
		<h2 class="title text-center">Features Items</h2>
			@foreach($showPorductByCategory as $f_product)

            <div class="col-md-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset($f_product->product_image)}}" width="200px" height="200px" alt="tsf_aqua" />
                            <h2>BDT.{{$f_product->product_price}}</h2>
                            <p>{{$f_product->product_name}}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>BDT.{{$f_product->product_price}}</h2>
                                <a href="{{URL::to('/view-product/'.$f_product->product_id)}}"><p>{{$f_product->product_name}}</p></a>
                                <a href="{{URL::to('/view-product/'.$f_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                            <li><a href="{{URL::to('/view-product/'.$f_product->product_id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
		</div>

@endsection