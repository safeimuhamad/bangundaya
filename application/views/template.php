<?php
$has_en_version = !empty($alternate_en);
$lang = isset($lang) && $lang == 'en' ? 'en' : 'id';
$is_en = ($lang == 'en');

$lang_prefix = $is_en ? 'en/' : '';

function txt($id, $en, $is_en) {
    return $is_en ? $en : $id;
}

function lang_url($path = '', $lang_prefix = '') {
    return base_url($lang_prefix . ltrim($path, '/'));
}


function service_url($slug_id = '', $slug_en = '', $is_en = false) {
    if ($is_en) {
        return base_url('en/service' . ($slug_en ? '/' . $slug_en : ''));
    }

    return base_url('jasa' . ($slug_id ? '/' . $slug_id : ''));
}

// segment aktif
$seg1 = $this->uri->segment(1);
$seg2 = $this->uri->segment(2);

$current_segment = $is_en ? $seg2 : $seg1;
?>
<!DOCTYPE html>
<html lang="<?= $is_en ? 'en' : 'id'; ?>">

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
  <meta property="og:url" content="<?= current_url(); ?>">
  <meta property="og:type" content="website">
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>template/assets/images/favicon.png">
<?php
$current_path = trim(uri_string(), '/');

/*
|--------------------------------------------------------------------------
| Canonical
|--------------------------------------------------------------------------
*/
$canonical_url = !empty($canonical)
    ? base_url(trim($canonical, '/'))
    : base_url($current_path);


/*
|--------------------------------------------------------------------------
| Alternate ID
|--------------------------------------------------------------------------
*/
if (!empty($alternate_id)) {
    $id_path = trim($alternate_id, '/');
} else {
    $id_path = preg_replace('#^en/?#', '', $current_path);

    // fallback mapping EN list page ke ID list page
    if ($id_path === 'service') {
        $id_path = 'jasa';
    }
}


/*
|--------------------------------------------------------------------------
| Alternate EN
|--------------------------------------------------------------------------
*/
if (!empty($alternate_en)) {
    $en_path = trim($alternate_en, '/');
} else {
    // fallback mapping ID list page ke EN list page
    if ($id_path === 'jasa') {
        $en_path = 'en/service';
    } else {
        $en_path = 'en' . ($id_path ? '/' . $id_path : '');
    }
}


/*
|--------------------------------------------------------------------------
| Final URL
|--------------------------------------------------------------------------
*/
$id_url = base_url($id_path);
$en_url = base_url($en_path);
?>

<link rel="canonical" href="<?= current_url(); ?>">
<link rel="alternate" hreflang="id" href="<?= $id_url; ?>">
<?php if ($has_en_version): ?>
<link rel="alternate" hreflang="en" href="<?= $en_url; ?>">
<?php endif; ?>

