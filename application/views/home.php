
<!-- hero slider -->
<div class="hero-section">
    <div class="hero-slider owl-carousel owl-theme">

        <div class="hero-single" style="background: url(<?= base_url(); ?>template/assets/img/slider/kontraktor-listrik.webp)">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <div class="hero-content">
                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                <?= $is_en 
                                    ? 'Professional <span>Electrical</span> Contractor' 
                                    : 'Kontraktor <span>Listrik</span> Profesional'; ?>
                            </h1>

                            <h2 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                <i class="far fa-lightbulb-on"></i>
                                <?= $is_en ? 'Welcome To Bangundaya!' : 'Selamat Datang di Bangundaya!'; ?>
                            </h2>

                            <p data-animation="fadeInLeft" data-delay=".75s">
                                <?= $is_en 
                                    ? 'Bangundaya is a professional electrical contractor ready to support installation, repair, and electrical system upgrades for your building — safe, neat, and compliant with standards.'
                                    : 'Bangundaya merupakan kontraktor listrik profesional yang siap membantu instalasi, perbaikan, dan upgrade sistem kelistrikan bangunan Anda — aman, rapi, dan sesuai standar.'; ?>
                            </p>

                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                <a href="<?= base_url($lang_prefix . 'profile'); ?>" class="theme-btn">
                                    <?= $is_en ? 'About Us' : 'Tentang Kami'; ?>
                                    <i class="fas fa-arrow-right-long"></i>
                                </a>

                                <a href="<?= base_url($lang_prefix . 'contact'); ?>" class="theme-btn theme-btn2">
                                    <?= $is_en ? 'Consultation' : 'Konsultasi'; ?>
                                    <i class="fas fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-single" style="background: url(<?= base_url(); ?>template/assets/img/slider/kontraktor-instalasi-listrik.webp)">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <div class="hero-content">
                            <h2 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                <?= $is_en 
                                    ? 'Electrical <span>Contractor</span> Specialist'
                                    : 'Spesialis <span>Kontraktor</span> Elektrikal'; ?>
                            </h2>

                            <h3 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                <i class="far fa-lightbulb-on"></i>
                                <?= $is_en ? 'Welcome To Bangundaya!' : 'Selamat Datang di Bangundaya!'; ?>
                            </h3>

                            <p data-animation="fadeInLeft" data-delay=".75s">
                                <?= $is_en
                                    ? 'We provide main panel installation, sub-panels, cable tray, grounding systems, and electrical point installation for homes, shop houses, offices, and factories.'
                                    : 'Kami melayani pemasangan panel utama, sub-panel, kabel tray, grounding system, serta instalasi titik listrik untuk rumah, ruko, kantor, hingga pabrik.'; ?>
                            </p>

                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                <a href="<?= base_url($lang_prefix . 'profile'); ?>" class="theme-btn">
                                    <?= $is_en ? 'About Us' : 'Tentang Kami'; ?>
                                    <i class="fas fa-arrow-right-long"></i>
                                </a>

                                <a href="<?= base_url($lang_prefix . 'contact'); ?>" class="theme-btn theme-btn2">
                                    <?= $is_en ? 'Consultation' : 'Konsultasi'; ?>
                                    <i class="fas fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-single" style="background: url(<?= base_url(); ?>template/assets/img/slider/kontraktor-electrical.webp)">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <div class="hero-content">
                            <h2 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                <?= $is_en
                                    ? 'Professional <span>Electrical</span> Services'
                                    : 'Jasa Kontraktor <span>Electrical</span>'; ?>
                            </h2>

                            <h3 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                <i class="far fa-lightbulb-on"></i>
                                <?= $is_en ? 'Welcome To Bangundaya!' : 'Selamat Datang di Bangundaya!'; ?>
                            </h3>

                            <p data-animation="fadeInLeft" data-delay=".75s">
                                <?= $is_en
                                    ? 'From residential to industrial projects, Bangundaya is the right choice for electrical needs — supported by certified technicians and guaranteed workmanship.'
                                    : 'Dari proyek rumah tinggal hingga industri, Bangundaya adalah pilihan tepat untuk semua kebutuhan kelistrikan — dengan tenaga bersertifikat dan pengerjaan bergaransi.'; ?>
                            </p>

                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                <a href="<?= base_url($lang_prefix . 'profile'); ?>" class="theme-btn">
                                    <?= $is_en ? 'About Us' : 'Tentang Kami'; ?>
                                    <i class="fas fa-arrow-right-long"></i>
                                </a>

                                <a href="<?= base_url($lang_prefix . 'contact'); ?>" class="theme-btn theme-btn2">
                                    <?= $is_en ? 'Consultation' : 'Konsultasi'; ?>
                                    <i class="fas fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- hero slider end -->


