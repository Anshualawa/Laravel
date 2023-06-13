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
    <div class="">
        <div class=" row px-4 bg-dark">
            <div class=" col-md-4  "><img src="_https://www.etvwin.com/assets/img/logo.png" alt="" srcset=""></div>
            <div class=" col-md-4 ">
                <div class="row py-3">
                    <div class=" col-md-3 text-center  "><a class=" btn text-light" href="">Movie</a></div>
                    <div class=" col-md-3 text-center  "><a class=" btn text-light" href="">Video</a></div>
                    <div class=" col-md-3 text-center  "><a class=" btn text-light" href="">Songs</a></div>
                    <div class=" col-md-3 text-center  "><a class=" btn text-light" href="">About</a></div>
                </div>
            </div>
            <div class=" col-md-4 ">
                <div class=" row py-3">
                    <div class=" col-md-8 "></div>
                    <div class=" col-md-4 text-center "><a class=" btn text-light" href="">LogOut</a></div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="container">
            <div class="container">
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