<div class="logo">
    <a href="{{ url('dashboard') }}" class="simple-text logo-mini">
        <div class="logo-image-small">
            <img src="{{ asset('frontend/img/logo-small.png') }}">
        </div>
        <!-- <p>CT</p> -->
    </a>
    <a href="{{ url('dashboard') }}" class="simple-text logo-normal">
        Ecommerce web
        <!-- <div class="logo-image-big">
          <img src="../assets/img/logo-big.png">
        </div> -->
    </a>
</div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="{{ url('dashboard') }}">
                <i class="nc-icon nc-bank"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="{{ Request::is('categories') ? 'active' : '' }}">
            <a href="{{ url('categories') }}">
                <i class="nc-icon nc-tile-56"></i>
                <p>Categories</p>
            </a>
        </li>
        <li class="{{ Request::is('products') ? 'active' : '' }}">
            <a href="{{ url('products') }}">
                <i class="nc-icon nc-album-2"></i>
                <p>Products</p>
            </a>
        </li>
    </ul>
</div>
