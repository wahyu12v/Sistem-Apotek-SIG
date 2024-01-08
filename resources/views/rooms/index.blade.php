<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Hotelku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('images/logo.png') }}">

    <style>
        .img {
            background-image: url('https://images.unsplash.com/photo-1592229505726-ca121723b8ef?q=80&w=1674&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-blend-mode: overlay;
            background-color: rgba(0, 0, 0, 0.397);

        }
    </style>

</head>

<body>
    <header>
        @include('partials.navbar')
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center img text-white">
            <div class="col-md-6 p-lg-5 mx-auto my-5">
                <h1 class="display-3 fw-bold">Rooms</h1>
                <h3 class="fw-normal mb-3 text-light">rooms for you</h3>

            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </header>

    <main>

        <section class="container py-4" id="rooms" style="color: #554931">
            <div class="album">
                <div class="container">
                    <div class="row row-cols-2 row-cols-md-3 g-4">
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
                        </div><div class="col">
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




    </main>


    @include('layouts.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