<!-- appointment area -->
<div class="appointment">
    <div class="container">
        <div class="appointment-form">
            <h3 class="text-white mb-2">
                <?= $is_en ? 'Book Your Service' : 'Pesan Layanan'; ?>
            </h3>

            <form action="#">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control"
                                placeholder="<?= $is_en ? 'Enter Name' : 'Nama Lengkap'; ?>"
                                aria-label="name">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="email" class="form-control"
                                placeholder="<?= $is_en ? 'Enter Email' : 'Email'; ?>"
                                aria-label="email">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control"
                                placeholder="<?= $is_en ? 'Enter Phone' : 'No. Telepon'; ?>"
                                aria-label="phone">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <select class="form-select" name="service" aria-label="service">
                                <option value=""><?= $is_en ? 'Choose Service' : 'Pilih Layanan'; ?></option>
                                <option value="1"><?= $is_en ? 'Electrical Installation' : 'Instalasi Listrik'; ?></option>
                                <option value="2"><?= $is_en ? 'Electrical Panel' : 'Panel Listrik'; ?></option>
                                <option value="3"><?= $is_en ? 'Security System' : 'Sistem Keamanan'; ?></option>
                                <option value="4"><?= $is_en ? 'Surge Protection' : 'Penangkal Petir'; ?></option>
                                <option value="5"><?= $is_en ? 'Air Conditioning' : 'Air Conditioning'; ?></option>
                                <option value="6"><?= $is_en ? 'Indoor Lighting' : 'Pencahayaan Indoor'; ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="date" class="form-control" aria-label="date">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <button type="submit" class="theme-btn" aria-label="submit">
                                <?= $is_en ? 'Get Service' : 'Kirim Permintaan'; ?>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- appointment area end -->


<!-- about area -->
<div class="about-area py-120">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="about-left wow fadeInLeft">
                    <div class="about-img">
                        <img
                            src="<?= base_url(); ?>template/assets/img/about/kontraktor-listrik-berkualitas-600.webp"
                            srcset="
                                <?= base_url(); ?>template/assets/img/about/kontraktor-listrik-berkualitas-600.avif 600w,
                                <?= base_url(); ?>template/assets/img/about/kontraktor-listrik-berkualitas-600.webp 600w,
                                <?= base_url(); ?>template/assets/img/about/kontraktor-listrik-berkualitas-1200.avif 1200w,
                                <?= base_url(); ?>template/assets/img/about/kontraktor-listrik-berkualitas-1200.webp 1200w"
                            sizes="(max-width: 768px) 100vw, 576px"
                            width="576"
                            height="653"
                            alt="<?= $keywords; ?>"
                            loading="lazy"
                            decoding="async">
                    </div>

                    <div class="about-experience">
                        <div class="about-experience-icon">
                            <i class="icon-plug"></i>
                        </div>
                        <b class="text-start">
                            <?= $is_en ? '30 Years Of <br> Quality Service' : '30 Tahun <br> Layanan Berkualitas'; ?>
                        </b>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-right wow fadeInRight">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline">
                            <i class="far fa-lightbulb-on"></i>
                            <?= $is_en ? 'About Us' : 'Tentang Kami'; ?>
                        </span>

                        <h2 class="site-title">
                            <?= $is_en
                                ? 'We Are Committed to Providing <span>Quality Electrical Services</span>'
                                : 'Kami Berkomitmen Memberikan <span>Layanan Elektrikal</span> Berkualitas'; ?>
                        </h2>
                    </div>

                    <p class="about-text">
                        <?= $is_en
                            ? 'For more than 10 years, Bangundaya has been a professional electrical contractor focused on quality, safety, and timely delivery in every electrical installation and maintenance project. We serve electrical needs for homes, shop houses, buildings, industries, and public facilities — supported by certified experts and standard-quality materials.'
                            : 'Selama lebih dari 10 tahun, Bangundaya hadir sebagai kontraktor listrik profesional yang berfokus pada kualitas, keamanan, dan ketepatan waktu dalam setiap proyek instalasi dan pemeliharaan listrik. Kami melayani berbagai kebutuhan kelistrikan untuk rumah tinggal, ruko, gedung, industri, dan fasilitas umum — dengan dukungan tenaga ahli bersertifikat dan material standar SNI.'; ?>
                    </p>

                    <div class="about-content">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="about-item">
                                    <div class="about-item-icon">
                                        <i class="icon-power-plant"></i>
                                    </div>
                                    <div class="about-item-content">
                                        <h3><?= $is_en ? 'Emergency Repairs' : 'Perbaikan Darurat'; ?></h3>
                                        <p>
                                            <?= $is_en
                                                ? 'Fast response for electrical faults, short circuits, or electrical system damage. Available for Jabodetabek areas.'
                                                : 'Tanggapan cepat untuk gangguan listrik, korsleting, atau kerusakan sistem kelistrikan. Siaga untuk wilayah Jabodetabek.'; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="about-item">
                                    <div class="about-item-icon">
                                        <i class="icon-diagnostic"></i>
                                    </div>
                                    <div class="about-item-content">
                                        <h3><?= $is_en ? 'Rewiring & Check-up' : 'Rewiring & Pemeriksaan'; ?></h3>
                                        <p>
                                            <?= $is_en
                                                ? 'Renewal of old electrical installations and full inspections to ensure safety and efficiency.'
                                                : 'Peremajaan instalasi listrik lama & inspeksi menyeluruh untuk memastikan keamanan dan efisiensi sistem Anda.'; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="about-list-wrapper">
                        <ul class="about-list list-unstyled">
                            <li>
                                <?= $is_en
                                    ? 'More than 10 years of experience in electrical and panel works'
                                    : 'Lebih dari 10 tahun pengalaman di bidang listrik & panel'; ?>
                            </li>
                            <li>
                                <?= $is_en
                                    ? 'Handled by certified electrical and safety technicians'
                                    : 'Dikerjakan oleh teknisi bersertifikat SLO & K3'; ?>
                            </li>
                            <li>
                                <?= $is_en
                                    ? 'Following national electrical standards'
                                    : 'Mengikuti standar nasional PUIL & SNI'; ?>
                            </li>
                        </ul>
                    </div>

                    <a href="<?= base_url($lang_prefix . 'profile'); ?>" class="theme-btn mt-4">
                        <?= $is_en ? 'Learn More' : 'Pelajari'; ?>
                        <i class="fas fa-arrow-right-long"></i>
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- about area end -->


