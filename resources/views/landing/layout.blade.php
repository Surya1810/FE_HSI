<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HSI | @yield('title')</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/FontAwesome/6.2.1/css/all.min.css') }}">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <!-- Our style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#181e42">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    @stack('css')
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-xxl border-bottom" aria-label="Offcanvas navbar large">
        <div class="container">
            <a class="navbar-brand my-2" href="{{ route('home') }}"> <img src="{{ asset('assets/logo/Logo Main.png') }}"
                    height="60" alt="HSI Logo" loading="lazy" /></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2"
                aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tentang HSI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bisnis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main>

        @yield('content')

    </main>

    <footer>
        <div class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Produk</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Tentang HSI</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Testimonial</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Informasi</a></li>
            </ul>
            <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Company, Inc</p>

                <ul class="nav col-md-4 d-flex justify-content-center">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Privacy
                            Policy</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Term &
                            Condition</a>
                    </li>
                </ul>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-body-secondary" href="#" style="color: black"><svg
                                class="bi" width="24" height="24">
                                <use xlink:href="#twitter" />
                            </svg></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi"
                                width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        //Back to Top Button
        let mybutton = document.getElementById("btn-back-to-top");
        let wabutton = document.getElementById("whatsapp");

        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
                wabutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
                wabutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    @stack('scripts')

</body>

</html>
