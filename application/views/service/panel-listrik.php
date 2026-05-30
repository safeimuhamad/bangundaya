<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">
        <h1 class="breadcrumb-title">
            <?= $is_en ? 'Electrical Panel & Sub Panel' : 'Panel Listrik & Sub Panel'; ?>
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
                <?= $is_en ? 'Electrical Panel' : 'Panel Listrik & Sub Panel'; ?>
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
                                 src="<?= base_url(); ?>template/assets/img/service/jasa-panel-listrik.webp"
                                 alt="<?= $keywords; ?>">
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Reliable & Safe Electrical Panel Solutions' : 'Solusi Panel Listrik Andal & Aman'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Comprehensive solutions for electrical panel design, assembly, and installation — including main panels (LVMDP), sub panels, distribution panels, and 3-phase systems. Handled by certified technicians with high quality standards to ensure reliable power distribution for your project.'
                                : 'Solusi komprehensif untuk kebutuhan pembuatan, perakitan, dan instalasi panel listrik—termasuk panel utama (LVMDP), sub panel, panel distribusi, dan sistem 3 phase. Dikerjakan oleh tim teknisi tersertifikasi dengan standar mutu tinggi, untuk memastikan keandalan sistem distribusi daya di proyek Anda.'; ?>
                        </p>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Our Electrical Panel Services Include:' : 'Layanan Panel Listrik yang Kami Tawarkan:'; ?>
                        </h2>

                        <p><b><?= $is_en ? 'Electrical Panel Design & Fabrication' : 'Desain & Pembuatan Panel Listrik'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Design of main electrical panels and sub panels based on building or industrial power requirements, including load analysis, component selection, and standardized panel layout.'
                                : 'Perancangan panel listrik utama dan sub panel sesuai spesifikasi kebutuhan daya bangunan atau industri. Termasuk analisa beban, pemilihan komponen (MCB, MCCB, ELCB, relay, dll), serta layout panel yang rapi dan terstandarisasi.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Electrical Panel Assembly (1 Phase & 3 Phase)' : 'Perakitan Panel Listrik (1 Phase & 3 Phase)'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Indoor and outdoor electrical panel assembly for 1-phase systems in small buildings and 3-phase systems for factories, buildings, and data centers. Panels are equipped with overload and short-circuit protection.'
                                : 'Jasa perakitan panel listrik indoor dan outdoor dengan sistem 1 phase untuk bangunan skala kecil, maupun 3 phase untuk pabrik, gedung, dan pusat data. Panel dilengkapi sistem proteksi arus lebih dan anti short circuit.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Panel Installation & Power Distribution' : 'Instalasi Panel & Distribusi Daya'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Installation of LVMDP, sub panels, and control panels to the main network, including power cable connection, grounding system, feeder setup, and distribution to electrical usage points.'
                                : 'Pemasangan panel LVMDP, sub panel, dan panel kontrol ke jaringan utama. Meliputi penyambungan kabel power, grounding system, pengaturan feeder & distribusi ke titik-titik pemakaian listrik.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Panel Upgrade & Rewiring' : 'Upgrade & Rewiring Panel'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Upgrade of old panels, replacement of damaged components, or reconfiguration of electrical panels to match new load requirements.'
                                : 'Upgrade panel lama, penggantian komponen rusak, atau penyusunan ulang konfigurasi panel listrik agar sesuai dengan beban dan kebutuhan baru.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Panel Integration with Automation & Generator Systems' : 'Integrasi Panel dengan Sistem Otomasi & Genset'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Integration of panels with backup generators, solar panels, smart metering, and optional IoT-based remote monitoring systems.'
                                : 'Kami melayani integrasi panel dengan genset backup, solar panel, smart metering, dan sistem monitoring jarak jauh berbasis IoT (optional).'; ?>
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/jasa-pasang-panel-listrik.webp"
                                     alt="<?= $keywords; ?>">
                            </div>
                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/pemasangan-panel-listrik.webp"
                                     alt="<?= $keywords; ?>">
                            </div>
                        </div>

                        <h2 class="section-title mb-20">
                            <?= $is_en ? 'Estimated Electrical Panel Assembly & Installation Cost' : 'Estimasi Biaya Pemasangan & Perakitan Panel'; ?>
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
                                        <th scope="col"><?= $is_en ? 'Service Type' : 'Jenis Layanan'; ?></th>
                                        <th scope="col"><?= $is_en ? 'Description' : 'Keterangan'; ?></th>
                                        <th scope="col"><?= $is_en ? 'Estimated Price' : 'Harga Estimasi'; ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $is_en ? '1-Phase Electrical Panel Assembly' : 'Perakitan Panel Listrik 1 Phase'; ?></td>
                                        <td><?= $is_en ? 'Home or small shop panel, capacity ≤ 2200 VA' : 'Panel rumah atau ruko kecil, kapasitas ≤ 2200 VA'; ?></td>
                                        <td><?= $is_en ? 'Starting from Rp 1.500.000' : 'Mulai dari Rp 1.500.000'; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?= $is_en ? '3-Phase Electrical Panel Assembly (LVMDP)' : 'Perakitan Panel Listrik 3 Phase (LVMDP)'; ?></td>
                                        <td><?= $is_en ? 'Main distribution panel for buildings or factories' : 'Panel distribusi utama untuk gedung atau pabrik'; ?></td>
                                        <td><?= $is_en ? 'Starting from Rp 3.500.000' : 'Mulai dari Rp 3.500.000'; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?= $is_en ? 'Sub-Distribution Panel Installation' : 'Pemasangan Panel Sub-Distribusi'; ?></td>
                                        <td><?= $is_en ? 'Branch panel for separate areas such as floors or rooms' : 'Panel cabang untuk area terpisah (lantai/ruangan)'; ?></td>
                                        <td><?= $is_en ? 'Starting from Rp 1.200.000 / unit' : 'Mulai dari Rp 1.200.000 / unit'; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?= $is_en ? 'MCB, ELCB, Timer, Capacitor Bank Installation' : 'Instalasi MCB, ELCB, Timer, Capacitor Bank'; ?></td>
                                        <td><?= $is_en ? 'Additional modules for main panels or sub panels' : 'Tambahan modul pada panel utama atau sub panel'; ?></td>
                                        <td><?= $is_en ? 'Starting from Rp 750.000 / point' : 'Mulai dari Rp 750.000 / titik'; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?= $is_en ? 'Existing Panel Replacement' : 'Penggantian Panel Existing'; ?></td>
                                        <td><?= $is_en ? 'Dismantling and installation of a new panel' : 'Pembongkaran dan pemasangan panel baru'; ?></td>
                                        <td><?= $is_en ? 'Estimated based on site survey' : 'Estimasi berdasarkan survei lapangan'; ?></td>
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

