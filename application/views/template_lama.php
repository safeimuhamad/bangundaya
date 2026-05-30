<!doctype html>
<html class="no-js" lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
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
   <meta name="author" content="floria.id">
   <meta property="og:title" content="<?= $title; ?>">
   <meta property="og:description" content="<?= $description; ?>">
   <meta property="og:image" content="https://floria.id/template/assets/img/logo/logo.png">
   <meta property="og:url" content="https://floria.id<?= current_url(); ?>">
   <meta property="og:type" content="website">
   <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>template/assets/images/favicon.png">
   <link rel="canonical" href="https://floria.id/<?= isset($canonical) ? $canonical : '' ?>">
   <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "floria.id",
        "url": "https://floria.id",
        "logo": "https://floria.id/template/assets/img/logo/logo.png",
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+62-21 8490 8050",
          "contactType": "customer service"
       },
       "sameAs": [
          "https://www.facebook.com/",
          "https://www.twitter.com/",
          "https://www.instagram.com/"
       ]
    }
   </script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Place favicon.ico in the root directory -->
 <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>template/assets/images/favicon.png">
 <!-- CSS here -->
 <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/bootstrap.css">
 <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/meanmenu.css">
 <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/aos.css">
 <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/swiper-bundle.css">
 <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/slick.css">
 <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/backtotop.css">
 <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/magnific-popup.css">
 <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/nice-select.css">
 <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/ui-icon.css">
 <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/font-awesome-pro.css">
 <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/spacing.css">
 <link rel="stylesheet" href="<?= base_url(); ?>template/assets/css/main.css">
</head>
<body>
   <div class="site-wrapper overflow-hidden">
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
   <![endif]-->
      <!-- =========  Preloader  =========== -->
      <div class="preloader ">
         <div class="preloader-inner">
            <span class="loader"></span>
         </div>
      </div>
      <!-- =========  Preloader End =========== -->
      <!-- ========= Back To Top Start =========== -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- ========= Back To Top End =========== -->
      <!-- ========= Header Area Start =========== -->
      <header>
            <a aria-label="link" href="https://api.whatsapp.com/send?phone=+6281196310656&text=Hi%20Floria.id,"
              class="float" target="_blank">
              <img src="<?= base_url(); ?>template/assets/img/icon/hubungi-wa.webp" class="fa fa-whatsapp my-float"
                  alt="<?=$keywords?>">
          </a>
         <div class="header header--style-2 header__block">
            <!-- Header Bottom -->
            <div class="header__bottom header__bottom--dark" id="header-sticky">
               <div class="container header__bottom__line">
                  <div class="row g-0 align-items-center justify-content-between">
                     <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="logo">
                           <a href="<?=base_url()?>">
                              <img loading="lazy" src="<?= base_url(); ?>template/assets/images/logo/Logo-2.png" alt="logo">
                           </a>
                        </div>
                     </div>
                     <!-- Main Menu -->
                     <?php 
                         $current_page = $this->uri->segment(1); // Mendapatkan segmen pertama dari URI
                         ?>

                         <div class="col-xl-7 col-lg-9 d-none d-lg-block text-center">
                            <div class="main-menu main-menu--style-2 main-menu--dark">
                             <nav id="mobile-menu">
                              <ul>
                               <li class="<?= $current_page == '' ? 'current-page' : '' ?>">
                                <a href="<?=base_url()?>">Home</a>
                             </li>
                             <li class="<?= $current_page == 'profil' ? 'current-page' : '' ?>">
                                <a href="<?=base_url()?>profil">About Us</a>
                             </li>
                             <li class="<?= $current_page == 'jasa' ? 'current-page' : '' ?>">
                                <a href="<?=base_url()?>jasa">Services</a>
                             </li>
                             <li class="<?= $current_page == 'informasi' ? 'current-page' : '' ?>">
                                <a href="<?=base_url()?>informasi">Blog</a>
                             </li>
                             <li class="<?= $current_page == 'kontak' ? 'current-page' : '' ?>">
                                <a href="<?=base_url()?>kontak">Contact Us</a>
                             </li>
                          </ul>
                       </nav>
                    </div>
                 </div>
                 <!-- Header Right Widgets -->
                 <div class="col-xl-3 col-lg-1 col-md-9 col-sm-8 col-6">
                  <div
                  class="header__bottom__right header__bottom__right--dark header__widgets d-flex align-items-center justify-content-end">
                  <a href="<?=base_url()?>kontak" class="cl-btn cl-btn--secondary cl-btn--header d-none d-xl-flex">get
                     a free
                  quote</a>
                  <div
                  class="header__hamburger ml-50 d-flex align-items-center justify-content-center d-xl-none">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#offcanvasmodal"
                  class="hamurgetp-btn" aria-label="home-icon">
                  <span></span>
                  <span></span>
                  <span></span>
               </button>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- End Header Bottom -->
