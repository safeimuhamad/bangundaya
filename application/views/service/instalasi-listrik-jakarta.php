<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">
        <h1 class="breadcrumb-title">
            <?= $is_en ? 'Professional & Trusted Electrical Installation Services in Jakarta' : 'Jasa Instalasi Listrik Jakarta Profesional & Terpercaya'; ?>
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
                <?= $is_en ? 'Electrical Installation in Jakarta' : 'Instalasi Listrik Jakarta'; ?>
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
                                 src="<?= base_url(); ?>template/assets/img/service/jasa-instalasi-listrik.webp"
                                 alt="<?= $is_en ? 'Electrical installation service in Jakarta' : 'Jasa instalasi listrik Jakarta'; ?>">
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? 'New Electrical Installation & Experienced Electricians in Jakarta' : 'Jasa Pasang Listrik Baru & Tukang Listrik Jakarta Berpengalaman'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'We provide electrical installation services in Jakarta for various needs, from new electrical installation, old installation renovation, to electrical system repair. Supported by experienced Jakarta electricians, we are ready to serve homes, offices, shops, buildings, and factories.'
                                : 'Kami menyediakan jasa instalasi listrik Jakarta untuk berbagai kebutuhan, mulai dari jasa pasang listrik baru Jakarta, renovasi instalasi lama, hingga perbaikan sistem kelistrikan. Didukung oleh tukang listrik Jakarta yang berpengalaman, kami siap melayani rumah tinggal, kantor, ruko, gedung, hingga pabrik.'; ?>
                        </p>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'All work is carried out with attention to safety, neatness, and long-term electrical reliability.'
                                : 'Seluruh pekerjaan dilakukan dengan memperhatikan standar keamanan, kerapihan instalasi, dan ketahanan sistem listrik untuk jangka panjang.'; ?>
                        </p>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Electrical Installation Services in Jakarta' : 'Layanan Jasa Instalasi Listrik Jakarta'; ?>
                        </h2>

                        <h3 class="mb-20">
                            <?= $is_en ? 'New Electrical Installation Service in Jakarta' : 'Jasa Pasang Listrik Baru Jakarta'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'New electrical installation service for houses, shops, and buildings. Suitable for new buildings or full renovations, including cable pulling, MCB installation, sockets, switches, lighting points, and grounding systems.'
                                : 'Layanan pemasangan instalasi listrik baru untuk bangunan rumah, ruko, dan gedung. Cocok untuk bangunan baru maupun renovasi total, termasuk penarikan kabel, pemasangan MCB, stop kontak, saklar, lampu, dan sistem grounding.'; ?>
                        </p>

                        <h3 class="mb-20">
                            <?= $is_en ? 'Electrical Installation Service in West Jakarta' : 'Jasa Instalasi Listrik Jakarta Barat'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'We serve electrical installation needs in West Jakarta for homes, offices, and businesses. Installations are arranged neatly through ceilings, walls, or suitable cable routes for safety and easier maintenance.'
                                : 'Kami melayani jasa instalasi listrik Jakarta Barat untuk rumah, kantor, dan usaha. Instalasi dikerjakan rapi di plafon atau jalur kabel, memastikan keamanan dan kemudahan perawatan.'; ?>
                        </p>

                        <h3 class="mb-20">
                            <?= $is_en ? 'Electrical Installation Service in South Jakarta' : 'Jasa Instalasi Listrik Jakarta Selatan'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Electrical installation services in South Jakarta with experienced technicians for homes, offices, and commercial buildings, focused on safe, neat, and efficient power distribution.'
                                : 'Layanan jasa instalasi listrik Jakarta Selatan dengan teknisi berpengalaman untuk rumah tinggal, kantor, dan gedung komersial. Fokus pada instalasi yang aman, estetis, dan efisien daya.'; ?>
                        </p>

                        <h3 class="mb-20">
                            <?= $is_en ? 'Electrician Service in East Jakarta' : 'Tukang Listrik Jakarta Timur'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'We provide electrician services in East Jakarta for installation, repair, and electrical maintenance. Ready to handle frequent MCB trips, short circuits, and cable route rearrangement.'
                                : 'Menyediakan tukang listrik Jakarta Timur untuk pemasangan, perbaikan, maupun maintenance instalasi listrik. Siap menangani masalah MCB sering turun, korsleting, hingga penataan ulang jalur kabel.'; ?>
                        </p>

                        <h3 class="mb-20">
                            <?= $is_en ? 'Electrician Service in South Jakarta' : 'Tukang Listrik Jakarta Selatan'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Need a professional and responsive electrician in South Jakarta? We can help with small to large-scale electrical work with neat and safe results.'
                                : 'Butuh tukang listrik Jakarta Selatan yang profesional dan responsif? Kami siap membantu pekerjaan skala kecil hingga besar dengan hasil kerja yang rapi dan aman.'; ?>
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/tukang-listrik-panggilan.webp"
                                     alt="<?= $is_en ? 'On-call electrician service in Jakarta' : 'Tukang listrik panggilan Jakarta'; ?>">
                            </div>

                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/tukang-listrik.webp"
                                     alt="<?= $is_en ? 'Professional electrician in Jakarta' : 'Tukang listrik profesional Jakarta'; ?>">
                            </div>
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Electrical Installation Services in Jakarta for Various Needs' : 'Jasa Instalasi Listrik Jakarta untuk Berbagai Kebutuhan'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en ? 'We serve:' : 'Kami melayani:'; ?>
                        </p>

                        <ul class="service-single-list mb-20">
                            <li><i class="far fa-check"></i><?= $is_en ? 'Residential electrical installation' : 'Instalasi listrik rumah tinggal'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'Office and shop electrical installation' : 'Instalasi listrik kantor & ruko'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'Building and apartment electrical installation' : 'Instalasi listrik gedung & apartemen'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'Warehouse and factory electrical installation' : 'Instalasi listrik gudang & pabrik'; ?></li>
                            <li><i class="far fa-check"></i><?= $is_en ? 'Electrical panel installation and repair' : 'Pemasangan dan perbaikan panel listrik'; ?></li>
                        </ul>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'All work is handled by experienced and trained Jakarta electricians.'
                                : 'Semua pekerjaan dilakukan oleh jasa tukang listrik Jakarta yang berpengalaman dan terlatih.'; ?>
                        </p>

                        <h2 class="section-title mb-20">
                            <?= $is_en ? 'Estimated Electrical Installation Cost in Jakarta' : 'Estimasi Biaya Instalasi Listrik Jakarta'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Below are initial cost estimates for common electrical installation services in Jakarta. Prices may vary depending on technical specifications, material type, and work scope.'
                                : 'Berikut adalah estimasi biaya awal untuk layanan instalasi listrik Jakarta yang umum kami tangani. Harga dapat disesuaikan berdasarkan spesifikasi teknis, jenis material, dan ruang lingkup pekerjaan:'; ?>
                        </p>

                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col"><?= $is_en ? 'Service Type' : 'Jenis Layanan'; ?></th>
                                        <th scope="col"><?= $is_en ? 'Estimated Starting Price' : 'Estimasi Harga Mulai'; ?></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><?= $is_en ? 'Electrical point installation: lights, sockets, switches, etc.' : 'Instalasi titik listrik (lampu, stop kontak, saklar, dll)'; ?></td>
                                        <td><?= $is_en ? 'Rp 75,000 – Rp 150,000 / point' : 'Rp 75.000 – Rp 150.000 / titik'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? 'Electrical cable pulling: NYM / NYY' : 'Penarikan kabel listrik (NYM / NYY)'; ?></td>
                                        <td><?= $is_en ? 'Rp 12,000 – Rp 25,000 / meter' : 'Rp 12.000 – Rp 25.000 / meter'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? '3-phase electrical panel installation' : 'Pemasangan Panel Listrik 3 Phase'; ?></td>
                                        <td><?= $is_en ? 'Starting from Rp 3,500,000' : 'Mulai Rp 3.500.000'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? 'Residential electrical installation package: 40–70 points' : 'Borongan instalasi listrik untuk rumah (40–70 titik)'; ?></td>
                                        <td><?= $is_en ? 'Starting from Rp 7,500,000' : 'Mulai Rp 7.500.000'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $is_en ? 'Electrical installation service for buildings: over 100 points' : 'Jasa instalasi listrik untuk gedung (>100 titik)'; ?></td>
                                        <td><?= $is_en ? 'Contact us for proposal & RAB estimate' : 'Hubungi kami untuk proposal & estimasi RAB'; ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <p style="font-style:italic; margin-top:10px; margin-bottom:20px;">
                                <strong><?= $is_en ? 'Note:' : 'Catatan:'; ?></strong>
                                <?= $is_en
                                    ? 'All estimates can be adjusted through site survey and technical work requirement calculation.'
                                    : 'Seluruh estimasi dapat kami sesuaikan melalui survey lapangan & perhitungan kebutuhan teknis pekerjaan.'; ?>
                            </p>
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Electrical Installation Service Area in Jakarta' : 'Area Layanan Jasa Instalasi Listrik Jakarta'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'As an electrical contractor in Jakarta, we serve all areas of DKI Jakarta, including:'
                                : 'Sebagai kontraktor listrik/elektrikal Jakarta, kami melayani seluruh wilayah DKI Jakarta, termasuk:'; ?>
                        </p>

                        <ul class="service-single-list mb-20">
                            <li><i class="far fa-check"></i>Jakarta Barat</li>
                            <li><i class="far fa-check"></i>Jakarta Selatan</li>
                            <li><i class="far fa-check"></i>Jakarta Timur</li>
                            <li><i class="far fa-check"></i>Jakarta Utara</li>
                            <li><i class="far fa-check"></i>Jakarta Pusat</li>
                        </ul>

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
        ? "Jakarta Electrical Installation Services | New Electrical Installation & Professional Electricians"
        : "Jasa Instalasi Listrik Jakarta | Pasang Listrik Baru & Tukang Listrik Profesional",
    "description" => $is_en
        ? "Electrical installation services in Jakarta for homes, offices, shops, buildings, and factories. Services include new electrical installation, electrical panel installation, cable pulling, lighting points, grounding, and repair by experienced Jakarta electricians."
        : "Jasa instalasi listrik Jakarta untuk rumah, kantor, ruko, gedung, dan pabrik. Melayani jasa pasang listrik baru Jakarta, instalasi panel listrik, penarikan kabel, titik lampu, grounding, serta perbaikan instalasi oleh tukang listrik Jakarta berpengalaman.",
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
            "https://www.instagram.com/"
        ]
    ],
    "areaServed" => [
        ["@type" => "AdministrativeArea", "name" => "Jakarta Barat"],
        ["@type" => "AdministrativeArea", "name" => "Jakarta Selatan"],
        ["@type" => "AdministrativeArea", "name" => "Jakarta Timur"],
        ["@type" => "AdministrativeArea", "name" => "Jakarta Utara"],
        ["@type" => "AdministrativeArea", "name" => "Jakarta Pusat"]
    ],
    "hasOfferCatalog" => [
        "@type" => "OfferCatalog",
        "name" => $is_en
            ? "Electrical Installation Services in Jakarta"
            : "Layanan Jasa Instalasi Listrik Jakarta",
        "itemListElement" => [
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "New Electrical Installation Service in Jakarta"
                    : "Jasa Pasang Listrik Baru Jakarta",
                "description" => $is_en
                    ? "New electrical installation for houses, shops, and buildings in Jakarta, including MCB, sockets, switches, lights, and grounding systems."
                    : "Pemasangan instalasi listrik baru untuk rumah, ruko, dan gedung di Jakarta, termasuk MCB, stop kontak, saklar, lampu, dan sistem grounding.",
                "priceCurrency" => "IDR",
                "priceSpecification" => [
                    "@type" => "PriceSpecification",
                    "minPrice" => 75000,
                    "maxPrice" => 150000,
                    "unitText" => $is_en ? "point" : "titik"
                ]
            ],
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "Electrical Cable Pulling Service in Jakarta"
                    : "Jasa Penarikan Kabel Instalasi Listrik Jakarta",
                "description" => $is_en
                    ? "NYM or NYY cable pulling through wall or ceiling conduit by experienced Jakarta electricians."
                    : "Penarikan kabel NYM atau NYY melalui pipa conduit dinding atau plafon oleh tukang listrik Jakarta berpengalaman.",
                "priceCurrency" => "IDR",
                "priceSpecification" => [
                    "@type" => "PriceSpecification",
                    "minPrice" => 12000,
                    "maxPrice" => 25000,
                    "unitText" => "meter"
                ]
            ],
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "Electrical Panel Installation in Jakarta"
                    : "Instalasi Panel Listrik Jakarta 1 Phase & 3 Phase",
                "description" => $is_en
                    ? "Electrical panel installation for MDP, SDP, and distribution panels with MCB, ELCB, and electrical protection systems."
                    : "Pembuatan dan pemasangan panel listrik MDP, SDP, dan panel distribusi lengkap dengan MCB, ELCB, dan sistem proteksi.",
                "priceCurrency" => "IDR",
                "price" => 3500000
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>