<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">
        <h1 class="breadcrumb-title">
            <?= $is_en ? 'Lightning Protection & Electrical Grounding System Installation' : 'Pemasangan Sistem Penangkal Petir & Grounding Listrik'; ?>
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
                <?= $is_en ? 'Lightning Protection & Grounding' : 'Penangkal Petir & Grounding'; ?>
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
                                 src="<?= base_url(); ?>template/assets/img/service/penangkal-petir.webp"
                                 alt="<?= $is_en ? 'Lightning protection and grounding installation service' : 'Jasa pemasangan penangkal petir dan grounding listrik'; ?>">
                        </div>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Optimal protection against lightning strikes and voltage surges. We provide complete lightning protection and grounding system installation services for office buildings, residential properties, factories, warehouses, and commercial facilities.'
                                : 'Perlindungan optimal dari risiko sambaran petir dan lonjakan tegangan. Kami menyediakan jasa pemasangan penangkal petir dan sistem grounding lengkap untuk gedung perkantoran, rumah tinggal, pabrik, warehouse, hingga instalasi komersial.'; ?>
                        </p>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Our Lightning Protection & Grounding Installation Services' : 'Layanan Instalasi Penangkal Petir & Grounding yang Kami Tawarkan'; ?>
                        </h2>

                        <p><b><?= $is_en ? 'Conventional & Electrostatic Lightning Protection Installation' : 'Instalasi Penangkal Petir Konvensional & Elektrostatis'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Installation of conventional and electrostatic lightning protection systems, including Early Streamer Emission (ESE), based on site requirements and risk level. Suitable for high-rise buildings, industrial areas, and premium residential properties.'
                                : 'Pemasangan penangkal petir tipe konvensional dan elektrostatis (Early Streamer Emission – ESE) sesuai kebutuhan lokasi dan tingkat risiko. Cocok untuk gedung bertingkat, kawasan industri, atau residensial premium.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Lightning Conductor & Protection System Installation' : 'Instalasi Penyalur Petir & Sistem Anti Petir'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Installation of air terminals, conductor cables, lightning current discharge systems, and technical placement of grounding rods to safely release electrical current into the earth.'
                                : 'Pemasangan air terminal, kabel konduktor, penyalur arus petir ke grounding, serta penempatan grounding rod secara teknis untuk pelepasan arus ke tanah dengan aman.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Electrical Grounding Installation Service' : 'Jasa Grounding Listrik'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Grounding system installation for main electrical panels, generators, and distribution systems to prevent voltage surges, electrical disturbances, and protect equipment safety.'
                                : 'Pemasangan grounding sistem untuk panel listrik utama, genset, dan sistem distribusi—menghindari lonjakan tegangan, gangguan listrik, dan menjaga keamanan peralatan.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Grounding Resistance Testing & Measurement' : 'Pengecekan & Pengukuran Grounding Resistance'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'We use an earth tester to ensure grounding resistance meets recommended standards. This is commonly required for safety audits, K3 compliance, and electrical inspection needs.'
                                : 'Kami menggunakan earth tester untuk memastikan tahanan tanah sesuai standar (<5 Ohm). Diperlukan untuk audit K3 dan pemenuhan regulasi PLN atau instansi lainnya.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Technical Documentation & Work Report' : 'Dokumentasi Teknis & Laporan Pekerjaan'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Preparation of work documentation, as-built drawings, installation reports, and inspection records that can be used for safety audits and insurance requirements.'
                                : 'Penyusunan dokumen kerja, gambar as-built, sertifikasi pemasangan, serta laporan inspeksi yang dapat digunakan untuk audit keselamatan dan asuransi.'; ?>
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/pasang-penangkal-petir.webp"
                                     alt="<?= $is_en ? 'Lightning protection system installation' : 'Pemasangan sistem penangkal petir'; ?>">
                            </div>

                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/jasa-pasang-penangkal-petir.webp"
                                     alt="<?= $is_en ? 'Professional grounding installation service' : 'Jasa pemasangan grounding listrik profesional'; ?>">
                            </div>
                        </div>

                        <h2 class="section-title mb-20">
                            <?= $is_en ? 'Estimated Lightning Protection & Grounding Installation Cost' : 'Estimasi Biaya Pemasangan Penangkal Petir & Grounding'; ?>
                        </h2>

                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col"><?= $is_en ? 'Work Item' : 'Item Pekerjaan'; ?></th>
                                        <th scope="col"><?= $is_en ? 'Estimated Cost (Starting From)' : 'Estimasi Harga (Start From)'; ?></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><?= $is_en ? 'Conventional Lightning Protection Installation' : 'Pemasangan Penangkal Petir Konvensional'; ?></td>
                                        <td><?= $is_en ? 'Rp 3,500,000 / point' : 'Rp 3.500.000 / titik'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? 'Electrostatic Lightning Protection Installation' : 'Pemasangan Penangkal Petir Elektrostatis'; ?></td>
                                        <td><?= $is_en ? 'Rp 9,000,000 / unit' : 'Rp 9.000.000 / unit'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? 'Lightning Conductor Cable Installation' : 'Instalasi Kabel Penyalur Petir'; ?></td>
                                        <td><?= $is_en ? 'Rp 30,000 / meter' : 'Rp 30.000 / meter'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? 'Grounding Rod + Chemical Installation' : 'Pemasangan Grounding Rod + Chemical'; ?></td>
                                        <td><?= $is_en ? 'Rp 1,250,000 / point' : 'Rp 1.250.000 / titik'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? 'Protection Panel & Lightning Arrester Panel' : 'Panel Proteksi & Lightning Arrestor Panel'; ?></td>
                                        <td><?= $is_en ? 'Rp 2,500,000 – Rp 7,500,000' : 'Rp 2.500.000 – Rp 7.500.000'; ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <p style="font-style:italic; margin-top:10px;">
                                <strong><?= $is_en ? 'Note:' : 'Catatan:'; ?></strong>
                                <?= $is_en
                                    ? 'Prices may vary depending on location, building height, soil condition, and type of protection system. Contact our team for a survey and official quotation.'
                                    : 'Harga dapat bervariasi tergantung lokasi, ketinggian bangunan, kondisi tanah, dan jenis sistem proteksi. Hubungi tim kami untuk survei dan penawaran resmi.'; ?>
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
        ? "Lightning Protection & Electrical Grounding Installation Services"
        : "Jasa Pemasangan Penangkal Petir & Grounding Listrik",
    "description" => $is_en
        ? "Professional lightning protection and electrical grounding installation services for homes, office buildings, factories, warehouses, and commercial facilities in Indonesia."
        : "Bangun Daya menyediakan layanan profesional pemasangan penangkal petir dan sistem grounding listrik untuk rumah, gedung, pabrik, warehouse, dan area komersial di Indonesia.",
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
        "name" => $is_en
            ? "Lightning Protection & Grounding Installation Cost Estimate"
            : "Estimasi Biaya Pemasangan Penangkal Petir & Grounding",
        "itemListElement" => [
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "Conventional Lightning Protection Installation"
                    : "Pemasangan Penangkal Petir Konvensional",
                "description" => $is_en
                    ? "Lightning protection installation using conductor and grounding systems for homes, shops, and buildings."
                    : "Pemasangan sistem proteksi sambaran petir berbasis konduktor dan grounding untuk rumah, ruko, dan bangunan.",
                "priceCurrency" => "IDR",
                "price" => 3500000
            ],
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "Electrostatic Lightning Protection Installation"
                    : "Pemasangan Penangkal Petir Elektrostatis",
                "description" => $is_en
                    ? "Electrostatic lightning protection system installation for high-rise buildings, factories, and commercial facilities."
                    : "Pemasangan sistem penangkal petir elektrostatis untuk gedung bertingkat, pabrik, dan fasilitas komersial.",
                "priceCurrency" => "IDR",
                "price" => 9000000
            ],
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "Grounding Rod and Chemical Installation"
                    : "Pemasangan Grounding Rod + Chemical",
                "description" => $is_en
                    ? "Grounding system installation using grounding rod and chemical treatment to improve grounding resistance."
                    : "Pemasangan sistem grounding menggunakan grounding rod dan chemical untuk membantu menurunkan tahanan tanah.",
                "priceCurrency" => "IDR",
                "price" => 1250000
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>