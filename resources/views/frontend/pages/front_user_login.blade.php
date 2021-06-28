@section('page-title')
Login | E-BazaarShodai
@endsection
@include('frontend.include.header')


<div class="login-form-area">
	<div class="login-form">
		<div class="login-heading">
			<span>Login</span>
			<p>Enter Login details to get access</p>
			<?php
				$msg = Session::get('message');
				if ($msg) {
					echo "<h3 class='alert alert-danger'>".$msg."</h3>";
				}
				Session::put('message',Null);
			?>
		</div>
		<form action="{{url('/customer-login')}}" method="post">
			{{ csrf_field() }}
			<div class="input-box">
				<div class="single-input-fields">
					<label>Username or Email Address</label>
					<input type="email" name="customer_email" placeholder="Username / Email address">
				</div>
				<div class="single-input-fields">
					<label>Password</label>
					<input type="password" name="customer_pass" placeholder="Enter Password">
				</div>
				<div class="single-input-fields login-check">
					<input type="checkbox" id="fruit1" name="keep-log">
					<label for="fruit1">Keep me logged in</label>
					<a href="#" class="f-right">Forgot Password?</a>
				</div>
			</div>
			<div class="login-footer">
				<p>Don’t have an account? <a href="{{ URL::to('/user-registration') }}">Sign Up</a> here</p>
				<button type="submit" class="submit-btn3">Login</button>
			</div>
		</form>
	</div>
	</div>
	
	
	@include('frontend.include.footer')