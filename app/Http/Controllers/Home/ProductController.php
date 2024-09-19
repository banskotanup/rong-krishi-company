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
            $data['meta_title'] = $getSubCategory->meta_title;
            $data['meta_description'] = $getSubCategory->meta_description;
            $data['meta_keywords'] = $getSubCategory->meta_keywords;
            $data['getCategory'] = $getCategory;
            $data['getSubCategory'] = $getSubCategory;
            return view('product.product_list', $data);
        }
        else if(!empty($getCategory) ){
            $data['getCategory'] = $getCategory;

            $data['meta_title'] = $getCategory->meta_title;
            $data['meta_description'] = $getCategory->meta_description;
            $data['meta_keywords'] = $getCategory->meta_keywords;

            return view('product.product_list', $data);
        }
        else{
            abort(404);
        }
    }
}
