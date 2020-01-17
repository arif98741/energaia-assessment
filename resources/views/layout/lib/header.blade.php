<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">
                    Home </a>
            </li>

            @if(Auth::guard('admin')->check())
            <li class="nav-item">
                <a href="{{ url('admin/dashboard') }}" class="nav-link">Dashboard</a>
            </li>

            <li class="nav-item">
                <a class="dropdown-item" data-toggle="dropdown" href="{{ url('/admin/logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form1').submit();">
                    <i class="fas fa-bars"></i>Logout
                </a>

                <form id="logout-form1" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>


            @elseif(Auth::guard('supplier')->check())
            <li class="nav-item">
                <a href="{{ url('supplier/dashboard') }}" class="nav-link">Dashboard</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Product
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">



                    <a class="dropdown-item" href="{{ url('supplier/add-product') }}">
                        Add Product
                    </a>
                    <a class="dropdown-item" href="{{ url('supplier/product-lits') }}">
                        Product List
                    </a>

                </div>
            </li>
            <li class="nav-item">
                <a class="dropdown-item" href="{{ url('/supplier/logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form2').submit();">
                    <!-- <i class="fas fa-bars"></i> -->Logout
                </a>
                <form id="logout-form2" action="{{ url('supplier/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

            @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">



                    <a class="dropdown-item" href="{{ url('admin/login') }}">
                        Company Login
                    </a>
                    <a class="dropdown-item" href="{{ url('supplier/login') }}">
                        Supplier Login
                    </a>

                </div>
            </li>

            @endif

        </ul>
    </div>
</nav>