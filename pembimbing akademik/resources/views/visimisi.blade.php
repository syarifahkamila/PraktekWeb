<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'STT Terpadu Nurul Fikri')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('landing/img/logokampus.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landing/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('landing/img/logokampus.png') }}"></i>STT Terpadu Nurul Fikri</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ url('/') }}" class="nav-item nav-link ">Beranda</a>
                        <a href="{{ url('/tentang') }}" class="nav-item nav-link">Tentang</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Program Studi</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ url('/proditi') }}" class="dropdown-item">Teknik Informatika</a>
                                <a href="{{ url('/prodisi') }}" class="dropdown-item">Sistem Informasi</a>
                                <a href="{{ url('/prodibd') }}" class="dropdown-item">Bisnis Digital</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Profil</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ url('/visimisi') }}" class="dropdown-item active">Visi Misi</a>
                                <a href="{{ url('/team') }}" class="dropdown-item">Team Members</a>
                                <a href="{{ url('/profildosen') }}" class="dropdown-item">Profil Dosen</a>
                            </div>
                        </div>

                    </div>
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="me-3 btn btn-primary rounded-md py-2 px-3 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Masuk
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary rounded-md py-2 px-3 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Daftar
                    </a>
                    @endif
                    @endauth
                    @endif
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Visi & Misi</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</li></a>
                            <li class="breadcrumb-item"><a href="#">Profil</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Visi Misi</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://youtu.be/ZZnXWpLVP08?si=cMv5y57UryTIkDa7" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Visi & Misi</h5>
                        <h1 class="text-white mb-4">Visi</h1>
                        <form>
                            <p class="mb-4">"Pada tahun 2045 menjadi Sekolah Tinggi Teknologi yang unggul di Indonesia, berbudaya inovasi, berjiwa teknopreneur, dan berkarakter religius."</p>
                            <div class="row g-3">
                                <div class="col-md-6"></div>
                            </div>
                            <h1 class="text-white mb-2">Misi</h1>
                            <p class="mb-2">1. Menyelenggarakan pendidikan tinggi berkualitas yang mengembangkan jiwa kepemimpinan dan teknopreneurship berlandaskan iman dan takwa.</p>
                            <p class="mb-2">2. Melaksanakan penelitian yang inovatif dan berorientasi pada pengembangan teknologi masa depan.</p>
                            <p class="mb-2">3. Menyelenggarakan pengabdian kepada masyarakat dengan memanfaatkan teknologi tepat guna.</p>
                            <p class="mb-2">4. Membangun lingkungan akademik yang kondusif bagi terwujudnya kebebasan akademik, otonomi keilmuan, dan budaya inovasi.</p>
                        </form>
                        <h1 class="text-white mb-2">Tujuan</h1>
                        <p class="mb-2">1. Menghasilkan sarjana yang kompeten, profesional, berakhlak mulia, sehingga mampu berkompetisi di dunia kerja.</p>
                        <p class="mb-2">2. Menghasilkan karya-karya ilmiah di bidang teknologi informasi berwawasan masa depan yang inovatif dan bercirikan keterbukaan (openness) seperti open source, open standar, dan open access/content, sehingga bermanfaat bagi bangsa Indonesia dan diakui secara Internasional.</p>
                        <p class="mb-2">3. Menerapkan ilmu pengetahuan dan teknologi tepat guna bagi masyarakat dengan melibatkan sivitas akademika.</p>
                        <p class="mb-2">4. Menciptakan kultur akademik yang inovatif, kompetitif, dan kondusif untuk mewujudkan institusi yang unggul dan terkemuka.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Layanan</h4>
                        <a class="btn btn-link" href="">Tentang</a>
                        <a class="btn btn-link" href="">Kontak</a>
                        <a class="btn btn-link" href="">Reservasi</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Hotline</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kampus A : Jl. Situ Indah 116, Tugu, Cimanggis, Depok, Jawa Barat.</p>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kampus B: Jl. Raya Lenteng Agung No.20-21, RT.4/RW.1, Srengseng Sawah, Kec. Jagakarsa, Jakarta Selatan.</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>021-786.3191</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@nurulfikri.ac.id</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Hari Buka</h4>
                        <h5 class="text-light fw-normal">Senin - Jumat</h5>
                        <p>06.00 - 22.00 WIB</p>
                        <h5 class="text-light fw-normal">Sabtu</h5>
                        <p>06.00 - 18.00 WIB</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Masuk dan Verifikasi</h4>
                        <p>Nikmati kemudahan sistem autentikasi tunggal untuk mengakses semua layanan dengan satu akun.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Masuk</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">STT Terpadu Nurul Fikri</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">Team 2</a><br><br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">Us</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Beranda</a>
                                <a href="">Profil</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('landing/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landing/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('landing/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('landing/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landing/js/main.js') }}"></script>
</body>

</html>