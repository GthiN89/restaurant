<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

      <li class="nav-item nav-category">
        <span class="nav-link">Dashboard</span>


      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Menu</span>
          <i class="icon-layers menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('orders') }}">Orders</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('categories') }}">Categories</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('products') }}">Products</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category"><span class="nav-link">Settings</span></li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Web</span>
          <i class="icon-layers menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">

            <li class="nav-item"> <a class="nav-link" href="{{route('slider')}}">Slider</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('about_settings')}}">About</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('reviews')}}">Customer feedback slider</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('contact_settings')}}">Contact</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('hours_settings')}}">Opening Hours</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('social_settings')}}">Social Media</a></li>
          </ul>
        </div>
      </li>







    </ul>
  </nav>
