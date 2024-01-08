<!DOCTYPE html>
<html lang="id">


@include('layouts.head')


<body>
    <header>
        @include('partials.navbar')
        <div id="corousel">
            <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('images/carousel1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/carousel2.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousel3.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>

        <div class="container" id="booknow">
            <div class="card border border-2 rounded p-4">
                <div class="card-body">
                    <div class="container text-right">
                        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3" style="color: #554931">
                            <div class="col">
                                <div class="p-3">
                                    <label for="exampleFormControlInput1" class="form-label">Check In</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1"
                                        style="color: #5E454B">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3"><label for="exampleFormControlInput1" class="form-label">Check
                                        Out
                                    </label>
                                    <input type="date" class="form-control"
                                        id="exampleFormControlInput1"style="color: #5E454B">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3"><label for="exampleFormControlInput1" class="form-label">Adult
                                    </label>
                                    <input type="number" class="form-control"
                                        id="exampleFormControlInput1"style="color: #5E454B">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3"><label for="exampleFormControlInput1" class="form-label">

                                        Child
                                    </label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        style="color: #5E454B">
                                </div>
                            </div>

                            <div class="col w-100 text-center">
                                <button class="btn text-light fw-bold" style="background-color: #BBAB8C">Check
                                    Availability</button>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div id="about">
            <div class="container mt-5 mb-4">
                <div class="row align-items-md-stretch">
                    <div class="col-md-5">
                        <div class="h-100 p-2">
                            <img src="https://images.unsplash.com/photo-1568084680786-a84f91d1153c?q=80&w=1674&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="img-thumbnail" alt="...">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                        <img src="https://plus.unsplash.com/premium_photo-1663126298656-33616be83c32?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            class="img-thumbnail" alt="...">
                                    </div>
                                    <div class="col">
                                        <img src="https://images.unsplash.com/photo-1585412727339-54e4bae3bbf9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            class="img-thumbnail" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7" style="color: #554931">
                        <div class="h-100 p-3">
                            <h5>About us</h5>
                            <h3> Layanan apa yang tersedia di hotel ini ?</h3>
                            <p>
                                Tim kami yang berdedikasi berkomitmen untuk memberikan layanan terbaik kepada para
                                tamu kami. Kami memastikan bahwa Anda akan merasa nyaman dan dimanjakan selama
                                menginap di hotel kami.
                            </p>
                            <div class="container text-center mb-5 mt-5">
                                <div class="row">
                                    <div class="col">
                                        <div class="w-10">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50"fill="currentColor"
                                                class="bi bi-wifi" viewbox="0 0 16 16">
                                                <path
                                                    d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z" />
                                                <path
                                                    d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z" />
                                            </svg>
                                            <div class="card-body">
                                                <h5 class="card-title">FREE WIFI</h5>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col">
                                        <div class="w-10">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                                                <path
                                                    d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0M4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5m7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                            </svg>
                                            <div class="card-body">
                                                <h5 class="card-title">UP TO 20% F&B DISCOUNT</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="w-10">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                                <path
                                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                                            </svg>
                                            <div class="card-body">
                                                <h5 class="card-title">LATE CHECK OUT</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>

        <section class="container py-4" id="rooms" style="color: #554931">
            <div class="row text-center">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Choose Your Rooms</h1>
                    <p class="lead text-body-secondary">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus commodi necessitatibus quo
                        deserunt magni tempora voluptatem voluptatum. Ut repellendus recusandae assumenda molestias,
                        autem expedita, sed laudantium excepturi, aut sit odio?
                    </p>
                    <p>
                        <a href="{{ url('/rooms') }}" class="btn text-light btn-lg" type="button"
                            style="background-color: #BBAB8C">Cari
                            Kamar</a>
                    </p>
                </div>
            </div>

            <div class="album">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="">
                                <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="img-thumbnail" alt="...">
                                <div class="card-body">
                                    <h3>Deluxe Single Rooms</h3>
                                    <p class="card-text fw-semibold">Rp. 200.000/Malam</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-md text-light "
                                                style="background-color: #BBAB8C">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                                <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="img-thumbnail" alt="...">
                                <div class="card-body">
                                    <h3>Deluxe Single Rooms</h3>
                                    <p class="card-text fw-semibold">Rp. 200.000/Malam</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-md text-light "
                                                style="background-color: #BBAB8C">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                                <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="img-thumbnail" alt="...">
                                <div class="card-body">
                                    <h3>Deluxe Single Rooms</h3>
                                    <p class="card-text fw-semibold">Rp. 200.000/Malam</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-md text-light "
                                                style="background-color: #BBAB8C">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="">
                                <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="img-thumbnail" alt="...">
                                <div class="card-body">
                                    <h3>Deluxe Single Rooms</h3>
                                    <p class="card-text fw-semibold">Rp. 200.000/Malam</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-md text-light "
                                                style="background-color: #BBAB8C">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>







                    </div>
                </div>
            </div>
        </section>



        <section id="blogs" class="py-4">
            <div class="row text-center">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Latest Blog & News</h1>
                    <p class="lead text-body-secondary">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus commodi necessitatibus quo
                        deserunt magni tempora voluptatem voluptatum. Ut repellendus recusandae assumenda molestias,
                        autem expedita, sed laudantium excepturi, aut sit odio?
                    </p>
                    <p>
                        <a href="{{ url('/blogs') }}" class="btn text-light btn-lg" type="button"
                            style="background-color: #BBAB8C">Cari
                            explore Blogs </a>
                    </p>
                </div>
            </div>
            <div class="album">
                <div class="container">

                    <div class="row row-cols-1 row-cols-md-2 g-4 mt-2">
                        <div class="col">
                            <div class="card">
                                <img src="https://www.batiqa.com/upload/promo/z/web-banner-lancdscape-partnership-promotion_du328.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">30% PARTNERSHIP DISCOUNT</h5>
                                    <p class="card-text">Up to 30% room discount and 10% food discount at BATIQA Hotels
                                        with PARTNERSHIP DISCOUNT program.</p>
                                    <a href="#" class="btn btn-dark">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="https://www.batiqa.com/upload/promo/z/web-banner-lancdscape-partnership-promotion_du328.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">30% PARTNERSHIP DISCOUNT</h5>
                                    <p class="card-text">Up to 30% room discount and 10% food discount at BATIQA Hotels
                                        with PARTNERSHIP DISCOUNT program.</p>
                                    <a href="#" class="btn btn-dark">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="https://www.batiqa.com/upload/promo/z/web-banner-lancdscape-partnership-promotion_du328.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">30% PARTNERSHIP DISCOUNT</h5>
                                    <p class="card-text">Up to 30% room discount and 10% food discount at BATIQA Hotels
                                        with PARTNERSHIP DISCOUNT program.</p>
                                    <a href="#" class="btn btn-dark">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="https://www.batiqa.com/upload/promo/z/web-banner-lancdscape-partnership-promotion_du328.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body" style="color: #5E454B">
                                    <h5 class="card-title">30% PARTNERSHIP DISCOUNT</h5>
                                    <p class="card-text">Up to 30% room discount and 10% food discount at BATIQA Hotels
                                        with PARTNERSHIP DISCOUNT program.</p>
                                    <a href="#" class="btn btn-dark">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    @include('layouts.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
