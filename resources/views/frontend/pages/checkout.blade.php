@section('page-title')
checkout | TSF Aquatics
@endsection
@include('frontend.include.header')
<section id="cart_items">
		<div class="container">
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Shipping Details</p>
							<div class="form-one">
								<form action="{{('/save-shipping')}}" method="post">
									{{csrf_field()}}
									<input type="text" name="shipping_email" placeholder="Email*">
									<input type="text" name="shipping_first_name" placeholder="First Name *">
									<input type="text" name="shipping_last_name" placeholder="Last Name *">
									<input type="text" name="shipping_address" placeholder="Address *">
									<input type="text" name="shipping_phone" placeholder="Mobile number *">
									<input type="text" name="shipping_city" placeholder="city *">
									<input type="submit" name="submit" class="btn btn-success" value="checkout">
								</form>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->

@include('frontend.include.footer')