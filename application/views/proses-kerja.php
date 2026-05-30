<div class="process-area pb-90">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">
                        <i class="far fa-lightbulb-on"></i>
                        <?= $is_en ? 'How It Works' : 'Alur Kerja'; ?>
                    </span>

                    <h2 class="site-title">
                        <?= $is_en 
                            ? 'Our <span>Work Process</span>' 
                            : 'Proses Kerja <span>Kami</span>'; ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">

            <!-- STEP 1 -->
            <div class="col-lg-3 col-md-6 text-center mb-30">
                <div class="process-single">
                    <div class="icon">
                        <span>01</span>
                        <i class="icon-office"></i>
                    </div>

                    <h3>
                        <?= $is_en 
                            ? 'Submit Service Request' 
                            : 'Ajukan Permintaan Layanan'; ?>
                    </h3>

                    <p>
                        <?= $is_en
                            ? 'Fill out the online form or contact us via WhatsApp to explain your electrical installation or repair needs.'
                            : 'Isi formulir online atau hubungi kami melalui WhatsApp untuk menjelaskan kebutuhan instalasi atau perbaikan listrik Anda.'; ?>
                    </p>
                </div>
            </div>

            <!-- STEP 2 -->
            <div class="col-lg-3 col-md-6 text-center mb-30">
                <div class="process-single">
                    <div class="icon">
                        <span>02</span>
                        <i class="icon-easy-installation"></i>
                    </div>

                    <h3>
                        <?= $is_en 
                            ? 'Confirmation & Site Survey' 
                            : 'Konfirmasi & Survei Lokasi'; ?>
                    </h3>

                    <p>
                        <?= $is_en
                            ? 'Our team will contact you to schedule a site survey and understand your technical requirements directly.'
                            : 'Tim kami akan menghubungi Anda untuk menjadwalkan survei lokasi dan memahami kebutuhan teknis secara langsung.'; ?>
                    </p>
                </div>
            </div>

            <!-- STEP 3 -->
            <div class="col-lg-3 col-md-6 text-center mb-30">
                <div class="process-single">
                    <div class="icon">
                        <span>03</span>
                        <i class="icon-diagnostic"></i>
                    </div>

                    <h3>
                        <?= $is_en 
                            ? 'Cost Estimation & Quotation' 
                            : 'Estimasi & Penawaran Harga'; ?>
                    </h3>

                    <p>
                        <?= $is_en
                            ? 'We provide a detailed cost and timeline estimation transparently, tailored to your project needs.'
                            : 'Kami akan memberikan detail estimasi biaya dan waktu pengerjaan secara transparan dan disesuaikan dengan proyek Anda.'; ?>
                    </p>
                </div>
            </div>

            <!-- STEP 4 -->
            <div class="col-lg-3 col-md-6 text-center mb-30">
                <div class="process-single">
                    <div class="icon">
                        <span>04</span>
                        <i class="icon-satisfaction"></i>
                    </div>

                    <h3>
                        <?= $is_en 
                            ? 'Execution & Handover' 
                            : 'Pengerjaan & Serah Terima'; ?>
                    </h3>

                    <p>
                        <?= $is_en
                            ? 'Work is carried out by certified technicians and delivered in a neat, safe condition with warranty.'
                            : 'Pekerjaan dilakukan oleh teknisi bersertifikat dan hasilnya diserahkan dalam kondisi rapi, aman, serta bergaransi.'; ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>