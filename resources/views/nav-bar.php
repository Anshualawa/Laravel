<nav class="navbar navbar-inverse " style="background: #00021c !important">
    <div class="container-fluid justify-content-center">
        <div class="navbar-header pl-14">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/et.jpg') }}" height="40px" width="50px" alt=""
                    class="logo-img sm:pd-6">
            </a>
        </div>
        <ul class="nav navbar-nav justify-content-center ">
            <li class="nav-item" style="color:#ffff">
                <a class="nav-link" href="{{ url('/home') }}">HOME</a>
            </li>
            <li class="nav-item" style="color:#ffff">
                <a class="nav-link" href="{{ url('/tv-shows') }}">TV SHOWS</a>
            </li>
            <li class="nav-item"style="color:#ffff">
                <a class="nav-link" href="{{ url('/movies') }}">MOVIES</a>
            </li>
            <li class="nav-item" style="color:#ffff">
                <a class="nav-link" href="{{ url('/live-tv') }}">LIVE TV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/news') }}">NEWS</a>
            </li>
            <li class="nav-item" style="color:#ffff">
                <a class="nav-link" href="{{ url('/food') }}">FOOD</a>
            </li>
            <li class="nav-item" style="color:#ffff">
                <a class="nav-link" href="{{ url('/health') }}">HEALTH</a>
            </li>
        </ul>

        <div class="navbar-form navbar-right col-sm-4">
        <ul class="nav navbar-nav navbar-right align-content-center align-self-center">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('C:/xampp/firoj/webwin_project/image/subscribe.png') }}">
                    <img src="{{ asset('image/subscribe.png') }}" height="40px" width="80px" alt=""
                        class="subscription-img">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-4" href="{{ url('/search') }}">
                    <img src="{{ asset('image/search.png') }}" height="30px" width="30px" alt=""
                        class="search-img " />
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/profile') }}">
                    <img src="{{ asset('image/profile-icon-white.png') }}" height="35px" width="35px" alt=""
                        class="profile-img  mt-200" />
                </a>
            </li>

        </ul>
        </div>
    </div>
</nav>

