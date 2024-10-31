<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('home.loader.custom_loader_css')
    <title>{{!empty($meta_title) ? $meta_title : ''}}</title>
    @if(!empty($meta_description))
    <meta name="description" content="{{$meta_description}}">
    @endif
    @if((!empty($meta_keywords)))
    <meta name="keywords" content="{{$meta_keywords}}">
    @endif
    <link rel="icon" type="image/x-icon" href="{{url('/trslogo.png')}}">

    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/plugins/nouislider/nouislider.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    @include('home.cssJs.custom_style')
    
</head>

<body>

    <div class="page-wrapper">
    @include('home.layouts.header')
    @yield('content')
    @include('home.layouts.footer')

    </div>
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <div class="mobile-menu-overlay"></div>

    @include('home.layouts.mobile_menu')



    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <div style="margin-bottom: 20px; color:red;" id="messagedivinpopupmodal">
                                        {{-- error message goes here --}}
                                    </div>
                                    <form action="" id="SubmitFormLogin" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" id="singin-email" name="email" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="singin-password">Password<span style="color: red">*</span></label>
                                            <input type="password" class="form-control" id="singin-password" name="password" required>
                                        </div>

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="is_remember" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div>

                                            <a href="{{url('/forgot-password')}}" class="forgot-link">Forgot Your Password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="{{url('')}}/assets/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                            </div><!-- End .custom-checkbox -->
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="{{url('')}}/assets/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('assets/js/superfish.min.js')}}"></script>
    <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('assets/js/nouislider.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{url('assets/js/wNumb.js')}}"></script>
    <script src="{{url('assets/js/main.js')}}"></script>
    <script src="{{url('assets/js/main.js')}}"></script>
    @include('home.loader.custom_loader_js')
    <script type="text/javascript">
        $('body').delegate('#SubmitFormLogin', 'submit', function(e){
            e.preventDefault();
            $.ajax({
                type : "POST",
                url : "{{url('/auth_login')}}",
                data : $(this).serialize(),
                dataType : "json",
                success: function(data){
                    if(data.status == true){
                        location.reload();
                    }
                    else{
                        $('#messagedivinpopupmodal').html(data.html);
                    }
                },
                error: function(data){

                }
            });
        });

            $('.ChangeSortBy').change(function() {
            var id = $(this).val();
            $('#get_sort_by_id').val(id);
            FilterForm();
        });

        $('.ChangeCategory').change(function() {
            var ids = '';
            $('.ChangeCategory').each(function() {
                if(this.checked)
                {
                    var id = $(this).val();
                    ids += id+',';
                }
            });
            $('#get_sub_category_id').val(ids);
            FilterForm();
        }); 

        var xhr;   
        function FilterForm(){
            if(xhr && xhr.readyState !=4)
            {
                xhr.abort();
            }
            xhr = $.ajax({
                type : "POST",
                url : "{{ url('get_filter_product_ajax') }}",
                data : $('#FilterForm').serialize(),
                dataType : "json",
                success: function(data) {
                    $('#getProductAjax').html(data.success)
                    $('.LoadMore').attr('data-page', data.page);
                        if(data.page == 0)
                        {
                            $('.LoadMore').hide();
                        }
                        else
                        {
                            $('.LoadMore').show();
                        }
                },
                error: function (data) {

                }
            });
        }

        $('body').delegate('.LoadMore', 'click', function(){
            var page = $(this).attr('data-page');
            $('.LoadMore').html('Loading, please wait for a sec......');
            if(xhr && xhr.readyState !=4)
            {
                xhr.abort();
            }
            xhr = $.ajax({
                type : "POST",
                url : "{{ url('get_filter_product_ajax') }}?page="+page,
                data : $('#FilterForm').serialize(),
                dataType : "json",
                success: function(data) {
                    $('#getProductAjax').append(data.success)
                    $('.LoadMore').attr('data-page', data.page);
                    $('.LoadMore').html('Load More');
                        if(data.page == 0)
                        {
                            $('.LoadMore').hide();
                        }
                        else
                        {
                            $('.LoadMore').show();
                        }
                },
                error: function (data) {

                }
            });
        });

        var i = 0;


        if ( typeof noUiSlider === 'object' ) {
            var priceSlider  = document.getElementById('price-slider');


            noUiSlider.create(priceSlider, {
                start: [ 0, 10000 ],
                connect: true,
                step: 1,
                margin: 1,
                range: {
                    'min': 0,
                    'max': 10000
                },
                tooltips: true,
                format: wNumb({
                    decimals: 0,
                    prefix: 'NPR '
                })
            });

            // Update Price Range
            priceSlider.noUiSlider.on('update', function( values, handle ){
                var start_price = values[0];
                var end_price = values[1];
                $('#get_start_price').val(start_price);
                $('#get_end_price').val(end_price);
                $('#filter-price-range').text(values.join(' - '));
                if(i == 0 || i == 1)
                    {
                        i++;
                    }
                else
                    {
                        FilterForm();
                    }
            });
	    }

    </script>

</body>
</html>