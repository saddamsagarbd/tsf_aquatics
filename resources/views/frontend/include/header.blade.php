<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>@yield('page-title')</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/icon/xfavicon.png.pagespeed.ic.nKD-xMXOhN.png') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/A.bootstrap.min.css%2bowl.carousel.min.css%2bslicknav.css%2bflaticon.css%2banimate.min.css%2bprice_rangs.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-icons.cs') }}" />
      <!-- <link rel="stylesheet" href="{{ asset('assets/css/style.php') }}"> -->
      @include('frontend.include.style')
   </head>
   <body>
      <div id="preloader-active">
         <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
               <div class="preloader-circle"></div>
               <div class="preloader-img pere-text">
                  <img src="assets/img/icon/xloder.png.pagespeed.ic.nKD-xMXOhN.png" alt="loder">
               </div>
            </div>
         </div>
      </div>
      <header>
         <div class="header-area">
            <div class="header-top d-none d-sm-block">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                           <div class="header-info-left">
                              <ul>
                                 <li><a href="#">About Us</a></li>
                                 <li><a href="#">Privacy</a></li>
                                 <li><a href="#">FAQ</a></li>
                                 <li><a href="#">Careers</a></li>
                              </ul>
                           </div>
                           <div class="header-info-right d-flex">
                              <ul class="order-list">
                                 <li><a href="#">My Wishlist</a></li>
                                 <li><a href="#">Track Your Order</a></li>
                              </ul>
                              <ul class="header-social">
                                 <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                 <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                                 <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                 <li> <a href="#"><i class="fab fa-youtube"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header-mid header-sticky">
               <div class="container">
                  <div class="menu-wrapper">
                     <div class="logo">
                        <a href="index-2.html"><img src="assets/img/logo/xlogo.png.pagespeed.ic.q6uV5lOyRO.png" alt=""></a>
                     </div>
                     <div class="main-menu d-none d-lg-block">
                        <nav>
                           <ul id="navigation">
                              <li>
                                 <a href="#">Category <i class="fas fa-angle-down"></i></a>
                                 <ul class="submenu">
                                    <?php
                                       $allCategory = DB::table('tbl_categories')
                                                      ->where('publication_status',1)
                                                      ->get();
                                       foreach ($allCategory as $v_category) {
                                    ?>
                                       <li>
                                          <a href="{{URL::to('/ProductByCategory/'.$v_category->id)}}">
                                             {{ $v_category->category_name }}
                                          </a>
                                       </li>
                                    <?php 
                                       }
                                    ?> 
                                 </ul>
                              </li>
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
                              <li><a href="{{url('/contact')}}">Contact</a></li>
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
                        </nav>
                     </div>
                     <div class="header-right">
                        <ul>
                           <li>
                              <div class="nav-search search-switch hearer_icon">
                                 <a id="search_1" href="javascript:void(0)">
                                 <span class="flaticon-search"></span>
                                 </a>
                              </div>
                           </li>
                           <li> <a href="login.html"><span class="flaticon-user"></span></a></li>
                           <li class="cart"><a href="cart.html"><span class="flaticon-shopping-cart"></span></a> </li>
                        </ul>
                     </div>
                  </div>
                  <div class="search_input" id="search_input_box">
                     <form class="search-inner d-flex justify-content-between ">
                        <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                        <button type="submit" class="btn"></button>
                        <span class="ti-close" id="close_search" title="Close Search"></span>
                     </form>
                  </div>
                  <div class="col-12">
                     <div class="mobile_menu d-block d-lg-none"></div>
                  </div>
               </div>
            </div>
            <div class="header-bottom text-center">
               <p>We are commited to delivery each order within 1 hour. <a href="#" class="browse-btn">Order Now</a></p>
            </div>
         </div>
      </header>
