@extends('master')
@section('page-title')
Payment | TSF Aquatics
@endsection
@section('main-content')
<section id="cart_items">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Payment</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">	
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Image</td>
							<td class="description">Product Name</td>
							<td class="price">Qty</td>
							<td class="quantity">Price</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php
							$contents = Cart::content();

							/*echo "<pre>";
							print_r($contents);
							echo "</pre>";*/
							foreach($contents as $cart_list){
							
						?>
						
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to($cart_list->options->img)}}" width="80px" height="80px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$cart_list->name}}</a></h4>
							</td>
							<td class="cart_price">
								<p>{{$cart_list->qty}}</p>
							</td>
							<td class="cart_price">
								<p>{{$cart_list->price}}</p>
							</td>
							
							<td class="cart_total">
								<p class="cart_total_price">{{$cart_list->total}}</p>
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
		</div>
			
	</div>
	<div class="row">
		<div class="col-sm-9">
			<div class="container">
				<div class="row">
					<form class="form-group">
						<input type="radio" name="payment_gateway" value="bkash">bKash
						<input type="radio" name="payment_gateway" value="handcash">Handcash
						<input type="radio" name="payment_gateway" value="master_card">Mastercard
						<input type="radio" name="payment_gateway" value="debit_card">Debit card

						<input type="submit" name="payment" value="Done" class="btn btn-success btn-sm">
					</form>	
					
				</div>
			</div>
		</div>
	</div>
</section> <!--/#cart_items-->
@endsection