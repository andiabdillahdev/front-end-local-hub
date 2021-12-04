<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('page/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('page/custom/style.css') }}">
    <title>Go-Local Hub</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg header-nav fixed-top">
        <div class="container">
            <img src="{{ asset('page/custom/assets/img/logo.png') }}" alt="" srcset="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('page.index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('page.penginapan') }}">Penginapan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('page.transportasi') }}">Transport</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pasar</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <a href="#" class="local_button local_primary">Masuk</a>
                    <a href="#" class="local_button local_primary ml-2">Mitra Usaha</a>
                </ul>
            </div>
        </div>
    </nav>

    @yield('page')

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{ asset('page/custom/assets/img/logo_footer.png') }}" alt="" srcset="">
                    <p class="footer-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempor tristique montes, dapibus
                        velit massa massa. Elementum aliquam velit aliquet leo.
                    </p>
                </div>
                <div class="col-lg-3">
                    <h1 class="title-footer">Kontak</h1>
                    <ul class="list-footer">
                        <li>golocalhub21@hmal.com</li>
                        <li>Go Local-hub</li>
                        <li>Go Local-hub</li>
                        <li>Go Local-hub</li>
                        <li>Go Local-hub</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h1 class="title-footer">Perusahaan</h1>
                    <ul class="list-footer">
                        <li>About Us</li>
                        <li>Payment</li>
                        <li>Privacy Policy</li>
                        <li>Privacy Policy</li>
                        <li>FAQ</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h1 class="title-footer">Support</h1>
                    <div class="flex">
                        <img src="{{ asset('page/custom/assets/img/uin.png') }}" alt="" srcset="">
                        <img src="{{ asset('page/custom/assets/img/unhas.png') }}" alt="" srcset="">
                    </div>
                    <div class="row mt-4 ml-4">
                        <img src="{{ asset('page/custom/assets/img/maros.png') }}" alt="" srcset="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <footer>
        <p>Copyright Go-Local Hub 2021</p>
    </footer>

    <script src="{{ asset('page/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>