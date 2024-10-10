@extends('home.layouts.app')
@section('content')

<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <form action="{{url('/cart/update')}}" method="POST">
                        @csrf
                            <table class="table table-cart table-mobile">
                                
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach (Cart::content() as $key => $data)
                                    @php
                                    $getCartProduct = App\Models\Product::getSingle($data->id);
                                    @endphp
                                    @if(!empty($getCartProduct))
                                    @php
                                    $getProductImage = $getCartProduct->getImageSingle($getCartProduct->id);
                                    @endphp
                                    <tr>
                                        
                                        <td class="product-col">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="{{url($getCartProduct->slug)}}">
                                                        <img src="{{$getProductImage->getImage()}}" alt="Product image">
                                                    </a>
                                                </figure>

                                                <h3 class="product-title">
                                                    <a href="{{url($getCartProduct->slug)}}">{{$getCartProduct->title}}</a>
                                                </h3><!-- End .product-title -->
                                            </div><!-- End .product -->
                                        </td>
                                        <td class="price-col">NPR {{number_format($data->price, 2)}}</td>
                                            
                                            <td class="quantity-col">
                                                <div class="cart-product-quantity">
                                                    <input type="number" class="form-control"
                                                        value="{{$data->qty}}" min="1" max="100" name="cart[{{ $key}}][qty]" step="1" data-decimals="0"
                                                        required>
                                                </div>
                                                <input type="hidden"
                                                        value="{{$data->id}}" name="cart[{{ $key}}][id]" >
                                                <input type="hidden"
                                                        value="{{$data->rowId}}" name="cart[{{ $key}}][rowId]" >
                                                
                                            </td>
                                        <td class="total-col">NPR {{number_format($data->price * $data->qty, 2)}}</td>

                                        <td class="remove-col">
                                                <a href="{{'/cart/delete/'.$data->rowId}}" class="btn-remove"><i class="icon-close"></i>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="cart-bottom">
                                <div class="cart-discount">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="coupon code">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-primary-2" type="submit"><i
                                                        class="icon-long-arrow-right"></i></button>
                                            </div>
                                        </div>
                                </div>

                                
                                <button type="submit" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i
                                        class="icon-refresh"></i></button>
                            </div>
                        </form>
                    </div>
                    <aside class="col-lg-3">
                        <div class="summary summary-cart">
                            <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                            <table class="table table-summary">
                                <tbody>
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td>NPR {{Cart::subTotal()}}</td>
                                    </tr><!-- End .summary-subtotal -->
                                    <tr class="summary-shipping">
                                        <td>Shipping:</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="free-shipping" name="shipping"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="free-shipping">Free
                                                    Shipping</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>NPR 0.00</td>
                                    </tr><!-- End .summary-shipping-row -->

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="standart-shipping" name="shipping"
                                                    class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="standart-shipping">Standart:</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>NPR 0.00</td>
                                    </tr><!-- End .summary-shipping-row -->

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="express-shipping" name="shipping"
                                                    class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="express-shipping">Express:</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>NPR 0.00</td>
                                    </tr>

                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>NPR {{Cart::subTotal()}}</td>
                                    </tr><!-- End .summary-total -->
                                </tbody>
                            </table><!-- End .table table-summary -->

                            <a href="checkout.html" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO
                                CHECKOUT</a>
                        </div><!-- End .summary -->

                        <a href="{{url('/')}}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE
                                SHOPPING</span><i class="icon-refresh"></i></a>
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cart -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection

@section('script')
<script type="text/javascript">
    // function updateQuantity(qty){
    //     $('#rowId').val($(qty).data('rowId'));
    //     $('#qty').val($(qty).val());
    //     $('#updateCartQty').submit();
    // }

</script>
@endsection