@extends('home.layouts.app')
@section('content')
@include('home.loader.loader')
    <main class="main">
        <div class="intro-section bg-lighter pt-5 pb-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="intro-slider-container slider-container-ratio slider-container-1 mb-2 mb-lg-0">
                            <div class="intro-slider intro-slider-1 owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{
                                    "nav": false, 
                                    "responsive": {
                                        "768": {
                                            "nav": true
                                        }
                                    }
                                }'>
                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="{{url('assets/images/slider/slider-1-w.jpg')}}">
                                            <img src="{{url('assets/images/slider/slider-1.jpg')}}" alt="Image Desc">
                                        </picture>
                                    </figure>

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle">Topsale Collection</h3>
                                        <h1 class="intro-title">Fresh Fruits<br> & Vegetables</h1>

                                        <a href="category.html" class="btn btn-outline-white">
                                            <span>SHOP NOW</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="{{url('assets/images/slider/slider-2-w.jpg')}}">
                                            <img src="{{url('assets/images/slider/slider-2.jpg')}}" alt="Image Desc">
                                        </picture>
                                    </figure>

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle">News and Inspiration</h3><
                                        <h1 class="intro-title">New Arrivals</h1>

                                        <a href="category.html" class="btn btn-outline-white">
                                            <span>SHOP NOW</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="{{url('assets/images/slider/slider-3-w.jpg')}}">
                                            <img src="{{url('assets/images/slider/slider-3.jpg')}}" alt="Image Desc">
                                        </picture>
                                    </figure>

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle">PACKAGING & MANUFACTURING</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">National & International <br>Delivery</h1><!-- End .intro-title -->

                                        <a href="category.html" class="btn btn-outline-white">
                                            <span>SHOP NOW</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->
                            </div><!-- End .intro-slider owl-carousel owl-simple -->
                            
                            <span class="slider-loader"></span><!-- End .slider-loader -->
                        </div><!-- End .intro-slider-container -->
                    </div><!-- End .col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="intro-banners">
                            <div class="row row-sm">
                                <div class="col-md-6 col-lg-12">
                                    <div class="banner banner-display">
                                        <a href="#">
                                            <img style="height: 215px;" src="assets/images/banners/home/intro/banner-1.jpg" alt="Banner">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-darkwhite"><a href="#"><span style="background: rgb(11, 32, 41);">Shop with us today!</span></a></h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Healthy, <br> fresh, and pure <br> – all in one place.</a></h3><!-- End .banner-title -->
                                            <a href="#" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-6 col-lg-12 -->

                                <div class="col-md-6 col-lg-12">
                                    <div class="banner banner-display mb-0">
                                        <a href="#">
                                            <img style="height: 215px; margin-top: 0;" src="{{url('assets/images/banners/home/intro/banner-2.jpg')}}" alt="Banner">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-darkwhite"><a href="#"><span style="background: rgb(11, 32, 41);">New in</span></a></h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Transforming traditional <br> farming into a thriving business <br> for a sustainable future</a></h3><!-- End .banner-title -->
                                            <a href="#" class="btn btn-outline-white banner-link">Discover Now<i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-6 col-lg-12 -->
                            </div><!-- End .row row-sm -->
                        </div><!-- End .intro-banners -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->

                <div class="mb-6"></div><!-- End .mb-6 -->

                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <h2 class="title" style="text-align: center;">The Hub for Fresh, Healthy Produce and Innovation. <span style="color: green; font-family:'Barcelony Signature';">Where Quality Meets Freshness in Agriculture.</span></h2>
                        </div><!-- End .brands-text -->
                    </div>
                </div><!-- End .row -->


                <div class="mb-6"></div><!-- End .mb-6 -->
                <div>
                    <h1 style="text-align: center; font-family: 'Courier New', monospace;">Let’s Introduce us</h1>
                    <hr>
                    <p style="text-align: center; color:black; font-size:18px; center; font-family: 'Times New Roman';">At RongKrishi, we are dedicated to driving innovation in the agricultural sector through cutting-edge manufacturing solutions. Our commitment to excellence ensures that farmers have access to high-quality, reliable equipment that enhances productivity and sustainability.
                        Our state-of-the-art manufacturing facilities are equipped with advanced technology to produce durable and high-performance agricultural tools. We are dedicated to providing exceptional customer support, ensuring that our clients receive timely assistance and solutions tailored to their specific needs. By partnering with us, farmers can rely on a trusted leader in agricultural manufacturing to enhance their operations and drive success.</p>
                        <div style="display: flex; justify-content:center; align-items:center; margin-top:20px;">
                            <a href="about.html"><button class="btn btn-primary" style="padding: 10px 20px; margin-button:1px;">Learn More</button></a>
                        </div>
                        <hr>
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->
        </div><!-- End .bg-lighter -->

        <div class="mb-6"></div><!-- End .mb-6 -->

        <div class="container">
            <div class="heading heading-center mb-3">
                <h2 class="title-lg">Our Products</h2><!-- End .title -->

                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="trendy-all-link" data-toggle="tab" href="#trendy-all-tab" role="tab" aria-controls="trendy-all-tab" aria-selected="true">Featured</a>
                    </li>
                </ul>
            </div><!-- End .heading -->

            <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel" aria-labelledby="trendy-all-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>

                        {{-- @foreach($getRecords as $value)
                            @php
                            $getProductImage = $value->getImageSingle($value->id);
                            @endphp

                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    @if(!empty($getProductImage) && !empty($getProductImage->getImage()))
                                            <img style="height: 280px; width: 280px; object-fit: cover;"
                                                src="{{$getProductImage->getImage()}}" alt="{{$value->title}}"
                                                class="product-image">
                                            @endif
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                </div>
                            </figure>

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $251,00
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div>
                        </div>

                        @endforeach --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="container categories pt-6">
            <h2 class="title-lg text-center mb-4">Shop by Categories</h2>

            <div class="row">
                <div class="col-6 col-lg-4">
                    <div class="banner banner-display banner-link-anim">
                        <a href="#">
                            <img src="assets/images/banners/home/banner-1.jpg" alt="Banner">
                        </a>

                        <div class="banner-content banner-content-center">
                            <h3 class="banner-title text-white"><a href="#">Outdoor</a></h3>
                            <a href="#" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                        </div>
                    </div><!-- End .banner -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-5"></div><!-- End .mb-6 -->

        


        <div class="container">
            <hr>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                        <span class="icon-box-icon">
                            <i class="icon-rocket"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Payment & Delivery</h3><!-- End .icon-box-title -->
                            <p>Free shipping for orders over NPR50000.00</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                        <span class="icon-box-icon">
                            <i class="icon-rotate-left"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Return & Refund</h3><!-- End .icon-box-title -->
                            <p>Free 100% money back guarantee</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                        <span class="icon-box-icon">
                            <i class="icon-life-ring"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                            <p>Alway online feedback 24/7</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->
            </div><!-- End .row -->

            <div class="mb-2"></div><!-- End .mb-2 -->
        </div><!-- End .container -->
        <div class="blog-posts pt-7 pb-7" style="background-color: #fafafa;">
            <div class="container">
            <h2 class="title-lg text-center mb-3 mb-md-4">From Our Blog</h2><!-- End .title-lg text-center -->

                <div class="owl-carousel owl-simple carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "items": 3,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":1
                            },
                            "600": {
                                "items":2
                            },
                            "992": {
                                "items":3
                            }
                        }
                    }'>
                    <article class="entry entry-display">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="assets/images/blog/home/post-1.jpg" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body pb-4 text-center">
                            <div class="entry-meta">
                                <a href="#">Nov 22, 2018</a>, 0 Comments
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title">
                                <a href="single.html">Sed adipiscing ornare.</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit.<br>Pelletesque aliquet nibh necurna. </p>
                                <a href="single.html" class="read-more">Read More</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry entry-display">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="assets/images/blog/home/post-2.jpg" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body pb-4 text-center">
                            <div class="entry-meta">
                                <a href="#">Dec 12, 2018</a>, 0 Comments
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title">
                                <a href="single.html">Fusce lacinia arcuet nulla.</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                <p>Sed pretium, ligula sollicitudin laoreet<br>viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis justo. </p>
                                <a href="single.html" class="read-more">Read More</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry entry-display">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="assets/images/blog/home/post-3.jpg" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body pb-4 text-center">
                            <div class="entry-meta">
                                <a href="#">Dec 19, 2018</a>, 2 Comments
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title">
                                <a href="single.html">Quisque volutpat mattis eros.</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                <p>Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. </p>
                                <a href="single.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="more-container text-center mb-0 mt-3">
                <a href="blog.html" class="btn btn-outline-darker btn-more"><span>View more articles</span><i class="icon-long-arrow-right"></i></a>
            </div>
        </div>
        <div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(assets/images/backgrounds/cta/bg-6.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9 col-xl-8">
                        <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                            <div class="col">
                                <h3 style="text-align: center;" class="cta-title text-white">Become a member and enjoy fresh discounts and special offers!</h3>
                            </div>
                        </div>
                        <div style="margin-left:290px; ">
                            <a style="margin-top: 20px;" href="login.html" class="btn btn-outline-white"><span>Request Membership</span><i class="icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
@endsection
        

        
    