<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">

        <h1 class="breadcrumb-title">
            <?= $is_en ? 'Services' : 'Layanan'; ?>
        </h1>

        <ul class="breadcrumb-menu">
            <li>
                <a href="<?= base_url($lang_prefix); ?>">
                    <?= $is_en ? 'Home' : 'Beranda'; ?>
                </a>
            </li>

            <li class="active">
                <?= $is_en ? 'Services' : 'Layanan'; ?>
            </li>
        </ul>

    </div>
</div>
<!-- breadcrumb end -->


<!-- service-area -->
<?php $this->load->view('section-services'); ?>
        <!-- service-area -->