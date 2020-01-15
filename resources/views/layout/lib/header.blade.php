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
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/products') }}">
                    Products
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Supplier
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('supplier/login') }}">
                        Login
                    </a>
                    <a class="dropdown-item" href="#">
                        Supply Products
                    </a>


                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Company
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    @if(Auth::guard('admin')->check())

                    <a class="dropdown-item" data-toggle="dropdown" href="{{ url('/admin/logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                        <!-- <i class="fas fa-bars"></i> -->Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                    @else
                    <a class="dropdown-item" href="{{ url('admin/login') }}">
                        Login
                    </a> @endif

                    <a class="dropdown-item" href="{{ url('admin/received_products') }}">
                        Received Products
                    </a>

                </div>
            </li>
        </ul>
    </div>
</nav>