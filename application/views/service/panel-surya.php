<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">
        <h1 class="breadcrumb-title">
            <?= $is_en ? 'Solar Panel & PLTS Installation Services' : 'Pemasangan & Instalasi PLTS/Solar Panel'; ?>
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
                <?= $is_en ? 'Solar Panel Installation' : 'Pemasangan PLTS/Solar Panel'; ?>
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
                                 src="<?= base_url(); ?>template/assets/img/service/pemasangan-solar-panel.webp"
                                 alt="<?= $keywords; ?>">
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Solar Power System / PLTS' : 'PLTS/Pembangkit Listrik Tenaga Surya'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'PLTS stands for Solar Power Generation System, a renewable energy system that converts sunlight into electricity using solar panels or photovoltaic cells. This system is effective for reducing electricity costs and is environmentally friendly, with options such as On-Grid, Off-Grid, and Hybrid systems for homes, offices, factories, commercial buildings, and floating solar applications.'
                                : 'PLTS adalah singkatan dari Pembangkit Listrik Tenaga Surya, sebuah sistem energi terbarukan yang mengubah energi matahari menjadi listrik menggunakan panel surya (sel fotovoltaik), sangat efektif untuk menghemat biaya listrik dan ramah lingkungan, dengan jenis seperti On-Grid (tersinkronisasi dengan PLN), Off-Grid (dengan baterai), dan Hybrid, serta dapat diterapkan di atap rumah, kantor, pabrik atau bahkan mengapung di air (PLTS Terapung).'; ?>
                        </p>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Professional Solar Panel & PLTS Installation Services' : 'Layanan Profesional Pemasangan & Instalasi PLTS/Solar Panel'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'We provide solar panel and PLTS installation services for homes, office buildings, industrial facilities, and other commercial buildings. With a measured technical approach, we deliver efficient, energy-saving, and regulation-compliant solar panel installation solutions.'
                                : 'Kami melayani jasa pemasangan PLTS/panel surya untuk kebutuhan rumah tinggal, gedung perkantoran, industri, dan bangunan komersial lainnya. Dengan pendekatan teknis yang terukur, kami menyediakan solusi instalasi solar panel yang efisien, hemat energi, dan sesuai regulasi.'; ?>
                        </p>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Our Solar Power Installation Services Include:' : 'Layanan Instalasi Pembangkit Listrik Tenaga Surya yang Kami Sediakan:'; ?>
                        </h2>

                        <p><b><?= $is_en ? 'Rooftop Solar Panel Planning & Installation' : 'Perencanaan & Instalasi PLTS/Panel Surya untuk Atap Gedung/Rumah'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Installation of rooftop solar panels for homes and commercial buildings using quality components, precise mounting systems, and system configurations based on energy requirements.'
                                : 'Pemasangan PLTS atap rumah dan gedung komersial menggunakan komponen berkualitas tinggi, sistem mounting yang presisi, serta konfigurasi sistem sesuai kebutuhan energi.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'On-Grid, Off-Grid, and Hybrid System Design' : 'Desain Sistem On-Grid, Off-Grid, dan Hybrid'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'We design solar power systems based on consumption profiles and usage goals, whether for reducing electricity bills, independent power systems, or hybrid combinations.'
                                : 'Kami merancang sistem instalasi listrik tenaga surya berdasarkan profil konsumsi dan tujuan pengguna—baik untuk mengurangi tagihan listrik (on-grid), sistem mandiri (off-grid), atau kombinasi keduanya (hybrid).'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Inverter, Battery Storage, and Solar Controller Installation' : 'Pemasangan Inverter, Battery Storage, dan Solar Controller'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Integrated services from inverter installation, hybrid inverter setup, battery storage when required, to solar charge controller installation.'
                                : 'Layanan terintegrasi mulai dari pemasangan inverter (string/inverter hybrid), penyimpanan baterai (jika dibutuhkan), hingga solar charge controller.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Solar Panel System Integration to Building Electrical Panel' : 'Integrasi Sistem Solar Panel ke Panel Listrik Gedung'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'We ensure the solar power system is safely and optimally connected to the main distribution panel or sub-panel of your building.'
                                : 'Kami pastikan koneksi sistem tenaga surya terhubung secara aman dan optimal ke panel distribusi utama maupun sub-panel bangunan Anda.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Solar Panel Monitoring & Periodic Maintenance' : 'Monitoring & Perawatan Berkala Solar Panel'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Additional services include periodic inspection, panel cleaning, and system performance evaluation to maintain long-term efficiency.'
                                : 'Layanan tambahan berupa inspeksi berkala, pencucian panel, dan evaluasi performa sistem secara berkala agar tetap efisien dalam jangka panjang.'; ?>
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/pemasangan-panel-surya.webp"
                                     alt="<?= $keywords; ?>">
                            </div>

                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/jasa-pemasangan-panel-surya.webp"
                                     alt="<?= $keywords; ?>">
                            </div>
                        </div>

                        <h2 class="section-title mb-20">
                            <?= $is_en ? 'Estimated Solar Panel / PLTS Installation Cost' : 'Estimasi Biaya Instalasi PLTS/Panel Surya'; ?>
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
                                        <th scope="col"><?= $is_en ? 'Solar Panel / PLTS System Package' : 'Paket Sistem PLTS/Panel Surya'; ?></th>
                                        <th scope="col"><?= $is_en ? 'Estimated Cost*' : 'Estimasi Biaya*'; ?></th>
                                        <th scope="col"><?= $is_en ? 'Description' : 'Keterangan'; ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $is_en ? '900 watt Solar Panel' : 'Panel Surya 900 watt'; ?></td>
                                        <td><?= $is_en ? 'Starting from Rp 13 Million' : 'Mulai dari Rp 13 Juta'; ?></td>
                                        <td><?= $is_en ? 'Basic system for small-scale homes' : 'Sistem dasar untuk rumah skala kecil'; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?= $is_en ? '1300 watt Solar Panel' : 'Panel Surya 1300 watt'; ?></td>
                                        <td><?= $is_en ? 'Starting from Rp 18 Million' : 'Mulai dari Rp 18 Juta'; ?></td>
                                        <td><?= $is_en ? 'Suitable for modern homes and small offices' : 'Cocok untuk hunian modern & kantor kecil'; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?= $is_en ? '2200 watt Solar Panel' : 'Panel Surya 2200 watt'; ?></td>
                                        <td><?= $is_en ? 'Starting from Rp 25 Million' : 'Mulai Rp 25 Juta'; ?></td>
                                        <td><?= $is_en ? 'Optional battery can be added' : 'Dapat ditambahkan baterai opsional'; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?= $is_en ? 'Hybrid / Off-Grid PLTS System' : 'Sistem PLTS Hybrid / Off-Grid'; ?></td>
                                        <td><?= $is_en ? 'Starting from Rp 15 Million' : 'Mulai dari Rp 15 Juta'; ?></td>
                                        <td><?= $is_en ? 'Adjusted to project requirements and location' : 'Menyesuaikan kebutuhan dan lokasi proyek'; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?= $is_en ? 'Industrial / Commercial System' : 'Sistem Industri / Komersial'; ?></td>
                                        <td><?= $is_en ? 'Custom Estimate' : 'Custom Estimasi'; ?></td>
                                        <td><?= $is_en ? 'Price depends on project technical specifications' : 'Harga tergantung pada spesifikasi teknis proyek'; ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <p style="font-style:italic; margin-top:10px;">
                                <strong><?= $is_en ? 'Note:' : 'Catatan:'; ?></strong>
                                <?= $is_en
                                    ? 'Prices may vary depending on location, roof slope, inverter type, and additional components. Contact our team for a survey and official quotation.'
                                    : 'Harga dapat bervariasi tergantung lokasi, kemiringan atap, jenis inverter, dan komponen tambahan lainnya. Hubungi tim kami untuk survei dan penawaran resmi.'; ?>
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
        ? "Solar Panel & PLTS Installation Services"
        : "Jasa Pemasangan & Instalasi PLTS/Panel Surya",
    "description" => $is_en
        ? "Professional solar panel and PLTS installation services for homes, offices, and industrial facilities throughout Indonesia. Services include rooftop solar installation, on-grid and off-grid systems, and energy requirement calculation."
        : "Layanan profesional pemasangan dan instalasi PLTS panel surya (solar panel) untuk rumah, kantor, dan industri di seluruh Indonesia. Melayani pemasangan PLTS Atap, sistem on-grid dan off-grid, serta perhitungan kebutuhan daya dan ROI.",
    "url" => base_url($is_en ? "en/service/solar-panel-installation" : "jasa/pemasangan-panel-surya"),
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
        "name" => $is_en ? "Solar Panel / PLTS Installation Packages" : "Paket Instalasi PLTS/Panel Surya",
        "itemListElement" => [
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "900 Watt Solar Panel Installation"
                    : "Instalasi PLTS/Panel Surya 900 Watt",
                "description" => $is_en
                    ? "Complete 900W solar panel installation package for small households."
                    : "Paket lengkap pemasangan solar panel kapasitas 900W untuk rumah tangga kecil.",
                "priceCurrency" => "IDR",
                "price" => 9500000
            ],
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "1300 Watt Solar Panel Installation"
                    : "Instalasi PLTS/Panel Surya 1300 Watt",
                "description" => $is_en
                    ? "Standard 1300W solar panel system installation package for homes or small offices."
                    : "Paket standar pemasangan sistem panel surya 1300W untuk rumah atau kantor kecil.",
                "priceCurrency" => "IDR",
                "price" => 13500000
            ],
            [
                "@type" => "Offer",
                "name" => $is_en
                    ? "2200 Watt Solar Panel Installation"
                    : "Instalasi PLTS/Panel Surya 2200 Watt",
                "description" => $is_en
                    ? "Rooftop solar power system with 2200W capacity for larger homes or medium power usage."
                    : "Sistem PLTS atap kapasitas 2200W untuk rumah besar atau penggunaan daya sedang.",
                "priceCurrency" => "IDR",
                "price" => 21500000
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>