</div>
</header>
<!-- ========= Header Area End =========== -->
<!-- ========= offcanvas Area start =========== -->
<div class="offcanvas__area">
   <div class="modal fade" id="offcanvasmodal" tabindex="-1" aria-labelledby="offcanvasmodal" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="offcanvas__wrapper">
               <div class="offcanvas__content">
                  <div class="offcanvas__top mb-20 d-flex justify-content-between align-items-center">
                     <div class="offcanvas__logo logo">
                        <a href="<?=base_url()?>">
                           <img loading="lazy" src="<?= base_url(); ?>template/assets/images/logo/logo.png" alt="logo">
                        </a>
                     </div>
                     <div class="offcanvas__close">
                        <button class="offcanvas__close-btn" data-bs-toggle="modal"
                        data-bs-target="#offcanvasmodal">
                        <i class="fal fa-times"></i>
                     </button>
                  </div>
               </div>
               <div class="offcanvas__search mb-25">
                  <form action="#">
                     <input type="text" placeholder="What are you searching for?">
                     <button type="submit"><i class="far fa-search"></i></button>
                  </form>
               </div>
               <div class="mobile-menu fix"></div>
               <div class="offcanvas__text d-none d-lg-block">
               </div>
               <div class="offcanvas__map d-none d-lg-block mb-15">
                  <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d50538.87686841975!2d-105.8840802!3d37.6567312!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8715d4023af5b84b%3A0xf54d8cfc70c2f644!2sMosca%2C%20CO%2081146%2C%20USA!5e0!3m2!1sen!2sbd!4v1710188172636!5m2!1sen!2sbd"
                  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
               <div class="offcanvas__contact mt-30 mb-20">
                  <h4>Contact Info</h4>
                  <ul>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a target="_blank" href="#">18 Office Park, Jl. TB Simatupang No.18, Ps. Minggu, Jakarta</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a href="tel:021 8490 8050">021 8490 8050</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a href="mailto:info@floria.id">info@floria.id</a>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="offcanvas__social">
                  <ul>
                     <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                     <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>

