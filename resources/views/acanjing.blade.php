<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cat And Dog Lovers - Aksesoris Anjing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header_start  -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="/">
                                    <img src="img/logo-f.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href= {{ url('/') }} >Beranda</a></li>
                                        <li><a href= {{ url('/event') }}>Event</a></li>
                                        <li><a href="">Pets<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href={{url('/kucing')}}>Kucing</a></li>
                                                <li><a href={{url('/anjing')}}>Anjing</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Aksesoris<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href={{url('/ackucing')}}>Aksesoris Kucing</a></li>
                                                <li><a href={{url('/acanjing')}}>Aksesoris Anjing</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#kontak">Kontak</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header_start  -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Cat And Dog Lovers Market - Doggo</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->

    <!-- shop_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Aksesoris Anjing</h3>
                        <p>Temukan aksesoris dan mainan untuk Anjing kesayangan anda!</p>
                        <form action="/search_u" method="get">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="search" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($items as $item)
                <a href=" https://api.whatsapp.com/send?phone=628818808880&text=Saya%20tertarik%20untuk%20membeli%20produk%20anda">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service active">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="items/{{ $item->file }}" style="width:300px; height:200px;" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3 style="color: #ffa622;">{{ $item->harga }}</h3>
                            <p>{{ $item->nama }}</p>
                            </a>
                        </div>
                    </div>
                </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- shop_area_end -->

    <!-- contact_cadlovers_start  -->
    <div class="contact_anipat anipat_bg_1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact_text text-center">
                        <div class="section_title text-center">
                            <h3>Untuk Pemesanan dan Info Lebih Lanjut</h3>
                            <p>Hubungi kontak kami disini!</p>
                        </div>
                        <div class="contact_btn d-flex align-items-center justify-content-center">
                            <a href=" https://api.whatsapp.com/send?phone=628818808880&text=Ini%20benar%20CP%20Cat%20And%20Dog%20Lover?" class="boxed-btn4">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact_cadlovers_end  -->

    <!-- footer_start  -->
    <footer class="footer" id="kontak">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contact Us
                            </h3>
                            <ul class="address_line">
                                <li>+62881-880-8880</li>
                                <li><a href="#">catdog.lover@gmail.com</a></li>
                                <li>Depok, Jawa Barat, Indonesia</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Admin? Login here
                            </h3>
                            <ul class="links">
                                <li><a href="{{url('/login')}}">Login as Administrator</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo-f.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">Depok, Jawa Barat, Indonesia
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
            //     icons: {
            //      rightIcon: '<span class="fa fa-caret-down"></span>'
            //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
        var timepicker = $('#timepicker').timepicker({
            format: 'HH.MM'
        });
    </script>
</body>

</html>