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
				<div class="card">
					<div class="card-body">
						<h3>Order No:{{ $order->order_id }}</h3>
					</div>
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
							$cart_lists = Cart::content();
							foreach($cart_lists as $cart_list){
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
		<div class="col-sm-12">
			<div class="table-responsive">
				<table>
					<tr>
						<td colspan="2">
							<h3>Shipping Details</h3>
						</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>{{ $order->shipping_first_name.' '.$order->shipping_last_name }}</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>{{ $order->shipping_email }}</td>
					</tr>
					<tr>
						<td>Contact</td>
						<td>{{ $order->shipping_phone }}</td>
					</tr>
					<tr>
						<td>Address</td>
						<td>{{ $order->shipping_address.', '.$order->shipping_city }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-9">
			<div class="container">
				<div class="row">
					<h4>Payment Instruction</h4>
					<ul>
						<li>- Type #247*</li>
						<li>- Chose "send money" option</li>
						<li>- Enter <span style="color: red; font-size: 16px;">01994282802</span> as bkash account number</li>
						<li>- Enter amount BDT {{$cart_list->total}}</li>
						<li>- Enter reference 1</li>
					</ul>
					<p>After successfully confirm send money you will geta Transaction ID. Please, put this transaction id in to below field and click on place order.</p>
					
				</div>
				<div class="row">
					<form>
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-1 col-form-label">TransactionID</label>
							<div class="col-sm-3">
								<input type="text" required="required" class="form-control" id="transaction_id" placeholder="Transaction ID">
							</div>
							<input type="submit" name="payment" value="Place Order" class="btn btn-success btn-sm">
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</section> <!--/#cart_items-->
@endsection