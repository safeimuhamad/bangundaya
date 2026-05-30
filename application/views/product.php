<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">

        <h1 class="breadcrumb-title">
            <?= $is_en ? 'Our Product' : 'Produk Kami'; ?>
        </h1>

        <ul class="breadcrumb-menu">
            <li>
                <a href="<?= base_url($lang_prefix); ?>">
                    <?= $is_en ? 'Home' : 'Beranda'; ?>
                </a>
            </li>
            <li class="active">
                <?= $is_en ? 'Product' : 'Produk'; ?>
            </li>
        </ul>

    </div>
</div>


<div class="blog-area py-120">
    <div class="container">

        <!-- PANEL -->
        <div class="row">
            <div class="col-lg-12">
                <div class="site-heading text-left">
                    <h2 class="site-title">
                        <?= $is_en ? 'Electrical <span>Panel</span>' : 'Panel <span>Listrik</span>'; ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php if (!empty($panel)): ?>
                <?php foreach ($panel as $row): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img loading="lazy"
                                     src="<?= base_url('template/assets_admin/images/user/' . base64_decode($row->foto)); ?>"
                                     alt="<?= $row->product_name; ?>">
                            </div>
                            <div class="blog-item-info">
                                <h4 class="blog-title"><?= $row->product_name; ?></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p><?= $is_en ? 'No panel products available.' : 'Produk panel listrik belum tersedia.'; ?></p>
                </div>
            <?php endif; ?>
        </div>


        <!-- PLTS -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="site-heading text-left">
                    <h2 class="site-title">
                        <?= $is_en 
                            ? 'Solar Power System <span>(PLTS)</span>' 
                            : 'Pembangkit Listrik Tenaga Surya <span>(PLTS)</span>'; ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php if (!empty($plts)): ?>
                <?php foreach ($plts as $row): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img loading="lazy"
                                     src="<?= base_url('template/assets_admin/images/user/' . base64_decode($row->foto)); ?>"
                                     alt="<?= $row->product_name; ?>">
                            </div>
                            <div class="blog-item-info">
                                <h4 class="blog-title"><?= $row->product_name; ?></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p><?= $is_en ? 'No solar products available.' : 'Produk PLTS belum tersedia.'; ?></p>
                </div>
            <?php endif; ?>
        </div>


        <!-- GENSET -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="site-heading text-left">
                    <h2 class="site-title">
                        <?= $is_en ? 'Generator Set' : 'Genset'; ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php if (!empty($genset)): ?>
                <?php foreach ($genset as $row): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img loading="lazy"
                                     src="<?= base_url('template/assets_admin/images/user/' . base64_decode($row->foto)); ?>"
                                     alt="<?= $row->product_name; ?>">
                            </div>
                            <div class="blog-item-info">
                                <h4 class="blog-title"><?= $row->product_name; ?></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p><?= $is_en ? 'No generator products available.' : 'Produk genset belum tersedia.'; ?></p>
                </div>
            <?php endif; ?>
        </div>


        <!-- AKSESORIS -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="site-heading text-left">
                    <h2 class="site-title">
                        <?= $is_en 
                            ? 'Accessories & <span>System</span>' 
                            : 'Aksesoris & <span>Sistem</span>'; ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php if (!empty($aksesoris)): ?>
                <?php foreach ($aksesoris as $row): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img loading="lazy"
                                     src="<?= base_url('template/assets_admin/images/user/' . base64_decode($row->foto)); ?>"
                                     alt="<?= $row->product_name; ?>">
                            </div>
                            <div class="blog-item-info">
                                <h4 class="blog-title"><?= $row->product_name; ?></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p><?= $is_en ? 'No accessories available.' : 'Produk aksesoris belum tersedia.'; ?></p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>