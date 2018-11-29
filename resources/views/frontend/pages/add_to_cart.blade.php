@section('page-title')
Shopping Cart | TSF Aquatics
@endsection
@include('frontend.include.header')

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
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
								<p>{{$cart_list->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{url('/update-cart')}}" method="post">
										{{ csrf_field() }}
										<input class="cart_quantity_input" type="text" name="quantity" value="{{$cart_list->qty}}" autocomplete="off" size="2">
										<input type="hidden" name="rowId" value="{{$cart_list->rowId}}">
										<input style="margin-left: 5px;" type="submit" class="btn btn-info btn-sm" name="submit" value="update">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$cart_list->total}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-cart-row/'.$cart_list->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 pull-right">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{Cart::subtotal()}}</span></li>
							<li>Eco Tax <span>{{Cart::tax()}}</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{{Cart::total()}}</span></li>
						</ul>
						<?php
                            $customer_id = Session::get('customer_id');
                            $shipping_id = Session::get('shipping_id');
                            if($customer_id != NULL && $shipping_id==NULL){
                        ?>
							<a class="btn btn-default check_out" href="{{url('/checkout')}}">Check Out</a>
						<?php
                            }else if($customer_id != NULL && $shipping_id!=NULL){
                        ?>
						<a class="btn btn-default check_out" href="{{url('/payment')}}">Check Out</a>
						<?php
                            }else{
                        ?>
                        <a class="btn btn-default check_out" href="{{url('/user-login')}}">Check Out</a>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	@include('frontend.include.footer')