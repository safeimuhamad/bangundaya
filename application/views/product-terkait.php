<div class="blog-area py-120">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">
                        <i class="far fa-lightbulb-on"></i>
                        <?= $is_en ? 'Our Product' : 'Produk Kami'; ?>
                    </span>

                    <h2 class="site-title">
                        <?= $is_en 
                            ? 'Related <span>Products</span>' 
                            : 'Produk <span>Terkait</span>'; ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php if (!empty($product)): ?>
                <?php foreach ($product as $row): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">

                            <div class="blog-item-img">
                                <img loading="lazy"
                                     src="<?= base_url('template/assets_admin/images/user/' . base64_decode($row->foto)); ?>"
                                     alt="<?= $row->product_name; ?>">
                            </div>

                            <div class="blog-item-info">
                                <h3 class="blog-title">
                                    <?= $row->product_name; ?>
                                </h3>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>

            <?php else: ?>

                <div class="col-12 text-center">
                    <p>
                        <?= $is_en 
                            ? 'No products available yet.' 
                            : 'Belum ada produk tersedia.'; ?>
                    </p>
                </div>

            <?php endif; ?>
        </div>

    </div>
</div>