<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">

        <h1 class="breadcrumb-title">
            <?= $is_en
            ? 'Professional Building & Residential Electrical Installation'
            : 'Instalasi Listrik Gedung & Hunian Profesional'; ?>
        </h1>

        <ul class="breadcrumb-menu">
            <li>
                <a href="<?= base_url($lang_prefix); ?>">
                    <?= $is_en ? 'Home' : 'Beranda'; ?>
                </a>
            </li>

            <li>
                <a href="<?= base_url($lang_prefix . 'jasa'); ?>">
                    <?= $is_en ? 'Services' : 'Layanan'; ?>
                </a>
            </li>

            <li class="active">
                <?= $is_en
                ? 'Electrical Installation'
                : 'Instalasi Listrik Gedung & Rumah'; ?>
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
                            alt="<?= $keywords; ?>">
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Reliable & Safe Electrical Installation Solutions' : 'Solusi Instalasi Listrik Andal & Aman'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                            ? 'Need safe, neat, and standard-compliant electrical installation services? Our team is ready to assist with electrical installations for homes, shop houses, office buildings, and industrial facilities. Supported by experienced professionals and complete equipment, we ensure every electrical point is installed safely and efficiently.'
                            : 'Butuh jasa instalasi listrik yang aman, rapi, dan sesuai standar? Tim kami siap membantu Anda untuk pemasangan instalasi listrik di rumah, ruko, gedung perkantoran, hingga fasilitas industri. Didukung oleh tim berpengalaman dan peralatan lengkap, kami pastikan setiap titik listrik terpasang dengan aman dan efisien.'; ?>
                        </p>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Our Electrical Installation Services Include:' : 'Layanan Instalasi Listrik yang Kami Tawarkan:'; ?>
                        </h2>

                        <p><b><?= $is_en ? 'New Electrical System Installation' : 'Instalasi Sistem Kelistrikan Baru'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                            ? 'Planning and execution of electrical systems from the beginning, including power distribution lines, lighting points, outlets, switches, protection systems, and grounding based on safety standards.'
                            : 'Perencanaan dan eksekusi instalasi listrik dari awal, mencakup jalur distribusi daya, titik lampu, stop kontak, saklar, sistem proteksi, dan grounding sesuai standar SNI dan K3.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Main Panel Design & Installation' : 'Desain & Pemasangan Panel Utama'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                            ? 'Installation of main distribution panels and supporting panels for single-phase and three-phase systems, complete with MCB, MCCB, ELCB, and load arrangement based on power analysis.'
                            : 'Pemasangan panel distribusi utama dan panel pendukung untuk sistem 1 phase dan 3 phase. Lengkap dengan MCB, MCCB, ELCB, dan pengaturan beban berdasarkan analisa daya.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Electrical Cable Pulling & Conduit Lines' : 'Penarikan Kabel Listrik & Jalur Pipa Conduit'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                            ? 'NYY/NYM cable pulling or power cable installation for industrial needs, installed in PVC conduit, steel conduit, or ducting for both concealed and exposed systems.'
                            : 'Penarikan kabel NYY/NYM atau kabel power untuk kebutuhan industri, ditanam dalam pipa conduit PVC, besi, atau ducting—baik untuk sistem tersembunyi maupun terbuka.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Lighting Points & Power Outlet Installation' : 'Pemasangan Titik Penerangan & Power Outlet'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                            ? 'Installation of lighting points, switches, and outlets based on project layouts, including public area lighting, emergency stairs, basement parking, and automatic sensor systems.'
                            : 'Instalasi titik lampu, saklar, dan stop kontak berdasarkan layout proyek, termasuk pencahayaan area publik, tangga darurat, parkir basement, maupun sistem sensor otomatis.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Power Connection for Mechanical & Electrical Equipment' : 'Koneksi Daya untuk Peralatan Mekanikal & Elektrikal'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                            ? 'Electrical line installation for central AC, water pumps, water heaters, HVAC systems, elevators, industrial machines, and other building operational equipment.'
                            : 'Instalasi jalur listrik untuk AC central, pompa air, water heater, sistem HVAC, elevator, mesin industri, dan perangkat operasional gedung lainnya.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Electrical Protection & Safety Systems' : 'Sistem Proteksi & Safety Listrik'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                            ? 'Installation of lightning protection systems, grounding, emergency stop devices, overload protection, and short-circuit protection based on building safety standards.'
                            : 'Pemasangan sistem penangkal petir, grounding, pemutus arus darurat, serta proteksi overload dan short-circuit sesuai standar keselamatan gedung.'; ?>
                        </p>

                        <p><b><?= $is_en ? 'Documentation, As-Built Drawing & Certification' : 'Dokumentasi, As-Built Drawing & Sertifikasi'; ?></b></p>
                        <p class="mb-20">
                            <?= $is_en
                            ? 'Preparation of as-built drawings, single line diagrams, and technical documents for electrical certification, safety inspections, and project handover.'
                            : 'Penyusunan gambar as-built, single line diagram, serta kelengkapan dokumen teknis untuk keperluan SLO PLN, inspeksi K3, dan serah terima proyek.'; ?>
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                src="<?= base_url(); ?>template/assets/img/service/tukang-listrik-panggilan.webp"
                                alt="<?= $keywords; ?>">
                            </div>
                            <div class="col-md-6 mb-20">
                                <img loading="lazy"
                                src="<?= base_url(); ?>template/assets/img/service/tukang-listrik.webp"
                                alt="<?= $keywords; ?>">
                            </div>
                        </div>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Estimated Electrical Installation Cost' : 'Estimasi Biaya Pekerjaan Instalasi Listrik'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                            ? 'Below is an initial cost estimate for common electrical installation services we handle. Prices may vary depending on technical specifications, material types, and work scope.'
                            : 'Berikut adalah estimasi biaya awal untuk layanan instalasi listrik yang umum kami tangani. Harga dapat disesuaikan berdasarkan spesifikasi teknis, jenis material, dan ruang lingkup pekerjaan:'; ?>
                        </p>

                        <div style="overflow-x:auto;">
                            <table style="width:100%; border-collapse:collapse;">
                                <thead>
                                    <tr style="background-color:#f5f5f5;">
                                        <th style="padding:10px; border:1px solid #ddd; text-align:left;">
                                            <?= $is_en ? 'Service Type' : 'Jenis Layanan'; ?>
                                        </th>
                                        <th style="padding:10px; border:1px solid #ddd; text-align:left;">
                                            <?= $is_en ? 'Estimated Starting Price' : 'Estimasi Harga Mulai'; ?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding:10px; border:1px solid #ddd;">
                                            <?= $is_en ? 'Electrical point installation (lights, outlets, switches, etc.)' : 'Instalasi titik listrik (lampu, stop kontak, saklar, dll)'; ?>
                                        </td>
                                        <td style="padding:10px; border:1px solid #ddd;">Rp 75.000 – Rp 150.000 / titik</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px; border:1px solid #ddd;">
                                            <?= $is_en ? 'Electrical cable pulling (NYM / NYY)' : 'Penarikan kabel listrik (NYM / NYY)'; ?>
                                        </td>
                                        <td style="padding:10px; border:1px solid #ddd;">Rp 12.000 – Rp 25.000 / meter</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px; border:1px solid #ddd;">
                                            <?= $is_en ? '3-phase electrical panel installation' : 'Pemasangan Panel Listrik 3 Phase'; ?>
                                        </td>
                                        <td style="padding:10px; border:1px solid #ddd;">
                                            <?= $is_en ? 'Starting from Rp 3.500.000' : 'Mulai Rp 3.500.000'; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px; border:1px solid #ddd;">
                                            <?= $is_en ? 'House electrical installation package (40–70 points)' : 'Borongan instalasi listrik untuk rumah (40–70 titik)'; ?>
                                        </td>
                                        <td style="padding:10px; border:1px solid #ddd;">
                                            <?= $is_en ? 'Starting from Rp 7.500.000' : 'Mulai Rp 7.500.000'; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px; border:1px solid #ddd;">
                                            <?= $is_en ? 'Building electrical installation service (>100 points)' : 'Jasa instalasi listrik untuk gedung (>100 titik)'; ?>
                                        </td>
                                        <td style="padding:10px; border:1px solid #ddd;">
                                            <?= $is_en ? 'Contact us for quotation & cost proposal' : 'Hubungi kami untuk proposal & estimasi RAB'; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p style="font-style:italic; margin-top:10px; margin-bottom:20px;">
                            <strong><?= $is_en ? 'Note:' : 'Catatan:'; ?></strong>
                            <?= $is_en
                            ? 'All estimates can be adjusted through a site survey and technical work requirement calculation.'
                            : 'Seluruh estimasi dapat kami sesuaikan melalui survey lapangan & perhitungan kebutuhan teknis pekerjaan.'; ?>
                        </p>

                        <h2 class="mb-20">
                            <?= $is_en ? 'Service Area' : 'Area Layanan'; ?>
                        </h2>

                        <p class="mb-20">
                            <?= $is_en
                            ? 'We provide electrical installation services for the following areas:'
                            : 'Kami melayani jasa instalasi listrik untuk wilayah:'; ?>
                        </p>

                        <p class="mb-20">
                            <a href="<?= base_url($is_en ? 'en/service/electrical-installation-jakarta' : 'jasa/instalasi-listrik-jakarta'); ?>">
                                <a href="<?= base_url($is_en ? 'en/service/electrical-installation-jakarta' : 'jasa/instalasi-listrik-jakarta'); ?>"><b>Jakarta</b></a>,
                                <a href="<?= base_url($is_en ? 'en/service/electrical-installation-bekasi' : 'jasa/instalasi-listrik-bekasi'); ?>"><b>Bekasi</b></a>,
                                <a href="<?= base_url($is_en ? 'en/service/electrical-installation-depok' : 'jasa/instalasi-listrik-depok'); ?>"><b>Depok</b></a>,
                                <a href="<?= base_url($is_en ? 'en/service/electrical-installation-bogor' : 'jasa/instalasi-listrik-bogor'); ?>"><b>Bogor</b></a>,
                                <a href="<?= base_url($is_en ? 'en/service/electrical-installation-tangerang' : 'jasa/instalasi-listrik-tangerang'); ?>"><b>Tangerang</b></a>,
                                <a href="<?= base_url($is_en ? 'en/service/electrical-installation-serang' : 'jasa/instalasi-listrik-serang'); ?>"><b>Serang</b></a>
                                <?= $is_en ? 'and surrounding areas.' : 'dan sekitarnya.'; ?>
                            </p>

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
    <?php $this->load->view('product-terkait'); ?>
    <script type="application/ld+json">
        <?= json_encode([
            "@context" => "https://schema.org",
            "@type" => "Service",
            "name" => $is_en
            ? "Professional Building & Residential Electrical Installation"
            : "Jasa Instalasi Listrik Gedung & Hunian Profesional",
            "description" => $is_en
            ? "Professional electrical installation services for homes, shop houses, offices, factories, and multi-storey buildings in Indonesia. Services include panel installation, cable pulling, lighting points, grounding, and electrical protection systems based on applicable safety standards."
            : "Layanan instalasi listrik profesional untuk rumah, ruko, kantor, pabrik, dan gedung bertingkat di seluruh Indonesia. Termasuk pemasangan panel, penarikan kabel, titik lampu, grounding, dan sistem proteksi sesuai standar SNI & PUIL.",
            "url" => base_url($is_en ? "en/service/electrical-installation" : "jasa/instalasi-listrik"),
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
                "name" => $is_en ? "Electrical Installation Packages" : "Paket Instalasi Listrik",
                "itemListElement" => [
                    [
                        "@type" => "Offer",
                        "name" => $is_en
                        ? "Electrical Point Installation"
                        : "Instalasi per Titik (lampu, stop kontak, dll)",
                        "description" => $is_en
                        ? "Installation of electrical points based on interior layout and electrical system planning."
                        : "Pemasangan titik listrik sesuai layout interior & perencanaan sistem kelistrikan.",
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
                        ? "Cable Pulling per Meter"
                        : "Penarikan Kabel per Meter",
                        "description" => $is_en
                        ? "NYY or NYM cable pulling through conduit pipes according to wall or ceiling routes."
                        : "Penarikan kabel NYM atau NYY melalui pipa conduit sesuai rute dinding/plafon.",
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
                        ? "3-Phase Electrical Panel Installation"
                        : "Instalasi Panel Listrik 3 Phase",
                        "description" => $is_en
                        ? "Electrical panel installation complete with MCB, ELCB, and power distribution components."
                        : "Pemasangan panel listrik lengkap dengan MCB, ELCB, dan perlengkapan distribusi daya.",
                        "priceCurrency" => "IDR",
                        "price" => 3500000
                    ]
                ]
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>