<?php $this->load->view('section-partners'); ?>

<!-- faq area -->
<?php $this->load->view('faq'); ?>
<!-- faq area end -->

<?php $this->load->view('product-terkait'); ?>

<!-- blog area -->
<?php $this->load->view('section-blogs'); ?>
<!-- blog area end -->


<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => $is_en
        ? "Electrical Panel & Sub Panel Services"
        : "Jasa Panel Listrik & Sub Panel",
    "description" => $is_en
        ? "Bangun Daya provides electrical panel assembly, installation, and main panel (LVMDP), sub panel, and 3-phase panel services for industrial, building, and commercial needs. Handled by experienced technicians based on applicable standards."
        : "Bangun Daya melayani jasa perakitan, pemasangan, dan instalasi panel listrik utama (LVMDP), sub panel, serta panel 3 phase untuk kebutuhan industri, gedung, dan komersial. Dikerjakan oleh teknisi berpengalaman sesuai standar PUIL dan SNI.",
    "url" => base_url($is_en ? "en/service/electrical-panel" : "jasa/panel-listrik"),
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
        "name" => $is_en ? "Electrical Panel Cost Estimate" : "Estimasi Biaya Panel Listrik",
        "itemListElement" => [
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "3-Phase Electrical Panel (LVMDP)"
                    : "Panel Listrik 3 Phase (LVMDP)",
                "description" => $is_en
                    ? "Main panel assembly and installation package complete with MCB, MCCB, and ELCB."
                    : "Paket perakitan dan pemasangan panel utama lengkap dengan MCB, MCCB, dan ELCB.",
                "priceCurrency" => "IDR",
                "price" => 7500000,
                "unitText" => "unit"
            ],
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "Sub Distribution Panel (1 Phase)"
                    : "Sub Panel Distribusi (1 Phase)",
                "description" => $is_en
                    ? "Supporting panel for specific rooms or areas, designed according to power requirements."
                    : "Panel pendukung untuk ruangan atau area tertentu, dirancang sesuai kebutuhan daya.",
                "priceCurrency" => "IDR",
                "price" => 2200000,
                "unitText" => "unit"
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>