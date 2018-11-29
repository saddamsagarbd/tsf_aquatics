@include('admin_panel.include.header')

    <div id="wrapper">

  	@include('admin_panel.include.sidebar')    

      <div id="content-wrapper">

        <div class="container">

          @yield('main-content')

        </div>
        <!-- /.container-fluid -->
  	@include('admin_panel.include.footer') 