<?= $contents; ?>
<!-- ========= Footer Area Start =========== -->
<footer class="footer footer--style-2">
  <div
  class="footer__area footer__area--style-2 footer__area--dark-mode bg-overlay overlay-opacity-95"
  style="
  background-image: url(<?php echo base_url('template/assets/images/webp/home-1-services-bg.webp'); ?>);
  "
  >
  <!-- Footer Icon box Widgets -->
  <div class="footer__area__contact cl-icon-box cl-icon-box--dark">
   <div class="container">
      <div class="row g-0 justify-content-center align-content-stretch flex-wrap" data-aos="fade-up"
      data-aos-duration="1500" data-aos-once="true">
      <!-- Single Footer Icon -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-4">
         <div class="cl-icon-box__single d-inline-flex h-100">
            <div class="cl-icon-box__icon">
               <img loading="lazy" src="<?= base_url(); ?>template/assets/images/png/home-2/map.png" alt="<?=$keywords?>">
            </div>
            <div class="cl-icon-box__content">
               <p class="cl-icon-box__label">Office</p>
               <p class="cl-icon-box__heading">18 Office Park, Jl. TB Simatupang No.18, Ps. Minggu, Jakarta</p>
            </div>
         </div>
      </div>
      <!-- End Single Footer Icon -->
      <!-- Single Footer Icon -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-4">
         <div class="cl-icon-box__single d-flex h-100">
            <div class="cl-icon-box__icon">
               <img loading="lazy" src="<?= base_url(); ?>template/assets/images/png/home-2/phone.png" alt="<?=$keywords?>">
            </div>
            <div class="cl-icon-box__content">
               <p class="cl-icon-box__label">Phone:</p>
               <a href="tel:+042577470" class="cl-icon-box__heading">021 8490 8050</a>
            </div>
         </div>
      </div>
      <!-- End Single Footer Icon -->
      <!-- Single Footer Icon -->
      <div class="col-12 col-md-4 col-lg-4">
         <div class="cl-icon-box__single d-flex h-100">
            <div class="cl-icon-box__icon">
               <img loading="lazy" src="<?= base_url(); ?>template/assets/images/png/home-2/mail.png" alt="<?=$keywords?>">
            </div>
            <div class="cl-icon-box__content">
               <p class="cl-icon-box__label">Email:</p>
               <a href="mailto:boindyinfo@gmail.com"
               class="cl-icon-box__heading">info@floria.id</a>
            </div>
         </div>
      </div>
      <!-- End Single Footer Icon -->
   </div>
</div>
</div>
<!-- Footer Top -->
<div class="footer__top">
   <div class="container">
      <div class="row justify-content-center">
         <!-- Single Widgets -->
         <div class="col-10 col-sm-6 col-lg-4 col-xl-4">
            <div class="footer__widget footer__widget--style-2 footer__widget--about" data-aos="fade-up"
            data-aos-duration="1500" data-aos-once="true">
            <!-- Logo  -->
            <div class="logo">
               <a href="<?=base_url()?>">
                  <img loading="lazy" src="<?= base_url(); ?>template/assets/images/logo/Logo-2.png" alt="logo">
               </a>
            </div>
            <!-- End Logo -->
            <p class="footer__widget__text">Perusahaan yang berdedikasi dalam menghadirkan keindahan alam ke dalam kehidupan melalui pembuatan, perawatan taman, dan penyewaan tanaman.</p>
            <!-- Social Link -->
            <ul
            class="footer__widget__social-links footer__widget__social-links--style-2 d-flex align-items-center">

            <li>
               <a href="https://www.facebook.com/" aria-label="facebook">
                  <i class="fa-brands fa-facebook-f"></i>
               </a>
            </li>
            <li>
               <a href="https://twitter.com/" aria-label="twitter">
                  <i class="fa-brands fa-twitter"></i>
               </a>
            </li>
            <li>
               <a href="https://www.linkedin.com/" aria-label="linkedin">
                  <i class="fa-brands fa-linkedin-in"></i>
               </a>
            </li>
            <li>
               <a href="https://www.pinterest.com/" aria-label="pinterest">
                  <i class="fa-brands fa-pinterest-p"></i>
               </a>
            </li>
         </ul>
         <!-- End Social Link -->
      </div>
   </div>
   <!-- End Single Widgets -->
   <!-- Single Widgets -->
   <div class="col-10 col-sm-6 col-lg-2 col-xl-2">
      <div class="footer__widget" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
         <h3 class="footer__widget__title">Company:</h3>
         <ul class="footer__widget__menu footer__widget__menu--style-3">
            <li>
               <a href="<?=base_url()?>">Home</a>
            </li>
            <li>
               <a href="<?=base_url()?>profil">About Us</a>
            </li>
            <li>
               <a href="<?=base_url()?>informasi">Blog</a>
            </li>
            <li>
               <a href="<?=base_url()?>jasa">Our Service</a>
            </li>
            <li>
               <a href="#">Testimonials</a>
            </li>
         </ul>
      </div>
   </div>
   <!-- End Single Widgets -->
   <!-- Single Widgets -->
   <div class="col-10 col-sm-6 col-lg-2 col-xl-3">
      <div class="footer__widget" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
         <h3 class="footer__widget__title">Our Services</h3>
         <ul class="footer__widget__menu footer__widget__menu--style-2">
            <li>
               <a href="#">Privacy & policy</a>
            </li>
            <li>
               <a href="#">Terms & conditions</a>
            </li>
            <li>
               <a href="#">FAQ</a>
            </li>
            <li>
               <a href="<?=base_url()?>kontak">Customer support</a>
            </li>
            <li>
               <a href="<?=base_url()?>kontak">Contact us</a>
            </li>
         </ul>
      </div>
   </div>
   <!-- End Single Widgets -->
   <!-- Single Widgets -->
   <div class="col-10 col-sm-6 col-lg-4 col-xl-3">
      <div class="footer__widget" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
         <h3 class="footer__widget__title">Subscribe Newsletter:</h3>
         <form action="#" class="footer__widget__newsletter">
            <input type="email" class="form-control" id="exampleInputEmail1"
            placeholder="Enter your email:">
            <button type="submit" class="cl-btn cl-btn--primary">Subscribe now</button>
         </form>
      </div>
   </div>
   <!-- End Single Widgets -->
