<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    public function getCategory($slug){
        $getCategory = Category::getSingleSlug($slug);

        if(!empty($getCategory)){
            $data['getCategory'] = $getCategory;
            return view('product.product_list', $data);
        }
        else{
            abort(404);
        }
    }
}
