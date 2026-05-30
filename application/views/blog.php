<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(<?= base_url(); ?>template/assets/img/breadcrumb/01.webp)">
    <div class="container">
        <h1 class="breadcrumb-title">
            <?= $is_en ? 'Our Blog' : 'Blog Kami'; ?>
        </h1>

        <ul class="breadcrumb-menu">
            <li>
                <a href="<?= base_url($lang_prefix); ?>">
                    <?= $is_en ? 'Home' : 'Beranda'; ?>
                </a>
            </li>
            <li class="active">Blog</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->


<!-- blog area -->
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
                        <?= $is_en ? 'Latest News & <span>Blog</span>' : 'Berita & <span>Artikel Terbaru</span>'; ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row" id="blogpage"></div>

        <div class="pagination-area">
            <div aria-label="Page navigation example">
                <ul class="pagination" id="pagination-wrapper"></ul>
            </div>
        </div>
    </div>
</div>
<!-- blog area end -->


<script src="<?= base_url(); ?>template/assets_lama/js/vendor/jquery.min.js"></script>

<script type="text/javascript">
    const IS_EN = <?= $is_en ? 'true' : 'false'; ?>;
    const BLOG_BASE_URL = "<?= base_url('blog/'); ?>";
    const BLOG_IMAGE_URL = "<?= base_url(); ?>template/assets_admin/images/blog/";
    const BLOG_JSON_URL = "<?= site_url('home/get_data_blog_json'); ?>";

    const TXT_COMMENTS = IS_EN ? '0 Comments' : '0 Komentar';
    const TXT_READ_MORE = IS_EN ? 'Read More' : 'Baca Selengkapnya';

    $(document).ready(function () {
        setData();
    });

    function stripHtml(html) {
        return $('<div>').html(html || '').text();
    }

    function setData() {
        $.ajax({
            type: "GET",
            url: BLOG_JSON_URL,
            dataType: "JSON",
            cache: false,
            success: function (data) {
                $('#blogpage').empty();

                var state = {
                    querySet: data,
                    page: 1,
                    rows: 6,
                    window: 5
                };

                buildTable();

                function pagination(querySet, page, rows) {
                    var trimStart = (page - 1) * rows;
                    var trimEnd   = trimStart + rows;
                    var trimmedData = querySet.slice(trimStart, trimEnd);
                    var pages = Math.ceil(querySet.length / rows);

                    return {
                        querySet: trimmedData,
                        pages: pages
                    };
                }

                function pageButtons(pages) {
                    var wrapper = document.getElementById('pagination-wrapper');
                    wrapper.innerHTML = "";

                    var maxLeft  = (state.page - Math.floor(state.window / 2));
                    var maxRight = (state.page + Math.floor(state.window / 2));

                    if (maxLeft < 1) {
                        maxLeft  = 1;
                        maxRight = state.window;
                    }

                    if (maxRight > pages) {
                        maxLeft = pages - (state.window - 1);
                        if (maxLeft < 1) {
                            maxLeft = 1;
                        }
                        maxRight = pages;
                    }

                    for (var page = maxLeft; page <= maxRight; page++) {
                        wrapper.innerHTML +=
                            '<li class="page-item paged ' + (page == state.page ? 'active' : '') + '" value="' + page + '">' +
                                '<a class="page-link" href="#">' + page + '</a>' +
                            '</li>';
                    }

                    if (state.page != 1) {
                        wrapper.innerHTML =
                            '<li class="page-item paged" value="' + (state.page - 1) + '">' +
                                '<a class="page-link" href="#" aria-label="Previous">' +
                                    '<span aria-hidden="true"><i class="far fa-arrow-left"></i></span>' +
                                '</a>' +
                            '</li>' + wrapper.innerHTML;
                    } else {
                        wrapper.innerHTML =
                            '<li class="page-item disabled">' +
                                '<a class="page-link" href="#" aria-label="Previous">' +
                                    '<span aria-hidden="true"><i class="far fa-arrow-left"></i></span>' +
                                '</a>' +
                            '</li>' + wrapper.innerHTML;
                    }

                    if (state.page != pages && pages != 0) {
                        wrapper.innerHTML +=
                            '<li class="page-item paged" value="' + (state.page + 1) + '">' +
                                '<a class="page-link" href="#" aria-label="Next">' +
                                    '<span aria-hidden="true"><i class="far fa-arrow-right"></i></span>' +
                                '</a>' +
                            '</li>';
                    } else {
                        wrapper.innerHTML +=
                            '<li class="page-item disabled">' +
                                '<a class="page-link" href="#" aria-label="Next">' +
                                    '<span aria-hidden="true"><i class="far fa-arrow-right"></i></span>' +
                                '</a>' +
                            '</li>';
                    }

                    if (pages == 1) {
                        wrapper.innerHTML = "";
                    }
                }

                function buildTable() {
                    var div  = $('#blogpage');
                    var data = pagination(state.querySet, state.page, state.rows);
                    var myList = data.querySet;

                    div.empty();

                    for (var i = 0; i < myList.length; i++) {
                        var date = new Date(myList[i].date);
                        var title = myList[i].title || '';
                        var content = stripHtml(myList[i].content || '');
                        var foto = '';

                        try {
                            foto = atob(myList[i].foto);
                        } catch (e) {
                            foto = myList[i].foto || '';
                        }

                        var blog =
                            '<div class="col-md-6 col-lg-4">' +
                                '<div class="blog-item wow fadeInUp" data-wow-delay=".25s">' +
                                    '<div class="blog-item-img">' +
                                        '<img loading="lazy" src="' + BLOG_IMAGE_URL + foto + '" alt="' + title.replace(/"/g, '&quot;') + '">' +
                                        '<div class="blog-date"><i class="fal fa-calendar-alt"></i> ' +
                                            date.toLocaleDateString(IS_EN ? "en-US" : "id-ID", {
                                                month: "short",
                                                day: "numeric",
                                                year: "numeric"
                                            }) +
                                        '</div>' +
                                    '</div>' +

                                    '<div class="blog-item-info">' +
                                        '<div class="blog-item-meta">' +
                                            '<ul>' +
                                                '<li><a href="#"><i class="far fa-user-circle"></i> Administrator</a></li>' +
                                                '<li><a href="#"><i class="far fa-comments"></i> ' + TXT_COMMENTS + '</a></li>' +
                                            '</ul>' +
                                        '</div>' +

                                        '<h4 class="blog-title">' +
                                            '<a href="' + BLOG_BASE_URL + myList[i].slug + '">' +
                                                (title.length >= 100 ? title.substr(0, 75) + "..." : title) +
                                            '</a>' +
                                        '</h4>' +

                                        '<p>' +
                                            (content.length >= 70 ? content.substr(0, 69) + "..." : content) +
                                        '</p>' +

                                        '<a class="theme-btn" href="' + BLOG_BASE_URL + myList[i].slug + '">' +
                                            TXT_READ_MORE +
                                            '<i class="fas fa-arrow-right-long"></i>' +
                                        '</a>' +
                                    '</div>' +
                                '</div>' +
                            '</div>';

                        div.append(blog);
                    }

                    pageButtons(data.pages);
                }

                $(document).off('click', '.paged').on('click', '.paged', function (e) {
                    e.preventDefault();

                    var page = Number($(this).attr('value'));

                    if (!isNaN(page)) {
                        state.page = page;
                        buildTable();
                    }
                });
            },
            error: function (request) {
                console.log(request.responseText);
            }
        });
    }
</script>