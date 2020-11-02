<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cat And Dog Lovers - Anjing</title>
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

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider slider_bg_1 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="slider_text">
                            <h3>Pojok Informasi<br> <span>Anjing</span></h3>
                            <p>Segala informasi tentang Anjing ada disini!<br> Klik tombol di bawah ini atau scroll down sekarang!</p>
                            <a href="#perawatan" class="boxed-btn4">Klik disini</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dog_thumb d-none d-lg-block">
                <img src="img/banner/dog.png" alt="">
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start  -->
    <div class="service_area" id="perawatan">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Perawatan Anjing</h3>
                        <p>Anjing membutuhkan perawatan yang baik agar kucing tetap sehat dan memiliki bulu yang cantik, berikut adalah perawatan yang penting bagi Anjing</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/service/service_icon_1.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Beri makanan bernutrisi tinggi</h3>
                            <p>Tumbuh kembang anjing tidak akan maksimal jika Anda tidak memberikannya nutrisi yang lengkap. Nutrisi yang diperlukan oleh anjing adalah protein, lemak, vitamin, dan juga mineral di dalam jumlah yang tepat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service active">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/service/service_icon_2.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Mandikan sebulan dua kali</h3>
                            <p>Perawatan yang bisa Anda lakukan selanjutnya adalah mandikan sebulan minimal dua kali. Untuk memandikannya Anda bisa menggunakan shampoo anjing yang banyak dijual di supermarket atau di pet shop. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/service/service_icon_3.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Melatih Anjing</h3>
                            <p>Jangan pernah jemu untuk melatih anjing Anda melakukan berbagai macam hal, karena anjing Anda lahir tidak dalam keadaan terlatih. Jika rutin melakukan kegiatan ini anjing akan melihat Anda tidak hanya sebagai pelatih namun
                                juga sahabat terdekatnya. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- pet_care_area_start  -->
    <div class="testmonial_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section_title text-center mb-95">
                    <h3>Penyakit Anjing</h3>
                    <p>Berikut adalah beberapa penyakit umum yang sering menyerang Anjing</p>
                </div>
                <div class="col-lg-10">
                    <div class="textmonial_active owl-carousel">
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="img/petcare/dog_diare.png" alt="kucing_muntah">
                                </div>
                                <div class="test_content">
                                    <h4>Diare</h4>
                                    <p>Musim hujan menyebabkan cuaca jadi lebih dingin dan lembap. Diare adalah salah satu penyakit umum menyerang selama musim hujan. Kondisi cuaca dingin menyebabkan si hewan berbulu kesayangan mencerna makanan dengan lebih
                                        cepat dari biasanya. Akibatnya, makanan ini tak terolah dengan baik di usus. Hal inilah yang menyebabkan diare.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="img/petcare/dog_sesak.png" alt="kutu">
                                </div>
                                <div class="test_content">
                                    <h4>Penyakit pernapasan</h4>
                                    <p>Udara dingin selama berhari-hari saat musim hujan menyebabkan bakteri, virus, dan jamur cepat menyerang anjing dan menyebabkan penyakit fatal seperti pneumonia. Gejala nya ditandai dengan kesulitan bernapas, hidung
                                        berair, kehilangan nafsu makan, batuk dan lemah</p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="img/petcare/dog_gatal.png" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Kutu dan caplak</h4>
                                    <p>Kutu dan caplak adalah “tamu rutin” yang kerap menghinggapi hewan peliharaan selama musim hujan. Dalam beberapa kasus, hal ini dapat berakibat fatal. Pasalnya, kutu mengisap darah dan membuat kulit binatang gatal yang
                                        menyebabkan ruam kulit dan demam yang parah.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="img/petcare/dog_parvovirus.png" alt="kutu">
                                </div>
                                <div class="test_content">
                                    <h4>Parvovirus</h4>
                                    <p>Penyakit ini sebenarnya dapat menyerang kucing dan anjing kapan saja ketika sistem kekebalan tubuh mereka lemah. Pada kucing, penyakit ini dikenal dengan nama Panleukopenia kucing (Feline panleukopenia virus, atau FPV).
                                        Ini disebabkan oleh parvovirus kucing, yang masih serumpun dengan parvovirus anjing tipe 2 dan Enteritis cerpelai.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="img/petcare/dog_kulit.png" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Penyakit Kulit</h4>
                                    <p>Sama halnya dengan manusia, kulit anjing pun bisa mengalami kering, gatal, dan berkerak saat cuaca dingin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- pet_care_area_end  -->

    <!-- cat_race_area_start  -->
    <div class="service_area" id="perawatan">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Ras Anjing</h3>
                        <p>Anjing terdiri dari beberapa ras yang unik satu dengan lainnnya, berikut adalah 9 ras kucing yang paling populer di dunia!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/shibainu.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Shiba Inu</h3>
                            <p>Anjing yang berasal dari kepulauan Jepang ini tengah menjadi primadona di jagat media soaial, di mana sosok Marutaro adalah 'pemimpin utamanya' dengan lebih dari 2 juta pengikut di Instagram. Anjing jenis ini dikenal sangat
                                fotogenik dan bersahabat dengan manusia. Sayangnya, anjing jenis ini kurang begitu cocok dipelihara di kawasan tropis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service active">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/labrador.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Labrador Retriever</h3>
                            <p>Salah satu alasan utama mengapa anjing jenis ini begitu banyak dijadikan hewan peliharaan adalah sikapnya yang mudah menyesuaikan suasana. Anjing ini tidak memiliki sifat dasar yang agresif, melainkan sangat bersahabat dengan
                                manusia dan hewan lain. Namun jika dilatih, labrador retrievers akan sangat berani dalam melindungi majikannya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/corgi.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Pembroke Welsh Corgi</h3>
                            <p>Menurut legenda masyarakat Welsh di Kerajaan Britania Raya, <br> anjing jenis ini dipercaya sebagai kendaraan para peri imut yang baik hati. <br> Hal ini menjadi alasan utama bagi banyak orang <br> dalam menjelaskan asal-usul
                                sikap sangat bersahabat yang ditujukan oleh corgi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/gershepherd.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>German Shepherd</h3>
                            <p>Anjing jenis ini selain gesit dan berani, juga mudah untuk diajari trik serta sangat loyal terhadap majikannya. Begitu cintanya dengan majikan manusia,<br> German shepher tidak segan untuk terus maju memberika perlindungan
                                terbaik bagi tuannya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/beagle.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Beagles</h3>
                            <p>Berkat kecerdasan serta respon tanggapnya yang baik, anjing jenis beagles kerap diperbantukan sebagai anjing patroli yang bertugas melacak benda-benda mencurigakan di bandara melalui bau. Meskipun begitu, beagles bukanlah tipe
                                anjing galak karena sifat aslinya yang bersahabat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/poodle.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Poodle</h3>
                            <p>Di luar tampilannya yang imut, anjing ini sejatinya sangat loyal terhadap keluarga dan majikannya. Bahkan jika orang-orang yang dianggapnya 'keluarga' tengah menghadapi ancaman buruk dari pihak asing, poodle tidak segan untuk
                                maju melindungi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/husky.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Siberian Husky</h3>
                            <p>Anjing ini memiliki darah keturunan cukup dekat dengan serigala, Anjing ini tadinya buka hewan peliharaan karena insting untuk kaburnya cukup kuat. Namun ketika sudah benar-benar jinak, Anjing ini justru menjadi cukup manja.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/goldenretriever.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Golden Retriever</h3>
                            <p>Banyak orang beranggapan bahwa golden retrievers <br> adalah jenis anjing yang sangat bersahabat dengan manusia.<br> Anjing jenis ini terkenal sangat lincah dan mudah diajari berbagai trik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/maltese.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Maltese</h3>
                            <p>Merupakan salah satu jenis anjing tertua di dunia yang eksistensinya telah tercatat sejak era Yunani kuno. Anjing ini kerap dijuluki 'si penenang' diyakini banyak orang mampu membantu terapi penyembuhan sakit dan trauma.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cat_race_area_end  -->

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