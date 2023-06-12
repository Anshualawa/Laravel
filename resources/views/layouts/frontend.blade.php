<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top text-light bg-dark"
            style="background: #00021c !important;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://www.etvwin.com/assets/img/logo.png" height="50px" width="50px" alt=""
                        class="logo-img justify-content-end">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item mx-4">
                            <a class="btn nav-link text-light" href="{{ url('/home') }}">HOME</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="btn nav-link text-light" href="{{ url('/tv-shows') }}">TV SHOWS</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="btn nav-link text-light" href="{{ url('/movies') }}">MOVIES</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="btn nav-link text-light" href="{{ url('/live-tv') }}">LIVE TV</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="btn nav-link text-light" href="{{ url('/news') }}">NEWS</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="btn nav-link text-light" href="{{ url('/food') }}">FOOD</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="btn nav-link text-light" href="{{ url('/health') }}">HEALTH</a>
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
                                <img src="https://www.etvwin.com/assets/img/subscribe-small.png" height="25px"
                                    width="100px" alt="" class="subscription-img">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



    </div>
    <div class="container">
        <div class="container p-5">
            <div class="container p-5">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://images.squarespace-cdn.com/content/v1/5fce63270356d927d7eecdbd/033e9988-2ac8-4cb9-8b9f-5bf05fb22dcb/gff.jpg?format=1000w"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.squarespace-cdn.com/content/v1/5fce63270356d927d7eecdbd/4af318ee-9319-4914-9356-7b8b19d60305/Data+Visualization.jpeg?format=1000w"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.squarespace-cdn.com/content/v1/5fce63270356d927d7eecdbd/14278a7d-0442-41fe-9ca1-097048790f9a/Data+Visualization+Important.jpeg?format=1000w"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div>
            @yield('content')
        </div>
    </div>
</body>

</html>
