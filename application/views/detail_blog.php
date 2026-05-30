        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
            <div class="container">
                <h1 class="breadcrumb-title"><?= $data_blog->title; ?></h1>
                <ul class="breadcrumb-menu">
                    <li><a href="<?=base_url()?>">Home</a></li>
                    <li><a href="<?=base_url()?>blog">Blog</a></li>
                    <li class="active"><?= $data_blog->title; ?></li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <div class="blog-single-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-wrapper">
                            <div class="blog-single-content">
                                <div class="blog-thumb-img">
                                    <img src="<?= base_url(); ?>template/assets_admin/images/blog/<?= base64_decode($data_blog->foto); ?>"  alt="<?= $data_blog->title; ?>">
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="blog-meta-left">
                                            <ul>
                                                <li><i class="far fa-user"></i><a href="#">Administrator</a></li>
                                                <li><i class="far fa-comments"></i>0 Comments</li>
												<li><i class="far fa-thumbs-up"></i>0 Like</li>
                                            </ul>
                                        </div>
                                        <div class="blog-meta-right">
                                             <a href="#" class="share-btn"><i class="far fa-share-alt"></i>Share</a>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <?= $data_blog->content; ?>
                                        <p class="mb-50">
                                            <?php if (isset($baca_juga) && !empty($baca_juga->title)): ?>
                                                <h2><b>Baca Juga:</b> <u><a
                                                            href="<?= base_url('blog/' . $baca_juga->slug) ?>"><?= $baca_juga->title ?></a></u>
                                                </h2>
                                            <?php endif; ?>
                                         </p><br>
                                        <hr>

										<div class="blog-details-tags pb-20">
											<h2>Tags : </h2>
											<ul>
												<li><a href="#">Electrical</a></li>
												<li><a href="#">Engineer</a></li>
												<li><a href="#">Repair</a></li>
											</ul>
										</div>
                                    </div>
                                    <div class="blog-author">
                                        <div class="blog-author-img">
                                            <img src="<?= base_url(); ?>template/assets/img/blog/author.jpg" alt="administrator">
                                        </div>
                                        <div class="author-info">
                                            <h3>Author</h3>
                                            <h3 class="author-name">Administrator</h3>
                                            <p>It is a long established fact that a reader will be distracted by the abcd readable content of a page when looking at its layout  that more less.</p>
                                            <div class="author-social">
                                                <a href="#" aria-label="facebook"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                                                <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                                                <a href="#" aria-label="whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                <a href="#" aria-label="youtube"><i class="fab fa-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="blog-comments">
                                    <h3>Comments (20)</h3>
                                    <div class="blog-comments-wrapper">
                                        <div class="blog-comments-single">
                                            <img src="<?= base_url(); ?>template/assets/img/blog/com-1.jpg" alt="thumb">
                                            <div class="blog-comments-content">
                                                <h5>Kecia A. Parada</h5>
                                                <span><i class="far fa-clock"></i> May 24, 2023</span>
                                                <p>There are many variations of passages the majority have suffered in some injected humour or randomised words which don't look even slightly believable.</p>
                                                <a href="#"><i class="far fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                        <div class="blog-comments-single blog-comments-reply">
                                            <img src="<?= base_url(); ?>template/assets/img/blog/com-2.jpg" alt="thumb">
                                            <div class="blog-comments-content">
                                                <h5>Thomas A. Lindsey</h5>
                                                <span><i class="far fa-clock"></i> May 24, 2023</span>
                                                <p>There are many variations of passages the majority have suffered in some injected humour or randomised words which don't look even slightly believable.</p>
                                                <a href="#"><i class="far fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                        <div class="blog-comments-single">
                                            <img src="<?= base_url(); ?>template/assets/img/blog/com-3.jpg" alt="thumb">
                                            <div class="blog-comments-content">
                                                <h5>Mary R. Lujan</h5>
                                                <span><i class="far fa-clock"></i> May 24, 2023</span>
                                                <p>There are many variations of passages the majority have suffered in some injected humour or randomised words which don't look even slightly believable.</p>
                                                <a href="#"><i class="far fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-comments-form">
                                        <h3>Leave A Comment</h3>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Your Name*">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Your Email*">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="5" placeholder="Your Comment*"></textarea>
                                                    </div>
                                                    <button type="submit" class="theme-btn">Post Comment <i class="far fa-paper-plane"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar">
                            <!-- search-->
                            <div class="widget search">
                                <h2 class="widget-title">Search</h2>
                                <form class="search-form">
                                    <input type="text" class="form-control" placeholder="Search Here...">
                                    <button type="submit" aria-label="search"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                            <!-- category -->
                            <div class="widget category">
                                <h3 class="widget-title">Category</h3>
                                <div class="category-list">
                                    <a href="#"><i class="far fa-arrow-right"></i>Power Tools<span>(10)</span></a>
                                    <a href="#"><i class="far fa-arrow-right"></i>Electrical & Lighting<span>(15)</span></a>
                                    <a href="#"><i class="far fa-arrow-right"></i>Ware Accessories<span>(20)</span></a>
                                    <a href="#"><i class="far fa-arrow-right"></i>Panels Installation<span>(30)</span></a>
                                    <a href="#"><i class="far fa-arrow-right"></i>Commercial Services<span>(25)</span></a>
                                </div>
                            </div>
                            <!-- recent post -->
                            <div class="widget recent-post">
                                <h3 class="widget-title">Recent Post</h3>
                                <div class="recent-post-single">
                                    <div class="recent-post-img">
                                        <img src="<?= base_url(); ?>template/assets/img/blog/bs-1.jpg" alt="thumb">
                                    </div>
                                    <div class="recent-post-bio">
                                        <h4><a href="#">There are many variations passages available</a></h4>
                                        <span><i class="far fa-clock"></i>May 24, 2023</span>
                                    </div>
                                </div>
                                <div class="recent-post-single">
                                    <div class="recent-post-img">
                                        <img src="<?= base_url(); ?>template/assets/img/blog/bs-2.jpg" alt="thumb">
                                    </div>
                                    <div class="recent-post-bio">
                                        <h4><a href="#">There are many variations passages available</a></h4>
                                        <span><i class="far fa-clock"></i>May 24, 2023</span>
                                    </div>
                                </div>
                                <div class="recent-post-single">
                                    <div class="recent-post-img">
                                        <img src="<?= base_url(); ?>template/assets/img/blog/bs-3.jpg" alt="thumb">
                                    </div>
                                    <div class="recent-post-bio">
                                        <h4><a href="#">There are many variations passages available</a></h4>
                                        <span><i class="far fa-clock"></i>May 24, 2023</span>
                                    </div>
                                </div>
                            </div>
                            <!-- social share -->
                            <div class="widget social-share">
                                <h3 class="widget-title">Follow Us</h3>
                                <div class="social-share-link">
                                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="#" aria-label="dribbble"><i class="fab fa-dribbble"></i></a>
                                    <a href="#" aria-label="whatsapp"><i class="fab fa-whatsapp"></i></a>
                                    <a href="#" aria-label="youtube"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <!-- Recent Post -->
                            <div class="widget sidebar-tag">
                                <h3 class="widget-title">Popular Tags</h3>
                                <div class="tag-list">
                                    <a href="#">Electrical</a>
                                    <a href="#">Engineer</a>
                                    <a href="#">Industry</a>
                                    <a href="#">Tips</a>
                                    <a href="#">Modern</a>
                                    <a href="#">Offers</a>
                                    <a href="#">Wire</a>
                                    <a href="#">Project</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>