<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div>
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
                    <li class="nav-item" style="color:#ffff">
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


    </div>
    <div>
        <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Secondary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
        <div class="card text-bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Success card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
        <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Danger card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
        <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Warning card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
        <div class="card text-bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Info card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
        <div class="card text-bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
    </div>
</body>

</html>