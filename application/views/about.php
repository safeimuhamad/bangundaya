<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">
        <h1 class="breadcrumb-title">
            <?= $is_en ? 'About Us' : 'Tentang Kami'; ?>
        </h1>
        <ul class="breadcrumb-menu">
            <li>
                <a href="<?= base_url($lang_prefix); ?>">
                    <?= $is_en ? 'Home' : 'Beranda'; ?>
                </a>
            </li>
            <li class="active">
                <?= $is_en ? 'About' : 'Tentang Kami'; ?>
            </li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->


<!-- about area -->
<div class="about-area py-120">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                    <div class="about-img">
                        <img src="<?= base_url(); ?>template/assets/img/about/kontraktor-listrik-berkualitas.webp"
                             alt="<?= $keywords; ?>">
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
                <div class="about-right wow fadeInRight" data-wow-delay=".25s">
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
                            ? 'For more than 10 years, Bangundaya has been a professional electrical contractor focused on quality, safety, and timely delivery in every electrical installation and maintenance project. We serve electrical needs for homes, shop houses, buildings, industries, and public facilities — supported by certified experts and SNI-standard materials.'
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
                                        <h5>
                                            <?= $is_en ? 'Emergency Repairs' : 'Perbaikan Darurat'; ?>
                                        </h5>
                                        <p>
                                            <?= $is_en
                                                ? 'Fast response for electrical faults, short circuits, or electrical system damage. Available for the Jabodetabek area.'
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
                                        <h5>
                                            <?= $is_en ? 'Rewiring & Check-up' : 'Rewiring & Pemeriksaan'; ?>
                                        </h5>
                                        <p>
                                            <?= $is_en
                                                ? 'Renewal of old electrical installations and thorough inspections to ensure system safety and efficiency.'
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
                                    ? 'More than 10 years of experience in electrical and panel work'
                                    : 'Lebih dari 10 tahun pengalaman di bidang listrik & panel'; ?>
                            </li>
                            <li>
                                <?= $is_en
                                    ? 'Handled by certified SLO & K3 technicians'
                                    : 'Dikerjakan oleh teknisi bersertifikat SLO & K3'; ?>
                            </li>
                            <li>
                                <?= $is_en
                                    ? 'Following national PUIL & SNI standards'
                                    : 'Mengikuti standar nasional PUIL & SNI'; ?>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- about area end -->


<!-- counter area -->
<div class="counter-area pt-50 pb-50">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon">
                        <i class="icon-project-management"></i>
                    </div>
                    <div>
                        <span class="counter" data-count="+" data-to="2500" data-speed="3000">2500</span>
                        <h6 class="title">
                            <?= $is_en ? '+ Projects Done' : '+ Proyek Selesai'; ?>
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon">
                        <i class="icon-review"></i>
                    </div>
                    <div>
                        <span class="counter" data-count="+" data-to="2450" data-speed="3000">2450</span>
                        <h6 class="title">
                            <?= $is_en ? '+ Happy Clients' : '+ Klien Puas'; ?>
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon">
                        <i class="icon-worker-1"></i>
                    </div>
                    <div>
                        <span class="counter" data-count="+" data-to="1500" data-speed="3000">1500</span>
                        <h6 class="title">
                            <?= $is_en ? '+ Experienced Staff' : '+ Tenaga Berpengalaman'; ?>
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon">
                        <i class="icon-guarantee"></i>
                    </div>
                    <div>
                        <span class="counter" data-count="+" data-to="30" data-speed="3000">30</span>
                        <h6 class="title">
                            <?= $is_en ? '+ Years Experience' : '+ Tahun Pengalaman'; ?>
                        </h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- counter area end -->


        <!-- testimonial area -->
        <?php $this->load->view('section-testimonials'); ?>
        <!-- testimonial area end -->


        <!-- team-area -->

        <!-- team-area end -->


        <!-- partner area -->
        <?php $this->load->view('section-partners'); ?>
        <!-- partner area end -->