</div>
</div>
</div>
</div>
<!-- Footer Copyright -->
<div class="footer__copyright bg-overlay overlay-opacity-95">
   <div class="container">
      <!-- Footer Copyright Widget -->
      <div class="footer__copyright__content d-flex">
         <p class="footer__copyright__year">Copyright © 2024 <span><a href="#">Floria.id</a></span>. All Rights
         Reserved</p>
         <ul class="footer__copyright__menu footer__copyright__menu--right">
            <li>
               <a href="#">Terms & Conditions</a>
            </li>
            <li>
               <a href="#">Privacy Policy</a>
            </li>
            <li>
               <a href="#">Sitemap</a>
            </li>
         </ul>
      </div>
      <!-- End Footer Copyright Widget -->
   </div>
</div>
</footer>
<!-- ========= Footer Area End =========== -->
</div>
<!-- ========= JS here =========== -->
<script src="<?= base_url(); ?>template/assets/js/vendor/jquery.js"></script>
<script src="<?= base_url(); ?>template/assets/js/vendor/waypoints.js"></script>
<script src="<?= base_url(); ?>template/assets/js/bootstrap-bundle.js"></script>
<script src="<?= base_url(); ?>template/assets/js/meanmenu.js"></script>
<!-- <script src="<?= base_url(); ?>template/assets/js/swiper-bundle.js"></script> -->
<script src="<?= base_url(); ?>template/assets/js/slick.js"></script>
<script src="<?= base_url(); ?>template/assets/js/aos.js"></script>
<script src="<?= base_url(); ?>template/assets/js/magnific-popup.js"></script>
<script src="<?= base_url(); ?>template/assets/js/parallax.js"></script>
<script src="<?= base_url(); ?>template/assets/js/backtotop.js"></script>
<script src="<?= base_url(); ?>template/assets/js/nice-select.js"></script>
<script src="<?= base_url(); ?>template/assets/js/counterup.js"></script>
<script src="<?= base_url(); ?>template/assets/js/wow.js"></script>
<script src="<?= base_url(); ?>template/assets/js/isotope-pkgd.js"></script>
<script src="<?= base_url(); ?>template/assets/js/imagesloaded-pkgd.js"></script>
<script src="<?= base_url(); ?>template/assets/js/ajax-form.js"></script>
<script src="<?= base_url(); ?>template/assets/js/main.js"></script>
</body>

</html>