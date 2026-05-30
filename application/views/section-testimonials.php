<div class="testimonial-area ts-bg py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">
                        <i class="far fa-lightbulb-on"></i>
                        <?= $is_en ? 'Testimonials' : 'Testimoni'; ?>
                    </span>

                    <h2 class="site-title text-white">
                        <?= $is_en ? 'What Our <span>Clients Say?</span>' : 'Apa Kata Klien <span>Kami?</span>'; ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="testimonial-slider owl-carousel owl-theme">
            <?php if (!empty($testimoni) && is_array($testimoni)): ?>
                <?php foreach ($testimoni as $data_testimoni): ?>
                    <div class="testimonial-single">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <div class="testimonial-quote">
                            <p><?= $data_testimoni['message'] ?? ''; ?></p>
                        </div>

                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img loading="lazy"
                                     src="<?= base_url('template/assets/img/testimonial/testi-01.webp'); ?>"
                                     alt="<?= $keywords ?? ''; ?>">
                            </div>

                            <div class="testimonial-author-info">
                                <h3><?= $data_testimoni['testimoni_name'] ?? 'Anonymous'; ?></h3>
                                <p>
                                    <?= $is_en ? 'Client' : 'Klien'; ?>
                                    <?= $data_testimoni['category'] ?? ''; ?>
                                </p>
                            </div>
                        </div>

                        <span class="testimonial-quote-icon">
                            <i class="far fa-quote-right"></i>
                        </span>
                    </div>
                <?php endforeach; ?>

            <?php else: ?>

                <div class="testimonial-single">
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <div class="testimonial-quote">
                        <p>
                            <?= $is_en
                                ? '“The electrical panel installation and distribution work for our office was completed neatly and on time. Bangundaya is truly professional.”'
                                : '“Proyek pemasangan panel listrik dan distribusi untuk kantor kami dikerjakan sangat rapi dan tepat waktu. Bangundaya benar-benar profesional.”'; ?>
                        </p>
                    </div>

                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img loading="lazy"
                                 src="<?= base_url(); ?>template/assets/img/testimonial/01.webp"
                                 alt="<?= $keywords; ?>">
                        </div>

                        <div class="testimonial-author-info">
                            <h3>Ferdy Salim</h3>
                            <p>
                                <?= $is_en ? 'Shop House Owner in Jakarta' : 'Pemilik Ruko di Jakarta'; ?>
                            </p>
                        </div>
                    </div>

                    <span class="testimonial-quote-icon">
                        <i class="far fa-quote-right"></i>
                    </span>
                </div>

                <div class="testimonial-single">
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <div class="testimonial-quote">
                        <p>
                            <?= $is_en
                                ? '“The electrical short circuit at our home was handled by Bangundaya within hours. Fast response and the result was safe.”'
                                : '“Korsleting listrik di rumah kami langsung ditangani tim Bangundaya dalam hitungan jam. Fast response dan hasilnya aman.”'; ?>
                        </p>
                    </div>

                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img loading="lazy"
                                 src="<?= base_url(); ?>template/assets/img/testimonial/03.webp"
                                 alt="<?= $keywords; ?>">
                        </div>

                        <div class="testimonial-author-info">
                            <h3>Sulistiawati</h3>
                            <p>
                                <?= $is_en ? 'Residential Client in Bekasi' : 'Klien Perumahan Bekasi'; ?>
                            </p>
                        </div>
                    </div>

                    <span class="testimonial-quote-icon">
                        <i class="far fa-quote-right"></i>
                    </span>
                </div>

                <div class="testimonial-single">
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <div class="testimonial-quote">
                        <p>
                            <?= $is_en
                                ? '“Bangundaya helped us install LED street lighting in our residential cluster. The result is bright, clean, and energy efficient. Highly recommended.”'
                                : '“Bangundaya bantu kami pasang PJU LED di lingkungan cluster. Hasilnya terang, bersih, dan hemat listrik. Sangat direkomendasikan.”'; ?>
                        </p>
                    </div>

                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img loading="lazy"
                                 src="<?= base_url(); ?>template/assets/img/testimonial/02.webp"
                                 alt="<?= $keywords; ?>">
                        </div>

                        <div class="testimonial-author-info">
                            <h3>Tardi Maulana</h3>
                            <p>
                                <?= $is_en ? 'Cluster Manager in Tangerang' : 'Manager Cluster Tangerang'; ?>
                            </p>
                        </div>
                    </div>

                    <span class="testimonial-quote-icon">
                        <i class="far fa-quote-right"></i>
                    </span>
                </div>

                <div class="testimonial-single">
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <div class="testimonial-quote">
                        <p>
                            <?= $is_en
                                ? '“I used Bangundaya for rewiring an old building electrical installation. Everything was handled in detail, with complete documentation and communicative technicians.”'
                                : '“Saya menggunakan jasa Bangundaya untuk rewiring instalasi listrik bangunan lama. Semua dikerjakan detail, dokumentasi lengkap, dan teknisinya komunikatif.”'; ?>
                        </p>
                    </div>

                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img loading="lazy"
                                 src="<?= base_url(); ?>template/assets/img/testimonial/04.webp"
                                 alt="<?= $keywords; ?>">
                        </div>

                        <div class="testimonial-author-info">
                            <h3>Aulia Rahman</h3>
                            <p>
                                <?= $is_en ? 'Interior Contractor – Depok' : 'Kontraktor Interior – Depok'; ?>
                            </p>
                        </div>
                    </div>

                    <span class="testimonial-quote-icon">
                        <i class="far fa-quote-right"></i>
                    </span>
                </div>

            <?php endif; ?>
        </div>
    </div>
</div>