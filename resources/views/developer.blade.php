@extends('layouts.developer')

@push('title')

<title>Developer</title>

@endpush

@section('developer-section')
<section class="h-100 gradient-custom-2">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
                <div class="card">
                    <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                        <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                            <img src="https://media.licdn.com/dms/image/D5603AQGAyoXve4Y01Q/profile-displayphoto-shrink_800_800/0/1668754492386?e=2147483647&v=beta&t=7goinUSd1kMqht8fu6qPYNd2Ji6lyFbx5vJIR31cn-A"
                                alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                style="width: 150px; z-index: 1">
                            <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                                style="z-index: 1;">
                                @CodeVerse
                            </button>
                        </div>
                        <div class="ms-3" style="margin-top: 130px;">
                            <h5>Pappu Alawa</h5>
                            <p>India</p>
                        </div>
                    </div>
                    <div class="p-4 text-black" style="background-color: #f8f9fa;">
                        <div class="d-flex justify-content-end text-center py-1">
                            <div>
                                <p class="mb-1 h5">253</p>
                                <p class="small text-muted mb-0">Photos</p>
                            </div>
                            <div class="px-3">
                                <p class="mb-1 h5">1026</p>
                                <p class="small text-muted mb-0">Followers</p>
                            </div>
                            <div>
                                <p class="mb-1 h5">37</p>
                                <p class="small text-muted mb-0">Following</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4 text-black">
                        <div class="mb-5">
                            <p class="lead fw-normal mb-1">About</p>
                            <div class="p-4" style="background-color: #f8f9fa;">
                                <p class="font-italic mb-1">Web Developer</p>
                                <p class="font-italic mb-1">Lives in India</p>
                                <p class="font-italic mb-0">Video Gammer</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <p class="lead fw-normal mb-0">Recent Work Status</p>
                            <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-2">
                                <img src="https://img.freepik.com/free-photo/3d-rendering-biorobots-concept_23-2149524399.jpg?t=st=1687175529~exp=1687176129~hmac=9f58cee7b3a6e695c7c58bd85fa9ebf1e226bf99487443feaf01280f58a1a679"
                                    alt="image 1" class="w-100 rounded-3">
                            </div>
                            <div class="col mb-2">
                                <img src="https://img.freepik.com/premium-photo/future-artificial-intelligence-robot-cyborg_31965-6980.jpg"
                                    alt="image 1" class="w-100 rounded-3">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col">
                                <img src="https://img.freepik.com/free-photo/ai-technology-microchip-background-digital-transformation-concept_53876-124669.jpg?w=1380&t=st=1687175533~exp=1687176133~hmac=176b47fb2663be96bb3198a8228dde49effcbb625d2117d86e7db7c4b39a498b"
                                    alt="image 1" class="w-100 rounded-3">
                            </div>
                            <div class="col">
                                <img src="https://img.freepik.com/free-photo/teenager-dressed-white-t-shirt-using-virtual-reality-glasses-with-graph-charts-numbers-lines-technology-concept_613910-5097.jpg?t=st=1687175529~exp=1687176129~hmac=3f3a63c802b3b49dbd5871d70623700d460ad444b0a8ee5f92fed9050fdc5387"
                                    alt="image 1" class="w-100 rounded-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection