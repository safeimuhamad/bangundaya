/*=====================================================
Template Name   : Electrow
Description     : Power And Electricity Services HTML5 Template
Author          : LunarTemp
Version         : 1.0
=======================================================*/

(function ($) {
  "use strict";

  // multi level dropdown menu
  $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
    }
    var $subMenu = $(this).next('.dropdown-menu');
    $subMenu.toggleClass('show');

    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
      $('.dropdown-submenu .show').removeClass('show');
    });
    return false;
  });

  // data-background
  $(document).on('ready', function () {
    $("[data-background]").each(function () {
      $(this).css("background-image", "url(" + $(this).attr("data-background") + ")");
    });
  });

  // navbar search
  $('.search-btn').on('click', function () {
    $('.search-area').toggleClass('open');
  });


  /* ============================
     HERO SLIDER – KONTROL KUSTOM
     ============================ */

  // 1) Sisipkan kontrol kustom setelah .hero-slider (sekali saja)
  if (!$('.hero-slider').next().hasClass('hero-controls')) {
    $('.hero-slider').after([
      '<div class="hero-controls" aria-label="Kontrol slider hero">',
        '<div class="hero-nav">',
          '<button type="button" class="hero-prev" aria-label="Slide sebelumnya">',
            '<span aria-hidden="true"><i class="far fa-long-arrow-left"></i></span>',
          '</button>',
          '<button type="button" class="hero-next" aria-label="Slide berikutnya">',
            '<span aria-hidden="true"><i class="far fa-long-arrow-right"></i></span>',
          '</button>',
        '</div>',
        '<div class="hero-dots" id="hero-dots" role="tablist" aria-label="Pilih slide"></div>',
      '</div>'
    ].join(''));
  }

  // 2) Inisialisasi Owl TANPA nav bawaan; dots diarahkan ke container kustom
  var $hero = $('.hero-slider').owlCarousel({
    loop: true,
    nav: false,                   // penting: matikan tombol bawaan
    dots: true,
    dotsContainer: '#hero-dots',  // gunakan container kita sendiri
    margin: 0,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    items: 1,

    onInitialized: function (event) {
      var $firstAnimatingElements = $('.owl-item').eq(event.item.index).find("[data-animation]");
      doAnimations($firstAnimatingElements);
      buildHeroDots(event);
      updateHeroDots(event);
    },

    onChanged: function (event) {
      var $firstAnimatingElements = $('.owl-item').eq(event.item.index).find("[data-animation]");
      doAnimations($firstAnimatingElements);
      updateHeroDots(event);
    },

    onRefreshed: function (event) {
      buildHeroDots(event);
      updateHeroDots(event);
    }
  }).on('initialized.owl.carousel changed.owl.carousel refreshed.owl.carousel', addOwlA11y);

  // 3) Tombol prev/next kustom
  $('.hero-prev').on('click', function () {
    $hero.trigger('prev.owl.carousel');
  });
  $('.hero-next').on('click', function () {
    $hero.trigger('next.owl.carousel');
  });

  // 4) Bangun dot kustom sesuai jumlah slide (sekali saat init/refresh)
  function buildHeroDots(event) {
    var count = event.item.count;
    var $wrap = $('#hero-dots');
    if ($wrap.children().length === count) return; // sudah sesuai, skip

    $wrap.empty();
    for (var i = 0; i < count; i++) {
      var n = i + 1;
      $wrap.append(
        '<button type="button" role="tab" class="hero-dot" aria-label="Ke slide ' + n + '" data-index="' + i + '"></button>'
      );
    }
    // klik dot → goTo
    $wrap.off('click.hero').on('click.hero', 'button.hero-dot', function () {
      var idx = parseInt(this.getAttribute('data-index'), 10);
      $hero.trigger('to.owl.carousel', [idx, 300, true]);
    });
  }

  // 5) Update aria-current pada dot aktif
  function updateHeroDots(event) {
    var count = event.item.count;
    var clones = event.relatedTarget ? event.relatedTarget._clones.length / 2 : 0;
    var rawIndex = event.item.index - clones;
    var real = ((rawIndex % count) + count) % count;

    var $wrap = $('#hero-dots');
    $wrap.children('.hero-dot')
      .removeAttr('aria-current')
      .attr('aria-selected', 'false')
      .eq(real)
      .attr({ 'aria-current': 'true', 'aria-selected': 'true' });
  }

  //hero slider do animations
  function doAnimations(elements) {
    var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    elements.each(function () {
      var $this = $(this);
      var $animationDelay = $this.data('delay');
      var $animationDuration = $this.data('duration');
      var $animationType = 'animated ' + $this.data('animation');
      $this.css({
        'animation-delay': $animationDelay,
        '-webkit-animation-delay': $animationDelay,
        'animation-duration': $animationDuration,
        '-webkit-animation-duration': $animationDuration
      });
      $this.addClass($animationType).one(animationEndEvents, function () {
        $this.removeClass($animationType);
      });
    });
  }

  /* ==================================
     TESTIMONIAL SLIDER – DOTS KUSTOM
     ================================== */

  // siapkan container dots kustom untuk testimonial
  if (!$('.testimonial-slider').next().hasClass('testimonial-controls')) {
    $('.testimonial-slider').after(
      '<div class="testimonial-controls"><div class="testimonial-dots" id="testi-dots" role="tablist" aria-label="Pilih testimonial"></div></div>'
    );
  }

  var $testi = $('.testimonial-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,                  // tidak pakai nav bawaan
    dots: true,
    dotsContainer: '#testi-dots',// pakai container kustom
    autoplay: true,
    responsive: {
      0: { items: 1 },
      600: { items: 2 },
      1000: { items: 3 }
    },
    onInitialized: buildTestiDots,
    onRefreshed: buildTestiDots,
    onChanged: updateTestiDots
  }).on('initialized.owl.carousel changed.owl.carousel refreshed.owl.carousel', addOwlA11y);

  function buildTestiDots(event) {
    var count = event.item.count;
    var $wrap = $('#testi-dots');
    if ($wrap.children().length === count) return;

    $wrap.empty();
    for (var i = 0; i < count; i++) {
      var n = i + 1;
      $wrap.append('<button type="button" role="tab" class="testi-dot" aria-label="Ke testimonial ' + n + '" data-index="' + i + '"></button>');
    }
    $wrap.off('click.testi').on('click.testi', 'button.testi-dot', function () {
      var idx = parseInt(this.getAttribute('data-index'), 10);
      $testi.trigger('to.owl.carousel', [idx, 300, true]);
    });
  }

  function updateTestiDots(event) {
    var count = event.item.count;
    var clones = event.relatedTarget ? event.relatedTarget._clones.length / 2 : 0;
    var rawIndex = event.item.index - clones;
    var real = ((rawIndex % count) + count) % count;
    $('#testi-dots').children('.testi-dot')
      .removeAttr('aria-current')
      .attr('aria-selected', 'false')
      .eq(real)
      .attr({ 'aria-current': 'true', 'aria-selected': 'true' });
  }

  // partner-slider (tanpa dots/nav bawaan jadi tidak memunculkan tombol tambahan)
  $('.partner-slider').owlCarousel({
    loop: true,
    margin: 50,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
      0: { items: 2 },
      600: { items: 3 },
      1000: { items: 6 }
    }
  });

  // preloader
  $(window).on('load', function () {
    $(".preloader").fadeOut("slow");
  });

  // fun fact counter
  $('.counter').countTo();
  $('.counter-box').appear(function () {
    $('.counter').countTo();
  }, { accY: -100 });

  // magnific popup init
  $(".popup-gallery").magnificPopup({
    delegate: '.popup-img',
    type: 'image',
    gallery: { enabled: true }
  });

  $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  // scroll to top
  $(window).scroll(function () {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      $("#scroll-top").addClass('active');
    } else {
      $("#scroll-top").removeClass('active');
    }
  });

  $("#scroll-top").on('click', function () {
    $("html, body").animate({ scrollTop: 0 }, 1500);
    return false;
  });

  // navbar fixed top
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('.navbar').addClass("fixed-top");
    } else {
      $('.navbar').removeClass("fixed-top");
    }
  });

  // project filter
  $(window).on('load', function () {
    if ($(".filter-box").children().length > 0) {
      $(".filter-box").isotope({
        itemSelector: '.filter-item',
        masonry: { columnWidth: 1 }
      });

      $('.filter-btn').on('click', 'li', function () {
        var filterValue = $(this).attr('data-filter');
        $(".filter-box").isotope({ filter: filterValue });
      });

      $(".filter-btn li").each(function () {
        $(this).on("click", function () {
          $(this).siblings("li.active").removeClass("active");
          $(this).addClass("active");
        });
      });
    }
  });

  // countdown
  if ($('#countdown').length) {
    $('#countdown').countdown('2035/01/30', function (event) {
      $(this).html(event.strftime(
        '<div class="row">'
        + '<div class="col countdown-single"><h2 class="mb-0">%-D</h2><h5 class="mb-0">Day%!d</h5></div>'
        + '<div class="col countdown-single"><h2 class="mb-0">%H</h2><h5 class="mb-0">Hours</h5></div>'
        + '<div class="col countdown-single"><h2 class="mb-0">%M</h2><h5 class="mb-0">Minutes</h5></div>'
        + '<div class="col countdown-single"><h2 class="mb-0">%S</h2><h5 class="mb-0">Seconds</h5></div>'
        + '</div>'
      ));
    });
  }

  // copywrite date
  let date = new Date().getFullYear();
  
  $("#date").html(date);
  function addOwlA11y(ev){
  var $wrap = $(ev.target);

  // Prev/Next
  $wrap.find('.owl-prev')
    .attr({'type': 'button', 'aria-label':'Slide sebelumnya'})
    .removeAttr('role');
  $wrap.find('.owl-next')
    .attr({'type': 'button', 'aria-label':'Slide berikutnya'})
    .removeAttr('role');

  // Dots
  $wrap.find('.owl-dots .owl-dot').each(function(i){
    $(this)
      .attr({
        'type': 'button',
        'role': 'tab',
        'aria-label': 'Ke slide ' + (i+1)
      })
      .removeAttr('aria-current');
  });
  $wrap.find('.owl-dots .owl-dot.active').attr('aria-current', 'true');
}


})(jQuery);
