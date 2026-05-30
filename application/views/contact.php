        <!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">
        <h1 class="breadcrumb-title">
            <?= $is_en ? 'Contact Us' : 'Kontak Kami'; ?>
        </h1>
        <ul class="breadcrumb-menu">
            <li>
                <a href="<?= base_url($lang_prefix); ?>">
                    <?= $is_en ? 'Home' : 'Beranda'; ?>
                </a>
            </li>
            <li class="active">
                <?= $is_en ? 'Contact' : 'Kontak'; ?>
            </li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->


<!-- contact area -->
<div class="contact-area py-120">
    <div class="container">
        <div class="contact-content">
            <div class="row">

                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="contact-info-icon">
                            <i class="fal fa-map-location-dot"></i>
                        </div>
                        <div class="contact-info-content">
                            <h5><?= $is_en ? 'Office Address' : 'Alamat Kantor'; ?></h5>
                            <p>Jl. TB Simatupang No. 18, Kebagusan, Jakarta</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="contact-info-icon">
                            <i class="fal fa-phone-volume"></i>
                        </div>
                        <div class="contact-info-content">
                            <h5><?= $is_en ? 'Call Us' : 'Hubungi Kami'; ?></h5>
                            <p>021 8909 0882</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="contact-info-icon">
                            <i class="fal fa-envelopes"></i>
                        </div>
                        <div class="contact-info-content">
                            <h5><?= $is_en ? 'Email Us' : 'Email Kami'; ?></h5>
                            <p>info@bangundaya.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="contact-info-icon">
                            <i class="fal fa-alarm-clock"></i>
                        </div>
                        <div class="contact-info-content">
                            <h5><?= $is_en ? 'Open Time' : 'Jam Operasional'; ?></h5>
                            <p>
                                <?= $is_en
                                    ? 'Mon - Sat (09.00 AM - 05.00 PM)'
                                    : 'Senin - Sabtu (09.00 - 17.00)'; ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="contact-wrapper">
            <div class="row">

                <div class="col-lg-5">
                    <div class="contact-img">
                        <img loading="lazy"
                             src="<?= base_url(); ?>template/assets/img/contact/01.webp"
                             alt="<?= $is_en ? 'contact bangundaya' : 'kontak bangundaya'; ?>">
                    </div>
                </div>

                <div class="col-lg-7 align-self-center">
                    <div class="contact-form">
                        <div class="contact-form-header">
                            <h2><?= $is_en ? 'Get In Touch' : 'Hubungi Kami'; ?></h2>

                            <p>
                                <b>
                                    <?= $is_en
                                        ? 'Consult Your Electrical Needs Now!'
                                        : 'Konsultasikan Kebutuhan Listrik Anda Sekarang!'; ?>
                                </b>
                            </p>

                            <p>
                                <?= $is_en
                                    ? 'Our expert team is ready to help with electrical installation, repair, and maintenance needs — from residential houses and multi-storey buildings to industrial areas.'
                                    : 'Tim ahli kami siap membantu Anda dalam segala kebutuhan instalasi, perbaikan, dan maintenance sistem listrik — mulai dari rumah tinggal, gedung bertingkat, hingga area industri.'; ?>
                            </p>

                            <p>
                                <?= $is_en
                                    ? 'Contact us today for survey scheduling, price quotations, or other technical questions.'
                                    : 'Hubungi kami hari ini untuk penjadwalan survei, penawaran harga, atau pertanyaan teknis lainnya.'; ?>
                            </p>
                        </div>

                        <?php if ($this->session->flashdata('info')): ?>
                            <div class="alert alert-success">
                                <?= $this->session->flashdata('info'); ?>
                            </div>
                        <?php endif; ?>

                        <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>

                        <form id="contact-form" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control"
                                               name="name"
                                               value="<?= set_value('name'); ?>"
                                               placeholder="<?= $is_en ? 'Your Name' : 'Nama Anda'; ?>"
                                               required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email"
                                               class="form-control"
                                               name="email"
                                               value="<?= set_value('email'); ?>"
                                               placeholder="<?= $is_en ? 'Your Email' : 'Email Anda'; ?>"
                                               required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="number"
                                       class="form-control"
                                       name="telp"
                                       value="<?= set_value('telp'); ?>"
                                       placeholder="<?= $is_en ? 'Your Phone Number' : 'Nomor Telepon Anda'; ?>"
                                       required>
                            </div>

                            <div class="form-group">
                                <textarea name="message"
                                          cols="30"
                                          rows="5"
                                          class="form-control"
                                          placeholder="<?= $is_en ? 'Write Your Message' : 'Tulis Pesan Anda'; ?>"
                                          required><?= set_value('message'); ?></textarea>
                            </div>

                            <button type="submit" class="theme-btn">
                                <?= $is_en ? 'Send Message' : 'Kirim Pesan'; ?>
                                <i class="far fa-paper-plane"></i>
                            </button>

                            <div class="col-md-12 mt-3">
                                <div class="form-messege text-success"></div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
        <!-- end contact area -->

        <!-- map -->
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507628.5637334311!2d106.32849655625002!3d-6.2836829368521085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edf7d12a98d3%3A0xa29985100f9b696e!2s18%20Office%20Park!5e0!3m2!1sid!2sid!4v1755412726011!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>