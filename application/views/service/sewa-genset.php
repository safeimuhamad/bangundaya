<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">
        <h1 class="breadcrumb-title">
            <?= $is_en ? 'Generator Set / Genset Rental' : 'Rental / Sewa Generator Set Genset'; ?>
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
                <?= $is_en ? 'Genset Rental' : 'Sewa Genset'; ?>
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
                                 src="<?= base_url(); ?>template/assets/img/service/sewa-genset-terdekat.webp"
                                 alt="<?= $is_en ? 'Generator set rental service' : 'Jasa sewa genset terdekat'; ?>">
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? '10–1500 KVA Genset Rental for Projects & Business Operations' : 'Sewa Genset 10–1500 KVA untuk Proyek & Operasional Bisnis'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                                ? 'We provide generator set rental services with various capacity options for project electricity needs, factories, events, and operational backup power. Silent and open type units are available, supported by professional services from delivery, installation, operation, to on-site maintenance.'
                                : 'Kami menyediakan layanan sewa genset dengan berbagai pilihan kapasitas untuk kebutuhan kelistrikan proyek, pabrik, event, maupun backup operasional. Tersedia tipe silent dan open, dengan layanan profesional dari pengiriman, instalasi, pengoperasian, hingga pemeliharaan di lokasi.'; ?>
                        </p>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Why Choose Our Genset Rental Service?' : 'Kenapa Memilih Layanan Kami?'; ?>
                        </h2>

                        <p><b><?= $is_en ? 'Complete & Well-Maintained Units' : 'Pilihan Unit Lengkap & Terawat'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Various generator capacities are available, from 10 KVA, 20 KVA, 30 KVA, 40 KVA, 50 KVA, 60 KVA, 70 KVA, 80 KVA, 100 KVA, 120 KVA, 150 KVA, 500 KVA, up to 2000 KVA, with regular maintenance schedules and ready-to-use conditions.'
                                : 'Tersedia berbagai tipe dan kapasitas mulai dari sewa genset 10 KVA, 20 KVA, 30 KVA, 40 KVA, 50 KVA, 60 KVA, 70 KVA, 80 KVA, 100 KVA, 120 KVA, 150 KVA, 500 KVA hingga 2000 KVA, dengan jadwal perawatan berkala dan siap pakai.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Expert Support & 24-Hour Service' : 'Dukungan Tenaga Ahli & Layanan 24 Jam'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Experienced technicians are ready to support operation, troubleshooting, and field maintenance.'
                                : 'Teknisi berpengalaman siap menangani pengoperasian, troubleshoot, serta maintenance di lapangan.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Flexible & Competitive Pricing' : 'Harga Fleksibel & Kompetitif'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Daily, weekly, and monthly rental schemes are available. Price estimates are adjusted based on rental duration, generator capacity, and project location.'
                                : 'Tersedia skema sewa per hari, mingguan, maupun bulanan. Estimasi harga disesuaikan dengan durasi sewa, kapasitas, dan lokasi proyek.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Solutions for Various Needs' : 'Solusi untuk Berbagai Kebutuhan'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                                ? 'Suitable for factories, office buildings, outdoor events, hospitals, data centers, logistics centers, and other backup power needs.'
                                : 'Cocok untuk pabrik, gedung perkantoran, event outdoor, rumah sakit, pusat data, logistik center, dan kebutuhan power backup lainnya.'; ?>
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/sewa-genset.webp"
                                     alt="<?= $is_en ? 'Silent genset rental service' : 'Layanan sewa genset silent'; ?>">
                            </div>

                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                     src="<?= base_url(); ?>template/assets/img/service/rental-genset.webp"
                                     alt="<?= $is_en ? 'Industrial generator set rental' : 'Rental genset industri'; ?>">
                            </div>
                        </div>

                        <h2 class="section-title mb-20">
                            <?= $is_en ? 'Available Genset Capacity Specifications' : 'Spesifikasi Kapasitas Genset yang Tersedia'; ?>
                        </h2>

                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col"><?= $is_en ? 'Genset Capacity' : 'Kapasitas Genset'; ?></th>
                                        <th scope="col"><?= $is_en ? 'Average Power Output' : 'Daya Output Rata-rata'; ?></th>
                                        <th scope="col"><?= $is_en ? 'Common Application' : 'Aplikasi Umum'; ?></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>10 - 40 KVA</td>
                                        <td>± 32 kW</td>
                                        <td><?= $is_en ? 'Shops, small offices, cafes, small events' : 'Toko, kantor kecil, cafe, event kecil'; ?></td>
                                    </tr>

                                    <tr>
                                        <td>60 KVA</td>
                                        <td>± 48 kW</td>
                                        <td><?= $is_en ? 'Restaurants, clinics, warehouses, small events' : 'Restoran, klinik, gudang, event kecil'; ?></td>
                                    </tr>

                                    <tr>
                                        <td>100 KVA</td>
                                        <td>± 50 kW</td>
                                        <td><?= $is_en ? 'Offices, medium construction projects, medium events' : 'Perkantoran, konstruksi menengah, event sedang'; ?></td>
                                    </tr>

                                    <tr>
                                        <td>150 KVA</td>
                                        <td>± 120 kW</td>
                                        <td><?= $is_en ? 'Hotels, supermarkets, light industry, medium events' : 'Hotel, supermarket, industri ringan, event sedang'; ?></td>
                                    </tr>

                                    <tr>
                                        <td>250 KVA</td>
                                        <td>± 200 kW</td>
                                        <td><?= $is_en ? 'Large industry, hospitals, large events' : 'Industri besar, rumah sakit, event besar'; ?></td>
                                    </tr>

                                    <tr>
                                        <td>500 KVA</td>
                                        <td>± 400 kW</td>
                                        <td><?= $is_en ? 'Data centers, multi-building factories, large events' : 'Data center, pabrik multigedung, event besar'; ?></td>
                                    </tr>

                                    <tr>
                                        <td>1000 KVA</td>
                                        <td>± 800 kW</td>
                                        <td><?= $is_en ? 'Industrial areas, backup power plants, large events' : 'Kawasan industri, pembangkit cadangan, event besar'; ?></td>
                                    </tr>

                                    <tr>
                                        <td>1500 KVA</td>
                                        <td>± 1200 kW</td>
                                        <td><?= $is_en ? 'Industrial areas, backup power plants, large events' : 'Kawasan industri, pembangkit cadangan, event besar'; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h2 class="section-title mb-20">
                            <?= $is_en ? 'Estimated Genset Rental Prices' : 'Estimasi Harga Sewa Genset'; ?>
                        </h2>

                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col"><?= $is_en ? 'Genset Capacity' : 'Kapasitas Genset'; ?></th>
                                        <th scope="col"><?= $is_en ? 'Estimated Daily Price*' : 'Estimasi Harga per Hari*'; ?></th>
                                        <th scope="col"><?= $is_en ? 'Estimated Monthly Price*' : 'Estimasi Harga per Bulan*'; ?></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>10 KVA</td>
                                        <td>Rp 700.000</td>
                                        <td>Rp 9.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>20 KVA</td>
                                        <td>Rp 850.000</td>
                                        <td>Rp 10.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>30 KVA</td>
                                        <td>Rp 900.000</td>
                                        <td>Rp 10.500.000</td>
                                    </tr>
                                    <tr>
                                        <td>40 KVA</td>
                                        <td>Rp 950.000</td>
                                        <td>Rp 11.500.000</td>
                                    </tr>
                                    <tr>
                                        <td>50 KVA</td>
                                        <td>Rp 1.000.000</td>
                                        <td>Rp 13.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>60 KVA</td>
                                        <td>Rp 1.250.000</td>
                                        <td>Rp 15.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>70 KVA</td>
                                        <td>Rp 1.550.000</td>
                                        <td>Rp 16.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>80 KVA</td>
                                        <td>Rp 1.550.000</td>
                                        <td>Rp 18.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>100 KVA</td>
                                        <td>Rp 1.750.000</td>
                                        <td>Rp 19.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>120 KVA</td>
                                        <td>Rp 2.500.000</td>
                                        <td>Rp 22.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>150 KVA</td>
                                        <td>Rp 2.500.000</td>
                                        <td>Rp 23.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>250 KVA</td>
                                        <td>Rp 3.500.000</td>
                                        <td>Rp 32.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>500 KVA</td>
                                        <td>Rp 6.500.000</td>
                                        <td>Rp 70.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>1000 KVA</td>
                                        <td>Rp 11.000.000</td>
                                        <td>Rp 95.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>1500 KVA</td>
                                        <td><?= $is_en ? 'Contact us' : 'Hubungi kami'; ?></td>
                                        <td><?= $is_en ? 'Contact us' : 'Hubungi kami'; ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <p style="font-style:italic; margin-top:10px;">
                                <strong><?= $is_en ? 'Note:' : 'Catatan:'; ?></strong>
                                <?= $is_en
                                    ? 'Estimated prices. Excluding fuel, operator, delivery, mobilization, and special requests.'
                                    : '*Harga estimasi. Belum termasuk BBM, operator, pengiriman, mobilisasi, atau permintaan khusus.'; ?>
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
        ? "Generator Set / Genset Rental Service"
        : "Jasa Sewa Genset Berbagai Kapasitas",
    "description" => $is_en
        ? "Bangun Daya provides silent and open type generator set rental services for projects, factories, events, industries, and emergency backup power needs with daily, weekly, and monthly rental options."
        : "Bangun Daya menyediakan jasa sewa genset silent dan open type untuk kebutuhan proyek, pabrik, event, industri, hingga backup darurat dengan pilihan sewa harian, mingguan, dan bulanan.",
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
        "name" => $is_en ? "Genset Rental Packages" : "Paket Sewa Genset",
        "itemListElement" => [
            [
                "@type" => "Offer",
                "name" => $is_en ? "10 KVA Genset Rental" : "Sewa Genset 10 KVA",
                "description" => $is_en
                    ? "Generator set rental for shops, small offices, cafes, and small events."
                    : "Sewa genset untuk toko, kantor kecil, cafe, dan event kecil.",
                "priceCurrency" => "IDR",
                "price" => 700000
            ],
            [
                "@type" => "Offer",
                "name" => $is_en ? "100 KVA Genset Rental" : "Sewa Genset 100 KVA",
                "description" => $is_en
                    ? "Generator set rental for offices, medium construction projects, warehouses, and medium events."
                    : "Sewa genset untuk perkantoran, konstruksi menengah, gudang, dan event sedang.",
                "priceCurrency" => "IDR",
                "price" => 1750000
            ],
            [
                "@type" => "Offer",
                "name" => $is_en ? "500 KVA Industrial Genset Rental" : "Sewa Genset Industri 500 KVA",
                "description" => $is_en
                    ? "Large-capacity generator set rental for factories, data centers, multi-building facilities, and large events."
                    : "Sewa genset kapasitas besar untuk pabrik, data center, fasilitas multigedung, dan event besar.",
                "priceCurrency" => "IDR",
                "price" => 6500000
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>