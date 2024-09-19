<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class ProductController extends Controller
{
    public function getCategory($slug, $subSlug = ''){
        $getCategory = Category::getSingleSlug($slug);
        $getSubCategory = SubCategory::getSingleSlug($subSlug);

        if(!empty($getCategory) && !empty($getSubCategory)){
            $data['getCategory'] = $getCategory;
            $data['getSubCategory'] = $getSubCategory;
            return view('product.product_list', $data);
        }
        else if(!empty($getCategory) ){
            $data['getCategory'] = $getCategory;
            return view('product.product_list', $data);
        }
        else{
            abort(404);
        }
    }
}
