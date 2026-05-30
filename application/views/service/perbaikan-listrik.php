<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">
        <h1 class="breadcrumb-title">
            <?= $is_en ? '24/7 Emergency Electrical Repair Service' : 'Layanan Perbaikan Instalasi Listrik Darurat 24/7'; ?>
        </h1>

        <ul class="breadcrumb-menu">
            <li>
                <a href="<?= base_url($lang_prefix); ?>">
                    <?= $is_en ? 'Home' : 'Beranda'; ?>
                </a>
            </li>

            <li>
                <a href="<?= base_url($lang_prefix . ($is_en ? 'service' : 'jasa')); ?>">
                    <?= $is_en ? 'Services' : 'Layanan'; ?>
                </a>
            </li>

            <li class="active">
                <?= $is_en ? 'Emergency Call 24/7' : 'Emergency Call 24/7'; ?>
            </li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->


<div class="service-single-area py-120">
    <div class="container">
        <div class="service-single-wrapper">
            <div class="row">

                <div class="col-xl-4 col-lg-4">
                    <?php $this->load->view('service/side-bar'); ?>
                </div>

                <div class="col-xl-8 col-lg-8">
                    <div class="service-details">

                        <div class="service-details-img mb-30">
                            <img loading="lazy"
                                 src="<?= base_url(); ?>template/assets/img/service/perbaikan-listrik.webp"
                                 alt="<?= $is_en ? '24/7 emergency electrical repair service' : 'Jasa perbaikan instalasi listrik darurat 24 jam'; ?>">
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Emergency Electrical Installation Repair Service' : 'Layanan Perbaikan Instalasi Listrik Darurat'; ?>
                        </h2>

                        <p><b>
                            <?= $is_en
                                ? 'Fast response for short circuits, panel issues, and electrical installation problems – Jabodetabek'
                                : 'Siap Tanggap Korsleting, Gangguan Panel, dan Masalah Instalasi Listrik – Jabodetabek'; ?>
                        </b></p>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Unexpected electrical problems in operational facilities can disrupt your business activities. We are here as a trusted technical partner to handle various emergency electrical conditions in office buildings, factories, warehouses, showrooms, and residential properties.'
                                : 'Gangguan listrik mendadak di fasilitas operasional dapat mengganggu aktivitas bisnis Anda. Kami hadir sebagai mitra teknikal terpercaya untuk menangani berbagai kondisi darurat kelistrikan, baik di gedung perkantoran, pabrik, gudang, showroom, maupun properti residensial Anda.'; ?>
                        </p>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Types of Electrical Repair Services We Offer' : 'Jenis Layanan Perbaikan Listrik yang Kami Tawarkan'; ?>
                        </h2>

                        <ul class="service-single-list mb-20">
                            <li><i class="far fa-check"></i><?= $is_en ? 'Short circuit and electrical fault handling' : 'Penanganan Korsleting & Arus Pendek'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'Electrical installation repair for buildings and homes' : 'Perbaikan Instalasi Listrik Gedung & Rumah'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'Inspection and repair of faulty electrical panels' : 'Pemeriksaan & Perbaikan Panel Listrik Konslet'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'Electrical installation service for commercial areas' : 'Service Instalasi Listrik untuk Area Komersial'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'Component replacement: MCB, ELCB, switches, and power outlets' : 'Penggantian Komponen: MCB, ELCB, saklar, stop kontak'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'Electrical system audit and fault diagnosis' : 'Audit & Diagnosa Gangguan Sistem Kelistrikan'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'Technical documentation and QC work report' : 'Dokumentasi Teknis & Laporan QC Pekerjaan'; ?></li>
                        </ul>

                        <h2 class="mb-20">
                            <?= $is_en ? '24-Hour Standby Technician Team' : 'Tim Teknisi Siaga 24 Jam'; ?>
                        </h2>

                        <ul class="service-single-list mb-20">
                            <li><i class="far fa-check"></i><?= $is_en ? 'Experienced in handling high-urgency technical projects' : 'Berpengalaman menangani proyek dengan tingkat urgensi tinggi'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'Equipped with standard electrical measuring tools and K3-compliant work equipment' : 'Dilengkapi alat ukur dan alat kerja standar K3'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'Work report support for your internal division documentation' : 'Dukungan laporan pekerjaan & pelaporan ke divisi internal Anda'; ?></li>
                        </ul>

                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/jasa-perbaikan-listrik.webp"
                                     alt="<?= $is_en ? 'Electrical repair service technician' : 'Jasa teknisi perbaikan listrik'; ?>">
                            </div>

                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/jasa-perbaikan-listrik-terdekat.webp"
                                     alt="<?= $is_en ? 'Nearest emergency electrical repair service' : 'Jasa perbaikan listrik terdekat'; ?>">
                            </div>
                        </div>

                        <h2 class="section-title mb-20">
                            <?= $is_en ? 'Estimated Electrical Repair Service Cost*' : 'Estimasi Biaya Perbaikan Instalasi Listrik*'; ?>
                        </h2>

                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col"><?= $is_en ? 'Service Type' : 'Jenis Layanan'; ?></th>
                                        <th scope="col"><?= $is_en ? 'Estimated Cost*' : 'Estimasi Biaya*'; ?></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><?= $is_en ? 'Fast response for minor electrical issues' : 'Respon cepat gangguan listrik ringan'; ?></td>
                                        <td>Rp 250.000</td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? 'Handling MCB trips, broken switches, or damaged power outlets' : 'Penanganan MCB trip, saklar atau stop kontak rusak'; ?></td>
                                        <td><?= $is_en ? 'Rp 100,000 / point' : 'Rp 100.000 / titik'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? '1–2 floor installation service including cable route tracing' : 'Service instalasi 1–2 lantai (termasuk tracing jalur)'; ?></td>
                                        <td><?= $is_en ? 'Rp 750,000 – Rp 1,200,000' : 'Rp 750.000 – Rp 1.200.000'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? 'Inspection and repair of mini panel / sub-panel' : 'Pengecekan & perbaikan panel listrik mini / sub panel'; ?></td>
                                        <td><?= $is_en ? 'Rp 1,000,000 – Rp 2,500,000' : 'Rp 1.000.000 – Rp 2.500.000'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? 'Emergency call at night / holiday depending on location' : 'Emergency call malam/hari libur (tergantung lokasi)'; ?></td>
                                        <td><?= $is_en ? 'Rp 350,000 – Rp 800,000' : 'Rp 350.000 – Rp 800.000'; ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <p style="font-style:italic; margin-top:10px;">
                                <strong><?= $is_en ? 'Note:' : 'Catatan:'; ?></strong>
                                <?= $is_en
                                    ? 'Prices are estimates and may vary depending on location, accessibility, and work complexity.'
                                    : '*Harga bersifat estimasi dan disesuaikan dengan lokasi, aksesibilitas, dan kompleksitas pekerjaan.'; ?>
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- process area -->
<?php $this->load->view('proses-kerja'); ?>
<!-- process area end -->

