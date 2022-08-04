<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rethouse - Real Estate HTML Template">
    <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="mardianto - retenvi.com">
    <title>{{ $config[0]->title }}</title>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="icon.png">
    <meta name="theme-color" content="#3454d1">
    <link href="../assets/property/css/styles.css?fd365619e86ad9137a29" rel="stylesheet">
    <link rel="shortcut icon" href="{{{ asset('storage/' . $config[0]->favicon) }}}">

    <!-- Font Awesome -->
    {{-- <script src="https://kit.fontawesome.com/67b6ece322.js" crossorigin="anonymous --}}

</head>

<body>
    <!-- NAVBAR TOP -->
    <div class="topbar d-none d-sm-block">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="topbar-left">
                        <div class="topbar-text">
                            {{ date('l, d M, Y') }}
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="list-unstyled topbar-right">
                        <ul class="topbar-sosmed">
                            <li>
                                <a target="_blank" href="{{ $config[0]->fb }}"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="{{ $config[0]->twit }}"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="{{ $config[0]->ig }}"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAVBAR TOP -->
    <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('storage/' . $config[0]->logo) }}" alt="No-Image" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav99">
                <ul class="navbar-nav  mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/abouts"> Tentang Kami </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/properties"> Properties </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blogs"> Blogs </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact"> Contact Us </a>
                    </li>
                </ul>


                <!-- Search bar.// -->
                <!-- Search content bar.// -->
                <div class="top-search navigation-shadow">
                    <div class="container">
                        <div class="input-group ">
                            <form action="#">

                                <div class="row no-gutters mt-3">
                                    <div class="col">
                                        <input class="form-control border-secondary border-right-0 rounded-0"
                                            type="search" value="" placeholder="Search " id="example-search-input4">
                                    </div>
                                    <div class="col-auto">
                                        <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                            href="/search-result.html">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- Search content bar.// -->
            </div> <!-- navbar-collapse.// -->
        </div>
    </nav>

    @yield('content')

    <!-- CALL TO ACTION -->
    <section class="cta-v1 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h2 class="text-uppercase text-white">{{ $title[0]->footer_title }}</h2>
                    <p class="text-capitalize text-white">{{ $title[0]->footer_desc }}
                    </p>

                </div>
                <div class="col-lg-3">
                    <a  target="_blank" href="https://wa.me/{{ $config[0]->wa }}" class="btn btn-light text-uppercase ">{{ $title[0]->footer_button }}
                        <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END CALL TO ACTION -->

    <!-- Footer  -->
    <footer>
        <div class="wrapper__footer" style="background-color: #304956;">
            <div class="container">
                <div class="row">
                    <!-- ADDRESS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <figure>
                                <img src="{{ asset('storage/' . $config[0]->logo) }}" alt="No-Image" class="logo-footer">
                            </figure>

                            <ul class="list-unstyled mb-0 mt-3">
                                <li> <b> <i class="fa fa-map-marker"></i></b><span>{{ $config[0]->address }}</span> </li>
                                <li> <b><i class="fa fa-phone-square"></i></b><span>{{ $config[0]->phone }}</span> </li>
                            </ul>
                        </div>

                    </div>
                    <!-- END ADDRESS -->

                    <!-- QUICK LINKS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <h4 class="footer-title">Quick Links</h4>
                            <div class="link__category-two-column">
                                <ul class="list-unstyled ">
                                    <li class="list-inline-item">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="/abouts">Tentang Kami</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="/properties">Properties</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="/blogs">Blogs</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="/contact">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END QUICK LINKS -->


                    <!-- NEWSLETTERS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <h4 class="footer-title">follow us </h4>
                            <p class="mb-2">
                                Follow us and stay in touch to get the latest news
                            </p>
                            <p>
                                <a target="_blank" href="{{ $config[0]->fb }}"><button class="btn btn-social btn-social-o facebook mr-1">
                                    <i class="fa fa-facebook-f"></i>
                                </button></a>
                                <a target="_blank" href="{{ $config[0]->twit }}"><button class="btn btn-social btn-social-o twitter mr-1">
                                    <i class="fa fa-twitter"></i>
                                </button></a>
                                <a target="_blank" href="{{ $config[0]->in }}"><button class="btn btn-social btn-social-o linkedin mr-1">
                                    <i class="fa fa-linkedin"></i>
                                </button></a>
                                <a target="_blank" href="{{ $config[0]->ig }}"><button class="btn btn-social btn-social-o instagram mr-1">
                                    <i class="fa fa-instagram"></i>
                                </button></a>
                                <a target="_blank" href="{{ $config[0]->yt }}"><button class="btn btn-social btn-social-o youtube mr-1">
                                    <i class="fa fa-youtube"></i>
                                </button></a>
                            </p>
                        </div>
                    </div>
                    <!-- END NEWSLETTER -->
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="bg__footer-bottom-v1">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-md-4">
                        <span>
                            <strong>2022 &copy; {{ $config[0]->title }}</strong>
                        </span>
                    </div>
                    <div class="col-md-5"></div>
                    <div class="col-md-3">
                        <span><b style="color: white;">Crafted with <i style="color: red;" class="fa fa-heart"></i> by <a href="https://wanteknologi.com/"> WAN Solution</a></b></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer  -->
    </footer>

    {{-- <div class="btn-floating fixed-bottom ms-3" style="bottom: 30px; left: 25px;">
        <a target="_blank" href="https://wa.me/{{ $config[0]->wa }}" class="btn btn-social rounded text-white whatsapp">
            <i class="fa fa-whatsapp"></i>
        </a>
    </div> --}}

    <!-- SCROLL TO TOP -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TO TOP -->
    <script src="../assets/property/js/index.bundle.js?fd365619e86ad9137a29"></script>
</body>

</html>