<!-- call-area -->
<div class="call-area">
    <div class="container">
        <div class="col-md-5 ms-lg-auto">
            <div class="call-content">
                <span>
                    <i class="far fa-lightbulb-on"></i>
                    <?= $is_en ? 'Emergency Call' : 'Panggilan Darurat'; ?>
                </span>

                <h2>
                    <?= $is_en
                        ? 'Need Fast Help for Electrical Problems?'
                        : 'Butuh Bantuan Cepat untuk Masalah Listrik?'; ?>
                </h2>

                <p>
                    <?= $is_en
                        ? 'We have standby technicians who can respond quickly and safely across Jabodetabek and surrounding areas.'
                        : 'Kami memiliki tim teknisi siaga yang dapat merespon cepat dan aman untuk wilayah Jabodetabek dan sekitarnya.'; ?>
                </p>

                <div class="emergency-call">
                    <div class="emergency-call-icon">
                        <i class="icon-telephone1"></i>
                    </div>

                    <div class="emergency-call-info">
                        <h3><?= $is_en ? 'For Emergency' : 'Untuk Darurat'; ?></h3>
                        <h3><a href="tel:02189090882">021 8909 0882</a></h3>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- call-area end -->

        <!-- service-area -->
        <?php $this->load->view('section-services'); ?>
        <!-- service-area -->


