/*=====================================================
Template Name   : Electrow
Description     : Power And Electricity Services HTML5 Template (Optimized)
Author          : LunarTemp (optimized by ChatGPT)
Version         : 1.1
=======================================================*/

(function ($) {
    "use strict";

    /* =========================
       Helpers
    ============================ */

    // Throttle untuk event yang sering dipanggil (scroll, resize, dll)
    function throttle(fn, wait) {
        let lastTime = 0;
        return function () {
            const now = Date.now();
            if (now - lastTime >= wait) {
                lastTime = now;
                fn.apply(this, arguments);
            }
        };
    }

    /* =========================
       Multi level dropdown menu
    ============================ */
    $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
        e.preventDefault();

        if (!$(this).next().hasClass('show')) {
            $(this)
                .parents('.dropdown-menu')
                .first()
                .find('.show')
                .removeClass('show');
        }

        const $subMenu = $(this).next('.dropdown-menu');
        $subMenu.toggleClass('show');

        $(this)
            .parents('li.nav-item.dropdown.show')
            .on('hidden.bs.dropdown', function () {
                $('.dropdown-submenu .show').removeClass('show');
            });

        return false;
    });

    /* =========================
       Data background
    ============================ */
    $(document).on('ready', function () {
        $('[data-background]').each(function () {
            const bg = $(this).attr('data-background');
            if (bg) {
                $(this).css('background-image', 'url(' + bg + ')');
            }
        });
    });

    /* =========================
       Navbar search toggle
    ============================ */
    $('.search-btn').on('click', function () {
        $('.search-area').toggleClass('open');
    });

    /* =========================
       Hero slider animation helper
    ============================ */
    function doAnimations(elements) {
        const animationEndEvents =
            'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

        elements.each(function () {
            const $this = $(this);
            const delay = $this.data('delay');
            const duration = $this.data('duration');
            const type = 'animated ' + $this.data('animation');

            if (delay) {
                $this.css({
                    'animation-delay': delay,
                    '-webkit-animation-delay': delay
                });
            }

            if (duration) {
                $this.css({
                    'animation-duration': duration,
                    '-webkit-animation-duration': duration
                });
            }

            $this
                .addClass(type)
                .one(animationEndEvents, function () {
                    $this.removeClass(type);
                });
        });
    }

    /* =========================
       Owl Carousels (delayed init)
       - supaya reflow berat terjadi setelah halaman stabil
    ============================ */

    function initCarousels() {
            // helper kecil untuk kasih label ke tombol prev/next hero slider
            function labelHeroNav($slider) {
                $slider.find('.owl-prev')
                    .attr('role', 'button')
                    .attr('aria-label', 'Slide sebelumnya')
                    .attr('title', 'Slide sebelumnya');

                $slider.find('.owl-next')
                    .attr('role', 'button')
                    .attr('aria-label', 'Slide berikutnya')
                    .attr('title', 'Slide berikutnya');
            }
        // HERO SLIDER – tetap autoplay
// HERO SLIDER – tetap autoplay
    if ($('.hero-slider').length) {
        const $hero = $('.hero-slider');

        $hero.owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            margin: 0,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 5000,
            items: 1,
            autoHeight: false,
            navText: [
                "<i class='far fa-long-arrow-left' aria-hidden='true'></i>",
                "<i class='far fa-long-arrow-right' aria-hidden='true'></i>"
            ],
            onInitialized: function (event) {
                const $els = $(event.target)
                    .find('.owl-item')
                    .eq(event.item.index)
                    .find('[data-animation]');
                doAnimations($els);

                // label tombol panah setelah init
                labelHeroNav($hero);
            },
            onChanged: function (event) {
                const $els = $(event.target)
                    .find('.owl-item')
                    .eq(event.item.index)
                    .find('[data-animation]');
                doAnimations($els);

                // pastikan label tetap ada setelah change
                labelHeroNav($hero);
            }
        });

        // fallback tambahan setelah halaman benar-benar load
        $(window).on('load', function () {
            setTimeout(function () {
                labelHeroNav($hero);
            }, 500);
        });
    }

