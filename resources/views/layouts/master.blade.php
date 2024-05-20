<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KULEGA</title>

    <!-- Favicon -->
    <link rel="icon" type="" href="images/favicon/favicon.png">

    <!-- Bootstrap 5 CDN Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- Custom File's Link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="stylesheet" href="css/regis.css">
    <link rel="stylesheet" href="css/about.css">


</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">


    <!-- Navbar Section -->
    <header class="header_wrapper">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{url('index')}}">
                    <img src="images/logoblue.png" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav menu-navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('artikel')}}">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('about')}}">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('kontak')}}">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('bantuan')}}">Bantuan</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('login')}}" class="btn btn-info btn-sm text-white">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('regis')}}" class="btn btn-primary btn-sm">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar Section exit -->

    @yield('konten')

    <!-- Footer section -->
    <section id="contact" class="footer_wrapper wrapper">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="images/logowhite.png">
                    <div class="contact-info">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fa fa-home me-3"></i>no. 96, Jakarta barat, Indonesia</a></li>
                            <li><a href="#"><i class="fa fa-phone me-3"></i>+62 987654321</a></li>
                            <li><a href="#"><i class="fa fa-envelope me-3"></i>kulega@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>More Links</h5>
                    <ul class="link-widget p-0">
                        <li><a href="#">Artikel</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kontak</a></li>
                        <li><a href="#">Bantuan</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>More Links</h5>
                    <ul class="link-widget p-0">
                        <li><a href="#">Akun</a></li>
                        <li><a href="#">Bantuan</a></li>
                        <li><a href="#">Komunitas</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>NewsLetters</h5>
                    <div class="form-group mb-4">
                        <input type="email" class="form-control bg-transparent" placeholder="Enter Your Email Here">
                        <button type="submit" class="main-btn rounded-2 mt-3 border-white form-control">Subscribe</button>
                    </div>
                    <h5>Hubungi Kami</h5>
                    <ul class="social-network d-flex align-item-center p-0">
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright-section">
            <p class="p-0">Virtual Internship <a href="#">Kulega@2024. </a> All rights reserved.</p>
        </div>
    </section>
    <!-- Footer section exit -->


    <!-- Bootstrap 5 JS CDN Links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

    <!-- Custom JS Link -->
    <script src="js/main.js"></script>
</body>
</html>
