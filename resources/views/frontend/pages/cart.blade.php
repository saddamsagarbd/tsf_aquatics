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
                            <th scope="col">Action</th>
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
                                    <span class="input-number-decrement" data-rel="0" data-row_id="{{$cart_list->rowId}}"> <i class="ti-minus"></i></span>
                                    <input class="input-number product_qty {{$cart_list->rowId}}_qty" data-row_id="{{$cart_list->rowId}}" type="text" value="{{$cart_list->qty}}" min="1" max="10">
                                    <span class="input-number-increment" data-rel="1" data-row_id="{{$cart_list->rowId}}"> <i class="ti-plus"></i></span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="{{$cart_list->rowId}}_price">Tk.{{($cart_list->price ?? 0)}}</h5>
                                </td>
                                <td>
                                    <a href="" class="remove_from_cart" data-row_id="{{$cart_list->rowId}}"><i class="ti-close red"></i></a>
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
        function updateCart(qty, rowId){
            $.ajax({
                url:"{{url('/update-cart')}}",
                method:"POST",
                data:{quantity: qty, rowId: rowId},
                dataType:"JSON",
                success:function(response)
                {
                    if(response.status == "success"){
                        $(document).find('.cart_inner').load(window.location.href +  ' .cart_inner');
                    }
                }
            });
        }
        $(document).on("click", ".input-number-increment, .input-number-decrement", function(e){
            e.preventDefault();
            var rowId = $(this).data("row_id");
            var rel = $(this).data("rel");
            var qty = $("."+rowId+"_qty").val();
            if(rel == 0){
                qty = (parseInt(qty) - 1);
            }
            if(rel == 1){
                qty = (parseInt(qty) + 1);
            }
            $("."+rowId+"_qty").attr('value', parseInt(qty));

            updateCart(qty, rowId);

        })

        $(document).on("keyup", ".product_qty", function(e){
            e.preventDefault();
            var qty = $(this).val();
            var rowId = $(this).data("row_id");
            updateCart(qty, rowId);
        })

        $(document).on("click", ".remove_from_cart", function(e){
            e.preventDefault();
            var rowId = $(this).data("row_id");
            $.ajax({
                url: '{{ URL::to("/delete-cart-row") }}'+'/'+rowId,
                method: 'get',
                dataType: 'json',
                success:function(response)
                {                   
                    if(response.status == "success"){
                        $(document).find('.cart_inner').load(window.location.href +  ' .cart_inner');
                    }
                }
            });
        })

    });
</script>
@endsection