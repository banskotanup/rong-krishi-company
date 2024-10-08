@extends('home.layouts.app')
@section('content')

<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Blog</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Classic</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <article class="entry">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="assets/images/blog/post-1.jpg" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <a href="#">John Doe</a>
                                </span>
                                <span class="meta-separator">|</span>
                                <a href="#">Nov 22, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">2 Comments</a>
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="single.html">Cras ornare tristique elit.</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <a href="#">Lifestyle</a>,
                                <a href="#">Shopping</a>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content">
                                <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue.</p>
                                <a href="single.html" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <figure class="entry-media entry-video">
                            <a href="single.html">
                                <img src="assets/images/blog/post-2.jpg" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <a href="#">John Doe</a>
                                </span>
                                <span class="meta-separator">|</span>
                                <a href="#">Nov 21, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">0 Comments</a>
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="single.html">Vivamus vestibulum ntulla necante.</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <a href="#">Lifestyle</a>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content">
                                <p>Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum eturna.</p>
                                <a href="single.html" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <figure class="entry-media">
                            <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl">
                                <a href="single.html">
                                    <img src="assets/images/blog/post-3.jpg" alt="image desc">
                                </a>
                                <a href="single.html">
                                    <img src="assets/images/blog/post-2.jpg" alt="image desc">
                                </a>
                            </div><!-- End .owl-carousel -->
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <a href="#">John Doe</a>
                                </span>
                                <span class="meta-separator">|</span>
                                <a href="#">Nov 18, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">3 Comments</a>
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="single.html">Utaliquam sollicitudin leo.</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <a href="#">Fashion</a>,
                                <a href="#">Lifestyle</a>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content">
                                <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue. </p>
                                <a href="single.html" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="assets/images/blog/post-4.jpg" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <a href="#">Jane Doe</a>
                                </span>
                                <span class="meta-separator">|</span>
                                <a href="#">Nov 15, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">4 Comments</a>
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="single.html">Fusce pellentesque suscipit.</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <a href="#">Travel</a>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content">
                                <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
                                <a href="single.html" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="assets/images/blog/post-5.jpg" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <span class="entry-author">
                                    by <a href="#">John Doe</a>
                                </span>
                                <span class="meta-separator">|</span>
                                <a href="#">Nov 11, 2018</a>
                                <span class="meta-separator">|</span>
                                <a href="#">2 Comments</a>
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="single.html">Aenean dignissim pellentesque felis.</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                in <a href="#">Travel</a>,
                                <a href="#">Hobbies</a>
                            </div><!-- End .entry-cats -->

                            <div class="entry-content">
                                <p>Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                                <a href="single.html" class="read-more">Continue Reading</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->


                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- End .col-lg-9 -->

                <aside class="col-lg-3">
                    <div class="sidebar">
                        <div class="widget widget-search">
                            <h3 class="widget-title">Search</h3><!-- End .widget-title -->

                            <form action="#">
                                <label for="ws" class="sr-only">Search in blog</label>
                                <input type="search" class="form-control" name="ws" id="ws" placeholder="Search in blog" required>
                                <button type="submit" class="btn"><i class="icon-search"></i><span class="sr-only">Search</span></button>
                            </form>
                        </div><!-- End .widget -->

                        <div class="widget widget-cats">
                            <h3 class="widget-title">Categories</h3><!-- End .widget-title -->

                            <ul>
                                <li><a href="#">Lifestyle<span>3</span></a></li>
                                <li><a href="#">Shopping<span>3</span></a></li>
                                <li><a href="#">Fashion<span>1</span></a></li>
                                <li><a href="#">Travel<span>3</span></a></li>
                                <li><a href="#">Hobbies<span>2</span></a></li>
                            </ul>
                        </div><!-- End .widget -->

                        <div class="widget">
                            <h3 class="widget-title">Popular Posts</h3><!-- End .widget-title -->

                            <ul class="posts-list">
                                <li>
                                    <figure>
                                        <a href="#">
                                            <img src="assets/images/blog/sidebar/post-1.jpg" alt="post">
                                        </a>
                                    </figure>

                                    <div>
                                        <span>Nov 22, 2018</span>
                                        <h4><a href="#">Aliquam tincidunt mauris eurisus.</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#">
                                            <img src="assets/images/blog/sidebar/post-2.jpg" alt="post">
                                        </a>
                                    </figure>

                                    <div>
                                        <span>Nov 19, 2018</span>
                                        <h4><a href="#">Cras ornare tristique elit.</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#">
                                            <img src="assets/images/blog/sidebar/post-3.jpg" alt="post">
                                        </a>
                                    </figure>

                                    <div>
                                        <span>Nov 12, 2018</span>
                                        <h4><a href="#">Vivamus vestibulum ntulla nec ante.</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#">
                                            <img src="assets/images/blog/sidebar/post-4.jpg" alt="post">
                                        </a>
                                    </figure>

                                    <div>
                                        <span>Nov 25, 2018</span>
                                        <h4><a href="#">Donec quis dui at dolor  tempor interdum.</a></h4>
                                    </div>
                                </li>
                            </ul><!-- End .posts-list -->
                        </div><!-- End .widget -->

                        <div class="widget widget-banner-sidebar">
                            <div class="banner-sidebar-title">ad box 280 x 280</div><!-- End .ad-title -->
                            
                            <div class="banner-sidebar banner-overlay">
                                <a href="#">
                                    <img src="assets/images/blog/sidebar/banner.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner-ad -->
                        </div><!-- End .widget -->

                        <div class="widget">
                            <h3 class="widget-title">Browse Tags</h3><!-- End .widget-title -->

                            <div class="tagcloud">
                                <a href="#">fashion</a>
                                <a href="#">style</a>
                                <a href="#">women</a>
                                <a href="#">photography</a>
                                <a href="#">travel</a>
                                <a href="#">shopping</a>
                                <a href="#">hobbies</a>
                            </div><!-- End .tagcloud -->
                        </div><!-- End .widget -->

                        <div class="widget widget-text">
                            <h3 class="widget-title">About Blog</h3><!-- End .widget-title -->

                            <div class="widget-text-content">
                                <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, pulvinar nunc sapien ornare nisl.</p>
                            </div><!-- End .widget-text-content -->
                        </div><!-- End .widget -->
                    </div><!-- End .sidebar -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection