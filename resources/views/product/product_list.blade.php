@extends('home.layouts.app')
@section('content')

<main class="main">
    <div class="page-header text-center" style="background-image: url('{{url('')}}/assets/images/page-header-bg.jpg')">
        <div class="container">
            @if(!empty($getSubCategory))
            <h1 class="page-title">{{$getSubCategory->name}}</h1>
            @elseif(!empty($getCategory))
            <h1 class="page-title">{{$getCategory->name}}</h1>
            @else
            <h1 class="page-title">Search : {{Request::get('q')}}</h1>
            @endif
        </div>
    </div>
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Shop</a></li>
                @if(!empty($getSubCategory))
                <li class="breadcrumb-item" aria-current="page"><a
                        href="{{url($getCategory->slug)}}">{{$getCategory->name}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$getSubCategory->name}}</li>
                @elseif(!empty($getCategory))
                <li class="breadcrumb-item active" aria-current="page">{{$getCategory->name}}</li>
                @endif
            </ol>
        </div>
    </nav>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="toolbox">
                        <div class="toolbox-left">
                            <div class="toolbox-info">
                                Showing <span> {{ $getProduct->perPage() }} of {{ $getProduct->total() }}</span> Products
                            </div>
                        </div>

                        <div class="toolbox-right">
                            <div class="toolbox-sort">
                                <label for="sortby">Sort by:</label>
                                <div class="select-custom">
                                    <select name="sortby" id="sortby" class="form-control ChangeSortBy">
                                        <option value="">Select</option>
                                        <option value="popularity">Most Popular</option>
                                        <option value="rating">Most Rated</option>
                                        <option value="date">Date</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

            <div id="getProductAjax">
                @include('product._list')
            </div>

    <div style="text-align: center;">
        <a href="javascript:;" @if(empty($page)) style="display: none;" @endif
        data-page="{{ $page }}" class="btn btn-primary LoadMore">Load More</a>
    </div>

                </div><!-- End .col-lg-9 -->
                <aside class="col-lg-3 order-lg-first">
                    <form id="FilterForm" method="post" action="">
                    {{ csrf_field() }}
                        <input type="hidden" name="old_sub_category_id" value="{{!empty($getSubCategory) ? $getSubCategory->id
                        : ''}}">
                        <input type="hidden" name="old_category_id" value="{{!empty($getCategory) ? $getCategory->id
                        : ''}}">
                        <input type="hidden" name="sub_category_id" id="get_sub_category_id">
                        <input type="hidden" name="sort_by_id" id="get_sort_by_id">
                        <input type="hidden" name="start_price" id="get_start_price">
                        <input type="hidden" name="end_price" id="get_end_price">

                    </form>
                    <div class="sidebar sidebar-shop">
                        <div class="widget widget-clean">
                            <label>Filters:</label>
                            <a href="#" class="sidebar-filter-clear">Clean All</a>
                        </div><!-- End .widget widget-clean -->

                        @if(!empty($getSubCategoryFilter))
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true"
                                    aria-controls="widget-1">
                                    Category
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-1">
                                <div class="widget-body">
                                    <div class="filter-items filter-items-count">
                                        @foreach($getSubCategoryFilter as $f_category)
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input ChangeCategory"
                                                   value="{{$f_category->id}}" id="cat-{{$f_category->id}}">
                                                <label class="custom-control-label"
                                                    for="cat-{{$f_category->id}}">{{$f_category->name}}</label>
                                            </div>
                                            <span class="item-count">{{$f_category->totalProduct()}}</span>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true"
                                    aria-controls="widget-5">
                                    Price
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-5">
                                <div class="widget-body">
                                    <div class="filter-price">
                                        <div class="filter-price-text">
                                            Price Range:
                                            <span id="filter-price-range"></span>
                                        </div><!-- End .filter-price-text -->

                                        <div id="price-slider"></div><!-- End #price-slider -->
                                    </div><!-- End .filter-price -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->


@endsection

@section('script')

@endsection