<div class="faq-area py-120">
    <div class="container">
        <div class="row">

            <!-- LEFT -->
            <div class="col-lg-6">
                <div class="faq-right wow fadeInLeft" data-wow-delay=".25s">

                    <div class="site-heading mb-3">
                        <span class="site-title-tagline justify-content-start">
                            <i class="far fa-lightbulb-on"></i>
                            <?= $is_en ? 'FAQ' : 'FAQ'; ?>
                        </span>

                        <h2 class="site-title my-3">
                            <?= $is_en 
                                ? 'Frequently <span>Asked Questions</span>' 
                                : 'Pertanyaan <span>yang Sering</span> Diajukan'; ?>
                        </h2>
                    </div>

                    <p class="mb-3">
                        <?= $is_en
                            ? 'We often receive various questions before a project begins. Below are answers to common questions regarding scheduling, payment systems, warranties, and work processes. If you have other questions, feel free to contact the Bangundaya team.'
                            : 'Kami sering menerima berbagai pertanyaan sebelum dimulainya proyek. Di bawah ini adalah jawaban dari pertanyaan umum terkait jadwal pengerjaan, sistem pembayaran, garansi, hingga proses kerja. Jika Anda memiliki pertanyaan lainnya, jangan ragu untuk menghubungi tim Bangundaya.'; ?>
                    </p>

                    <div class="faq-img">
                        <img loading="lazy"
                             src="<?= base_url(); ?>template/assets/img/faq/faq.webp"
                             alt="<?= $keywords; ?>">
                    </div>

                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-lg-6">
                <div class="accordion wow fadeInUp" data-wow-delay=".25s" id="accordionExample">

                    <!-- 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">

                                <span><i class="far fa-question"></i></span>

                                <?= $is_en
                                    ? 'Can you handle electrical installations for multi-storey buildings or large areas?'
                                    : 'Apakah bisa menangani proyek instalasi untuk bangunan bertingkat atau area luas?'; ?>
                            </button>
                        </h2>

                        <div id="collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <?= $is_en
                                    ? 'Yes. We have experience handling electrical installations for office buildings, factories, commercial areas, and public facilities, complete with technical documentation and project reports.'
                                    : 'Bisa. Kami memiliki pengalaman dalam menangani instalasi listrik untuk gedung perkantoran, pabrik, kawasan komersial, dan fasilitas publik, lengkap dengan dokumen teknis dan laporan pelaksanaan.'; ?>
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo">

                                <span><i class="far fa-question"></i></span>

                                <?= $is_en
                                    ? 'Do you provide official quotations and technical drawings?'
                                    : 'Apakah tersedia penawaran resmi dan gambar kerja?'; ?>
                            </button>
                        </h2>

                        <div id="collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <?= $is_en
                                    ? 'Yes. We provide cost estimation (RAB), shop drawings, and supporting documents as part of the project proposal and execution process.'
                                    : 'Ya. Kami menyediakan RAB (Rencana Anggaran Biaya), gambar kerja (shop drawing), dan dokumen pendukung lainnya sebagai bagian dari proses penawaran dan pelaksanaan proyek.'; ?>
                            </div>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree">

                                <span><i class="far fa-question"></i></span>

                                <?= $is_en
                                    ? 'What is the payment system?'
                                    : 'Bagaimana sistem pembayarannya?'; ?>
                            </button>
                        </h2>

                        <div id="collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <?= $is_en
                                    ? 'We offer staged payment systems based on project progress, including down payment, mid-project payment, and final payment upon completion.'
                                    : 'Kami melayani sistem pembayaran termin atau bertahap, sesuai progres pekerjaan. Termasuk DP, pembayaran tengah proyek, dan pelunasan setelah pekerjaan selesai.'; ?>
                            </div>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour">

                                <span><i class="far fa-question"></i></span>

                                <?= $is_en
                                    ? 'Do you provide reports and warranty for the work?'
                                    : 'Apakah pekerjaan dilengkapi dengan laporan dan garansi?'; ?>
                            </button>
                        </h2>

                        <div id="collapseFour" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <?= $is_en
                                    ? 'Every project is delivered with documentation reports (photos, handover report, invoice) and installation warranty up to 3 months after completion.'
                                    : 'Setiap pekerjaan diserahkan dengan laporan dokumentasi (foto, BA serah terima, dan invoice), serta garansi instalasi hingga 3 bulan setelah proyek selesai.'; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>