<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Hash;
use Str;

class ProductController extends Controller
{
    public function product_list(){
        $data['getRecords'] = Product::getProduct();
        $data['header_title'] = 'Product';
        return view('admin.product_pages.product_list', $data)->with('no', 1);
    }

    public function product_add(){
        $data['header_title'] = 'Product-Add';
        return view('admin.product_pages.product_add', $data);
    }

    public function insert_product(Request $request){
        $title = trim($request->title);
        $product = new Product;
        $product->title = $title;
        $product->created_by = Auth::user()->id;
        $product->save();
        
        $slug = Str::slug($title, "-");
        $checkSlug = Product::checkSlug($slug);
        if(empty($checkSlug)){
            $product->slug = $slug;
            $product->save();
        }
        else{
            $new_slug = $slug.'-'.$product->id;
            $product->slug = $new_slug;
            $product->save();
        }
        return redirect('/product_edit/'.$product->id);
    }

    public function edit_product($product_id){
        $product = Product::getSingle($product_id);
        if(!empty($product)){
            $data['getCategory'] = Category::getCategoryActive();
            $data['product'] = $product;
            $data['header_title'] = 'Product-Edit';
            return view('admin.product_pages.product_edit', $data);
        }
    }
}