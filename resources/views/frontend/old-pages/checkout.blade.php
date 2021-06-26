@section('page-title')
checkout | TSF Aquatics
@endsection
@include('frontend.include.header')
<section id="cart_items">
		<div class="container">
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						@if (count($errors) > 0)
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
						<div class="bill-to">
							<p>Shipping Details</p>
							<div class="form-one">
								<form action="{{('/save-shipping')}}" method="post">
									{{csrf_field()}}
									<input type="email" required="required" name="shipping_email" placeholder="Email*">
									<input type="text" required="required" name="shipping_first_name" placeholder="First Name *">
									<input type="text" required="required" name="shipping_last_name" placeholder="Last Name *">
									<input type="text" required="required" name="shipping_address" placeholder="Address *">
									<input type="text" required="required" name="shipping_phone" placeholder="Mobile number *">
									<input type="text" required="required" name="shipping_city" placeholder="city *">
									<input type="submit" name="submit" class="btn btn-success" value="checkout" style="background-color: #5cb85c;">
								</form>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->

@include('frontend.include.footer')