<!-- choose-area -->
<?php $this->load->view('mengapa-kami'); ?>
<!-- choose-area end -->

<!-- portfolio-area -->
<?php $this->load->view('portfolio'); ?>
<!-- portfolio-area end -->

<!-- team-area -->
<?php $this->load->view('section-teams'); ?>
<!-- team-area end -->

<!-- testimonial area -->
<?php $this->load->view('section-testimonials'); ?>
<!-- testimonial area end -->

<!-- faq area -->
<?php $this->load->view('faq'); ?>
<!-- faq area end -->

<?php $this->load->view('product-terkait'); ?>

<!-- blog area -->
<?php $this->load->view('section-blogs'); ?>
<!-- blog area end -->

<!-- partner area -->
<?php $this->load->view('section-partners'); ?>


<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => $is_en
        ? "24/7 Emergency Electrical Repair Service"
        : "Jasa Perbaikan Listrik 24/7",
    "description" => $is_en
        ? "Emergency electrical repair services for homes, buildings, factories, warehouses, and commercial facilities. Handling short circuits, faulty panels, damaged MCB/ELCB, and electrical installation issues."
        : "Layanan perbaikan listrik darurat untuk rumah, gedung, pabrik, warehouse, dan fasilitas komersial. Menangani korsleting, panel bermasalah, MCB/ELCB rusak, hingga gangguan instalasi listrik.",
    "url" => current_url(),
    "provider" => [
        "@type" => "Organization",
        "name" => "Bangun Daya",
        "url" => base_url(),
        "logo" => base_url("template/assets/img/logo/logo.png"),
        "telephone" => "+62-21-8909-0882",
        "email" => "info@bangundaya.com",
        "sameAs" => [
            "https://www.facebook.com/",
            "https://www.twitter.com/",
            "https://www.instagram.com/"
        ]
    ],
    "areaServed" => [
        "@type" => "Country",
        "name" => "Indonesia"
    ],
    "hasOfferCatalog" => [
        "@type" => "OfferCatalog",
        "name" => $is_en ? "Electrical Repair Services" : "Layanan Perbaikan Listrik",
        "itemListElement" => [
            [
                "@type" => "Offer",
                "name" => $is_en ? "Short Circuit Electrical Repair" : "Perbaikan Korsleting Listrik",
                "description" => $is_en
                    ? "Detection and repair of short circuit sources in electrical networks for homes, shops, offices, and buildings."
                    : "Deteksi dan perbaikan sumber korsleting pada jaringan listrik rumah, ruko, kantor, dan gedung.",
                "priceCurrency" => "IDR",
                "price" => 250000
            ],
            [
                "@type" => "Offer",
                "name" => $is_en ? "MCB, Switch, and Power Outlet Repair" : "Perbaikan MCB, Saklar, dan Stop Kontak",
                "description" => $is_en
                    ? "Repair and replacement of MCB, switch, and damaged power outlet points."
                    : "Perbaikan dan penggantian MCB, saklar, serta titik stop kontak yang rusak.",
                "priceCurrency" => "IDR",
                "price" => 100000
            ],
            [
                "@type" => "Offer",
                "name" => $is_en ? "Electrical Panel Inspection and Repair" : "Pengecekan & Perbaikan Panel Listrik",
                "description" => $is_en
                    ? "Inspection and repair service for mini panels, sub-panels, and electrical distribution problems."
                    : "Layanan pengecekan dan perbaikan panel mini, sub-panel, serta gangguan distribusi listrik.",
                "priceCurrency" => "IDR",
                "price" => 1000000
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>