<link rel="alternate" hreflang="x-default" href="<?= $id_url; ?>">
  <!-- favicon -->
  <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>template/assets/img/logo/favicon.png">

  <!-- Preload hero image untuk LCP -->
  <link rel="preload" as="image"
  href="<?= base_url(); ?>template/assets/img/slider/kontraktor-listrik.webp"
  imagesrcset="
  <?= base_url(); ?>template/assets/img/slider/kontraktor-listrik-640.webp 640w,
  <?= base_url(); ?>template/assets/img/slider/kontraktor-listrik-1280.webp 1280w,
  <?= base_url(); ?>template/assets/img/slider/kontraktor-listrik.webp 1920w"
  imagesizes="100vw">
  <link rel="preload" as="image"
  href="<?=base_url()?>template/assets/img/slider/kontraktor-listrik.webp">
  <link rel="preload" as="image"
  href="<?=base_url()?>template/assets/img/slider/kontraktor-instalasi-listrik.webp">
  <link rel="preload" as="image"
  href="<?=base_url()?>template/assets/img/slider/kontraktor-electrical.webp">
  <!-- di <head> -->

    <!-- load async (tidak blocking) -->
    <link rel="preload"
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    as="style"
    onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
      <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
  </noscript>
  <link rel="preload"
  href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@100;300;400;500;700;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
  as="style"
  onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
      <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@100;300;400;500;700;900&family=Roboto:wght@100;300;400;500;700;900&display=swap">
  </noscript>

  <link rel="preload" as="script" href="<?= base_url(); ?>template/assets/js/jquery-3.6.0.min.js"> <!-- bantu kurangi dependency chain -->
  <link rel="preload" as="script" href="<?= base_url(); ?>template/assets/js/modernizr.min.js">
  <!-- CRITICAL CSS -->
  <link rel="preload" as="style" href="<?= base_url(); ?>template/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/bootstrap.min.css">

  <link rel="preload" as="style" href="<?= base_url(); ?>template/assets_1/css/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>template/assets_1/css/style.css">

  <!-- Fonts: fontawesome + override font-display -->
  <link rel="preload" as="style" href="<?= base_url(); ?>template/assets/css/all-fontawesome.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/all-fontawesome.min.css">

  <!-- NON‑CRITICAL CSS (defer apply) -->
  <link rel="preload" as="style" href="<?= base_url(); ?>template/assets_1/css/icomoon.css">
  <link rel="stylesheet" href="<?= base_url(); ?>template/assets_1/css/icomoon.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="<?= base_url(); ?>template/assets_1/css/icomoon.css"></noscript>

  <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/fonts.css" media="print" onload="this.media='all'"><!-- override @font-face -->
  <link rel="preload" href="<?= base_url(); ?>template/assets/fonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" href="<?= base_url(); ?>template/assets/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">

  <link rel="preload" as="style" href="<?= base_url(); ?>template/assets/css/animate.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/animate.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/animate.min.css"></noscript>

  <link rel="preload" as="style" href="<?= base_url(); ?>template/assets/css/magnific-popup.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/magnific-popup.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/magnific-popup.min.css"></noscript>

  <link rel="preload" as="style" href="<?= base_url(); ?>template/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/owl.carousel.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/owl.carousel.min.css"></noscript>
  <script src="https://analytics.ahrefs.com/analytics.js" data-key="KpmSWl6p+p5aXSvq2K1Haw" async></script>
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
    <a href="https://api.whatsapp.com/send?phone=6281196310656&text=<?= urlencode($is_en ? 'Hi Bangundaya, I would like to consult about electrical services.' : 'Halo Bangundaya, saya ingin konsultasi layanan kelistrikan.'); ?>" class="float" target="_blank">
        <img src="<?= base_url(); ?>template/assets/img/icon/<?= $is_en ? 'consultation-2.webp' : 'hubungi-2.webp'; ?>"
     class="fa fa-whatsapp my-float"
     alt="<?= $is_en ? 'Free consultation' : 'Hubungi kami'; ?>"
     loading="lazy">
    </a>
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
                            <span><?= txt('Ikuti Kami:', 'Follow Us:', $is_en); ?> </span>
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
                    <a class="navbar-brand" href="<?= lang_url('', $lang_prefix) ?>">
                        <img
                        src="<?= base_url(); ?>template/assets/img/logo/logo-200.svg"
                        srcset="<?= base_url(); ?>template/assets/img/logo/logo-200.svg 1x,
                        <?= base_url(); ?>template/assets/img/logo/logo-400.svg 2x"
                        width="200" height="47" alt="logo bangundaya.com">

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
                            <a class="nav-link <?= ($current_segment == '' ? 'active' : '') ?>" href="<?= lang_url('', $lang_prefix) ?>">
                                <?= txt('Beranda', 'Home', $is_en); ?>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= ($current_segment == 'profile' ? 'active' : '') ?>" href="<?= lang_url('profile', $lang_prefix) ?>">
                                <?= txt('Tentang Kami', 'About', $is_en); ?>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= (($is_en && $current_segment == 'service') || (!$is_en && $current_segment == 'jasa') ? 'active' : '') ?>" href="<?= service_url('', '', $is_en); ?>">
                                <?= txt('Layanan', 'Service', $is_en); ?>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= ($current_segment == 'product' ? 'active' : '') ?>" href="<?= lang_url('product', $lang_prefix) ?>">
                                <?= txt('Produk', 'Product', $is_en); ?>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= ($current_segment == 'blog' ? 'active' : '') ?>" href="<?= lang_url('blog', $lang_prefix) ?>">
                                Blog
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= ($current_segment == 'contact' ? 'active' : '') ?>" href="<?= lang_url('contact', $lang_prefix) ?>">
                                <?= txt('Kontak', 'Contact', $is_en); ?>
                            </a>
                        </li>
                    </ul>
                    <div class="nav-right">
                        <div class="nav-right-btn mt-2">
                            <a href="<?= lang_url('contact', $lang_prefix) ?>" class="theme-btn">
                                <?= txt('Minta Penawaran', 'Get A Quote', $is_en); ?>
                                <i class="fas fa-arrow-right-long"></i>
                            </a>
                        </div>
                        <div class="nav-right-btn mt-2 ms-2">
                            <?php if ($is_en): ?>
                                <a href="<?= base_url(); ?>" class="theme-btn theme-btn2">
                                    🇮🇩 Indonesia
                                </a>
                            <?php else: ?>
                                <a href="<?= base_url('en'); ?>" class="theme-btn theme-btn2">
                                    🇬🇧 English
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
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
                        <a href="<?= lang_url('', $lang_prefix) ?>" class="footer-logo">
                            <img loading="lazy" src="<?= base_url(); ?>template/assets_1/img/logo/logo-putih.webp" alt="logo bangundaya.com">
                        </a>
                        <p class="mb-3">
                            <?= txt(
                                'Kami adalah mitra tepercaya untuk instalasi dan pemeliharaan sistem kelistrikan rumah, gedung, dan fasilitas industri. Didukung oleh tim profesional dan pengerjaan sesuai standar nasional, kami siap membantu kebutuhan listrik Anda — dari skala kecil hingga proyek besar.',
                                'We are a trusted partner for electrical installation and maintenance for homes, buildings, and industrial facilities. Supported by a professional team and work based on national standards, we are ready to support your electrical needs — from small-scale work to large projects.',
                                $is_en
                            ); ?>
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
                            <h3 class="footer-widget-title"><?= txt('Link Cepat', 'Quick Links', $is_en); ?></h3>
                            <ul class="footer-list">
                                <li><a href="<?= lang_url('profile', $lang_prefix) ?>"><i class="fas fa-caret-right"></i> <?= txt('Tentang Kami', 'About Us', $is_en); ?></a></li>
                                <li>
                                    <a href="<?= service_url('', '', $is_en); ?>">
                                        <i class="fas fa-caret-right"></i>
                                        <?= txt('Layanan', 'Services', $is_en); ?>
                                    </a>
                                </li>
                                <li><a href="<?= lang_url('product', $lang_prefix) ?>"><i class="fas fa-caret-right"></i> <?= txt('Produk', 'Product', $is_en); ?></a></li>
                                <li><a href="<?= lang_url('blog', $lang_prefix) ?>"><i class="fas fa-caret-right"></i> <?= txt('Artikel Terbaru', 'Update News', $is_en); ?></a></li>
                                <li><a href="<?= lang_url('contact', $lang_prefix) ?>"><i class="fas fa-caret-right"></i> <?= txt('Kontak', 'Contact', $is_en); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h3 class="footer-widget-title"><?= txt('Layanan Kami', 'Our Services', $is_en); ?></h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="<?= service_url('instalasi-listrik', 'electrical-installation', $is_en); ?>">
                                        <i class="fas fa-caret-right"></i>
                                        <?= txt('Instalasi Listrik', 'Electrical Installation', $is_en); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?= service_url('pemasangan-panel-surya', 'solar-panel-installation', $is_en); ?>">
                                        <i class="fas fa-caret-right"></i>
                                        <?= txt('Panel Surya / PLTS', 'Solar Panels', $is_en); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?= service_url('pembuatan-slo-listrik', 'slo-nidi-certification', $is_en); ?>">
                                        <i class="fas fa-caret-right"></i>
                                        <?= txt('Pembuatan SLO Listrik', 'Electrical Certification', $is_en); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?= service_url('sewa-genset', 'generator-rental', $is_en); ?>">
                                        <i class="fas fa-caret-right"></i>
                                        <?= txt('Sewa Genset', 'Generator Rental', $is_en); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?= service_url('panel-listrik', 'electrical-panel', $is_en); ?>">
                                        <i class="fas fa-caret-right"></i>
                                        <?= txt('Panel Listrik', 'Electrical Panel', $is_en); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?= service_url('pasang-penangkal-petir', 'lightning-protection-grounding', $is_en); ?>">
                                        <i class="fas fa-caret-right"></i>
                                        <?= txt('Penangkal Petir', 'Surge Protection', $is_en); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?= service_url('maintenance-electrical', 'electrical-maintenance', $is_en); ?>">
                                        <i class="fas fa-caret-right"></i>
                                        <?= txt('Maintenance Electrical', 'Electrical Maintenance', $is_en); ?>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?= service_url('perbaikan-listrik', 'electrical-repair', $is_en); ?>">
                                        <i class="fas fa-caret-right"></i>
                                        <?= txt('Perbaikan Listrik Darurat', 'Emergency Call', $is_en); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h3 class="footer-widget-title"><?= txt('Newsletter', 'Newsletter', $is_en); ?></h3>
                            <div class="footer-newsletter">
                                <p>
                                    <?= txt(
                                        'Berlangganan newsletter kami untuk mendapatkan update dan informasi terbaru.',
                                        'Subscribe to our newsletter to get the latest updates and news.',
                                        $is_en
                                    ); ?>
                                </p>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="<?= txt('Email Anda', 'Your Email', $is_en); ?>">
                                        
                                        <button class="theme-btn" type="submit" aria-label="submit">
                                            <?= txt('Berlangganan', 'Subscribe Now', $is_en); ?>
                                            <i class="far fa-paper-plane"></i>
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
                            &copy; Copyright <span id="date"></span>
                            <a href="<?= lang_url('', $lang_prefix) ?>" aria-label="home"> Bangundaya.com </a>
                            <?= txt('Seluruh Hak Cipta Dilindungi.', 'All Rights Reserved.', $is_en); ?>
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
    <!-- JS (deferred) -->
    <script src="<?= base_url(); ?>template/assets/js/jquery-3.6.0.min.js" defer></script>
    <script src="<?= base_url(); ?>template/assets/js/modernizr.min.js" defer></script>
    <script src="<?= base_url(); ?>template/assets/js/bootstrap.bundle.min.js" defer></script>
    <script src="<?= base_url(); ?>template/assets/js/imagesloaded.pkgd.min.js" defer></script>
    <script src="<?= base_url(); ?>template/assets/js/jquery.magnific-popup.min.js" defer></script>
    <script src="<?= base_url(); ?>template/assets/js/isotope.pkgd.min.js" defer></script>
    <script src="<?= base_url(); ?>template/assets/js/jquery.appear.min.js" defer></script>
    <script src="<?= base_url(); ?>template/assets/js/jquery.easing.min.js" defer></script>
    <script src="<?= base_url(); ?>template/assets/js/owl.carousel.min.js" defer></script>
    <script src="<?= base_url(); ?>template/assets/js/counter-up.js" defer></script>
    <script src="<?= base_url(); ?>template/assets_1/js/main.js" defer></script>
</body>
</html>