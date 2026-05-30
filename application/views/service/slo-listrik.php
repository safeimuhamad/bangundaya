<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">
        <h1 class="breadcrumb-title">
            <?= $is_en ? 'SLO & NIDI PLN Certification Services' : 'Sertifikasi SLO & NIDI PLN'; ?>
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
                <?= $is_en ? 'SLO & NIDI PLN' : 'Sertifikasi SLO & NIDI PLN'; ?>
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
                                 src="<?= base_url(); ?>template/assets/img/service/harga-slo-dan-nidi.webp"
                                 alt="<?= $is_en ? 'SLO and NIDI PLN certification service' : 'Jasa sertifikasi SLO dan NIDI PLN'; ?>">
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Official Legality for New Electrical Installations, Safe and Standardized' : 'Legalitas Resmi untuk Instalasi Listrik Baru, Aman dan Terstandarisasi'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'We provide professional services for SLO (Certificate of Operation Worthiness) and NIDI (Installation Identity Number) as required documents for new electricity connections to PLN. The process is carried out according to regulations through certified technical teams and accredited Electrical Inspection Institutions.'
                                : 'Kami menyediakan layanan profesional untuk pembuatan SLO (Sertifikat Laik Operasi) dan NIDI (Nomor Identitas Instalasi) sebagai dokumen wajib untuk penyambungan listrik baru ke PLN. Proses dilakukan sesuai regulasi, melalui tim teknis bersertifikat dan Lembaga Inspeksi Teknik (LIT) yang terakreditasi.'; ?>
                        </p>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Services We Offer' : 'Layanan yang Kami Tawarkan'; ?>
                        </h2>

                        <p><b><?= $is_en ? 'Installation Inspection & Technical Testing' : 'Pemeriksaan Instalasi & Pengujian Teknis'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Comprehensive inspection of electrical panels, cable installation, lighting points, grounding protection, and MCB systems for power capacities from 450VA to 197kVA, including single-phase and three-phase installations.'
                                : 'Audit menyeluruh terhadap panel listrik, instalasi kabel, titik lampu, proteksi grounding, dan sistem MCB. Untuk daya listrik 450VA hingga 197kVA, baik 1 Phase maupun 3 Phase.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'SLO Certificate Processing' : 'Pengurusan Sertifikat SLO'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'We assist in processing the operation worthiness certificate through official inspection partners and related technical institutions.'
                                : 'Kami bantu urus Sertifikat Laik Operasi melalui lembaga inspeksi resmi dan rekanan teknis terkait.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'NIDI Number Application' : 'Pengajuan Nomor NIDI (Nomor Identitas Instalasi)'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Technical requirements integrated into the PLN system as the electrical installation identity for your building.'
                                : 'Persyaratan teknis yang terintegrasi ke dalam sistem PLN sebagai identitas instalasi listrik bangunan Anda.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Installation Consultation & Repair Before Certification' : 'Konsultasi Instalasi & Perbaikan Sebelum Sertifikasi'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'If findings are discovered during inspection, we can assist with technical corrections and revisions according to applicable standards.'
                                : 'Jika ada temuan saat inspeksi, kami siap bantu tindak lanjut koreksi teknis dan revisi sesuai standar yang berlaku.'; ?>
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/harga-nidi-slo.webp"
                                     alt="<?= $is_en ? 'SLO and NIDI service cost estimate' : 'Harga NIDI dan SLO listrik'; ?>">
                            </div>

                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/jasa-pembuatan-slo.webp"
                                     alt="<?= $is_en ? 'Electrical SLO certificate processing service' : 'Jasa pembuatan SLO listrik'; ?>">
                            </div>
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? 'When Do You Need SLO & NIDI?' : 'Kapan Anda Membutuhkan SLO & NIDI?'; ?>
                        </h2>

                        <ul class="service-single-list mb-20">
                            <li><i class="far fa-check"></i><?= $is_en ? 'When applying for a new electricity connection to PLN' : 'Saat mengajukan pasang listrik baru ke PLN'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'When increasing electrical power capacity' : 'Saat meningkatkan daya (naik daya) listrik'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'After completing renovation or building construction projects' : 'Setelah selesai proyek renovasi atau pembangunan gedung'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'For internal company audits, K3 certification, or operational feasibility requirements' : 'Untuk keperluan audit internal perusahaan, sertifikasi K3, atau kelayakan operasional'; ?></li>
                        </ul>

                        <h2 class="section-title mb-20">
                            <?= $is_en ? 'Estimated SLO & NIDI Processing Cost' : 'Estimasi Harga Pembuatan SLO & NIDI'; ?>
                        </h2>

                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col"><?= $is_en ? 'Service Type' : 'Jenis Layanan'; ?></th>
                                        <th scope="col"><?= $is_en ? 'Starting Price' : 'Harga Mulai'; ?></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><?= $is_en ? 'SLO for Residential Power 450–2200 VA' : 'SLO untuk Rumah Daya 450–2200 VA'; ?></td>
                                        <td><?= $is_en ? 'Rp 650,000 – Rp 950,000' : 'Rp 650.000 – Rp 950.000'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? 'SLO for Shop / Store 3,500–5,500 VA' : 'SLO untuk Ruko / Toko 3.500–5.500 VA'; ?></td>
                                        <td><?= $is_en ? 'Starting from Rp 1,250,000' : 'Mulai Rp 1.250.000'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? 'SLO + NIDI for 11,000–197,000 VA Power' : 'SLO + NIDI Daya 11.000–197.000 VA'; ?></td>
                                        <td><?= $is_en ? 'Starting from Rp 2,500,000' : 'Mulai Rp 2.500.000'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? 'Installation Repair Cost Before SLO' : 'Biaya Perbaikan Instalasi Sebelum SLO'; ?></td>
                                        <td><?= $is_en ? 'Contact us for survey' : 'Hubungi untuk survey'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? 'Fast Service 24–48 Hours' : 'Layanan Cepat (Urgent 24–48 jam)'; ?></td>
                                        <td><?= $is_en ? 'Starting from Rp 500,000 additional fee' : 'Mulai Rp 500.000 tambahan'; ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <p style="font-style:italic; margin-top:10px;">
                                <strong><?= $is_en ? 'Note:' : 'Catatan:'; ?></strong>
                                <?= $is_en
                                    ? 'Prices depend on electrical power capacity, location, number of points, and installation conditions in the field.'
                                    : 'Harga tergantung daya listrik, lokasi, jumlah titik, dan kondisi instalasi di lapangan.'; ?>
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
        ? "Electrical SLO & NIDI PLN Certification Services"
        : "Jasa Pembuatan SLO Listrik & NIDI PLN",
    "description" => $is_en
        ? "Professional SLO and NIDI processing services for new electrical installations, power upgrades, and PLN legality requirements for residential, commercial, and industrial buildings."
        : "Layanan profesional pembuatan Sertifikat Laik Operasi (SLO) dan NIDI untuk instalasi listrik baru, tambah daya, serta kebutuhan legalitas PLN untuk rumah, bangunan komersial, dan industri.",
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
        "name" => $is_en ? "SLO & NIDI Service Packages" : "Paket Pembuatan SLO & NIDI",
        "itemListElement" => [
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "SLO for Residential Power 450–2200 VA"
                    : "SLO untuk Rumah Daya 450–2200 VA",
                "description" => $is_en
                    ? "SLO processing service for residential electrical installations with 450–2200 VA power capacity."
                    : "Layanan pembuatan SLO untuk instalasi listrik rumah dengan daya 450–2200 VA.",
                "priceCurrency" => "IDR",
                "price" => 650000
            ],
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "SLO for Shop / Store 3500–5500 VA"
                    : "SLO untuk Ruko / Toko 3500–5500 VA",
                "description" => $is_en
                    ? "SLO processing service for shops, stores, and small commercial buildings."
                    : "Layanan pembuatan SLO untuk ruko, toko, dan bangunan komersial kecil.",
                "priceCurrency" => "IDR",
                "price" => 1250000
            ],
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "SLO + NIDI for 11000–197000 VA"
                    : "SLO + NIDI Daya 11000–197000 VA",
                "description" => $is_en
                    ? "Complete SLO and NIDI processing service for larger commercial and industrial electrical installations."
                    : "Layanan lengkap pembuatan SLO dan NIDI untuk instalasi listrik komersial besar dan industri.",
                "priceCurrency" => "IDR",
                "price" => 2500000
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>