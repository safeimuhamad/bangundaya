<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">
        <h1 class="breadcrumb-title">
            <?= $is_en ? 'Professional & Trusted Electrical Installation Services in Bogor' : 'Jasa Instalasi Listrik Bogor Profesional & Terpercaya'; ?>
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
                <?= $is_en ? 'Electrical Installation in Bogor' : 'Instalasi Listrik Bogor'; ?>
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
                                 alt="<?= $is_en ? 'Electrical installation service in Bogor' : 'Jasa instalasi listrik Bogor'; ?>">
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? 'New Electrical Installation & Experienced Electricians in Bogor' : 'Jasa Pasang Listrik Baru & Tukang Listrik Bogor Berpengalaman'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'We provide electrical installation services in Bogor for various needs, from new electrical installation, old installation renovation, to electrical system repair. Supported by experienced Bogor electricians, we are ready to serve homes, offices, shops, buildings, and factories.'
                                : 'Kami menyediakan jasa instalasi listrik Bogor untuk berbagai kebutuhan, mulai dari jasa pasang listrik baru Bogor, renovasi instalasi lama, hingga perbaikan sistem kelistrikan. Didukung oleh tukang listrik Bogor yang berpengalaman, kami siap melayani rumah tinggal, kantor, ruko, gedung, hingga pabrik.'; ?>
                        </p>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'All work is carried out with attention to safety, neatness, and long-term electrical reliability.'
                                : 'Seluruh pekerjaan dilakukan dengan memperhatikan standar keamanan, kerapihan instalasi, dan ketahanan sistem listrik untuk jangka panjang.'; ?>
                        </p>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Electrical Installation Services in Bogor' : 'Layanan Jasa Instalasi Listrik Bogor'; ?>
                        </h2>

                        <h3 class="mb-20">
                            <?= $is_en ? 'New Electrical Installation Service in Bogor' : 'Jasa Pasang Listrik Baru Bogor'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'New electrical installation service for houses, shops, and buildings. Suitable for new buildings or full renovations, including cable pulling, MCB installation, sockets, switches, lighting points, and grounding systems.'
                                : 'Layanan pemasangan instalasi listrik baru untuk bangunan rumah, ruko, dan gedung. Cocok untuk bangunan baru maupun renovasi total, termasuk penarikan kabel, pemasangan MCB, stop kontak, saklar, lampu, dan sistem grounding.'; ?>
                        </p>

                        <h3 class="mb-20">
                            <?= $is_en ? 'Electrical Installation Service in West Bogor' : 'Jasa Instalasi Listrik Bogor Barat'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'We serve electrical installation needs in West Bogor for homes, offices, and businesses. Installations are arranged neatly through ceilings, walls, or suitable cable routes for safety and easier maintenance.'
                                : 'Kami melayani jasa instalasi listrik Bogor Barat untuk rumah, kantor, dan usaha. Instalasi dikerjakan rapi di plafon atau jalur kabel, memastikan keamanan dan kemudahan perawatan.'; ?>
                        </p>

                        <h3 class="mb-20">
                            <?= $is_en ? 'Electrical Installation Service in South Bogor' : 'Jasa Instalasi Listrik Bogor Selatan'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Electrical installation services in South Bogor with experienced technicians for homes, offices, and commercial buildings, focused on safe, neat, and efficient power distribution.'
                                : 'Layanan jasa instalasi listrik Bogor Selatan dengan teknisi berpengalaman untuk rumah tinggal, kantor, dan gedung komersial. Fokus pada instalasi yang aman, estetis, dan efisien daya.'; ?>
                        </p>

                        <h3 class="mb-20">
                            <?= $is_en ? 'Electrician Service in East Bogor' : 'Tukang Listrik Bogor Timur'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'We provide electrician services in East Bogor for installation, repair, and electrical maintenance. Ready to handle frequent MCB trips, short circuits, and cable route rearrangement.'
                                : 'Menyediakan tukang listrik Bogor Timur untuk pemasangan, perbaikan, maupun maintenance instalasi listrik. Siap menangani masalah MCB sering turun, korsleting, hingga penataan ulang jalur kabel.'; ?>
                        </p>

                        <h3 class="mb-20">
                            <?= $is_en ? 'Electrician Service in South Bogor' : 'Tukang Listrik Bogor Selatan'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Need a professional and responsive electrician in South Bogor? We can help with small to large-scale electrical work with neat and safe results.'
                                : 'Butuh tukang listrik Bogor Selatan yang profesional dan responsif? Kami siap membantu pekerjaan skala kecil hingga besar dengan hasil kerja yang rapi dan aman.'; ?>
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/tukang-listrik-panggilan.webp"
                                     alt="<?= $is_en ? 'On-call electrician service in Bogor' : 'Tukang listrik panggilan Bogor'; ?>">
                            </div>

                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/tukang-listrik.webp"
                                     alt="<?= $is_en ? 'Professional electrician in Bogor' : 'Tukang listrik profesional Bogor'; ?>">
                            </div>
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Electrical Installation Services in Bogor for Various Needs' : 'Jasa Instalasi Listrik Bogor untuk Berbagai Kebutuhan'; ?>
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
                                ? 'All work is handled by experienced and trained Bogor electricians.'
                                : 'Semua pekerjaan dilakukan oleh jasa tukang listrik Bogor yang berpengalaman dan terlatih.'; ?>
                        </p>

                        <h2 class="section-title mb-20">
                            <?= $is_en ? 'Estimated Electrical Installation Cost in Bogor' : 'Estimasi Biaya Instalasi Listrik Bogor'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Below are initial cost estimates for common electrical installation services in Bogor. Prices may vary depending on technical specifications, material type, and work scope.'
                                : 'Berikut adalah estimasi biaya awal untuk layanan instalasi listrik Bogor yang umum kami tangani. Harga dapat disesuaikan berdasarkan spesifikasi teknis, jenis material, dan ruang lingkup pekerjaan:'; ?>
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
                            <?= $is_en ? 'Electrical Installation Service Area in Bogor' : 'Area Layanan Jasa Instalasi Listrik Bogor'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'As an electrical contractor in Bogor, we serve Bogor City and Bogor Regency areas, including:'
                                : 'Sebagai kontraktor listrik/elektrikal Bogor, kami melayani area Kota Bogor dan Kabupaten Bogor, termasuk:'; ?>
                        </p>

                        <ul class="service-single-list mb-20">
                            <li><i class="far fa-check"></i>Bogor Barat</li>
                            <li><i class="far fa-check"></i>Bogor Selatan</li>
                            <li><i class="far fa-check"></i>Bogor Timur</li>
                            <li><i class="far fa-check"></i>Bogor Utara</li>
                            <li><i class="far fa-check"></i>Cibinong</li>
                            <li><i class="far fa-check"></i>Sentul</li>
                            <li><i class="far fa-check"></i>Ciomas</li>
                            <li><i class="far fa-check"></i>Dramaga</li>
                            <li><i class="far fa-check"></i>Ciawi</li>
                            <li><i class="far fa-check"></i>Sukaraja</li>
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
        ? "Bogor Electrical Installation Services | New Electrical Installation & Professional Electricians"
        : "Jasa Instalasi Listrik Bogor | Pasang Listrik Baru & Tukang Listrik Profesional",
    "description" => $is_en
        ? "Electrical installation services in Bogor for homes, offices, shops, buildings, and factories. Services include new electrical installation, electrical panel installation, cable pulling, lighting points, grounding, and repair by experienced Bogor electricians."
        : "Jasa instalasi listrik Bogor untuk rumah, kantor, ruko, gedung, dan pabrik. Melayani jasa pasang listrik baru Bogor, instalasi panel listrik, penarikan kabel, titik lampu, grounding, serta perbaikan instalasi oleh tukang listrik Bogor berpengalaman.",
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
        ["@type" => "AdministrativeArea", "name" => "Bogor Barat"],
        ["@type" => "AdministrativeArea", "name" => "Bogor Selatan"],
        ["@type" => "AdministrativeArea", "name" => "Bogor Timur"],
        ["@type" => "AdministrativeArea", "name" => "Bogor Utara"],
        ["@type" => "AdministrativeArea", "name" => "Bogor Pusat"],
        ["@type" => "AdministrativeArea", "name" => "Cibinong"],
        ["@type" => "AdministrativeArea", "name" => "Sentul"],
        ["@type" => "AdministrativeArea", "name" => "Ciomas"],
        ["@type" => "AdministrativeArea", "name" => "Dramaga"],
        ["@type" => "AdministrativeArea", "name" => "Ciawi"],
        ["@type" => "AdministrativeArea", "name" => "Sukaraja"]
    ],
    "hasOfferCatalog" => [
        "@type" => "OfferCatalog",
        "name" => $is_en
            ? "Electrical Installation Services in Bogor"
            : "Layanan Jasa Instalasi Listrik Bogor",
        "itemListElement" => [
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "New Electrical Installation Service in Bogor"
                    : "Jasa Pasang Listrik Baru Bogor",
                "description" => $is_en
                    ? "New electrical installation for houses, shops, and buildings in Bogor, including MCB, sockets, switches, lights, and grounding systems."
                    : "Pemasangan instalasi listrik baru untuk rumah, ruko, dan gedung di Bogor, termasuk MCB, stop kontak, saklar, lampu, dan sistem grounding.",
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
                    ? "Electrical Cable Pulling Service in Bogor"
                    : "Jasa Penarikan Kabel Instalasi Listrik Bogor",
                "description" => $is_en
                    ? "NYM or NYY cable pulling through wall or ceiling conduit by experienced Bogor electricians."
                    : "Penarikan kabel NYM atau NYY melalui pipa conduit dinding atau plafon oleh tukang listrik Bogor berpengalaman.",
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
                    ? "Electrical Panel Installation in Bogor"
                    : "Instalasi Panel Listrik Bogor 1 Phase & 3 Phase",
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