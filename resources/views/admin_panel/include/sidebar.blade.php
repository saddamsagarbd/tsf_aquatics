<!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{URL::to('/dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Manage Categories</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">            
            <a class="dropdown-item" href="{{URL::to('/add-category')}}">Add Category</a>
            <a class="dropdown-item" href="{{URL::to('/all-category')}}">All Categories</a>            
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Manage Brands</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">            
            <a class="dropdown-item" href="{{URL::to('/add-manufacture')}}">Add Brand</a>
            <a class="dropdown-item" href="{{URL::to('/all-manufacture')}}">All Brands</a>            
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Manage Products</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">            
            <a class="dropdown-item" href="{{URL::to('/add-product')}}">Add Product</a>
            <a class="dropdown-item" href="{{URL::to('/all-product')}}">All Products</a>            
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Manage Salesman</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">            
            <a class="dropdown-item" href="">Add Salesman</a>
            <a class="dropdown-item" href="">All Salesmen</a>            
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Slider</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>