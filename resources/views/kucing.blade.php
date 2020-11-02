<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cat And Dog Lovers - Kucing</title>
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
                            <h3>Pojok Informasi<br> <span>Kucing</span></h3>
                            <p>Segala informasi tentang Kucing ada disini!<br> Klik tombol di bawah ini atau scroll down sekarang!</p>
                            <a href="#perawatan" class="boxed-btn4">Klik disini</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dog_thumb d-none d-lg-block">
                <img src="img/banner/cats.png" alt="">
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
                        <h3>Perawatan Kucing</h3>
                        <p>Kucing membutuhkan perawatan yang baik agar kucing tetap sehat dan memiliki bulu yang cantik, berikut adalah perawatan yang penting bagi kucing</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/service/service_icon_cat_4.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Periksakan secara teratur</h3>
                            <p>Biasanya, pemeriksaan rutin dilakukan dua kali, yakni bulanan dan tahunan. Pemeriksaan bulanan umumnya dilakukan untuk perawatan bulu dan kesehatan kucing secara keseluruhan. Sedangkan, pemeriksaan tahunan bertujuan untuk mengecek
                                organ dalam kucing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service active">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/service/service_icon_cat_2.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Beri makanan sehat secara teratur</h3>
                            <p>Demi menghindari kucing mencari makanan sendiri secara sembarangan, pastikan untuk memberikan makan secara teratur 2-3 makanan sehari. Tambahkan pula sayuran dan buah seperti brokoli yang sudah dimasak. Anak kucing berusia
                                6-12 minggu bisa diberi makan empat kali sehari.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/service/service_icon_cat_1.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Bersihkan secara teratur</h3>
                            <p>Agar kebersihan kucing tetap terjaga, bersihkan bulu kucing di salon khusus kucing atau di rumah. Jangan lupa untuk membersihkan gigi kucing juga, gunakan sikat gigi dengan bulu lembut dan gunakan pasta gigi khusus kucing.
                                Hindari pasta gigi manusia karena flourida yang beracun untuk kucing</p>
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
                    <h3>Penyakit kucing</h3>
                    <p>Berikut adalah beberapa penyakit umum yang sering menyerang kucing</p>
                </div>
                <div class="col-lg-10">
                    <div class="textmonial_active owl-carousel">
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="img/petcare/muntah.png" alt="kucing_muntah">
                                </div>
                                <div class="test_content">
                                    <h4>Muntah</h4>
                                    <p>Muntah merupakan masalah kesehatan yang sering terjadi pada kucing peliharaan kita. Penyebabnya bisa berbagai macam, mulai dari makan makanan yang beracun, benda yang seharusnya tak dimakan, gangguan saluran kemih,
                                        maupun diabetes. Kucing yang terus-terusan muntah bisa mengalami dehidrasi. Jika ia terus muntah dan terlihat gelisah, sebaiknya segera bawa ke dokter hewan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="img/petcare/kutu.png" alt="kutu">
                                </div>
                                <div class="test_content">
                                    <h4>Kutu</h4>
                                    <p>Tanda-tanda kucing berkutu di antaranya adanya kotoran kutu di kulit yang terlihat seperti titik-titik hitam kecil. Selain itu, ia berkali-kali menggaruk tubuhnya secara terus-menerus, sering menjilat, kulit merah atau
                                        teriritasi, bulu rontok, dan timbulnya infeksi kulit. Kucing yang berkutu berisiko mengalami anemia jika masalahnya tidak ditangani dengan serius.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="img/petcare/cacingan.png" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Cacingan</h4>
                                    <p>Masalah kesehatan lain pada kucing adalah cacingan. Cacing pita bisa hidup di usus kecil kucing dan kadang tumbuh hingga 60 sentimeter. Gejala yang bisa dilihat pada kucing yang menderita cacingan adalah muntah dan
                                        terjadinya penurunan berat badan. Kita juga bisa melihat pada kotoran kucing. Jika teman-teman melihat cacing putih kecil seperti parutan kelapa di kotorannya, maka kemungkinan besar kucing kesayangan kita menderita
                                        cacingan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="img/petcare/diare.png" alt="kutu">
                                </div>
                                <div class="test_content">
                                    <h4>Diare</h4>
                                    <p>Kondisi diare pada kucing bisa berlangsung selama sehari, seminggu, hingga berbulan-bulan. Apabila kucing mengalami diare, berikan ia air tawar segar dan bersih untuk mencegah terjadinya dehidrasi. Bawalah kucing ke
                                        dokter ketika kucing mengalami diare disertai muntah, kotoran berdarah atau berwana gelap, demam, lesu, kehilangan selera makan, maupun diare berkepanjangan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="img/petcare/mata.png" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Penyakit Mata</h4>
                                    <p>Beberapa masalah mata yang muncul pada kucing umumnya adalah konjugtivitis, ulkus kornea, katarak, glaukoma, trauma, virus peradangan, dan penyakit retina. Beberapa gejala kucing kita mengalami penyakit pada matanya
                                        adalah mata berair, bulu mata tampak berair, mata keruh, dan lapisan kelopak mata merah atau putih.
                                    </p>
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
                        <h3>Ras Kucing</h3>
                        <p>Kucing terdiri dari beberapa ras yang unik satu dengan lainnnya, berikut adalah 9 ras kucing yang paling populer di dunia!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/snowhsoe.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Snowshoe</h3>
                            <p>Jenis kucing terpopuler yang pertama adalah snowshoe (sepatu salju). Dibilang sepatu salju karena kakinya dan cakarnya yang berawarna putih dengan perpaduan bulu yang agak gelap. Snowshoe merupakan jenis kucing asal Amerika
                                hasil dari hasil rekayasa genetika antara ras Siamese dengan kucing bulu pendek Amerika.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service active">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/persia.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Persia</h3>
                            <p>Sesuai dengan namanya, jenis kucing ini berasal dari Iran (Persia). Jenis kucing yang satu ini sangat populer baik di dunia maupun Indonesia. Bulunya Panjang dengan wajah bulat datar serta moncong yang pendek. Umumnya jenis
                                kucing Persia memiliki bentuk tubuh yang besar, gemuk, serta berhidung pesek.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/muchkins.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Muchkins</h3>
                            <p>Munchkin adalah jenis kucing rekayasa genetik yang menghasilkan kaki depan yang lebih pendek dibanding kaki yang belakang, sehingga seperti membungkuk. <br> Berasal dari Amerika Serikat, Munchkin menjadi jenis kucing dengan
                                ras terkecil di dunia dengan berat jantan yakni sekitar 3-4 kg.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/sphynx.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Sphynx</h3>
                            <p>Sphynx merupakan jenis kucing hasil rekayasa genetika asal Kanada dan merupakan jenis keturunan dari kucing tanpa bulu. Walaupun tampak terlihat botak, namun jenis kucing ini sebenarnya memiliki bulu yang sangat pendek dan
                                sedikit, terutama di bagian ekor, kaki, telinga, dan dekat organ kelamin.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/siamese.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Siamese</h3>
                            <p>Sesuai dengan namanya, <br> jenis kucing ini berasal dari Siam (Thailand).<br> Jenis kucing ini merupakan ras murni dengan bulu yang pendek <br> dan tanda pada kaki, ekor, dan wajahnya.<br> Siamese merupakan jenis kucing <br>                                yang paling populer di dunia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/angora.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Angora</h3>
                            <p>Jenis kucing asal Turki ini sangat populer di Indonesia. <br> Jenis kucing yang satu ini tergolong dalam ras domestik alami yang tertua di dunia. <br> Ia terkenal dengan bulunya yang lebat dan panjang yang dipercaya merupakan
                                hasil adaptasi alam di pegunungan Ankara.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/manx.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Manx</h3>
                            <p>Manx atau rumpy merupakan jenis kucing yang memiliki ekor sangat pendek atau bahkan tidak ada. Jenis kucing Mank banyak ditemui di Britania Raya dengan ciri kepala bundar dan pipi menonjol. Selain itu bentuk tubuhnya lebih
                                pendek dengan tulung punggung yang melengkung hingga pinggul.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/savannah.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Savannah</h3>
                            <p>Jenis kucing terakhir ini merupakan hasil hibrida dari ras kucing Serval Afrika dengan kucing Bengal, Siam, dan Mau Mesir. Kucing asal Amerika Serikat ini merupakan jenis kucing terpajang di dunia dengan ukuran tubuh yang bisa
                                mencapai 44 cm. Walaupun tampak liar, jenis kucing ini merupakan kucing yang ramah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/race/mainecoon.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Maine coon</h3>
                            <p>Maine coon adalah kucing berbadan besar dan tinggi dengan berat jantan sekitar 6–9 kg dan betina sekitar 4–6 kg. Tubuhnya dapat mencapai ketinggian hingga sekitar 1 meter. Maine coon merupakan kucing yang kuat dan berotot.
                                Kucing ini memiliki pertumbuhan dewasa yang lama, yaitu sekitar 3-5 tahun</p>
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