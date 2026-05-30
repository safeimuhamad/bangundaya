<div class="blog-area py-120">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">
                        <i class="far fa-lightbulb-on"></i>
                        <?= $is_en ? 'Our Blog' : 'Blog Kami'; ?>
                    </span>

                    <h2 class="site-title">
                        <?= $is_en
                        ? 'Latest News & <span>Blog</span>'
                        : 'Berita & <span>Artikel Terbaru</span>'; ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php if (!empty($new_article)): ?>
                <?php foreach ($new_article as $article): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">

                            <div class="blog-item-img">
                                <img loading="lazy"
                                src="<?= base_url(); ?>template/assets_admin/images/blog/<?= base64_decode($article->foto); ?>"
                                alt="<?= $keywords; ?>">

                                <div class="blog-date">
                                    <i class="fal fa-calendar-alt"></i>
                                    <?= date('M d, Y', strtotime($article->date)); ?>
                                </div>
                            </div>

                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="far fa-user-circle"></i>
                                                Administrator
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="far fa-comments"></i>
                                                <?= $is_en ? '0 Comments' : '0 Komentar'; ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <h2 class="blog-title">
                                    <a href="<?= base_url('blog/' . $article->slug); ?>">
                                        <?= $article->title; ?>
                                    </a>
                                </h2>

                                <p>
                                    <?= substr(strip_tags($article->content), 0, 100); ?>...
                                </p>

                                <a class="theme-btn" href="<?= base_url('blog/' . $article->slug); ?>">
                                    <?= $is_en ? 'Read Article' : 'Baca Artikel'; ?>
                                    <i class="fas fa-arrow-right-long"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</div>