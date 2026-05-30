<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>">
   <?php
   if (isset($description) && !empty($description)) {
      $metaDescription = (strlen($description) > 160) ? substr($description, 0, 157) . '...' : $description;
   } else {
      $metaDescription = '';
   }
   ?>
   <meta name="description" content="<?= $metaDescription ?>">
   <meta name="author" content="bangundaya.com">
   <meta property="og:title" content="<?= $title; ?>">
   <meta property="og:description" content="<?= $description; ?>">
   <meta property="og:image" content="https://bangundaya.com/template/assets_1/img/logo/logo.png">
   <meta property="og:url" content="https://bangundaya.com<?= current_url(); ?>">
   <meta property="og:type" content="website">
   <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>template/assets/images/favicon.png">
   <link rel="canonical" href="https://bangundaya.com/<?= isset($canonical) ? $canonical : '' ?>">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>template/assets/img/logo/favicon.png">

    <!-- css -->
    <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>template/assets_1/css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>template/assets_1/css/style.css">

</head>

<body class="home-2">

    <!-- preloader -->
    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- header area -->
    <header class="header">

        <!-- top header -->
        <div class="header-top">
            <div class="container px-0">
                <div class="header-top-wrapper">
                    <div class="header-top-left">
                        <div class="header-top-contact">
                            <ul>
                                <li><a href="#" aria-label="alamat"><i class="far fa-location-dot"></i> Jl. TB Simatupang No. 18, Kebagusan, Jakarta</a></li>
                                <li><a href="mailto:info@bangundaya.com"><i class="far fa-envelopes"></i>
                                        info@bangundaya.com</a></li>
                                <li><a href="tel:+021 8909 0882"><i class="far fa-phone-volume"></i> 021 8909 0882</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-social">
                            <span>Follow Us: </span>
                            <a href="#" aria-label="facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" aria-label="linkedin"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container custom-nav position-relative">
                    <a class="navbar-brand" href="<?=base_url()?>">
                        <img loading="lazy" src="<?= base_url(); ?>template/assets_1/img/logo/logo.png" alt="logo bangundaya.com">
                    </a>
                    <div class="mobile-menu-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link" aria-label="cari"><i class="far fa-search"></i></button>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link <?= ($this->uri->segment(1) == '' ? 'active' : '') ?>" href="<?= base_url() ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($this->uri->segment(1) == 'profile' ? 'active' : '') ?>" href="<?= base_url('profile') ?>">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($this->uri->segment(1) == 'jasa' ? 'active' : '') ?>" href="<?= base_url('jasa') ?>">Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($this->uri->segment(1) == 'blog' ? 'active' : '') ?>" href="<?= base_url('blog') ?>">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($this->uri->segment(1) == 'contact' ? 'active' : '') ?>" href="<?= base_url('contact') ?>">Contact</a>
                            </li>
                        </ul>
                        <div class="nav-right">
                            <div class="search-btn">
                                <button type="button" class="nav-right-link" aria-label="cari"><i class="far fa-search"></i></button>
                            </div>
                            <div class="nav-right-btn mt-2">
                                <a href="<?=base_url()?>contact" class="theme-btn">Get A Quote<i class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- search area -->
                    <div class="search-area">
                        <form action="#" aria-label="cari">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Type Keyword...">
                                <button type="submit" class="search-icon-btn" aria-label="cari"><i class="far fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- search area end -->
                </div>
            </nav>
        </div>
    </header>
    <!-- header area end -->


    <main class="main">
    <?= $contents; ?>
    </main>

    <!-- footer area -->
    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="<?=base_url()?>" class="footer-logo">
                                <img loading="lazy" src="<?= base_url(); ?>template/assets_1/img/logo/logo-putih.png" alt="logo bangundaya.com">
                            </a>
                            <p class="mb-3">
                                Kami adalah mitra tepercaya untuk instalasi dan pemeliharaan sistem kelistrikan rumah, gedung, dan fasilitas industri. Didukung oleh tim profesional dan pengerjaan sesuai standar nasional, kami siap membantu kebutuhan listrik Anda — dari skala kecil hingga proyek besar.
                            </p>
                            <ul class="footer-contact">
                                <li><a href="tel:+021 8909 0882"><i class="far fa-phone"></i>021 8909 0882</a></li>
                                <li><i class="far fa-map-marker-alt"></i>Jl. TB Simatupang No. 18, Kebagusan, Jakarta</li>
                                <li><a href="mailto:info@bangundaya.com"><i
                                            class="far fa-envelope"></i>info@bangundaya.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h3 class="footer-widget-title">Quick Links</h3>
                            <ul class="footer-list">
                                <li><a href="#" aria-label="about-us"><i class="fas fa-caret-right"></i> About Us</a></li>
                                <li><a href="#" aria-label="about-us"><i class="fas fa-caret-right"></i> FAQ's</a></li>
                                <li><a href="#" aria-label="about-us"><i class="fas fa-caret-right"></i> Testimonials</a></li>
                                <li><a href="#" aria-label="about-us"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
                                <li><a href="#" aria-label="about-us"><i class="fas fa-caret-right"></i> Privacy policy</a></li>
                                <li><a href="#" aria-label="about-us"><i class="fas fa-caret-right"></i> Update News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h3 class="footer-widget-title">Our Services</h3>
                            <ul class="footer-list">
                                <li><a href="#" aria-label="about-us"><i class="fas fa-caret-right"></i> Air Conditioning</a></li>
                                <li><a href="#" aria-label="about-us"><i class="fas fa-caret-right"></i> Electrical Panels</a></li>
                                <li><a href="#" aria-label="about-us"><i class="fas fa-caret-right"></i> Electrical Services</a></li>
                                <li><a href="#" aria-label="about-us"><i class="fas fa-caret-right"></i> Security System</a></li>
                                <li><a href="#" aria-label="about-us"><i class="fas fa-caret-right"></i> Surge Protection</a></li>
                                <li><a href="#" aria-label="about-us"><i class="fas fa-caret-right"></i> Indoor Lighting</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h3 class="footer-widget-title">Newsletter</h3>
                            <div class="footer-newsletter">
                                <p>Subscribe Our Newsletter To Get Latest Update And News</p>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                        <button class="theme-btn" type="submit" aria-label="submit">
                                            Subscribe Now <i class="far fa-paper-plane"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="<?=base_url()?>" aria-label="about-us"> Bangundaya.com </a> All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            <li><a href="#" aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" aria-label="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" aria-label="youtube"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- scroll-top -->
    <a href="#" id="scroll-top" aria-label="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>
    <!-- scroll-top end -->

    <!-- js -->
    <script src="<?= base_url(); ?>template/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url(); ?>template/assets/js/modernizr.min.js"></script>
    <script src="<?= base_url(); ?>template/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>template/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>template/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url(); ?>template/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>template/assets/js/jquery.appear.min.js"></script>
    <script src="<?= base_url(); ?>template/assets/js/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>template/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>template/assets/js/counter-up.js"></script>
    <script src="<?= base_url(); ?>template/assets/js/wow.min.js"></script>
    <script src="<?= base_url(); ?>template/assets/js/main.js"></script>
</body>
</html>