/* =========================
   TESTIMONIAL SLIDER – dengan label aksesibel
============================ */
if ($('.testimonial-slider').length) {

    var $ts = $('.testimonial-slider');

    // fungsi kecil untuk kasih label ke semua dot
    function labelTestimonialDots() {
        $ts.find('.owl-dot').each(function (index) {
            var n = index + 1;
            $(this)
                .attr('type', 'button')
                .attr('aria-label', 'Testimoni slide ' + n)
                .attr('title', 'Testimoni slide ' + n);
        });
    }

    // init owl
    $ts.owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: false,
        responsive: {
            0:   { items: 1 },
            600: { items: 2 },
            1000:{ items: 3 }
        },
        onInitialized: function () {
            labelTestimonialDots();
        },
        onRefreshed: function () {
            labelTestimonialDots();
        }
    });

    // fallback ekstra setelah halaman load
    $(window).on('load', function () {
        setTimeout(labelTestimonialDots, 800);
    });
}




        // PARTNER SLIDER – autoplay diperlambat
        if ($('.partner-slider').length) {
            $('.partner-slider').owlCarousel({
                loop: true,
                margin: 50,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 7000,
                responsive: {
                    0: { items: 2 },
                    600: { items: 3 },
                    1000: { items: 6 }
                }
            });
        }
    }

    // Jalankan carousel setelah halaman idle / load
    // if ('requestIdleCallback' in window) {
    //     requestIdleCallback(function () {
    //         initCarousels();
    //     }, { timeout: 2500 });
    // } else {
    //     $(window).on('load', function () {
    //         setTimeout(initCarousels, 1500);
    //     });
    // }

    $(document).ready(function () {
    initCarousels();
    });


    /* =========================
       Preloader
    ============================ */
    $(window).on('load', function () {
        $('.preloader').fadeOut('slow');
    });

    /* =========================
       Fun fact counter (optimized)
       - pakai IntersectionObserver, tanpa appear.js
    ============================ */
    (function initCounters() {
        const counters = document.querySelectorAll('.counter');

        if (!counters.length) return;

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(
                function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            $(entry.target).countTo();
                            observer.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.4 }
            );

            counters.forEach(function (counter) {
                observer.observe(counter);
            });
        } else {
            // Fallback lama
            $('.counter').each(function () {
                $(this).countTo();
            });
        }
    })();

    /* =========================
       Magnific popup
    ============================ */
    $('.popup-gallery').magnificPopup({
        delegate: '.popup-img',
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    /* =========================
       Scroll-related behaviour
       (scroll-top button + fixed navbar)
       - pakai throttle + native smooth scroll
    ============================ */

    const $scrollTopBtn = $('#scroll-top');
    const $navbar = $('.navbar');

    function handleScroll() {
        const scrollY = window.scrollY || window.pageYOffset || 0;

        // Scroll-top button
        if (scrollY > 100) {
            $scrollTopBtn.addClass('active');
        } else {
            $scrollTopBtn.removeClass('active');
        }

        // Navbar fixed-top
        if (scrollY > 50) {
            $navbar.addClass('fixed-top');
        } else {
            $navbar.removeClass('fixed-top');
        }
    }

    $(window).on('scroll', throttle(handleScroll, 100));

    // Scroll to top – native smooth scroll (lebih ringan dari jQuery animate)
    $scrollTopBtn.on('click', function (e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    /* =========================
       Project filter (Isotope)
       - inisialisasi setelah gambar load
    ============================ */
    $(window).on('load', function () {
        const $filterBox = $('.filter-box');

        if ($filterBox.length && $filterBox.children().length > 0) {
            // Pastikan semua gambar sudah selesai agar layout tidak lompat-lompat
            $filterBox.imagesLoaded(function () {
                $filterBox.isotope({
                    itemSelector: '.filter-item',
                    masonry: {
                        columnWidth: '.filter-item'
                    }
                });
            });

            $('.filter-btn').on('click', 'li', function () {
                const filterValue = $(this).attr('data-filter');
                $filterBox.isotope({ filter: filterValue });
            });

            $('.filter-btn li').each(function () {
                $(this).on('click', function () {
                    $(this).siblings('li.active').removeClass('active');
                    $(this).addClass('active');
                });
            });
        }
    });

    /* =========================
       Countdown
    ============================ */
    if ($('#countdown').length) {
        $('#countdown').countdown('2035/01/30', function (event) {
            $(this).html(
                '' +
                    '<div class="row">' +
                    '<div class="col countdown-single">' +
                    '<h2 class="mb-0">%-D</h2>' +
                    '<h5 class="mb-0">Day%!d</h5>' +
                    '</div>' +
                    '<div class="col countdown-single">' +
                    '<h2 class="mb-0">%H</h2>' +
                    '<h5 class="mb-0">Hours</h5>' +
                    '</div>' +
                    '<div class="col countdown-single">' +
                    '<h2 class="mb-0">%M</h2>' +
                    '<h5 class="mb-0">Minutes</h5>' +
                    '</div>' +
                    '<div class="col countdown-single">' +
                    '<h2 class="mb-0">%S</h2>' +
                    '<h5 class="mb-0">Seconds</h5>' +
                    '</div>' +
                    '</div>'
            );
        });
    }

    /* =========================
       Copyright year
    ============================ */
    (function setCopyrightYear() {
        const year = new Date().getFullYear();
        $('#date').html(year);
    })();
})(jQuery);
