@section('page-title')
Registration | E-BazaarShodai
@endsection
@include('frontend.include.header')
	
<div class="register-form-area">
    <div class="register-form text-center">
        <div class="register-heading">
            <span>Sign Up</span>
            <p>Create your account to get full access</p>
        </div>
        <form action="{{url('/customer-registration')}}" method="post">
            {{ csrf_field() }}
            <div class="input-box">
                <div class="single-input-fields">
                    <label>Full name</label>
                    <input type="text" name="customer_name" placeholder="Enter full name" required="required">
                </div>
                <div class="single-input-fields">
                    <label>Email Address</label>
                    <input type="email" name="customer_email" placeholder="Enter email address" required="required">
                </div>
                <div class="single-input-fields">
                    <label>Phone</label>
                    <input type="text" name="customer_phone" placeholder="Enter phone number" required="required">
                </div>
                <div class="single-input-fields">
                    <label>Password</label>
                    <input type="password" name="customer_pass" placeholder="Enter Password" required="required">
                </div>
                <div class="single-input-fields">
                    <label>Confirm Password&nbsp;<span class='alert alert-danger errorMsg' style="font-size:10px; display: inline; color: #ff0000; text-align: left; margin: 0; padding: 0;">Passowrd does not match.</span></label>
                    <input type="password" name="customer_repass" placeholder="Confirm Password" required="required">
                </div>
            </div>
            <div class="register-footer">
                <p> Already have an account? <a href="{{ URL::to('/user-login') }}"> Login</a> here</p>
                <button type="submit" class="submit-btn3">Sign Up</button>
            </div>
        </form>
    </div>
</div>
@section('custom-script')
<script>
    $(document).ready(function(){
        $(".errorMsg").hide();
        $(document).on("keyup", "input[name='customer_repass']", function(e){
            var password = $("input[name='customer_pass']").val();
            var re_password = $(this).val();
            $(".errorMsg").hide();
            console.log('test:' + password);
            console.log('test:' + re_password);
            if( re_password != password){
                $(".errorMsg").show();
            }
        });
    });
</script>
@endsection
	
@include('frontend.include.footer')