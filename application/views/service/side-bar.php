<div class="service-sidebar">
    <div class="widget category">
        <h2 class="widget-title">
            <?= $is_en ? 'All Services' : 'Semua Layanan'; ?>
        </h2>

        <div class="category-list">
            <a href="<?= base_url($is_en ? 'en/service/electrical-installation' : 'jasa/instalasi-listrik'); ?>">
                <i class="far fa-long-arrow-right"></i>
                <?= $is_en ? 'Electrical Installation' : 'Instalasi Listrik'; ?>
            </a>

            <a href="<?= base_url($is_en ? 'en/service/solar-panel-installation' : 'jasa/pemasangan-panel-surya'); ?>">
                <i class="far fa-long-arrow-right"></i>
                <?= $is_en ? 'Solar Panel Installation' : 'Instalasi Solar Panel'; ?>
            </a>

            <a href="<?= base_url($is_en ? 'en/service/slo-nidi-certification' : 'jasa/pembuatan-slo-listrik'); ?>">
                <i class="far fa-long-arrow-right"></i>
                <?= $is_en ? 'SLO & NIDI Certification' : 'Sertifikasi SLO & NIDI'; ?>
            </a>

            <a href="<?= base_url($is_en ? 'en/service/generator-rental' : 'jasa/sewa-genset'); ?>">
                <i class="far fa-long-arrow-right"></i>
                <?= $is_en ? 'Generator Rental' : 'Rental Generator'; ?>
            </a>

            <a href="<?= base_url($is_en ? 'en/service/electrical-panel' : 'jasa/panel-listrik'); ?>">
                <i class="far fa-long-arrow-right"></i>
                <?= $is_en ? 'Electrical Panel & Sub Panel' : 'Panel Listrik & Sub Panel'; ?>
            </a>

            <a href="<?= base_url($is_en ? 'en/service/lightning-protection-grounding' : 'jasa/pasang-penangkal-petir'); ?>">
                <i class="far fa-long-arrow-right"></i>
                <?= $is_en ? 'Lightning Protection & Grounding' : 'Penangkal Petir & Grounding'; ?>
            </a>

            <a href="<?= base_url($is_en ? 'en/service/electrical-maintenance' : 'jasa/maintenance-electrical'); ?>">
                <i class="far fa-long-arrow-right"></i>
                <?= $is_en ? 'Inspection & Maintenance' : 'Inspeksi & Maintenance'; ?>
            </a>

            <a href="<?= base_url($is_en ? 'en/service/electrical-repair' : 'jasa/perbaikan-listrik'); ?>">
                <i class="far fa-long-arrow-right"></i>
                <?= $is_en ? '24/7 Emergency Call' : 'Emergency Call 24/7'; ?>
            </a>
        </div>
    </div>

    <div class="widget service-download">
        <h2 class="widget-title">
            <?= $is_en ? 'Download' : 'Unduh'; ?>
        </h2>

        <a href="#">
            <i class="far fa-file-pdf"></i>
            <?= $is_en ? 'Download Brochure' : 'Unduh Brosur'; ?>
        </a>

        <a href="#">
            <i class="far fa-file-alt"></i>
            <?= $is_en ? 'Download Application' : 'Unduh Formulir'; ?>
        </a>
    </div>
</div>