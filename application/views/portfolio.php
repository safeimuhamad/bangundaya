<div class="portfolio-area2 py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">
                        <i class="far fa-lightbulb-on"></i>
                        <?= $is_en ? 'Our Work' : 'Pekerjaan Kami'; ?>
                    </span>

                    <h2 class="site-title">
                        <?= $is_en ? 'Explore Our' : 'Lihat'; ?>
                        <span><?= $is_en ? 'Portfolio' : 'Portofolio Kami'; ?></span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($all_data as $data_portofolio): ?>
                <?php
                    $foto = !empty($data_portofolio['foto'])
                        ? base64_decode($data_portofolio['foto'])
                        : '1.webp';

                    $portfolio_name = $data_portofolio['portofolio_name'] ?? '';
                    $category       = $data_portofolio['category'] ?? '';
                    $title_lokasi   = !empty($lokasi) ? ' ' . $lokasi : '';
                ?>

                <div class="col-md-4">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img loading="lazy"
                                 src="<?= base_url('template/assets_admin/portofolio/' . $foto); ?>"
                                 alt="<?= $is_en ? 'Bangun Daya portfolio project' : 'Portofolio pekerjaan Bangun Daya'; ?>">
                        </div>

                        <div class="portfolio-content">
                            <div class="portfolio-info">
                                <div class="portfolio-title-info">
                                    <h3 class="portfolio-subtitle">
                                        <span>//</span> <?= $portfolio_name; ?>
                                    </h3>

                                    <h4 class="portfolio-title">
                                        <?= $category . $title_lokasi; ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>