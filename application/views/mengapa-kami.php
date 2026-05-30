<div class="choose-area bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="choose-img wow fadeInLeft" data-wow-delay=".25s">
                    <img loading="lazy"
                         src="<?= base_url(); ?>template/assets/img/choose/kontraktor-electrical-terbaik.webp"
                         alt="<?= $keywords; ?>">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline">
                            <i class="far fa-lightbulb-on"></i>
                            <?= $is_en ? 'Why Choose Us' : 'Mengapa Memilih Kami'; ?>
                        </span>

                        <h2 class="site-title">
                            <?= $is_en
                                ? 'We Deliver <span>High-Quality Services</span>'
                                : 'Kami Hadir dengan <span>Layanan Berkualitas</span> Tinggi'; ?>
                        </h2>
                    </div>

                    <p>
                        <?= $is_en
                            ? 'Bangundaya is committed to providing electrical installation services that are safe, efficient, and compliant with national standards. Every project is handled by experienced professionals using reliable tools and proper work procedures.'
                            : 'Bangundaya berkomitmen memberikan layanan instalasi listrik yang aman, efisien, dan sesuai standar nasional. Setiap proyek ditangani oleh tenaga ahli yang berpengalaman dan menggunakan peralatan terbaik di kelasnya.'; ?>
                    </p>

                    <div class="choose-wrapper">
                        <div class="choose-item">
                            <div class="choose-icon">
                                <i class="icon-worker"></i>
                            </div>

                            <div class="choose-item-content">
                                <h3>
                                    <?= $is_en
                                        ? 'Trained & Certified Technicians'
                                        : 'Teknisi Terlatih & Bersertifikat'; ?>
                                </h3>

                                <p>
                                    <?= $is_en
                                        ? 'Our team is equipped with proper training and certifications, so every job is handled professionally, neatly, and in accordance with safety procedures.'
                                        : 'Semua tim kami dibekali dengan pelatihan resmi dan sertifikasi, sehingga pekerjaan dilakukan secara profesional, rapi, dan sesuai prosedur keselamatan.'; ?>
                                </p>
                            </div>
                        </div>

                        <div class="choose-item">
                            <div class="choose-icon">
                                <i class="icon-office-building"></i>
                            </div>

                            <div class="choose-item-content">
                                <h3>
                                    <?= $is_en
                                        ? 'Standardized Quality Service'
                                        : 'Layanan Berkualitas & Terstandarisasi'; ?>
                                </h3>

                                <p>
                                    <?= $is_en
                                        ? 'We use SNI-standard materials and follow electrical installation standards in every project. From homes to industrial buildings, quality and safety remain our top priorities.'
                                        : 'Kami menggunakan material berstandar SNI dan mengikuti PUIL dalam setiap instalasi listrik. Mulai dari rumah hingga gedung industri, mutu dan keamanan tetap menjadi prioritas utama kami.'; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>