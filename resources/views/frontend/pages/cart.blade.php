@extends('master')
@section('page-title')
Cart | E-BazaarShodai
@endsection

@section('main-content')
    <div class="hero-area section-bg2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slider-area">
                    <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
                        <div class="hero-caption hero-caption2">
                            <h2>Cart</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Cart</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
							$contents = Cart::content();
							foreach($contents as $cart_list){

						?>
                            <tr>
                                <td>
                                    <div class="media">
                                    <div class="d-flex">
                                        <img src="{{URL::to($cart_list->options->img)}}" alt="" />
                                    </div>
                                    <div class="media-body">
                                        <p>{{$cart_list->name}}</p>
                                    </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="product_count">
                                    <span class="input-number-decrement" data-row_id="{{$cart_list->rowId}}"> <i class="ti-minus"></i></span>
                                    <input class="input-number {{$cart_list->rowId}}_qty" type="text" value="{{$cart_list->qty}}" min="1" max="10">
                                    <span class="input-number-increment" data-row_id="{{$cart_list->rowId}}"> <i class="ti-plus"></i></span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="{{$cart_list->rowId}}_price">Tk.{{($cart_list->price ?? 0)}}</h5>
                                </td>
                            </tr>
                        <?php
							}
						?>
                        <tr>
                            <td></td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5 class="subtotal">{{(Cart::subtotal() ?? 0)}}</h5>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <h5>Vat/Tax</h5>
                            </td>
                            <td>
                                <h5 class="vat_tax">Tk.{{(Cart::tax() ?? 0)}}</h5>
                            </td>
                        </tr>
                        <?php
                            $shipping_charge = 0;
                            if(Cart::subtotal() != 0){
                                $shipping_charge = 50;
                            }
                        ?>
                        <tr>
                            <td></td>
                            <td>
                                <h5>Shipping Charge</h5>
                            </td>
                            <td>
                                <h5>Tk.{{ $shipping_charge }}</h5>
                                <input type="hidden" name="shipping_cost" value="{{ $shipping_charge }}">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <h5>Total</h5>
                            </td>
                            <td>
                                <h5 class="grand_total">Tk.{{ (float)(str_replace(',', '', Cart::total()) ?? 0) + (float)($shipping_charge ?? 0) }}</h5>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                    <div class="checkout_btn_inner f-right">
                    <a class="btn" href="#">Continue Shopping</a>
                    <?php
                        $customer_id = Session::get('customer_id');
                        $shipping_id = Session::get('shipping_id');
                        $url = "user-login";
                        if($customer_id != NULL && $shipping_id==NULL){
                            $url = "checkout";
                        }else if($customer_id != NULL && $shipping_id!=NULL){
                            $url = "payment";
                        }
                    ?>
                    <a class="btn checkout_btn" href="{{url('/'.$url)}}">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom-script')
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': {!! json_encode(csrf_token()) !!},
            }
        });
        $(document).on("click", ".input-number-increment, .input-number-decrement", function(){
            var rowId = $(this).data("row_id");
            console.log('rowId:' + rowId);
            var qty = $("."+rowId+"_qty").val();
            console.log('qty:' + qty);
            $("."+rowId+"_qty").attr('value', parseInt(qty));

            $.ajax({
                url:"{{url('/update-cart')}}",
                method:"POST",
                data:{quantity: qty, rowId: rowId},
                dataType:"JSON",
                success:function(response)
                {
                    console.log('test:' + response.status);
                    if(response.status == "success"){
                        $('.cart_inner').load(document.URL +  ' .cart_inner');
                    }
                }
            });

        })

    });
</script>
@endsection