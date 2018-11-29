@section('page-title')
Login | TSF Aquatics
@endsection
@include('frontend.include.header')

	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="{{url('/customer-login')}}" method="post">
							{{ csrf_field() }}
							<input type="email" name="customer_email" placeholder="email" />
							<input type="password" name="customer_pass" placeholder="password" />
							
							<button type="submit" name="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-6">
					<div class="signup-form"><!--sign up form-->
						<h2>New customer Signup!</h2>
						<form action="{{url('/customer-registration')}}" method="post">
							{{ csrf_field() }}
							<input type="text" name="customer_name" placeholder="Name" required="required" />
							<input type="email" name="customer_email"  placeholder="Email Address" required="required" />
							<input type="phone" name="customer_phone" placeholder="phone number" required="required" />
							<input type="password" name="customer_pass" placeholder="Password" required="required" />
							<input type="password" name="customer_repass" placeholder="Re-type Password" required="required" />
							<button type="submit" name="sign_up" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	@include('frontend.include.footer')