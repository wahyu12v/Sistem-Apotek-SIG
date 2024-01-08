  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" width="10%"
                        class="d-inline-block align-text-top ">
                    <span class="fw-semibold" style="color: #BBAB8C">Hotelku</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-end gap-3 p-2 m-0 text-light fw-semibold "
                        style="color: #FAEED1">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#about') }}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/rooms') }}">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/blogs') }}">Blogs</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact-us') }}">Contact us</a>
                        </li>
                        <a href="{{ url('/login') }}" class="btn text-light fw-bold"
                            style="background-color: #BBAB8C">Login</a>
                    </ul>
                </div>
            </div>
        </nav>