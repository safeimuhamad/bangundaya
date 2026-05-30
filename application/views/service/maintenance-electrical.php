<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">

        <h1 class="breadcrumb-title">
            <?= $is_en
                ? 'Periodic Electrical Inspection & Maintenance'
                : 'Inspeksi & Maintenance Berkala Sistem Kelistrikan'; ?>
        </h1>

        <ul class="breadcrumb-menu">
            <li>
                <a href="<?= base_url($lang_prefix); ?>">
                    <?= $is_en ? 'Home' : 'Beranda'; ?>
                </a>
            </li>

            <li>
                <a href="<?= base_url($is_en ? 'en/service' : 'jasa'); ?>">
                    <?= $is_en ? 'Services' : 'Layanan'; ?>
                </a>
            </li>

            <li class="active">
                <?= $is_en
                    ? 'Electrical Maintenance'
                    : 'Inspeksi & Maintenance Berkala'; ?>
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
                                 src="<?= base_url(); ?>template/assets/img/service/maintenance-electrical.webp"
                                 alt="<?= $keywords; ?>">
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en
                                ? 'Keep Your Electrical System Reliable and Optimal'
                                : 'Pastikan Keandalan Sistem Listrik Anda Tetap Optimal'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Our periodic electrical inspection and maintenance service is designed to ensure that electrical systems in commercial buildings, offices, factories, and public facilities remain safe, efficient, and compliant with applicable standards. Scheduled preventive maintenance helps reduce the risk of failure, downtime, and potential fire hazards caused by electrical problems.'
                                : 'Layanan Inspeksi & Maintenance Berkala kami dirancang untuk memastikan seluruh sistem instalasi listrik di gedung komersial, perkantoran, pabrik, hingga fasilitas publik tetap aman, efisien, dan sesuai dengan standar regulasi. Perawatan preventif yang terjadwal membantu mencegah risiko kerusakan, downtime, dan potensi bahaya kebakaran akibat kelistrikan.'; ?>
                        </p>

                        <h2 class="mb-20">
                            <?= $is_en
                                ? 'Our Electrical Maintenance Services Include:'
                                : 'Layanan Maintenance yang Kami Tawarkan:'; ?>
                        </h2>

                        <p><b><?= $is_en ? 'Panel & Sub Panel Inspection' : 'Inspeksi Panel & Sub Panel'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Physical panel inspection, connection tightening, temperature measurement, and load/current checking to ensure the system remains within capacity.'
                                : 'Pemeriksaan kondisi fisik panel, pengencangan koneksi, pengukuran suhu, serta pengecekan beban & arus agar tetap sesuai kapasitas.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Load & Current Measurement' : 'Pengukuran Beban & Arus'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Load balance analysis, power usage adjustment, and early detection of potential overload conditions.'
                                : 'Analisa keseimbangan beban, penyesuaian penggunaan daya, serta deteksi dini potensi overload.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Component Cleaning & Calibration' : 'Pembersihan & Kalibrasi Komponen'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Cleaning dust, corrosion, and other contaminants that may affect performance. Recalibration of MCB, ELCB, relay, and other electrical components.'
                                : 'Pembersihan debu, korosi, dan kontaminan lain yang dapat mengganggu performa. Kalibrasi ulang komponen MCB, ELCB, relay, dsb.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Cable & Connector Inspection' : 'Pengecekan Kabel & Konektor'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Identification of insulation damage, replacement of worn cables, and retightening of connectors.'
                                : 'Identifikasi potensi kerusakan isolasi, penggantian kabel aus, serta pengencangan ulang konektor.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Grounding & Lightning Protection Testing' : 'Pengujian Grounding & Sistem Proteksi Petir'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Ground resistance testing, Lightning Protection System (LPS) inspection, and integration checking with panel systems.'
                                : 'Uji tahanan tanah, sistem LPS (Lightning Protection System), serta integrasi dengan sistem panel.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Condition Report & Technical Recommendation' : 'Laporan Kondisi & Rekomendasi Teknis'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Complete inspection documentation, field findings, and technical recommendations for corrective or preventive action.'
                                : 'Dokumentasi hasil inspeksi lengkap, temuan lapangan, serta rekomendasi tindakan korektif atau preventif.'; ?>
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/inspeksi-listrik.webp"
                                     alt="<?= $keywords; ?>">
                            </div>

                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/maintenance-listrik.webp"
                                     alt="<?= $keywords; ?>">
                            </div>
                        </div>

                        <h2 class="section-title mb-20">
                            <?= $is_en ? 'Estimated Routine Maintenance Cost' : 'Estimasi Biaya Maintenance Rutin'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Prices may vary depending on power capacity, panel type, number of loads, project location, and other technical specifications.'
                                : 'Harga dapat bervariasi tergantung kapasitas daya, jenis panel, jumlah beban, lokasi proyek, dan spesifikasi teknis lainnya.'; ?>
                        </p>

                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col"><?= $is_en ? 'Work Type' : 'Jenis Pekerjaan'; ?></th>
                                        <th scope="col"><?= $is_en ? 'Recommended Frequency' : 'Frekuensi Rekomendasi'; ?></th>
                                        <th scope="col"><?= $is_en ? 'Estimated Starting Cost' : 'Estimasi Biaya Mulai dari'; ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $is_en ? 'LVMDP Panel & Sub Panel Inspection' : 'Pemeriksaan Panel LVMDP & Sub Panel'; ?></td>
                                        <td><?= $is_en ? 'Every 3–6 months' : '3–6 bulan sekali'; ?></td>
                                        <td>Rp 1.500.000 / unit</td>
                                    </tr>
                                    <tr>
                                        <td><?= $is_en ? 'Panel Cleaning & Calibration' : 'Pembersihan & Kalibrasi Panel'; ?></td>
                                        <td><?= $is_en ? 'Every 6 months' : '6 bulan sekali'; ?></td>
                                        <td>Rp 2.000.000 / unit</td>
                                    </tr>
                                    <tr>
                                        <td><?= $is_en ? 'Grounding & LPS System Testing' : 'Pengujian Grounding & Sistem LPS'; ?></td>
                                        <td><?= $is_en ? 'Once a year' : '1 tahun sekali'; ?></td>
                                        <td>Rp 2.500.000 / <?= $is_en ? 'location' : 'lokasi'; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?= $is_en ? 'Cable & Distribution Point Inspection' : 'Inspeksi Kabel & Titik Distribusi'; ?></td>
                                        <td><?= $is_en ? 'Every 6 months' : '6 bulan sekali'; ?></td>
                                        <td>Rp 50.000 / <?= $is_en ? 'point' : 'titik'; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?= $is_en ? 'Installation Feasibility Report & Audit' : 'Laporan & Audit Kelayakan Instalasi'; ?></td>
                                        <td><?= $is_en ? 'On request' : 'Sesuai permintaan'; ?></td>
                                        <td>Rp 3.000.000 / <?= $is_en ? 'report' : 'laporan'; ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <p style="font-style:italic; margin-top:10px;">
                                <strong><?= $is_en ? 'Note:' : 'Catatan:'; ?></strong>
                                <?= $is_en
                                    ? 'Estimates are adjusted based on work volume, system complexity, and project location.'
                                    : 'Estimasi disesuaikan dengan volume pekerjaan, kompleksitas sistem, dan lokasi proyek.'; ?>
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
        ? "Periodic Electrical Inspection & Maintenance Services"
        : "Jasa Inspeksi & Maintenance Listrik Berkala",
    "description" => $is_en
        ? "Professional electrical maintenance services for buildings, factories, and commercial areas. Bangun Daya helps ensure your electrical system remains safe, reliable, and compliant through scheduled inspection and maintenance."
        : "Layanan maintenance kelistrikan profesional untuk gedung, pabrik, dan area komersial. Bangun Daya memastikan sistem kelistrikan Anda tetap aman, andal, dan sesuai regulasi dengan inspeksi dan pemeliharaan berkala.",
    "url" => base_url($is_en ? "en/service/electrical-maintenance" : "jasa/maintenance-electrical"),
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
        "name" => $is_en ? "Periodic Electrical Maintenance Packages" : "Paket Maintenance Listrik Berkala",
        "itemListElement" => [
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "Electrical Panel & Installation Maintenance"
                    : "Maintenance Panel Listrik & Instalasi",
                "description" => $is_en
                    ? "Inspection of main panels, sub panels, cable connections, and current protection for buildings."
                    : "Pemeriksaan panel utama, sub-panel, sambungan kabel, dan proteksi arus untuk gedung bertingkat.",
                "priceCurrency" => "IDR",
                "price" => "Negotiable"
            ],
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "Grounding & Arrester System Inspection"
                    : "Pemeriksaan Sistem Grounding & Arrester",
                "description" => $is_en
                    ? "Inspection of grounding connections and lightning protection systems to ensure optimal performance."
                    : "Inspeksi koneksi grounding dan sistem proteksi petir untuk memastikan fungsi optimal.",
                "priceCurrency" => "IDR",
                "price" => "Negotiable"
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>