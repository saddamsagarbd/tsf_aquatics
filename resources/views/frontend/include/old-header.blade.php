<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('page-title')</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">      
    <link rel="shortcut icon" href="{{asset('frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
    <link rel="shortcut icon" href="{{URL::to('admin_css/images/favico/favicon.ico')}}" type="image/x-icon">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +880 199 42 82 802</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> saddamsagar02@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/TSF-Aquatics-244300289774296/?ref=settings"><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{URL::to('/')}}"><img src="{{asset('frontend/images/aquarium/landscap-01.png')}}" width="350" height="50" alt="Responsive Logo" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <?php
                                    $customer_id = Session::get('customer_id');
                                    $shipping_id = Session::get('shipping_id');
                                    if($customer_id != NULL && $shipping_id==NULL){
                                ?>
                                <li><a href="{{url('/checkout')}}">Checkout</a></li> 
                                <?php
                                    }else if($customer_id != NULL && $shipping_id!=NULL){
                                ?>
                                <li><a href="{{url('/payment')}}">Checkout</a></li> 
                                <?php
                                    }else{?>
                                <li><a href="{{url('/user-login')}}">Checkout</a></li>
                                
                                <?php
                                    }
                                ?>
                                <li><a href="{{url('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <?php
                                    $customer_id = Session::get('customer_id');
                                    
                                    if($customer_id != NULL){
                                ?>
                                <li><a href="{{url('/customer_logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                                <?php
                                    }else{
                                ?>
                                <li><a href="{{url('/user-login')}}"><i class="fa fa-lock"></i> Login</a></li>
                                
                                <?php
                                    }
                                ?>

                             
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
                <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.html">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
                                        <li><a href="product-details.html" class="active">Product Details</a></li>
                                        <?php
                                            $customer_id = Session::get('customer_id');
                                            if($customer_id != NULL){
                                        ?>
                                        <li><a href="{{url('/checkout')}}">Checkout</a></li> 
                                        <?php
                                            }else{
                                        ?>
                                        <li><a href="{{url('/user-login')}}">Checkout</a></li> 
                                        <?php
                                            }
                                        ?>


                                        
                                        <li><a href="{{url('/show-cart')}}">Cart</a></li>                                        
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="{{url('/user-login')}}">Post Your Product</a>
                                    
                                </li> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->