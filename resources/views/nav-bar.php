<nav class="navbar navbar-expand-lg navbar-light text-light bg-#00021c" style="background: #ddd !important">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('image/et.jpg') }}" height="50px" width="50px" alt="" class="logo-img justify-content-end">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/tv-shows') }}">TV SHOWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/movies') }}">MOVIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/live-tv') }}">LIVE TV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/news') }}">NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/food') }}">FOOD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/health') }}">HEALTH</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/search') }}">
                        <i class="fas fa-search"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}">
                        <i class="fas fa-user"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('C:/xampp/firoj/webwin_project/image/subscribe.png') }}">
                        <img src="{{ asset('image/subscribe.png') }}" height="50px" width="80px" alt=""
                            class="subscription-img">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


