@include('frontend.include.header')  
@yield('slider')
@include('frontend.include.left_sidebar')
<div class="col-sm-9 padding-right">
@yield('main-content')
                    
</div>
</div>
</div>
</section>
@include('frontend.include.footer')