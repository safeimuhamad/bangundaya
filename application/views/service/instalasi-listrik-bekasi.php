<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">
        <h1 class="breadcrumb-title">
            <?= $is_en ? 'Professional & Trusted Electrician Services in Bekasi' : 'Tukang Listrik Bekasi Profesional & Terpercaya'; ?>
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
                <?= $is_en ? 'Electrician Services in Bekasi' : 'Tukang Listrik Bekasi'; ?>
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
                                 alt="<?= $is_en ? 'Electrical installation service in Bekasi' : 'Jasa instalasi listrik Bekasi'; ?>">
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Electrical Installation Services in Bekasi for Homes, Offices, Shops, Warehouses, and Factories' : 'Jasa Instalasi Listrik Bekasi untuk Rumah, Kantor, Ruko, Gudang, hingga Pabrik'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Need a neat, safe, and experienced electrician in Bekasi? We provide electrical installation services in Bekasi for new installations, old installation repairs, additional electrical points, and cable route rearrangement. Our electrician team is experienced in handling residential, commercial, and industrial-scale building needs.'
                                : 'Butuh tukang listrik Bekasi yang rapi, aman, dan berpengalaman? Kami menyediakan jasa instalasi listrik Bekasi untuk pemasangan instalasi baru, perbaikan instalasi lama, penambahan titik listrik, hingga penataan ulang jalur kabel. Pekerjaan dikerjakan oleh jasa tukang listrik Bekasi yang terbiasa menangani kebutuhan bangunan rumah tinggal, area komersial, dan proyek skala industri.'; ?>
                        </p>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Our focus is simple: neat installation, safe power distribution, and long-lasting electrical systems.'
                                : 'Fokus kami sederhana: instalasi rapi, daya aman, dan sistem listrik tahan lama.'; ?>
                        </p>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Bekasi Electrician Services' : 'Layanan Tukang Listrik Bekasi'; ?>
                        </h2>

                        <h3 class="mb-20">
                            <?= $is_en ? 'Electrical Installation Services in Bekasi for New Projects & Renovations' : 'Jasa Instalasi Listrik Bekasi (Pemasangan Baru & Renovasi)'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'We handle electrical installation for new buildings or full renovation projects, including cable pulling, MCB installation, sockets, switches, lighting points, and safe grounding systems.'
                                : 'Kami melayani pemasangan instalasi listrik untuk bangunan baru atau renovasi total. Termasuk penarikan kabel, pemasangan MCB, stop kontak, saklar, lampu, serta sistem grounding yang aman.'; ?>
                        </p>

                        <h3 class="mb-20">
                            <?= $is_en ? 'Electrical Installation Repair & Troubleshooting' : 'Perbaikan Instalasi Listrik & Troubleshooting'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'For issues such as frequent power trips, MCB down, hot sockets, dim lights, or short circuit indications, our Bekasi electrician team is ready to inspect and repair the problem.'
                                : 'Untuk masalah seperti listrik sering jeglek, MCB turun, stop kontak panas, lampu redup, atau indikasi korsleting, tim tukang listrik Bekasi kami siap melakukan pengecekan dan perbaikan.'; ?>
                        </p>

                        <h3 class="mb-20">
                            <?= $is_en ? 'Additional Lighting Points & Power Outlets' : 'Penambahan Titik Lampu & Stop Kontak'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Need to add electrical points in a bedroom, kitchen, workspace, or business area? We can install new points with neat cable routes through ceilings or walls according to site conditions.'
                                : 'Mau tambah titik listrik di kamar, dapur, ruang kerja, atau area usaha? Kami bisa bantu pemasangan titik baru dengan jalur kabel yang rapi melalui plafon/dinding sesuai kondisi lokasi.'; ?>
                        </p>

                        <h3 class="mb-20">
                            <?= $is_en ? 'Electrical Panel Installation & Upgrade' : 'Pemasangan & Upgrade Panel Listrik'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'We provide electrical panel installation and tidying services for homes and businesses, including protection system upgrades for better safety.'
                                : 'Kami melayani pemasangan dan perapihan panel listrik untuk kebutuhan rumah maupun usaha, termasuk upgrade sistem proteksi agar lebih aman.'; ?>
                        </p>

                        <h3 class="mb-20">
                            <?= $is_en ? 'Periodic Electrical Maintenance' : 'Maintenance Listrik Berkala'; ?>
                        </h3>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Suitable for offices, shops, warehouses, and factories that require routine inspection to keep the electrical system stable and reduce the risk of disruption.'
                                : 'Cocok untuk kantor, ruko, gudang, dan pabrik yang butuh pemeriksaan rutin agar sistem listrik stabil dan meminimalkan risiko gangguan.'; ?>
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/tukang-listrik-panggilan.webp"
                                     alt="<?= $is_en ? 'On-call electrician service in Bekasi' : 'Tukang listrik panggilan Bekasi'; ?>">
                            </div>

                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/tukang-listrik.webp"
                                     alt="<?= $is_en ? 'Professional electrician in Bekasi' : 'Tukang listrik profesional Bekasi'; ?>">
                            </div>
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Electrical Installation Services in Bekasi for Various Needs' : 'Jasa Instalasi Listrik Bekasi untuk Berbagai Kebutuhan'; ?>
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
                                ? 'All work is handled by experienced and trained Bekasi electricians.'
                                : 'Semua pekerjaan dilakukan oleh jasa tukang listrik Bekasi yang berpengalaman dan terlatih.'; ?>
                        </p>

                        <h2 class="section-title mb-20">
                            <?= $is_en ? 'Estimated Electrical Installation Cost in Bekasi' : 'Estimasi Harga Instalasi Listrik Bekasi'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'Below are initial cost estimates for common electrical installation services in Bekasi. Prices may vary depending on technical specifications, material type, and work scope.'
                                : 'Berikut adalah estimasi biaya awal untuk layanan instalasi listrik Bekasi yang umum kami tangani. Harga dapat disesuaikan berdasarkan spesifikasi teknis, jenis material, dan ruang lingkup pekerjaan:'; ?>
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
                            <?= $is_en ? 'Electrical Installation Service Area in Bekasi' : 'Area Layanan Jasa Instalasi Listrik Bekasi'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'As an electrical contractor in Bekasi, we serve various areas including:'
                                : 'Sebagai kontraktor listrik/elektrikal Bekasi, kami melayani seluruh wilayah Bekasi, termasuk:'; ?>
                        </p>

                        <ul class="service-single-list mb-20">
                            <li><i class="far fa-check"></i>Bekasi Timur</li>
                            <li><i class="far fa-check"></i>Bekasi Barat</li>
                            <li><i class="far fa-check"></i>Bekasi Utara</li>
                            <li><i class="far fa-check"></i>Bekasi Selatan</li>
                            <li><i class="far fa-check"></i>Cikarang</li>
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
        ? "Bekasi Electrician Services | Electrical Installation & New Electrical Work"
        : "Tukang Listrik Bekasi | Jasa Instalasi Listrik & Pasang Listrik Baru",
    "description" => $is_en
        ? "Electrical installation services in Bekasi for homes, offices, shops, warehouses, and factories. Services include new electrical installation, cable pulling, lighting and socket points, grounding, electrical panel installation, and repair by experienced Bekasi electricians."
        : "Jasa instalasi listrik Bekasi untuk rumah, kantor, ruko, gudang, dan pabrik. Melayani jasa pasang listrik baru Bekasi, penarikan kabel, pemasangan titik lampu dan stop kontak, grounding, instalasi panel listrik, serta perbaikan oleh tukang listrik Bekasi berpengalaman.",
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
        [
            "@type" => "AdministrativeArea",
            "name" => "Bekasi"
        ],
        [
            "@type" => "AdministrativeArea",
            "name" => "Bekasi Timur"
        ],
        [
            "@type" => "AdministrativeArea",
            "name" => "Bekasi Barat"
        ],
        [
            "@type" => "AdministrativeArea",
            "name" => "Bekasi Utara"
        ],
        [
            "@type" => "AdministrativeArea",
            "name" => "Bekasi Selatan"
        ],
        [
            "@type" => "AdministrativeArea",
            "name" => "Cikarang"
        ]
    ],
    "hasOfferCatalog" => [
        "@type" => "OfferCatalog",
        "name" => $is_en
            ? "Electrical Installation Services in Bekasi"
            : "Layanan Jasa Instalasi Listrik Bekasi",
        "itemListElement" => [
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "New Electrical Installation Service in Bekasi"
                    : "Jasa Pasang Listrik Baru Bekasi",
                "description" => $is_en
                    ? "New electrical installation for homes, shops, and business buildings in Bekasi, including MCB, sockets, switches, lights, and grounding systems."
                    : "Pemasangan instalasi listrik baru untuk rumah, ruko, dan bangunan usaha di Bekasi, termasuk MCB, stop kontak, saklar, lampu, dan sistem grounding.",
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
                    ? "Electrical Cable Pulling Service in Bekasi"
                    : "Jasa Penarikan Kabel Instalasi Listrik Bekasi",
                "description" => $is_en
                    ? "NYM or NYY cable pulling through wall or ceiling conduit by professional Bekasi electricians."
                    : "Penarikan kabel NYM atau NYY melalui pipa conduit dinding atau plafon oleh tukang listrik Bekasi profesional.",
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
                    ? "Electrical Panel Installation in Bekasi"
                    : "Instalasi Panel Listrik Bekasi 1 Phase & 3 Phase",
                "description" => $is_en
                    ? "Electrical panel installation for MDP, SDP, and distribution panels with MCB, ELCB, and electrical protection systems."
                    : "Pembuatan dan pemasangan panel listrik MDP, SDP, dan panel distribusi lengkap dengan MCB, ELCB, serta sistem proteksi kelistrikan.",
                "priceCurrency" => "IDR",
                "price" => 3500000
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>