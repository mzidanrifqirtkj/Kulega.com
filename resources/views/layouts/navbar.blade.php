<style>
    .bg-success.text-white a:hover small {
        color: blue;
        font-weight: bold;
        text-decoration: underline;
    }

</style>

<!-- Navbar Section -->
<header class="header_wrapper">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="images/logoblue.png" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-stream navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav menu-navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">Tentang Kami</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Resource
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('artikel_list')}}">Artikel</a></li>
                            <li><a class="dropdown-item" href="#">Kalkulator Biometrik</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('help')}}">Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('regis')}}" class="btn btn-primary btn-sm">Coba Kulega Sekarang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bg-success text-white py-2 text-center fixed-top" style="color: white;">
        <a id="wa" href="https://wa.me/628118878977?" style="color: white;"><small>Hubungi Kami di Nomor +628118878977</small></a>
    </div>
</header>
<!-- Navbar Section exit -->