<!-- feature area -->
<div class="feature-area ft-bg py-120">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">
                        <i class="far fa-lightbulb-on"></i>
                        <?= $is_en ? 'Our Features' : 'Keunggulan Kami'; ?>
                    </span>

                    <h2 class="site-title text-white">
                        <?= $is_en
                            ? 'Why <span>Bangundaya</span> Is Trusted?'
                            : 'Kenapa <span>Bangundaya Layak</span> Dipercaya?'; ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="feature-wrapper">
            <div class="row">

                <div class="col-md-6 col-lg-3">
                    <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                        <span class="count">01</span>
                        <div class="feature-icon">
                            <i class="icon-technician"></i>
                        </div>
                        <h3 class="feature-title">
                            <?= $is_en ? 'Professional & Certified Team' : 'Tim Profesional & Bersertifikat'; ?>
                        </h3>
                        <p>
                            <?= $is_en
                                ? 'Our technicians are certified and experienced in handling electrical installations for homes, shop houses, and industrial facilities.'
                                : 'Seluruh teknisi kami memiliki sertifikat kelistrikan, berpengalaman menangani instalasi listrik rumah, ruko, hingga industri.'; ?>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                        <span class="count">02</span>
                        <div class="feature-icon">
                            <i class="icon-satisfaction"></i>
                        </div>
                        <h3 class="feature-title">
                            <?= $is_en ? 'Customer Satisfaction Warranty' : 'Garansi Kepuasan Pelanggan'; ?>
                        </h3>
                        <p>
                            <?= $is_en
                                ? 'We provide quality assurance for every job, from new installation and repair to electrical system upgrades.'
                                : 'Kami memberikan jaminan mutu untuk setiap pekerjaan, mulai dari instalasi baru, perbaikan, hingga upgrade sistem kelistrikan.'; ?>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                        <span class="count">03</span>
                        <div class="feature-icon">
                            <i class="icon-shield"></i>
                        </div>
                        <h3 class="feature-title">
                            <?= $is_en ? 'Accurate Testing & Inspection' : 'Pengujian & Inspeksi Akurat'; ?>
                        </h3>
                        <p>
                            <?= $is_en
                                ? 'Every electrical system is tested and inspected thoroughly before handover. Complete documentation reports are provided for transparency.'
                                : 'Setiap sistem listrik diuji dan diperiksa menyeluruh sebelum diserahkan. Laporan dokumentasi lengkap disediakan untuk transparansi.'; ?>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                        <span class="count">04</span>
                        <div class="feature-icon">
                            <i class="icon-easy-installation"></i>
                        </div>
                        <h3 class="feature-title">
                            <?= $is_en ? 'Flexible & Transparent Cost' : 'Biaya Fleksibel & Transparan'; ?>
                        </h3>
                        <p>
                            <?= $is_en
                                ? 'Our pricing is adjusted to your project needs. No hidden costs and always preceded by a clear estimate.'
                                : 'Harga kami disesuaikan dengan kebutuhan proyek Anda. Tanpa biaya tersembunyi dan didahului dengan estimasi jelas.'; ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- feature area end -->


        <!-- portfolio-area -->
        <?php $this->load->view('portfolio'); ?>
        <!-- portfolio-area end -->

        <!-- choose-area -->
        <?php $this->load->view('mengapa-kami'); ?>
        <!-- choose-area end -->

        <!-- team-area -->
        <?php $this->load->view('section-teams'); ?>
        <!-- team-area end -->

        <!-- process area -->
        <?php $this->load->view('proses-kerja'); ?>
        <!-- process area end -->

        <!-- testimonial area -->
        <?php $this->load->view('section-testimonials'); ?>
        <!-- testimonial area end -->

        <!-- faq area -->
        <?php $this->load->view('faq'); ?>
        <!-- faq area end -->

        <!-- blog area -->
        <?php $this->load->view('section-blogs'); ?>
        <!-- blog area end -->

        <!-- partner area -->
        <?php $this->load->view('section-partners'); ?>
        <?php $this->load->view('product-terkait'); ?>
        <!-- partner area end -->
        <script>
        document.addEventListener('DOMContentLoaded', () => {
          // Peta class WOW -> class reveal kita
          const MAP = {
            fadeInLeft:  'reveal-left',
            fadeInRight: 'reveal-right',
            fadeInUp:    'reveal-up',
            fadeInDown:  'reveal-down',
            fadeIn:      'reveal-fade'
          };

          // Ambil semua elemen bertanda .wow (markup lama tetap dipakai)
          const wows = document.querySelectorAll('.wow');

          wows.forEach(el => {
            // tambahkan base class
            el.classList.add('reveal');

            // deteksi class wow-* yang dipakai, lalu map ke class reveal
            for (const wowName in MAP) {
              if (el.classList.contains(wowName)) {
                el.classList.add(MAP[wowName]);
              }
            }

            // support data-wow-delay (".25s", "200ms", dst)
            const delay = el.getAttribute('data-wow-delay');
            if (delay) el.style.transitionDelay = delay;
          });

          // IO observer: tampilkan sekali saat masuk viewport
          const io = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                obs.unobserve(entry.target);
              }
            });
          }, { threshold: 0.2 }); // 20% terlihat

          document.querySelectorAll('.reveal').forEach(el => io.observe(el));
        });
        </script>

<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "name" => "Bangundaya",
    "url" => base_url($is_en ? 'en' : ''),
    "image" => base_url("template/assets/img/logo/logo.png"),
    "description" => $is_en
        ? "Bangundaya is a trusted electrical contractor in Indonesia, providing electrical installation, electrical panels, maintenance, and professional electrical solutions for homes, buildings, factories, and offices."
        : "Bangundaya merupakan kontraktor listrik terpercaya di Indonesia. Kontraktor electrical terpercaya dengan layanan instalasi listrik, panel listrik, maintenance, dan solusi elektrikal profesional untuk rumah, gedung, pabrik, dan perkantoran.",
    "telephone" => "+62-21-8909-0882",
    "email" => "info@bangundaya.com",
    "address" => [
        "@type" => "PostalAddress",
        "addressCountry" => "ID"
    ],
    "openingHours" => "Mo-Sa 08:00-17:00",
    "contactPoint" => [
        "@type" => "ContactPoint",
        "telephone" => "+62-21-8909-0882",
        "contactType" => "customer service",
        "email" => "info@bangundaya.com"
    ],
    "aggregateRating" => [
        "@type" => "AggregateRating",
        "ratingValue" => "4.9",
        "reviewCount" => "57"
    ],
    "sameAs" => [
        "https://www.facebook.com/",
        "https://www.twitter.com/",
        "https://www.instagram.com/"
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>



