@extends('admin.layouts.app')
@section('style')
@endsection
@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Product</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-primary">
            <form action="" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" value="{{old('title', $product->title)}}"
                                    name="title" required placeholder="Enter Product Title">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>SKU<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" value="{{old('sku', $product->sku)}}" name="sku"
                                    required placeholder="Enter SKU">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category<span style="color: red;">*</span></label>
                                <select class="form-control" name="category_id">
                                    <option value="">Select</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sub Category<span style="color: red;">*</span></label>
                                <select class="form-control" name="sub_category_id">
                                    <option value="">Select</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price (NPR) <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" value="{{old('price', $product->price)}}"
                                    name="price" required placeholder="Enter Price">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Old Price (NPR) <span style="color: red;">*</span></label>
                                <input type="text" class="form-control"
                                    value="{{old('old_price', $product->old_price)}}" name="sku" required
                                    placeholder="Enter Old Price">
                            </div>
                        </div>
                    </div>

                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Short Description<span style="color: red;">*</span></label>
                                <textarea name="short_description" class="form-control"
                                    placeholder="Enter Short Description"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description<span style="color: red;">*</span></label>
                                <textarea name="description" class="form-control"
                                    placeholder="Enter Description"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Additional Information<span style="color: red;">*</span></label>
                                <textarea name="additional_information" class="form-control"
                                    placeholder="Additional Information"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Shipping Returns<span style="color: red;">*</span></label>
                                <textarea name="shipping_returns" class="form-control"
                                    placeholder="Shipping Returns"></textarea>
                            </div>
                        </div>
                    </div>

                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Status <span style="color: red;">*</span></label>
                                <select class="form-control" name="status">
                                    <option value="{{(old('status') == 0) ? 'selected' : ''}}" value="0">Active</option>
                                    <option value="{{(old('status') == 1) ? 'selected' : ''}}" value="1">Inactive
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

@section('script')
<script src="/admin/dist/js/pages/dashboard3.js"></script>
@endsection