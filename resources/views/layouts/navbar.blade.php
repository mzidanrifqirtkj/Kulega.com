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
                         <a class="nav-link active" aria-current="page" href="{{route('artikel_list')}}">Artikel</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{route('about')}}">Tentang Kami</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{url('help')}}">Bantuan</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{route('contact')}}">Kontak</a>
                     </li>
                     <li class="nav-item">
                         <a href="{{route('beta_registrasi')}}" class="btn btn-primary btn-sm">Coba Kulega Sekarang</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
     <div class="bg-success text-white py-2 text-center">
         <small>Hubungi Kami di Nomor +62 811-8878-977</small>
     </div>
 </header>
 <!-- Navbar Section exit -->
