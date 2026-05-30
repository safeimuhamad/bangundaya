<div class="service-area2 bg py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">
                        <i class="far fa-lightbulb-on"></i>
                        <?= $is_en ? 'Our Services' : 'Layanan Kami'; ?>
                    </span>
                    <h2 class="site-title">
                        <?= $is_en ? 'Our <span>Services</span>' : 'Layanan <span>Kami</span>'; ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <div class="service-icon"><i class="icon-electric"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">
                            <a href="<?= base_url($is_en ? 'en/service/electrical-installation' : 'jasa/instalasi-listrik'); ?>">
                                <?= $is_en ? 'Building & Home Electrical Installation' : 'Instalasi Listrik Gedung & Rumah'; ?>
                            </a>
                        </h3>
                        <p class="service-text">
                            <?= $is_en
                                ? 'New electrical installation for homes, offices, factories, and buildings — following safety standards.'
                                : 'Pengerjaan instalasi listrik baru untuk rumah, ruko, kantor, pabrik, dan gedung bertingkat — sesuai standar SNI & PUIL.'; ?>
                        </p>
                        <div class="service-arrow">
                            <a href="<?= base_url($is_en ? 'en/service/electrical-installation' : 'jasa/instalasi-listrik'); ?>">
                                <?= $is_en ? 'Learn Service' : 'Pelajari Layanan'; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <div class="service-icon"><i class="icon-air-conditioning"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">
                            <a href="<?= base_url($is_en ? 'en/service/solar-panel-installation' : 'jasa/pemasangan-panel-surya'); ?>">
                                <?= $is_en ? 'Solar Panel Installation' : 'Instalasi Solar Panel'; ?>
                            </a>
                        </h3>
                        <p class="service-text">
                            <?= $is_en
                                ? 'Professional solar panel installation for residential and industrial use.'
                                : 'Pemasangan panel surya profesional untuk rumah, kantor, dan industri.'; ?>
                        </p>
                        <div class="service-arrow">
                            <a href="<?= base_url($is_en ? 'en/service/solar-panel-installation' : 'jasa/pemasangan-panel-surya'); ?>">
                                <?= $is_en ? 'Learn Service' : 'Pelajari Layanan'; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <div class="service-icon"><i class="icon-cctv-camera"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">
                            <a href="<?= base_url($is_en ? 'en/service/slo-nidi-certification' : 'jasa/pembuatan-slo-listrik'); ?>">
                                <?= $is_en ? 'SLO & NIDI Certification' : 'Sertifikasi SLO & NIDI'; ?>
                            </a>
                        </h3>
                        <p class="service-text">
                            <?= $is_en
                                ? 'Official certification required for PLN electrical connections.'
                                : 'Dokumen wajib untuk penyambungan listrik PLN.'; ?>
                        </p>
                        <div class="service-arrow">
                            <a href="<?= base_url($is_en ? 'en/service/slo-nidi-certification' : 'jasa/pembuatan-slo-listrik'); ?>">
                                <?= $is_en ? 'Learn Service' : 'Pelajari Layanan'; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <div class="service-icon"><i class="icon-light-bulb-1"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">
                            <a href="<?= base_url($is_en ? 'en/service/generator-rental' : 'jasa/sewa-genset'); ?>">
                                <?= $is_en ? 'Generator Rental' : 'Rental Genset'; ?>
                            </a>
                        </h3>
                        <p class="service-text">
                            <?= $is_en
                                ? 'Generator rental for projects, events, and industrial needs.'
                                : 'Sewa genset untuk proyek, event, dan kebutuhan industri.'; ?>
                        </p>
                        <div class="service-arrow">
                            <a href="<?= base_url($is_en ? 'en/service/generator-rental' : 'jasa/sewa-genset'); ?>">
                                <?= $is_en ? 'Learn Service' : 'Pelajari Layanan'; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5 -->
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <div class="service-icon"><i class="icon-cabinet"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">
                            <a href="<?= base_url($is_en ? 'en/service/electrical-panel' : 'jasa/panel-listrik'); ?>">
                                <?= $is_en ? 'Electrical Panel' : 'Panel Listrik'; ?>
                            </a>
                        </h3>
                        <p class="service-text">
                            <?= $is_en
                                ? 'Panel installation for stable and safe electrical systems.'
                                : 'Instalasi panel listrik untuk sistem yang stabil dan aman.'; ?>
                        </p>
                        <div class="service-arrow">
                            <a href="<?= base_url($is_en ? 'en/service/electrical-panel' : 'jasa/panel-listrik'); ?>">
                                <?= $is_en ? 'Learn Service' : 'Pelajari Layanan'; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6 -->
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <div class="service-icon"><i class="icon-shield-1"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">
                            <a href="<?= base_url($is_en ? 'en/service/lightning-protection-grounding' : 'jasa/pasang-penangkal-petir'); ?>">
                                <?= $is_en ? 'Lightning Protection' : 'Penangkal Petir'; ?>
                            </a>
                        </h3>
                        <p class="service-text">
                            <?= $is_en
                                ? 'Protection from lightning and voltage surges.'
                                : 'Perlindungan dari petir dan lonjakan tegangan.'; ?>
                        </p>
                        <div class="service-arrow">
                            <a href="<?= base_url($is_en ? 'en/service/lightning-protection-grounding' : 'jasa/pasang-penangkal-petir'); ?>">
                                <?= $is_en ? 'Learn Service' : 'Pelajari Layanan'; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 7 -->
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <div class="service-icon"><i class="icon-heater"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">
                            <a href="<?= base_url($is_en ? 'en/service/electrical-maintenance' : 'jasa/maintenance-electrical'); ?>">
                                <?= $is_en ? 'Maintenance' : 'Maintenance'; ?>
                            </a>
                        </h3>
                        <p class="service-text">
                            <?= $is_en
                                ? 'Periodic inspection to maintain system performance.'
                                : 'Pemeriksaan berkala untuk menjaga performa listrik.'; ?>
                        </p>
                        <div class="service-arrow">
                            <a href="<?= base_url($is_en ? 'en/service/electrical-maintenance' : 'jasa/maintenance-electrical'); ?>">
                                <?= $is_en ? 'Learn Service' : 'Pelajari Layanan'; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 8 -->
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <div class="service-icon"><i class="icon-fan"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">
                            <a href="<?= base_url($is_en ? 'en/service/electrical-repair' : 'jasa/perbaikan-listrik'); ?>">
                                <?= $is_en ? 'Emergency Call 24/7' : 'Emergency Call 24/7'; ?>
                            </a>
                        </h3>
                        <p class="service-text">
                            <?= $is_en
                                ? 'Fast response for electrical failures and emergencies.'
                                : 'Layanan cepat untuk gangguan listrik darurat.'; ?>
                        </p>
                        <div class="service-arrow">
                            <a href="<?= base_url($is_en ? 'en/service/electrical-repair' : 'jasa/perbaikan-listrik'); ?>">
                                <?= $is_en ? 'Learn Service' : 'Pelajari Layanan'; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>