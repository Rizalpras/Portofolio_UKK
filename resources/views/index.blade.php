<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpriverthemes.com/HTML/drake/home6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2024 03:12:25 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draken - OnePage Portfolio HTML5 Template</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/smooth-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body class="home6-page">

    <div class="page-loader">
        <div class="bounceball"></div>
    </div>

    <span class="icon-menu" style="position: fixed">
        <span class="bar"></span>
        <span class="bar"></span>
    </span>

    <div class="responsive-sidebar-menu">
        <div class="overlay"></div>
        <div class="sidebar-menu-inner">
            <div class="menu-wrap">
                <p>Menu</p>
                <ul class="menu scroll-nav-responsive d-flex">
                    <li>
                        <a class="scroll-to" href="#home">
                            <i class="las la-home"></i> <span>Perkenalan</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#about">
                            <i class="lar la-user"></i> <span>Tentang</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#resume">
                            <i class="las la-briefcase"></i> <span>Lanjutan</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#skills">
                            <i class="las la-shapes"></i> <span>Kemampuan</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#portfolio">
                            <i class="las la-grip-vertical"></i> <span>Portofolio</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#contact">
                            <i class="lar la-envelope"></i> <span>Kontak</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="text-center">
                <a href="{{ url('auth-login') }}" class="btn btn-secondary">Klik Disini</a>
            </div>


        </div>
    </div>

    <div class="left-sidebar">
        <div class="sidebar-header d-flex align-items-center justify-content-between">
            <img src="assets/images/Logo_Nama_Rizal.png" alt="Logo">
            <span class="designation">Junior Developer</span>
        </div>
        <img class="me" src="assets/images/fotoku_madep_mburi.jpeg" alt="Me">
        <h2 class="email">Rizal@gmail.com</h2>
        <h2 class="address">Jl.Mansari, Slorok</h2>
        <p class="copyright">&copy; 2024 Rizal. Seluruh Hak Cipta</p>
        <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center mb-5">
            <li>
                <a href="https://twitter.com/bqcodgaul"><svg xmlns="http://www.w3.org/2000/svg" width="32"
                        height="32" viewBox="0 0 24 24">
                        <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M0 0h24v24H0z" />
                            <path fill="currentColor"
                                d="M8.267 3a1 1 0 0 1 .73.317l.076.092l4.274 5.828l5.946-5.944a1 1 0 0 1 1.497 1.32l-.083.094l-6.163 6.162l6.262 8.54a1 1 0 0 1-.697 1.585L20 21h-4.267a1 1 0 0 1-.73-.317l-.076-.092l-4.276-5.829l-5.944 5.945a1 1 0 0 1-1.497-1.32l.083-.094l6.161-6.163l-6.26-8.539a1 1 0 0 1 .697-1.585L4 3z" />
                        </g>
                    </svg></a>
            </li>
            <li>
                <a href="https://www.instagram.com/rizalpras11/?utm_source=qr&igsh=MWtmNmMwOHdncjNhbg%3D%3D"><svg
                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2">
                            <path d="M4 8a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H8a4 4 0 0 1-4-4z" />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 1 0-6 0m7.5-4.5v.01" />
                        </g>
                    </svg></a>
            </li>
            <li>
                <a href="https://github.com/Rizalpras/"><svg xmlns="http://www.w3.org/2000/svg" width="32"
                        height="32" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2c2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 0 0-1.3-3.2a4.2 4.2 0 0 0-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 0 0-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 0 0-.1 3.2A4.6 4.6 0 0 0 4 9.5c0 4.6 2.7 5.7 5.5 6c-.6.6-.6 1.2-.5 2V21" />
                    </svg></a>
            </li>
        </ul>
        <a href="#" class="theme-btn">
            <i class="las la-envelope"></i> Hire Me!
        </a>
    </div>

    <main class="drake-main">
        <div id="smooth-wrapper">
            <div id="smooth-content">

                <div class="left-sidebar">
                    <div class="sidebar-header d-flex align-items-center justify-content-between">
                        <img src="assets/images/logo.png" alt="Logo">
                        <span class="designation">Framer Designer & Developer</span>
                    </div>
                    <img class="me" src="assets/images/me.jpg" alt="Me">
                    <h2 class="email">prasrizal14@gmail.com</h2>
                    <h2 class="address">Jl. Mansari, Slorok</h2>
                    <p class="copyright">&copy; 2024 Rizal. All Rights Reserved</p>
                    <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
                        <li>
                            <a href="#"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="lab la-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="lab la-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="lab la-github"></i></a>
                        </li>
                    </ul>
                    <a href="#" class="theme-btn">
                        <i class="las la-envelope"></i> Hire Me!
                    </a>
                </div>

                <section class="hero-section page-section scroll-to-page" id="home">

                    <div class="custom-container">
                        <div class="hero-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-home"></i> Perkenalan
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Sapa dari
                                    <span>Rizal</span>, Junior Developer
                                </h1>
                            </div>
                            <h5 class="scroll-animation" data-animation="fade_from_bottom" style="color: white">Saya
                                adalah seorang pelajar kelas 12 jurusan RPL di SMK Negeri 1 Kepanjen tahun 2021 - 2024
                            </h5>
                            <a href="#portfolio" class="go-to-project-btn scroll-to scroll-animation"
                                data-animation="rotate_up">
                                <img src="assets/images/round-text.png" alt="">
                                <i class="las la-arrow-down"></i>
                            </a>
                        </div>
                    </div>
                </section>

                <section class="about-area page-section scroll-to-page" id="about">
                    <div class="custom-container">
                        <div class="about-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="lar la-user"></i> Tentang
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Aku Adalah Seorang
                                    Pelajar<br>
                                    yang rajin <span>dan kuat</span></h1>
                            </div>
                            <p class="scroll-animation" data-animation="fade_from_bottom">Saya adalah seorang pelajar
                                di SMK Negeri 1 Kepanjen. Saya masuk SMK pada tahun 2021. Disini saya mengambil jurusan
                                RPL. Dalam jurusan RPL terdapat salah satu kelas khusus yaitu kelas industri dari PT
                                Hummatech dan saya tergabung dalam kelas khusus tersebeut.</p>
                        </div>
                    </div>
                </section>

                <section class="resume-area page-section scroll-to-page" id="resume">
                    <div class="custom-container">
                        <div class="resume-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-briefcase"></i> Lanjutan
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom"><span>Pendidikan</span>
                                </h1>
                            </div>

                            <div class="resume-timeline">
                                <div class="item scroll-animation" data-animation="fade_from_right">
                                    <span class="date">2021 - 2024</span>
                                    <h2>SMK Negeri 1 Kepanjen</h2>
                                    <p>Sekolah Menengah Kejuruan</p>
                                </div>
                                <div class="item scroll-animation" data-animation="fade_from_right">
                                    <span class="date">2018 - 2021</span>
                                    <h2>SMP Negeri 4 Kepanjen</h2>
                                    <p>Sekolah Menengah Pertama</p>
                                </div>
                                <div class="item scroll-animation" data-animation="fade_from_right">
                                    <span class="date">2012 - 2018</span>
                                    <h2>SD Negeri 2 Slorok</h2>
                                    <p>Sekolah Dasar</p>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="skills-area page-section scroll-to-page" id="skills">
                    <div class="custom-container">
                        <div class="skills-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-shapes"></i> Kemampuan
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom"><span>Kemampuan</span>
                                    Saya</h1>
                            </div>

                            <div class="row skills text-center">
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/flutter_gambar-removebg-preview.png"
                                                alt="Framer">
                                            <h1 class="percent">60%</h1>
                                        </div>
                                        <p class="name">Flutter</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/html_logo-removebg-preview.png" alt="Webflow">
                                            <h1 class="percent">80%</h1>
                                        </div>
                                        <p class="name">HTML</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/css_logo.png" alt="React">
                                            <h1 class="percent">70%</h1>
                                        </div>
                                        <p class="name">CSS</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/laravel.png" alt="Laravel/PHP">
                                            <h1 class="percent">40%</h1>
                                        </div>
                                        <p class="name">Laravel/PHP</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="portfolio-area page-section scroll-to-page" id="portfolio">
                    <div class="custom-container">
                        <div class="portfolio-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-grip-vertical"></i> Portofolio
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom"> <span>Project</span>
                                    Saya </h1>
                            </div>


                            <table class="table mt-5" border="1">
                                <thead style="color: white">
                                    <tr>
                                        <th style="border-right: 1px solid white;">NO</th>
                                        <th style="border-right: 1px solid white;">Project</th>
                                        <th style="border-right: 1px solid white;">Teknologi</th>
                                        <th>Tugas</th>
                                    </tr>
                                </thead>
                                <tbody style="color:white">
                                    @foreach ($projects as $b)
                                        <tr>
                                            <td style="border-right:1px solid white">{{ $loop->iteration }}</td>
                                            <td style="border-right:1px solid white">{{ $b->project }}</td>
                                            <td style="border-right:1px solid white">{{ $b->teknologi }}</td>
                                            <td>{{ $b->tugas }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <section class="contact-area page-section scroll-content" id="contact">
                    <div class="custom-container">
                        <div class="contact-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-dollar-sign"></i> Kontak
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Kontak
                                    <span>Saya</span>
                                </h1>
                            </div>
                            <p class="scroll-animation" data-animation="fade_from_bottom"
                                style="font-size: 15pt; color:white">
                                Email: rizal@gmail.com</p>
                            <p class="scroll-animation" data-animation="fade_from_bottom"
                                style="font-size: 15pt; color:white">No
                                Telepon: 0821-4300-2176
                            </p>
                            <p class="scroll-animation" data-animation="fade_from_bottom"
                                style="font-size: 15pt; color:white">Alamat: Jl. Mansari No. 18 Slorok, Kromengan
                            </p>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>


    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/color.js') }}"></script>
</body>

<!-- Mirrored from wpriverthemes.com/HTML/drake/home6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2024 03:12:25 GMT -->

</html>
