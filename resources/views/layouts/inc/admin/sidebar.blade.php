<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/dashboard')}}">
              <i class="icon-grid menu-icon"></i>
              <span  class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="colors">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/category/create')}}">Add Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/category')}}">View Category</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#products" aria-expanded="false" aria-controls="colors">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/products/create')}}">Add products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/products')}}">View products</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#colors" aria-expanded="false" aria-controls="colors">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Colors</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="colors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/colors/create')}}">Add Colors</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/colors')}}">View colors</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#slider" aria-expanded="false" aria-controls="colors">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Home Sliders</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="slider">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/sliders/create')}}">Add sliders</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/sliders')}}">View sliders</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#order" aria-expanded="false" aria-controls="colors">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Orders</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="order">
              <ul class="nav flex-column sub-menu">
               
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/orders')}}">View Orders</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="colors">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Users</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/users/create')}}">Add User</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/users')}}">View Users</a></li>
                
              </ul>
            </div>
          </li>
          
          
         
         
          
         
        </ul>
</nav>